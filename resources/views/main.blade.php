
<x-layout>

    <h1>Jotlin</h1>

    <form method="post" action="/new-note"
        class="new-note-form"
    >
        @csrf

        <label for="new-note-title">Title</label>
        <input type="text" 
            name="note-title" 
            id="new-note-title"
            required
        >
        <label for="new-note-text">Note</label>
        <textarea 
            name="note-text"
            id="new-note-text"
            required
        ></textarea>
        <input type="submit" value="Add Note" />
    </form>

    <!-- Existing Notes -->
    @forelse ($notes as $note)
        <x-card class="note-card">
            <h3>{{ $note['title'] }}</h3>
            <p>{{ $note['note'] }}</p>
        </x-card>
    @empty
        <p>No Notes</p>
    @endforelse

</x-layout>