<div>
    <form wire:submit="save">
        Название <br>
        <input type="text" wire:model="title">

        {{-- <input type="radio" wire:model="status"> --}}
        <br><br>
        <button wire:click="save" type="submit">Создать</button>
    </form>
</div>
