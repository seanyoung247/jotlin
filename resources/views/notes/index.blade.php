
<x-layout>

    <div class="add-note">
        <details  @if($notes->isEmpty()) open @endif>
            <summary>Add Note</summary>
            <x-edit></x-edit>
        </details>
    </div>

    <section id="notes" class="card-grid">
    
        @forelse ($notes as $note)
            <x-card class="note-card">
                <x-note :note="$note"></x-note>
            </x-card>
        @empty
        @endforelse

    </section>

</x-layout>