@csrf

<label for="name">Name</label>
<input type="text" name="name" id="name"
    value="{{ old('name', $product->name ?? '') }}">

<label for="description">Description</label>
<textarea name="description"
    id="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="name">Images</label>
<input type="text" name="images" id="images"
    value="{{ old('images', $product->images ?? '') }}">

<label for="height">Height</label>
<input type="text" name="height" id="height"
    value="{{ old('size', $product->size ?? '') }}">

<label for="width">Width</label>
<input type="text" name="width" id="width"
    value="{{ old('size', $product->size ?? '') }}">

<label for="depth">Depth</label>
<input type="text" name="depth" id="depth"
    value="{{ old('size', $product->size ?? '') }}">

<label for="price">Price</label>
<input type="text" name="price" id="price"
    value="{{ old('price', $product->price ?? '') }}">

<label for="weight">Weight</label>
<input type="text" name="weight" id="weight"
    value="{{ old('weight', $product->weight ?? '') }}">

<label for="material">Material</label>
<input type="text" name="material" id="material"
    value="{{ old('material', $product->material ?? '') }}">

<label for="colour">Colour</label>
<input type="text" name="colour" id="colour"
    value="{{ old('colour', $product->colour ?? '') }}">

<label for="brand">Brand</label>
<input type="text" name="brand" id="brand"
    value="{{ old('brand', $product->brand ?? '') }}">

<button> Save</button>