<x-layouts.app>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                投稿の新規作成
            </h2>
    
            <form wire:submit.prevent="save" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block font-semibold">件名</label>
                    <input type="text" id="title" wire:model="title" class="w-full px-2 py-2 border rounded-md" />
                </div>

                <div class="mb-4">
                    <label for="body" class="block font-semibold">本文</label>
                    <textarea id="body" wire:model="body" class="w-full px-2 py-2 border rounded-md" rows="6"></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block font-semibold">画像</label>
                    <input type="file" id="image" wire:model="image" />
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    送信する
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>