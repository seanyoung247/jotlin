
<article>
    <header>
        <h3>{{ $note->title }}</h3>
        <form method="POST" action="/notes/{{ $note->id }}" class="toolbar">
            @csrf
            @method("delete")
            <a class="edit"
                href="/notes/{{ $note->id }}/edit"
            >&#9998;</a>
            <!-- <a class="complete"
                href=""
            >&#10004;</a> -->
            <input type="submit"
                class="delete"
                value = "&#10007;"
            />
        </form>
    </header>
    <p>{{ $note->note }}</p>
</article>
