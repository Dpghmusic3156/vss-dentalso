<?php
/**
 * Admin page: Quản lý Video Hướng Dẫn
 */

namespace App;

// Register admin menu
add_action('admin_menu', function () {
    add_menu_page(
        'Video Hướng Dẫn',
        'Video Hướng Dẫn',
        'manage_options',
        'dentalso-video-huong-dan',
        __NAMESPACE__ . '\\vhd_admin_page',
        'dashicons-video-alt3',
        30
    );
});

// Get saved categories (with defaults)
function vhd_get_categories()
{
    $defaults = [
        'gioi-thieu' => ['title'=>'Giới thiệu','desc'=>'Tổng quan về DentalSO và các phiên bản.','icon'=>'play_circle','color'=>'#3b82f6','bg'=>'#eff6ff','visible'=>true,'order'=>0],
        'phien-ban-linh-hoat' => ['title'=>'Phiên bản linh hoạt','desc'=>'Hướng dẫn phiên bản linh hoạt.','icon'=>'devices','color'=>'#06b6d4','bg'=>'#ecfeff','visible'=>true,'order'=>1],
        'don-hang' => ['title'=>'Đơn hàng & Sản xuất','desc'=>'Quản lý đơn hàng và sản xuất.','icon'=>'inventory_2','color'=>'#10b981','bg'=>'#ecfdf5','visible'=>true,'order'=>2],
        'hoa-don' => ['title'=>'Hóa đơn & Công nợ','desc'=>'Xuất hóa đơn và quản lý công nợ.','icon'=>'receipt_long','color'=>'#f59e0b','bg'=>'#fffbeb','visible'=>true,'order'=>3],
        'bao-hanh' => ['title'=>'Bảo hành','desc'=>'Thẻ bảo hành điện tử và QR Code.','icon'=>'verified_user','color'=>'#8b5cf6','bg'=>'#f5f3ff','visible'=>true,'order'=>4],
        'quan-ly-chung' => ['title'=>'Quản lý chung','desc'=>'Nha khoa, bảng giá, phân quyền.','icon'=>'settings','color'=>'#6b7280','bg'=>'#f9fafb','visible'=>true,'order'=>5],
    ];
    $saved = get_option('dentalso_vhd_categories', []);
    return !empty($saved) ? $saved : $defaults;
}

// Get hidden video IDs
function vhd_get_hidden_videos()
{
    return get_option('dentalso_vhd_hidden_videos', []);
}

// Get video category overrides
function vhd_get_video_overrides()
{
    return get_option('dentalso_vhd_video_overrides', []);
}

// Get video order
function vhd_get_video_order()
{
    return get_option('dentalso_vhd_video_order', []);
}

// Get videos with overrides applied
function vhd_get_videos_with_overrides()
{
    $videos = dentalso_get_youtube_videos();
    $overrides = vhd_get_video_overrides();
    $hidden = vhd_get_hidden_videos();
    $order = vhd_get_video_order();

    foreach ($videos as &$v) {
        $vid = $v['id'];
        $v['hidden'] = in_array($vid, $hidden);
        if (isset($overrides[$vid]['category'])) {
            $v['category'] = $overrides[$vid]['category'];
        }
        $v['order'] = $order[$vid] ?? 999;
    }

    // Sort by order
    usort($videos, fn($a, $b) => ($a['order'] ?? 999) - ($b['order'] ?? 999));
    return $videos;
}

// AJAX: Save categories
add_action('wp_ajax_vhd_save_categories', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $cats = json_decode(stripslashes($_POST['categories'] ?? '{}'), true);
    if ($cats) update_option('dentalso_vhd_categories', $cats);
    wp_send_json_success();
});

// AJAX: Toggle video visibility
add_action('wp_ajax_vhd_toggle_video', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $vid = sanitize_text_field($_POST['video_id'] ?? '');
    $hide = $_POST['hide'] === '1';
    $hidden = vhd_get_hidden_videos();
    if ($hide && !in_array($vid, $hidden)) $hidden[] = $vid;
    if (!$hide) $hidden = array_values(array_diff($hidden, [$vid]));
    update_option('dentalso_vhd_hidden_videos', $hidden);
    wp_send_json_success();
});

// AJAX: Move video to category
add_action('wp_ajax_vhd_move_video', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $vid = sanitize_text_field($_POST['video_id'] ?? '');
    $cat = sanitize_text_field($_POST['category'] ?? '');
    $overrides = vhd_get_video_overrides();
    $overrides[$vid] = ['category' => $cat];
    update_option('dentalso_vhd_video_overrides', $overrides);
    wp_send_json_success();
});

