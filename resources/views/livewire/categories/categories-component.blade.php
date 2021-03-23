<div class="py-12 antialiased">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-end p-2">
                <x-jet-button wire:click="create()" wire:loading.attr="disabled">
                    {{ __('Ajouter Categorie') }}
                </x-jet-button>
            </div>
            {{-- add modal --}}
            @if($isOpen)
                @include('livewire.categories.add')
            @endif

            {{-- Datatable --}}
            <div class="p-2">
                <livewire:categories.categories-table 
                    exportable
                />
            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] {
        display: none;
    }
</style>
