<div class="grid w-1/2 grid-cols-2">
    <div class="p-1 my-1">
        {{ $contact->name }}: {{ now() }}
    </div>
    <div class="p-1 my-1">
        <button wire:click='emitChild' class="border border-solid">Refresh</button>
    </div>
</div>
