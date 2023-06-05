<div class="container px-2">
    <div class="grid grid-cols-2">
        <div class="p-4 mx-auto my-4 bg-slate-200">
            <input wire:model='name' class="mr-2 border border-black border-solid" type="text">
        </div>
        <div class="p-4 mx-auto my-4 bg-slate-200">
        </div>
    </div>
    <div class="grid grid-cols-1">
        <div class="flex items-center justify-center p-6 my-4 text-2xl bg-slate-500 ">
            {{ $name }} 
        </div>
    </div>
</div>
