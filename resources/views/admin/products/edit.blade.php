<!-- <x-layout>

    <h1>Edit Product</h1>

    <x-errors />

    <form method="post" action="{{ route('products.update', $product) }}">
        @method('PATCH')

        <x-products.form :product="$product" />

    </form>

</x-layout> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <x-errors />

        <form method="post" action="{{ route('products.update', $product) }}" class="space-y-4">
            @method('PATCH')
            <x-products.form :product="$product" />
            <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Update</button>
        </form>
    </div>
</x-app-layout>