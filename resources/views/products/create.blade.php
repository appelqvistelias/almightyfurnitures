<x-layout>

    <h1>New Product</h1>

    <x-errors />

    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <x-products.form />

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>

    {{-- before change for images
    <form method="post" action="{{ route('products.store') }}">

    <x-products.form />

    </form>
    old code end--}}

</x-layout>