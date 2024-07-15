<div class="text-sky-500 text-4xl text-center py-12">🎡 Welcome to the playground!</div>

<div class="mt-6 text-center text-xl">
   <div x-data="{ count: 0}">
    <x-button x-on:click="count++" class="bg-green-500 hover:bg-green-600 focus:bg-green-600 mr-2">Increment</x-button>
    <x-button x-on:click="count--" class="bg-red-500 hover:bg-red-600 focus:bg-red-600 mr-2">Decrement</x-button>
    <span x-text="count"></span>
   </div>
</div>

