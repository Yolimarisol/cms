@props(['posts'])

<x-post-featured-card :vacancy="$vancancies[0]" />

@if ($vacancies->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($vacancies->skip(1) as $vacancy)
            <x-post-card
                :vacancy="$vacancy"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
