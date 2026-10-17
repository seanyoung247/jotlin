
<article>
    <header>
        <h3>{{ $note->title }}</h3>
        <div class="toolbar">
            <a class="edit"
                href="/notes/{{ $note->id }}/edit"
            >&#9998;</a>
            <a class="complete"
                href=""
            >&#10004;</a>
            <a class="delete"
                href=""
            >&#10007;</a>
        </div>
    </header>
    <p>{{ $note->note }}</p>
</article>
