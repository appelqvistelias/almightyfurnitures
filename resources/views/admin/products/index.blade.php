<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold">Product List</h1>
                        <a href="{{ route('products.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            New Product
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        @foreach ($products as $product)
                        <div class="p-4 border rounded-lg shadow-sm bg-gray-50">
                            <h2 class="text-lg font-semibold">
                                <a href="{{ route('products.show', $product->id) }}" class="text-blue-600 hover:underline">
                                    {{ $product->name }}
                                </a>
                            </h2>
                            <p class="text-gray-700">{{ $product->description }}</p>
                            <p class="text-gray-600"><strong>Size:</strong> {{ $product->size }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        {{ $products->links('vendor/pagination/simple-default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>