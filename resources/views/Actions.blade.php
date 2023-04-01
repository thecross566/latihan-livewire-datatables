    <div class="flex space-x-1 justify-around">
        <div class="flex justify-center">
            <button wire:click="ubah({{ $id }})"
                class="px-3 py-2 bg-orange-600 text-white rounded hover:bg-orange-800 focus:outline-none">Ubah
            </button>
            <button wire:click="confirmDelete({{ $id }})"
                class="px-3 py-2 ml-3 bg-red-600 text-white rounded hover:bg-red-800 focus:outline-none">Hapus
            </button>

        </div>
        @if ($this->isUpdate)
            <x-user.modal-update></x-user.modal-update>
        @elseif ($this->isDelete)
            <x-user.modal-delete></x-user.modal-delete>
        @endif
    </div>
