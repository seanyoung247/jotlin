
@props([
    'title' => '',
    'note' => '',
    'id' => null,
])

<form method="POST" action="/notes{{ $id ? '/' . $id : null }}"
    {{ $attributes->merge(['class' => 'input-form']) }}
>
    @csrf
    @if ($id)
        @method("patch")
    @endif

    <label for="new-note-title">Title</label>
    <input type="text" 
        name="note-title" 
        id="new-note-title"
        value="{{ $title }}"
        required
    >
    <label for="new-note-text">Note</label>
    <textarea 
        name="note-text"
        id="new-note-text"
        required
    >{{ $note }}</textarea>
    <input class="btn" type="submit" value="Save" />
</form>
