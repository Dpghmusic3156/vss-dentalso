@props([
    'title' => '',
    'image' => '',
    'items' => '',
    'modalId' => '',
])
<div x-show="activeModal === '{{ $modalId }}'" x-transition.opacity @click="activeModal = null"
    @keydown.window.escape="activeModal = null" class="fixed inset-0 bg-transparent bg-opacity-30 z-40" x-cloak></div>

<div x-show="activeModal === '{{ $modalId }}'" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="translate-y-full opacity-0" x-cloak
    class="fixed bottom-0 inset-x-0 z-50 bg-white shadow-2xl p-6 border-t border-gray-200"
    style="box-shadow: 0 -8px 12px rgba(0, 0, 0, 0.15);">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-start gap-6 relative">
        <div class="w-full flex-1 min-w-0 md:w-3/4">
            <h3 class="text-lg font-bold mb-4">
                <?php
                // Giả sử $title = get_the_title(); // Lấy title từ post hiện tại
                $decoded_title = wp_specialchars_decode($title, ENT_QUOTES); // Decode an toàn
                echo esc_html($decoded_title); // Escape trước khi echo
                ?>
            </h3>
            <div class="prose">
                <?php echo apply_filters('the_content', get_the_content()); ?>
            </div>
        </div>
        @if ($image)
            <div class="w-full md:w-1/4 flex-shrink-0">
                <img src="{{ $image }}" alt="{{ $title }}"
                    class="rounded-lg img-fluid object-cover md:max-h-40" />
            </div>
        @endif
        <button @click="activeModal = null"
            class="text-gray-500 hover:text-gray-700 text-xl font-bold absolute top-2 -right-16">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>
</div>
