<div class="container px-2 mx-auto">
    @foreach ($contacts as $contact)
        <div>
            @livewire('contact-nested', ['contact' => $contact], key($contact->id))
            {{-- <button wire:click='removeContact( "{{ $contact->name }}" )' class="border border-solid">Remove</button> --}}
        </div>
    @endforeach

    <hr>
    <div class="grid w-1/2 grid-cols-2">
        <div class="p-1 my-1">
            {{ now() }}
        </div>
        <div class="p-1 my-1">
            <button wire:click='refreshChildren' class="border border-solid">Refresh Children</button>
        </div>
    </div>
</div>
