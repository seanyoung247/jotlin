

<x-layout>

    <h1>Jotlin</h1>
    
    <main id="note">
        <x-card class="note-card large">
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
    </main>

</x-layout>
