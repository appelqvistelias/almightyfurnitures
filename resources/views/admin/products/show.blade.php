<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <!-- Back Button -->
                    <div class="flex justify-start mb-6">
                        <a
                            href="{{ route('products.index') }}"
                            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 flex items-center space-x-2 transition duration-300"
                            aria-label="Back to products">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span>Back to Products</span>
                        </a>
                    </div>
                    <!-- Product Name -->
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                        {{ $product->name }}
                    </h2>

                    <!-- Image Display -->
                    @if($product->image)
                    <div class="mb-6 flex justify-center">
                        <img
                            src="{{ Storage::url($product->image) }}"
                            alt="{{ $product->name }}"
                            class="rounded-lg w-full max-w-2xl h-auto object-contain shadow-lg"
                            loading="lazy"
                            aria-hidden="true">
                    </div>
                    @endif

                    <!-- Description -->
                    <div class="mb-6">
                        <p class="text-gray-700 text-lg">
                            <strong>Description:</strong> {{ $product->description }}
                        </p>
                    </div>

                    <!-- Price -->
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-2xl font-semibold text-green-600">
                            {{ number_format($product->price, 2) }} SEK
                        </p>
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
                    <p class="text-gray-700 mb-4">
                        <strong>Weight:</strong> {{ $product->weight }} kg
                    </p>

                    <!-- Material -->
                    <p class="text-gray-700 mb-4">
                        <strong>Material:</strong> {{ $product->material }}
                    </p>

                    <!-- Colour -->
                    <p class="text-gray-700 mb-4">
                        <strong>Colour:</strong> {{ $product->colour }}
                    </p>

                    <!-- Brand -->
                    <p class="text-gray-700 mb-6">
                        <strong>Brand:</strong> {{ $product->brand }}
                    </p>

                    <!-- Actions -->
                    <div class="flex justify-start space-x-4">
                        <!-- Edit Button -->
                        <a
                            href="{{ route('products.edit', $product->id) }}"
                            class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 flex items-center space-x-2 transition duration-300"
                            aria-label="Edit {{ $product->name }}">
                            <span>Edit</span>
                        </a>

                        <!-- Delete Button -->
                        <form method="post" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 flex items-center space-x-2 transition duration-300"
                                aria-label="Delete {{ $product->name }}"
                                onclick="return confirm('Are you sure you want to delete this product?')">
                                <span>Delete</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>