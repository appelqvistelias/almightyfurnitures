<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <!-- Product Name -->
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h3>

                    <!-- Image Display -->
                    @if($product->image)
                    <div class="mb-6">
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="rounded-lg w-full h-80 object-cover shadow-lg">
                    </div>
                    @endif

                    <!-- Description -->
                    <div class="mb-6">
                        <p class="text-gray-700 text-lg"><strong>Description:</strong> {{ $product->description }}</p>
                    </div>

                    <!-- Price -->
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-2xl font-semibold text-green-600">{{ number_format($product->price, 2) }} SEK</p>
                    </div>

                    <!-- Dimensions (Height x Width x Depth) -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <p class="text-gray-700"><strong>Height:</strong> {{ $product->height }} cm</p>
                        <p class="text-gray-700"><strong>Width:</strong> {{ $product->width }} cm</p>
                        <p class="text-gray-700"><strong>Depth:</strong> {{ $product->depth }} cm</p>
                    </div>

                    <!-- Weight -->
                    <p class="text-gray-700 mb-4"><strong>Weight:</strong> {{ $product->weight }} kg</p>

                    <!-- Material -->
                    <p class="text-gray-700 mb-4"><strong>Material:</strong> {{ $product->material }}</p>

                    <!-- Colour -->
                    <p class="text-gray-700 mb-4"><strong>Colour:</strong> {{ $product->colour }}</p>

                    <!-- Brand -->
                    <p class="text-gray-700 mb-6"><strong>Brand:</strong> {{ $product->brand }}</p>

                    <!-- Back Button -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('home') }}" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span>Back to Products</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>