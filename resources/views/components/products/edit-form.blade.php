<form method="post" action="{{ route('admin.products.update', $product) }}" class="space-y-6" enctype="multipart/form-data" aria-labelledby="form-title">
    @csrf
    @method('PATCH')

    <h2 id="form-title" class="sr-only">Product Edit Form</h2>

    <!-- Name Input -->
    <div class="flex flex-col">
        <label for="name" class="text-sm font-semibold text-gray-700 mb-2">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="name-description">
    </div>

    <!-- Category Input -->
    <div class="flex flex-col">
        <label for="category_id" class="text-sm font-semibold text-gray-700 mb-2">Category</label>
        <select name="category_id" id="category_id" class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
            <option value="" disabled selected>Select a category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <!-- Description Textarea -->
    <div class="flex flex-col">
        <label for="description" class="text-sm font-semibold text-gray-700 mb-2">Description</label>
        <textarea name="description" id="description" rows="4"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" aria-describedby="description-description">{{ old('description', $product->description) }}</textarea>
    </div>

    <!-- Image Input -->
    <div class="flex flex-col">
        <label for="image" class="text-sm font-semibold text-gray-700 mb-2">Image</label>
        <input type="file" name="image" id="image"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
    </div>

    <!-- Brand Input -->
    <div class="flex flex-col">
        <label for="brand" class="text-sm font-semibold text-gray-700 mb-2">Brand</label>
        <input type="text" name="brand" id="brand" value="{{ old('brand', $product->brand) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="brand-description">
    </div>

    <!-- Price Input -->
    <div class="flex flex-col">
        <label for="price" class="text-sm font-semibold text-gray-700 mb-2">Price</label>
        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="price-description">
    </div>

    <!-- Height Input -->
    <div class="flex flex-col">
        <label for="height" class="text-sm font-semibold text-gray-700 mb-2">Height (cm)</label>
        <input type="number" name="height" id="height" value="{{ old('height', $product->height) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="height-description">
    </div>

    <!-- Width Input -->
    <div class="flex flex-col">
        <label for="width" class="text-sm font-semibold text-gray-700 mb-2">Width (cm)</label>
        <input type="number" name="width" id="width" value="{{ old('width', $product->width) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="width-description">
    </div>

    <!-- Depth Input -->
    <div class="flex flex-col">
        <label for="depth" class="text-sm font-semibold text-gray-700 mb-2">Depth (cm)</label>
        <input type="number" name="depth" id="depth" value="{{ old('depth', $product->depth) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="depth-description">
    </div>

    <!-- Weight Input -->
    <div class="flex flex-col">
        <label for="weight" class="text-sm font-semibold text-gray-700 mb-2">Weight (kg)</label>
        <input type="number" name="weight" id="weight" value="{{ old('weight', $product->weight) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="weight-description">
    </div>

    <!-- Material Input -->
    <div class="flex flex-col">
        <label for="material" class="text-sm font-semibold text-gray-700 mb-2">Material</label>
        <input type="text" name="material" id="material" value="{{ old('material', $product->material) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="material-description">
    </div>

    <!-- Colour Input -->
    <div class="flex flex-col">
        <label for="colour" class="text-sm font-semibold text-gray-700 mb-2">Colour</label>
        <input type="text" name="colour" id="colour" value="{{ old('colour', $product->colour) }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required aria-describedby="colour-description">
    </div>

    <!-- Save and Cancel Button -->
    <div class="mt-4 flex justify-end space-x-4">
        <a href="{{ route('admin.products.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 flex items-center justify-center" aria-label="Cancel and go back">
            Cancel
        </a>
        <button type="submit" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center justify-center" aria-label="Save the product">
            Save
        </button>
    </div>
</form>