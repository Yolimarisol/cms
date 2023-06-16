@props(['type'])

<a href="/?type={{ $type->slug }}"
   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-sm uppercase font-semibold"

>{{ $type->name }}</a>
