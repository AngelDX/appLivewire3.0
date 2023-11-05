<x-modal.card title="Registro nuevo vehiculo" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Descripión" placeholder="Año de la organización" wire:model="form.name"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Año" placeholder="2023" wire:model="form.year"/>
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
