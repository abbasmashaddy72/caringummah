<div>
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
        <button type="submit" class="block w-full p-3 font-bold text-white bg-blue-500 rounded-l">Submit</button>
    </form>
</div>
