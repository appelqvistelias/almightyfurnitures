<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to Almighty Furnitures') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Product List Header -->
                    <header class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Our furnitures</h2>
                    </header>

                    <!-- Product Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach ($products as $product)
                        <article class="p-4 border rounded-lg shadow-sm bg-gray-50 hover:shadow-lg transition duration-300">
                            <!-- Product Image -->
                            @if ($product->image)
                            <div class="mb-4">
                                <img
                                    src="{{ Storage::url($product->image) }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-48 object-cover rounded-lg"
                                    aria-hidden="true">
                            </div>
                            @endif

                            <!-- Product Name -->
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ $product->name }}
                            </h3>

                            <!-- Product Description -->
                            <p class="text-gray-700 mb-2">{{ \Str::limit($product->description, 100) }}</p>

                            <!-- Product Size -->
                            @if ($product->size)
                            <p class="text-gray-600"><strong>Size:</strong> {{ $product->size }}</p>
                            @endif

                            <!-- Product Price -->
                            @if ($product->price)
                            <p class="text-gray-900 font-semibold text-lg mt-2">{{ number_format($product->price, 2) }} SEK</p>
                            @endif

                            <!-- More Info Button -->
                            <div class="mt-4">
                                <a
                                    href="{{ route('product.details', $product->id) }}"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300"
                                    aria-label="More info about {{ $product->name }}">
                                    More Info
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $products->links('vendor/pagination/simple-default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>