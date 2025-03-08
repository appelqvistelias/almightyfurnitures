<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <!-- Product Name -->
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h3>

                    <!-- Image Display -->
                    @if($product->image)
                    <div class="mb-6">
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="rounded-lg w-32 mx-auto shadow-md">
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
                    @if($product->height || $product->width || $product->depth)
                    <div class="mb-4">
                        <p class="text-gray-700">
                            <strong>Dimensions (H, W, D):</strong>
                            @if($product->height){{ $product->height }} cm @endif
                            @if($product->height && $product->width) x @endif
                            @if($product->width){{ $product->width }} cm @endif
                            @if(($product->height || $product->width) && $product->depth) x @endif
                            @if($product->depth){{ $product->depth }} cm @endif
                        </p>
                    </div>
                    @endif

                    <!-- Weight -->
                    <p class="text-gray-700 mb-4"><strong>Weight:</strong> {{ $product->weight }} kg</p>

                    <!-- Material -->
                    <p class="text-gray-700 mb-4"><strong>Material:</strong> {{ $product->material }}</p>

                    <!-- Colour -->
                    <p class="text-gray-700 mb-4"><strong>Colour:</strong> {{ $product->colour }}</p>

                    <!-- Brand -->
                    <p class="text-gray-700 mb-6"><strong>Brand:</strong> {{ $product->brand }}</p>

                    <!-- Actions -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('products.index') }}" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span>Back to Products</span>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center space-x-2">
                            <span>Edit</span>
                        </a>

                        <form method="post" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button class="px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 flex items-center space-x-2">
                                <span>Delete</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>