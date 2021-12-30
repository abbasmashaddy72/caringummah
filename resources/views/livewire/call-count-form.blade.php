<div>
    <div class="max-w-2xl p-6 bg-white">
        <div class="flex items-center justify-between">
            <h3 class="text-2xl">Model Title</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div class="mt-4">
            <form wire:submit.prevent="submit" method="get">
                @csrf
                <input name='doctor_id' type="hidden" wire:model='doctor_id'>
                <div class="mb-5">
                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                    <input type="text" name="name" wire:model='name'
                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                    @error('name')
                        <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="phone" class="text-sm leading-7 text-gray-600">Phone</label>
                    <input type="number" name="phone" wire:model='phone'
                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                    @error('phone')
                        <span class="mt-1 text-sm text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="block w-full p-3 font-bold text-white bg-blue-500 rounded-l">Submit</button>
            </form>
        </div>
    </div>
</div>