// AJAX: Delete category
add_action('wp_ajax_vhd_delete_category', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $slug = sanitize_text_field($_POST['slug'] ?? '');
    $cats = vhd_get_categories();
    unset($cats[$slug]);
    update_option('dentalso_vhd_categories', $cats);
    wp_send_json_success();
});

// AJAX: Save video order
add_action('wp_ajax_vhd_save_video_order', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $order = json_decode(stripslashes($_POST['order'] ?? '{}'), true);
    if ($order !== null) update_option('dentalso_vhd_video_order', $order);
    wp_send_json_success();
});

// AJAX: Clear YouTube cache
add_action('wp_ajax_vhd_clear_cache', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    dentalso_clear_youtube_cache();
    wp_send_json_success();
});

// Admin page renderer
function vhd_admin_page()
{
    $categories = vhd_get_categories();
    $videos = vhd_get_videos_with_overrides();
    $nonce = wp_create_nonce('vhd_admin_nonce');

    // Group videos by category
    $grouped = [];
    foreach ($videos as $v) {
        $grouped[$v['category']][] = $v;
    }
    ?>
    <div class="wrap" id="vhd-admin">
        <h1>Quản lý Video Hướng Dẫn</h1>
        <p class="description">Quản lý danh mục và video hiển thị trên trang Video Hướng Dẫn.</p>

        <div class="vhd-admin-actions" style="margin:16px 0;">
            <button class="button" onclick="vhdClearCache()">🔄 Làm mới cache video</button>
            <a href="<?= home_url('video-huong-dan/') ?>" target="_blank" class="button">👁 Xem trang</a>
        </div>

        <h2 class="nav-tab-wrapper">
            <a href="#" class="nav-tab nav-tab-active" data-tab="categories">Danh mục</a>
            <a href="#" class="nav-tab" data-tab="videos">Video</a>
        </h2>

        <!-- TAB: Categories -->
        <div class="vhd-tab" id="tab-categories">
            <div style="margin:16px 0;">
                <button class="button button-primary" onclick="vhdAddCategory()">+ Thêm danh mục</button>
            </div>
            <table class="wp-list-table widefat fixed striped" id="cat-table">
                <thead><tr>
                    <th style="width:30px"></th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>Mô tả</th>
                    <th>Icon</th>
                    <th>Màu</th>
                    <th style="width:80px">Hiển thị</th>
                    <th style="width:120px">Thao tác</th>
                </tr></thead>
                <tbody>
                <?php
                uasort($categories, fn($a,$b) => ($a['order']??0) - ($b['order']??0));
                foreach ($categories as $slug => $cat): ?>
                <tr data-slug="<?= esc_attr($slug) ?>" draggable="true">
                    <td class="vhd-drag-handle" style="color:#999;cursor:grab;user-select:none">☰</td>
                    <td><strong><?= esc_html($cat['title']) ?></strong></td>
                    <td><code><?= esc_html($slug) ?></code></td>
                    <td><?= esc_html($cat['desc'] ?? '') ?></td>
                    <td><span class="material-symbols-outlined" style="font-size:20px"><?= esc_html($cat['icon'] ?? 'folder') ?></span></td>
                    <td><span style="display:inline-block;width:24px;height:24px;border-radius:6px;background:<?= esc_attr($cat['color'] ?? '#999') ?>;vertical-align:middle"></span></td>
                    <td>
                        <label class="vhd-toggle">
                            <input type="checkbox" <?= ($cat['visible'] ?? true) ? 'checked' : '' ?> onchange="vhdToggleCat('<?= esc_attr($slug) ?>', this.checked)">
                            <span class="vhd-toggle-slider"></span>
                        </label>
                    </td>
                    <td>
                        <button class="button button-small" onclick="vhdEditCategory('<?= esc_attr($slug) ?>')">Sửa</button>
                        <button class="button button-small button-link-delete" onclick="vhdDeleteCategory('<?= esc_attr($slug) ?>')">Xóa</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- TAB: Videos -->
        <div class="vhd-tab" id="tab-videos" style="display:none">
            <div style="margin:16px 0;display:flex;gap:8px;align-items:center">
                <label>Lọc danh mục:</label>
                <select id="video-filter" onchange="vhdFilterVideos()">
                    <option value="all">Tất cả</option>
                    <?php foreach ($categories as $slug => $cat): ?>
                    <option value="<?= esc_attr($slug) ?>"><?= esc_html($cat['title']) ?></option>
                    <?php endforeach; ?>
                </select>
                <span id="video-count" style="color:#666;margin-left:8px"></span>
            </div>
            <table class="wp-list-table widefat fixed striped" id="video-table">
                <thead><tr>
                    <th style="width:30px"></th>
                    <th style="width:120px">Thumbnail</th>
                    <th>Tiêu đề</th>
                    <th style="width:180px">Danh mục</th>
                    <th style="width:80px">Hiển thị</th>
                </tr></thead>
                <tbody>
                <?php foreach ($videos as $v): ?>
                <tr data-id="<?= esc_attr($v['id']) ?>" data-cat="<?= esc_attr($v['category']) ?>" class="<?= $v['hidden'] ? 'vhd-hidden-row' : '' ?>" draggable="true">
                    <td class="vhd-drag-handle" style="color:#999;cursor:grab;user-select:none">☰</td>
                    <td><img src="https://img.youtube.com/vi/<?= esc_attr($v['id']) ?>/default.jpg" style="width:100%;border-radius:4px"></td>
                    <td>
                        <strong><?= esc_html($v['title']) ?></strong>
                        <div class="row-actions"><span><a href="https://www.youtube.com/watch?v=<?= esc_attr($v['id']) ?>" target="_blank">Xem trên YouTube</a></span></div>
                    </td>
                    <td>
                        <select onchange="vhdMoveVideo('<?= esc_attr($v['id']) ?>', this.value)">
                            <?php foreach ($categories as $slug => $cat): ?>
                            <option value="<?= esc_attr($slug) ?>" <?= $v['category'] === $slug ? 'selected' : '' ?>><?= esc_html($cat['title']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <label class="vhd-toggle">
                            <input type="checkbox" <?= !$v['hidden'] ? 'checked' : '' ?> onchange="vhdToggleVideo('<?= esc_attr($v['id']) ?>', !this.checked)">
                            <span class="vhd-toggle-slider"></span>
                        </label>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Edit Category Modal -->
        <div id="cat-modal" style="display:none">
            <div class="vhd-modal-bg" onclick="vhdCloseModal()"></div>
            <div class="vhd-modal-box">
                <h2 id="cat-modal-title">Sửa danh mục</h2>
                <input type="hidden" id="cat-edit-slug">
                <table class="form-table">
                    <tr><th>Tên</th><td><input type="text" id="cat-edit-title" class="regular-text"></td></tr>
                    <tr><th>Slug</th><td><input type="text" id="cat-edit-slug-input" class="regular-text" placeholder="tu-dong-tao"><p class="description">Để trống sẽ tự tạo từ tên</p></td></tr>
                    <tr><th>Mô tả</th><td><textarea id="cat-edit-desc" class="large-text" rows="2"></textarea></td></tr>
                    <tr><th>Icon</th><td><input type="text" id="cat-edit-icon" class="regular-text" placeholder="play_circle"><p class="description"><a href="https://fonts.google.com/icons" target="_blank">Chọn icon →</a></p></td></tr>
                    <tr><th>Màu</th><td><input type="color" id="cat-edit-color" value="#3b82f6"></td></tr>
                    <tr><th>Màu nền</th><td><input type="color" id="cat-edit-bg" value="#eff6ff"></td></tr>
                </table>
                <p class="submit">
                    <button class="button button-primary" onclick="vhdSaveCategory()">Lưu</button>
                    <button class="button" onclick="vhdCloseModal()">Hủy</button>
                </p>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <style>
    .vhd-toggle { position:relative;display:inline-block;width:40px;height:22px }
    .vhd-toggle input { opacity:0;width:0;height:0 }
    .vhd-toggle-slider { position:absolute;cursor:pointer;inset:0;background:#ccc;border-radius:22px;transition:.2s }
    .vhd-toggle-slider:before { content:"";position:absolute;width:16px;height:16px;left:3px;bottom:3px;background:#fff;border-radius:50%;transition:.2s }
    .vhd-toggle input:checked + .vhd-toggle-slider { background:#0071e3 }
    .vhd-toggle input:checked + .vhd-toggle-slider:before { transform:translateX(18px) }
    .vhd-hidden-row { opacity:.45 }
    #cat-table tbody tr[draggable] { transition:opacity .2s }
    #cat-table tbody tr.vhd-dragging { opacity:.4;background:#f0f6fc }
    #cat-table tbody tr.vhd-drag-over td { border-top:2px solid #0071e3 }
    #video-table tbody tr[draggable] { transition:opacity .2s }
    #video-table tbody tr.vhd-dragging { opacity:.4;background:#f0f6fc }
    #video-table tbody tr.vhd-drag-over td { border-top:2px solid #0071e3 }
    .vhd-drag-handle { user-select:none;-webkit-user-select:none }
    #cat-modal .vhd-modal-bg { position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:99999 }
    #cat-modal .vhd-modal-box { position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;padding:24px 32px;border-radius:12px;z-index:100000;width:560px;max-width:90vw;max-height:80vh;overflow-y:auto;box-shadow:0 20px 60px rgba(0,0,0,.3) }
    </style>

    <script>
    const VHD = {
        nonce: '<?= $nonce ?>',
        ajaxurl: '<?= admin_url('admin-ajax.php') ?>',
        cats: <?= json_encode($categories) ?>
    };

    // Tabs
    document.querySelectorAll('.nav-tab').forEach(tab => {
        tab.addEventListener('click', e => {
            e.preventDefault();
            document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('nav-tab-active'));
            tab.classList.add('nav-tab-active');
            document.querySelectorAll('.vhd-tab').forEach(p => p.style.display = 'none');
            document.getElementById('tab-' + tab.dataset.tab).style.display = '';
            if (tab.dataset.tab === 'videos') vhdFilterVideos();
        });
    });

    function vhdAjax(action, data, cb) {
        const fd = new FormData();
        fd.append('action', action);
        fd.append('_ajax_nonce', VHD.nonce);
        Object.entries(data).forEach(([k,v]) => fd.append(k, v));
        fetch(VHD.ajaxurl, {method:'POST', body:fd}).then(r=>r.json()).then(r=>{
            if(cb) cb(r);
        });
    }

    // Toggle video
    function vhdToggleVideo(id, hide) {
        vhdAjax('vhd_toggle_video', {video_id:id, hide:hide?'1':'0'}, () => {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            row.classList.toggle('vhd-hidden-row', hide);
        });
    }

    // Move video
    function vhdMoveVideo(id, cat) {
        vhdAjax('vhd_move_video', {video_id:id, category:cat}, () => {
            document.querySelector(`tr[data-id="${id}"]`).dataset.cat = cat;
            vhdFilterVideos();
        });
    }

    // Filter videos
    function vhdFilterVideos() {
        const f = document.getElementById('video-filter').value;
        let count = 0;
        document.querySelectorAll('#video-table tbody tr').forEach(row => {
            const show = f === 'all' || row.dataset.cat === f;
            row.style.display = show ? '' : 'none';
            if (show) count++;
        });
        document.getElementById('video-count').textContent = count + ' video';
    }

    // Toggle category visibility
    function vhdToggleCat(slug, visible) {
        VHD.cats[slug].visible = visible;
        vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)});
    }

    // Edit category
    function vhdEditCategory(slug) {
        const c = VHD.cats[slug] || {};
        document.getElementById('cat-modal-title').textContent = 'Sửa danh mục';
        document.getElementById('cat-edit-slug').value = slug;
        document.getElementById('cat-edit-slug-input').value = slug;
        document.getElementById('cat-edit-slug-input').readOnly = true;
        document.getElementById('cat-edit-title').value = c.title || '';
        document.getElementById('cat-edit-desc').value = c.desc || '';
        document.getElementById('cat-edit-icon').value = c.icon || '';
        document.getElementById('cat-edit-color').value = c.color || '#3b82f6';
        document.getElementById('cat-edit-bg').value = c.bg || '#eff6ff';
        document.getElementById('cat-modal').style.display = '';
    }

    // Add category
    function vhdAddCategory() {
        document.getElementById('cat-modal-title').textContent = 'Thêm danh mục';
        document.getElementById('cat-edit-slug').value = '';
        document.getElementById('cat-edit-slug-input').value = '';
        document.getElementById('cat-edit-slug-input').readOnly = false;
        document.getElementById('cat-edit-title').value = '';
        document.getElementById('cat-edit-desc').value = '';
        document.getElementById('cat-edit-icon').value = '';
        document.getElementById('cat-edit-color').value = '#3b82f6';
        document.getElementById('cat-edit-bg').value = '#eff6ff';
        document.getElementById('cat-modal').style.display = '';
    }

    // Save category
    function vhdSaveCategory() {
        let slug = document.getElementById('cat-edit-slug').value;
        const newSlug = document.getElementById('cat-edit-slug-input').value.trim();
        const title = document.getElementById('cat-edit-title').value.trim();
        if (!title) { alert('Vui lòng nhập tên danh mục'); return; }

        if (!slug) {
            // New category
            slug = newSlug || title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            if (VHD.cats[slug]) { alert('Slug đã tồn tại!'); return; }
        }

        VHD.cats[slug] = {
            title: title,
            desc: document.getElementById('cat-edit-desc').value.trim(),
            icon: document.getElementById('cat-edit-icon').value.trim() || 'folder',
            color: document.getElementById('cat-edit-color').value,
            bg: document.getElementById('cat-edit-bg').value,
            visible: VHD.cats[slug]?.visible ?? true,
            order: VHD.cats[slug]?.order ?? Object.keys(VHD.cats).length,
        };

        vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)}, () => {
            location.reload();
        });
    }

    // Delete category
    function vhdDeleteCategory(slug) {
        if (!confirm('Xóa danh mục "' + (VHD.cats[slug]?.title || slug) + '"?\nCác video trong danh mục này sẽ không hiển thị.')) return;
        vhdAjax('vhd_delete_category', {slug: slug}, () => location.reload());
    }

    // Close modal
    function vhdCloseModal() {
        document.getElementById('cat-modal').style.display = 'none';
    }

    // Clear cache
    function vhdClearCache() {
        vhdAjax('vhd_clear_cache', {}, () => {
            alert('Đã xóa cache! Trang sẽ tải lại.');
            location.reload();
        });
    }

    // Drag & drop reorder
    (function(){
        const tbody = document.querySelector('#cat-table tbody');
        if (!tbody) return;
        let dragRow = null;

        tbody.addEventListener('dragstart', e => {
            const row = e.target.closest('tr');
            if (!row) return;
            dragRow = row;
            row.classList.add('vhd-dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', row.dataset.slug);
        });

        tbody.addEventListener('dragend', e => {
            if (dragRow) dragRow.classList.remove('vhd-dragging');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            dragRow = null;
        });

        tbody.addEventListener('dragover', e => {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            const row = e.target.closest('tr');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            if (row && row !== dragRow) row.classList.add('vhd-drag-over');
        });

        tbody.addEventListener('drop', e => {
            e.preventDefault();
            const target = e.target.closest('tr');
            if (!target || !dragRow || target === dragRow) return;
            // Insert before or after
            const rows = [...tbody.querySelectorAll('tr')];
            const dragIdx = rows.indexOf(dragRow);
            const targetIdx = rows.indexOf(target);
            if (dragIdx < targetIdx) {
                target.after(dragRow);
            } else {
                target.before(dragRow);
            }
            // Save new order
            tbody.querySelectorAll('tr').forEach((r, i) => {
                const slug = r.dataset.slug;
                if (VHD.cats[slug]) VHD.cats[slug].order = i;
            });
            vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)});
        });
    })();

    // Drag & drop reorder videos
    (function(){
        const tbody = document.querySelector('#video-table tbody');
        if (!tbody) return;
        let dragRow = null;

        tbody.addEventListener('dragstart', e => {
            const row = e.target.closest('tr');
            if (!row) return;
            dragRow = row;
            row.classList.add('vhd-dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', row.dataset.id);
        });

        tbody.addEventListener('dragend', e => {
            if (dragRow) dragRow.classList.remove('vhd-dragging');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            dragRow = null;
        });

        tbody.addEventListener('dragover', e => {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            const row = e.target.closest('tr');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            if (row && row !== dragRow) row.classList.add('vhd-drag-over');
        });

        tbody.addEventListener('drop', e => {
            e.preventDefault();
            const target = e.target.closest('tr');
            if (!target || !dragRow || target === dragRow) return;
            const rows = [...tbody.querySelectorAll('tr')];
            const dragIdx = rows.indexOf(dragRow);
            const targetIdx = rows.indexOf(target);
            if (dragIdx < targetIdx) {
                target.after(dragRow);
            } else {
                target.before(dragRow);
            }
            // Save order for visible rows
            const order = {};
            tbody.querySelectorAll('tr').forEach((r, i) => {
                if (r.dataset.id) order[r.dataset.id] = i;
            });
            vhdAjax('vhd_save_video_order', {order: JSON.stringify(order)});
        });
    })();
    </script>
    <?php
}
