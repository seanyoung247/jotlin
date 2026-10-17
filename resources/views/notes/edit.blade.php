

<x-layout>

    <h1>Jotlin</h1>
    
    <main id="note">
        <x-card class="note-card large">
            <x-edit
                id="{{ $note->id }}"
                title="{{ $note->title }}"
                note="{{ $note->note }}"
            ></x-edit>
        </x-card>
    </main>

</x-layout>
