
<x-layout>

    <h1>Jotlin</h1>

    <div class="add-note">
        <details>
            <summary>Add Note</summary>
            <x-edit></x-edit>
        </details>
    </div>

    <section id="notes" class="card-grid">
    
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

    </section>

</x-layout>