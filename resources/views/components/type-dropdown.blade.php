<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentType) ? ucwords($currentType->name) : 'Types' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('type', 'page')) }}"
        :active="request()->routeIs('home') && is_null(request()->getQueryString())"
    >
        All
    </x-dropdown-item>

    @foreach ($types as $type)
        <x-dropdown-item
            href="/?type={{ $type->slug }}&{{ http_build_query(request()->except('type', 'page')) }}"
            :active='request()->fullUrlIs("*?type={$type->slug}*")'
        >
            {{ ucwords($type->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
