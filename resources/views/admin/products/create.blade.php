<!-- <x-layout>

    <h1>New Product</h1>
    
    <x-errors />


    <form method="post" action="{{ route('products.store') }}">

        <x-products.form />

    </form>

</x-layout> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Product') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <x-errors />

        <form method="post" action="{{ route('products.store') }}" class="space-y-4">
            <x-products.form />
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Save</button>
        </form>
    </div>
</x-app-layout>