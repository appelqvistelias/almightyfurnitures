<!-- <x-layout>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New product</a>

    @foreach ($products as $product)

    <h2><a href="{{ route( 'products.show', $product->id) }}">{{ $product->name }}</a></h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    @endforeach

    {{ $products->links('vendor/pagination/simple-default' )}}

</x-layout> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Product List</h1>
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                New Product
            </a>
        </div>

        <div class="space-y-4">
            @foreach ($products as $product)
            <div class="p-4 border rounded-lg shadow-sm">
                <h2 class="text-xl font-semibold">
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
</x-app-layout>