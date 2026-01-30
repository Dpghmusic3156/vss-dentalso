
@php
$customers = new WP_Query([
    'post_type'      => 'customer',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
]);
@endphp
<div class="container py-16 grid lg:grid-cols-3 gap-10">
    @if ($customers->have_posts())
        @foreach ($customers->posts as $customer)
            @php setup_postdata($customer) @endphp

            @php
                $thumbnail = get_the_post_thumbnail_url($customer->ID, 'medium');
                $link = get_post_meta($customer->ID, 'link', true);
                $phone = get_post_meta($customer->ID, 'phone', true);
                $address = get_post_meta($customer->ID, 'address', true);
                $footnotes = get_post_meta($customer->ID, 'footnotes', true);
            @endphp
            @if ($footnotes == 'bh')
            <div   class="shadow-xl border border-primary3-100 rounded-3xl p-6">
                <div z-index="9999999"  class="rounded-full w-32 h-32 flex border rounded-3xl mx-auto items-center p-1" >
                    @if ($thumbnail)
                        <img class="rounded-full" src="{{ $thumbnail }}" alt="{{ get_the_title($customer->ID) }}"/>
                    @else
                        <span class="text-sm text-gray-400">Không có ảnh</span>
                    @endif
                </div>

                <h2 class="text-2xl text-center">{{ get_the_title($customer->ID) }}</h2>

                <p>
                    <span class="material-symbols-outlined align-sub text-lg text-secondary">language</span>
                    @if ($link)
                        <a href="{{ $link }}" target="_blank" class="text-blue-600 underline break-words">{{ $link }}</a>
                    @else
                        <span class="text-gray-500">Chưa có link</span>
                    @endif
                </p>

                <p>
                    <span class="material-symbols-outlined align-sub text-lg text-secondary">call</span>
                    {{ $phone ?: 'Chưa có số' }}
                </p>

                <p>
                    <span class="material-symbols-outlined align-sub text-lg text-secondary">home</span>
                    {{ $address ?: 'Chưa có địa chỉ' }}
                </p>
            </div>
            @endif
        @endforeach

        @php wp_reset_postdata() @endphp
    @else
        <p class="col-span-3 text-center text-gray-500">Không có khách hàng nào.</p>
    @endif
</div>

