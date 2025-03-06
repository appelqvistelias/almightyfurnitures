<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Create a New Product</h3>

                    <x-errors />

                    <form method="post" action="{{ route('products.store') }}" class="space-y-4">
                        <x-products.form />
                        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>