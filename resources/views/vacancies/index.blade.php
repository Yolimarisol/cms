<x-layout>
    @include ('vacancies._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($vacancies->count())
            <x-vacancies-grid :vacancy="$vacancies" />

            {{ $vacancies->links() }}
        @else
            <p class="text-center">No vacancies yet. Please check back later.</p>
        @endif
    </main>
</x-layout>

