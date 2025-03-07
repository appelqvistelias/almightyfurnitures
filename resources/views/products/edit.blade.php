<x-layout>

    <h1>Edit Product</h1>

    <x-errors />

    <form method="post" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-products.form :product="$product" />

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>


    {{-- before change for images
    <form method="post" action="{{ route('products.update', $product) }}">
    @method('PATCH')

    <x-products.form :product="$product" />

    </form>
    old code ENDS--}}

</x-layout>