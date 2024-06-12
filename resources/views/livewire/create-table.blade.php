<div class="flex flex-wrap p-10">
    <div class="w-1/2">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="table_name" value="{{ __('Table Name') }}" />
            <x-input id="table_name" type="text" class="mt-1 block w-full" wire:model="table_name" required
                autocomplete="table_name" />
            <x-input-error for="table_name" class="mt-2" />
        </div>
    </div>
    <div class="w-1/2 flex">
        <x-button wire:loading.attr="disabled" wire:click="createTable" class="mt-7 ml-5">
            {{ __('Save') }}
        </x-button>

        <p>
            @if ($saved)
                Saved
            @endif
        </p>

    </div>
</div>
