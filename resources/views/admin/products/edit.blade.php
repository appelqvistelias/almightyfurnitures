<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Update Product Details</h3>

                    <x-errors />

                    <form method="post" action="{{ route('products.update', $product) }}" class="space-y-4">
                        @method('PATCH')
                        <x-products.form :product="$product" />
                        <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>