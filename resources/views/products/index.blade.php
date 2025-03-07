<x-layout>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New product</a>

    @foreach ($products as $product)

    <h2><a href="{{ route( 'products.show', $product->id) }}">{{ $product->name }}</a></h2>



    @if ($product->image)
    <div class="product-image">
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="product-image">
    </div>
    @endif

    {{--END IMAGES--}}

    <p>DESCRIPTION: {{ $product->description }}</p>
    <p>Height: {{ $product->height }}</p>
    <p>Width: {{ $product->width}}</p>
    <p>Depth: {{ $product->depth }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Weight: {{ $product->weight }}</p>
    <p>Material: {{ $product->material }}</p>
    <p>Colour: {{ $product->colour }}</p>
    <p>Brand: {{ $product->brand }}</p>

    @endforeach

    {{ $products->links('vendor/pagination/simple-default' )}}

</x-layout>