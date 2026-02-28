<div x-data="commandPalette()" x-init="init()" x-cloak>
  <button @click="open = true; resetAndFetch()" class="fixed bottom-6 right-6 bg-blue-600 text-white px-4 py-2 rounded-full shadow-md z-50">
    🔍 Tìm tài liệu
  </button>

  <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-40" @click.self="open = false"></div>

  <div x-show="open"
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 scale-95"
       x-transition:enter-end="opacity-100 scale-100"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100 scale-100"
       x-transition:leave-end="opacity-0 scale-95"
       class="fixed top-1/2 left-1/2 w-full max-w-3xl -translate-x-1/2 -translate-y-1/2 bg-white rounded-xl shadow-xl z-50 p-6 space-y-6">

    <div class="flex flex-col md:flex-row gap-4 relative">
      <select x-model="selected" @change="resetAndFetch"
              class="border px-3 py-2 rounded w-full md:w-1/3">
        <option value="all">Tất cả chuyên mục</option>
        @foreach (get_terms(['taxonomy' => 'doc_category', 'hide_empty' => false]) as $term)
          <option value="{{ $term->slug }}">{{ $term->name }}</option>
        @endforeach
      </select>

      <div class="w-full md:w-2/3 relative">
        <input type="text" x-model="query"
               placeholder="Tìm từ khóa..."
               class="border px-3 py-2 rounded w-full" />

        <ul x-show="results.length && query"
            class="absolute z-50 bg-white border mt-1 rounded shadow w-full max-h-64 overflow-auto">
          <template x-for="item in results" :key="item.link">
            <li class="p-3 hover:bg-gray-100 cursor-pointer">
              <a :href="item.link" class="block text-sm text-blue-600" x-text="item.title"></a>
            </li>
          </template>
        </ul>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-[400px] overflow-auto">
      <template x-for="item in results" :key="item.link">
        <div class="border p-4 rounded hover:shadow transition bg-gray-50">
          <a :href="item.link" class="block text-blue-600 font-semibold text-lg hover:underline" x-text="item.title"></a>
          <p class="text-sm text-gray-600 mt-1" x-text="item.excerpt"></p>
        </div>
      </template>
    </div>

    <div class="flex justify-between items-center">
      <span x-show="loading" class="text-gray-400 italic">Đang tải...</span>
      <button x-show="hasMore && !loading" @click="fetchDocs"
              class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
        Xem thêm
      </button>
      <span x-show="!hasMore && !loading" class="text-gray-400 text-sm">Đã hết tài liệu.</span>
    </div>

    <button @click="open = false" class="absolute top-2 right-4 text-xl text-gray-400 hover:text-black">×</button>

    <p class="text-xs text-gray-400 mt-2 text-center">
      Nhấn <kbd class="px-1 py-0.5 bg-gray-100 border text-xs">⌘</kbd> + <kbd class="px-1 py-0.5 bg-gray-100 border text-xs">K</kbd> để mở nhanh
    </p>
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

        init() {
          window.addEventListener('keydown', (e) => {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
              e.preventDefault();
              this.open = !this.open;
              if (this.open) this.resetAndFetch();
            }
          });

          this.$watch('query', value => {
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
</div>
