<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to the Product Catalog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold">Available Products</h3>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach($products as $product)
                        <div class="p-4 border rounded shadow">
                            <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                            <p class="text-green-600 font-semibold">{{ $product->size }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>