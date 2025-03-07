<x-layout>
    <h1>{{ $product->name}}</h1>


    <p>DESCRIPTION: {{ $product->description }}</p>

    <p>Height: {{ $product->height }}</p>

    <p>Width: {{ $product->width }}</p>

    <p>Depth: {{ $product->depth }}</p>

    <p>Price: {{ $product->price }}</p>

    <p>Weight: {{ $product->weight }}</p>

    <p>Material: {{ $product->material }}</p>

    <p>Colour: {{ $product->colour }}</p>

    <p>Brand: {{ $product->brand }}</p>

    {{-- before change for images--}}

    @if ($product->image)
    <div class="product-image">
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="product-image">
    </div>
    @endif

    {{--finish code for images --}}


    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">

        @csrf
        @method('DELETE')

        <button>Delete</button>

    </form>


</x-layout>