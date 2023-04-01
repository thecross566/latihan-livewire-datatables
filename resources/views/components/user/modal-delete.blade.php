<div class="mt-4 mb-3">

    <div class="{{ $this->isDelete ? 'relative' : 'hidden' }} z-10" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 bg-gray-5/50  transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">

                            <div class="w-full">
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                        Konfirmasi
                                        Hapus User</h3>
                                    <div class="mt-2">

                                        <form>

                                            <div class="border-b border-gray-900/10 pb-12">

                                                <input type="hidden" wire:model="user_id">
                                                <p>Apakah anda yakin ingin menghapus user ini?</p>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-3 py-2 sm:flex sm:flex-row-reverse ">
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button wire:click="closeModal('isDelete')" type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button wire:click="hapus({{ $this->user_id }})" type="button"
                                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
