
<x-layout>

    <h1>Jotlin</h1>

    <x-edit></x-edit>

    <!-- Existing Notes -->
    @forelse ($notes as $note)
        <x-card class="note-card">
            <article>
                <header>
                    <h3>{{ $note->title }}</h3>
                    <div class="toolbar">
                        <button class="edit">&#9998;</button>
                        <button class="complete">&#10004;</button>
                        <button class="delete">&#10007;</button>
                    </div>
                </header>
                <p>{{ $note->note }}</p>
            </article>
        </x-card>
    @empty
        <p>No Notes</p>
    @endforelse

</x-layout>