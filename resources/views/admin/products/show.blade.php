<!-- <x-layout>
    <h1>{{ $product->name}}</h1>

    <p>{{ $product->description }}</p>

    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">

        @csrf
        @method('DELETE')

        <button>Delete</button>

    </form>


</x-layout> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <p class="text-gray-700"><strong>Description:</strong> {{ $product->description }}</p>
        <p class="text-gray-700"><strong>Size:</strong> {{ $product->size }}</p>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('products.edit', $product->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>

            <form method="post" action="{{ route('products.destroy', $product) }}">
                @csrf
                @method('DELETE')
                <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>