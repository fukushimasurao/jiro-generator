<div class="col-span-6 sm:col-span-3">

    <div class="mb-5">
        <label for="vegetable" class="block text-sm font-medium text-gray-700">野菜をどれくらい入れますか？</label>
        <select wire:model="vegetable"
            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option>選択してください。</option>
            <option value="very-many">めちゃくちゃ入れる</option>
            <option value="so-many">とてもたくさん入れる</option>
            <option value="many">たくさん入れる</option>
            <option value="so-so">通常量入れる</option>
            <option value="few">少なめ</option>
            <option value="none" selected>入れない</option>
        </select>
        <br>
        <label for="ninniku" class="block text-sm font-medium text-gray-700">ニンニクをどれくらい入れますか？</label>
        <select wire:model="ninniku"
            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option>選択してください。</option>
            <option value="very-many">めちゃくちゃ入れる</option>
            <option value="so-many">とてもたくさん入れる</option>
            <option value="many">たくさん入れる</option>
            <option value="so-so">通常量入れる</option>
            <option value="few">少なめ</option>
            <option value="none" selected>入れない</option>
        </select>
        <br>
        <label for="oil" class="block text-sm font-medium text-gray-700">油をどれくらい入れますか？</label>
        <select wire:model="oil"
            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option>選択してください。</option>
            <option value="many">たくさん入れる</option>
            <option value="so-so">通常量入れる</option>
            <option value="few">少なめ</option>
            <option value="none" selected>入れない</option>
        </select>
    </div>

    <h2 id="mashimashi" class="block mb-5 text-2xl font-medium text-gray-700"> {{ $result }}</h2>

    <div class="flex justify-center">
        <button id="get_text" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
            onclick="click_get_text()">注文！！</button>
    </div>
</div>
