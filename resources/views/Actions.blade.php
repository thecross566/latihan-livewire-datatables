    <div class="flex space-x-1 justify-around">
        <div class="flex justify-center">
            <button wire:click="ubah({{ $id }})"
                class="px-3 py-2 bg-orange-600 text-white rounded hover:bg-orange-800 focus:outline-none">Ubah
            </button>

            @if (isset($this->isUpdate))
                <x-modal></x-modal>
            @endif
        </div>

    </div>
