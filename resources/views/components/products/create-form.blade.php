<form method="post" action="{{ route('products.store') }}" class="space-y-6" enctype="multipart/form-data">
    @csrf

    <!-- Name Input -->
    <div class="flex flex-col">
        <label for="name" class="text-sm font-semibold text-gray-700 mb-2">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Description Textarea -->
    <div class="flex flex-col">
        <label for="description" class="text-sm font-semibold text-gray-700 mb-2">Description</label>
        <textarea name="description" id="description" rows="4"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">{{ old('description') }}</textarea>
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
        <input type="text" name="brand" id="brand" value="{{ old('brand') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Price Input -->
    <div class="flex flex-col">
        <label for="price" class="text-sm font-semibold text-gray-700 mb-2">Price</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Height Input -->
    <div class="flex flex-col">
        <label for="height" class="text-sm font-semibold text-gray-700 mb-2">Height (cm)</label>
        <input type="number" name="height" id="height" value="{{ old('height') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Width Input -->
    <div class="flex flex-col">
        <label for="width" class="text-sm font-semibold text-gray-700 mb-2">Width (cm)</label>
        <input type="number" name="width" id="width" value="{{ old('width') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Depth Input -->
    <div class="flex flex-col">
        <label for="depth" class="text-sm font-semibold text-gray-700 mb-2">Depth (cm)</label>
        <input type="number" name="depth" id="depth" value="{{ old('depth') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Weight Input -->
    <div class="flex flex-col">
        <label for="weight" class="text-sm font-semibold text-gray-700 mb-2">Weight (kg)</label>
        <input type="number" name="weight" id="weight" value="{{ old('weight') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Material Input -->
    <div class="flex flex-col">
        <label for="material" class="text-sm font-semibold text-gray-700 mb-2">Material</label>
        <input type="text" name="material" id="material" value="{{ old('material') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Colour Input -->
    <div class="flex flex-col">
        <label for="colour" class="text-sm font-semibold text-gray-700 mb-2">Colour</label>
        <input type="text" name="colour" id="colour" value="{{ old('colour') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Save and Cancel Button -->
    <div class="mt-4 flex justify-end space-x-4">
        <a href="{{ route('products.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 flex items-center justify-center">
            Cancel
        </a>
        <button type="submit" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center justify-center">
            Save
        </button>
    </div>

</form>