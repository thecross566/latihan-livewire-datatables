<div class="mt-4 mb-3">

    <div class="{{ $this->isUpdate ? 'relative' : 'hidden' }} z-10" aria-labelledby="modal-title" role="dialog"
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
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Form
                                        Tambah
                                        User</h3>
                                    <div class="mt-2">

                                        <form>
                                            <div class="space-y-12">
                                                <div class="border-b border-gray-900/10 pb-12">

                                                    <input type="hidden" wire:model="user_id">
                                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                        <div class="sm:col-span-4">
                                                            <label for="Name"
                                                                class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                            <div class="mt-2">
                                                                <div
                                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                                                    <input type="text" name="name" id="Name"
                                                                        autocomplete="Name"
                                                                        class="@error('name') is-invalid @enderror block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                        placeholder="Masukan Nama" wire:model="name">
                                                                    @error('name')
                                                                        <span
                                                                            class="text-red-600">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                        <div class="sm:col-span-4">
                                                            <label for="Email"
                                                                class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                            <div class="mt-2">
                                                                <div
                                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                                                    <input type="email" name="email" id="Email"
                                                                        autocomplete="Email"
                                                                        class="@error('email') is-invalid @enderror block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                                        placeholder="Masukan Email" wire:model="email">
                                                                    @error('email')
                                                                        <span
                                                                            class="text-red-600">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button wire:click="closeModal()" type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button wire:click="saveUpdate()" type="button"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
