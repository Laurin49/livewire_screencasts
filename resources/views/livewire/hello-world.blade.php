<div class="container px-2">
    <div class="grid grid-cols-2">
        <div class="p-4 mx-auto my-4 bg-slate-200">
            <input wire:model='name' class="mr-2 border border-black border-solid" type="text">
        </div>
        <div class="p-4 mx-auto my-4 bg-slate-200">
            <label class="mr-2" for="lout">Laut</label><input wire:model='lout' class="mr-2 border border-black border-solid" type="checkbox">
        </div>
    </div>
    <div class="grid grid-cols-2">
        <div class="flex justify-center p-2 bg-slate-400">
            <select wire:model='greeting' multiple class="px-6 py-2 bg-slate-200">
                <option>Guten Morgen</option>
                <option>Guten Tag</option>
                <option>Guten Abend</option>
            </select>
        </div>
        <div class="flex justify-center p-2 bg-slate-300 ">
            <form action="#" wire:submit.prevent='$set("name", "Dirk Welter 2")'>
                <button class="px-4 rounded-md bg-slate-100">Reset Name</button>
            </form>
        </div>
    </div>   
    <div class="grid grid-cols-1">
        <div class="flex items-center justify-center p-6 my-4 text-2xl bg-slate-500 ">
            {{ implode(', ' , $greeting) }} {{ $name }} 
            @if ($lout) 
                !
            @endif
        </div>
    </div>
</div>
