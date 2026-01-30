@php
$terms = get_terms(['taxonomy' => 'doc_category', 'hide_empty' => false]);
@endphp

<div x-data="commandPalette()" x-init="init()" x-cloak class="relative z-10 max-w-2xl mx-auto">
    <!-- Thanh tìm kiếm -->
    <div class="bg-white border border-gray-200 rounded-full shadow px-2 py-1 flex items-center gap-2 relative z-20">
        <select x-model="selected" @change="resetAndFetch"
            class="appearance-none bg-transparent px-4 py-2 rounded-full focus:outline-none text-gray-700 text-base">
            <option value="all">Tất cả chuyên mục</option>
            @foreach ($terms as $term)
            <option value="{{ $term->slug }}">{{ $term->name }}</option>
            @endforeach
        </select>
        <div class="relative flex-1">
            <input type="text"
                id="searchInput"
                x-model="query"
                @focus="focused = true"
                @click.stop
                placeholder="Tìm kiếm tài liệu..."
                class="w-full bg-transparent py-2 pl-10 pr-4 rounded-full focus:outline-none text-base">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8" />
                    <path d="M21 21l-4.35-4.35" />
                </svg>
            </span>
        </div>
    </div>

    <!-- Popup kết quả (nằm dưới input) -->
    <div x-show="focused && query.length"
        x-transition.opacity.scale
        @click.away="focused = false"
        class="absolute left-0 right-0 mt-2 bg-white border rounded-xl shadow-xl space-y-4 z-10">

        <!-- Danh sách kết quả -->
        <div class="max-h-[400px] overflow-auto p-4">
            <ul class="space-y-3">
                <template x-for="item in results" :key="item.link">
                    <li>
                        <a :href="item.link" class="block text-base text-blue-600 hover:underline font-medium" x-text="item.title"></a>
                        <p class="text-sm text-gray-600" x-text="item.excerpt"></p>
                    </li>
                </template>
            </ul>
        </div>

        <!-- Phân trang -->
        <!-- <div class="flex justify-between items-center">
            <span x-show="loading" class="text-gray-400 italic">Đang tải...</span>
            <button x-show="hasMore && !loading" @click="fetchDocs"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Xem thêm
            </button>
            <span x-show="!hasMore && !loading" class="text-gray-400 text-sm">Đã hết tài liệu.</span>
        </div> -->
    </div>
</div>

<script>
    function commandPalette() {
        return {
            open: false,
            selected: 'all',
            query: '',
            results: [],
            page: 1,
            loading: false,
            hasMore: true,
            focused: false,
            init() {
                this.resetAndFetch();

                window.addEventListener('keydown', (e) => {
                    if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                        e.preventDefault();
                        this.open = true;
                        this.resetAndFetch();
                        this.$nextTick(() => document.getElementById('searchInput')?.focus());
                    }
                });

                this.$watch('query', () => {
                    this.page = 1;
                    this.hasMore = true;
                    this.fetchDocs();
                });
            },

            fetchDocs() {
                if (this.loading || !this.hasMore) return;
                this.loading = true;

                const params = new URLSearchParams({
                    category: this.selected,
                    query: this.query,
                    paged: this.page,
                });

                fetch(`/wp-json/custom/v1/filter-docs?${params.toString()}`)
                    .then(res => res.json())
                    .then(data => {
                        if (this.page === 1) this.results = [];
                        this.results.push(...data.items);
                        this.hasMore = data.has_more;
                        this.loading = false;
                        this.page++;
                    });
            },

            resetAndFetch() {
                this.page = 1;
                this.hasMore = true;
                this.fetchDocs();
            }
        }
    }
</script>