<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nueva categoría</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Nombre de la categoría" class="font-bold"/>
              <x-input wire:model="form.name" type="text" class="w-full"/>
              <x-input-error for="form.name"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Nombre de la categoría" class="font-bold"/>
                <x-input wire:model="form.datein" type="date" class="w-full"/>
                <x-input-error for="form.datein"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Nombre de la categoría" class="font-bold"/>
                <x-input wire:model="form.dateout" type="date" class="w-full"/>
                <x-input-error for="form.dateout"/>
            </div>
        </div>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
        <!-- <span wire:loading wire:target="store">Cargando...</span> -->
      </x-slot>

    </x-dialog-modal>
</div>
