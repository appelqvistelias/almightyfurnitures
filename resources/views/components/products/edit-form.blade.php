<form method="post" action="{{ route('products.update', $product) }}" class="space-y-6">
    @csrf
    @method('PATCH')

    <!-- Name Input -->
    <div class="flex flex-col">
        <label for="name" class="text-sm font-semibold text-gray-700 mb-2">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Description Textarea -->
    <div class="flex flex-col">
        <label for="description" class="text-sm font-semibold text-gray-700 mb-2">Description</label>
        <textarea name="description" id="description" rows="4"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <!-- Size Input -->
    <div class="flex flex-col">
        <label for="size" class="text-sm font-semibold text-gray-700 mb-2">Size</label>
        <input type="text" name="size" id="size" value="{{ old('size', $product->size ?? '') }}"
            class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none" required>
    </div>

    <!-- Save and Cancel Button -->
    <div class="mt-4 flex justify-end space-x-4">
        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
            Cancel
        </a>
        <button type="submit" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
            Save
        </button>
    </div>
</form>