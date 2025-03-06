@if ($errors->any())
<div class="space-y-4">
    @foreach ($errors->all() as $error)
    <div class="bg-red-500 text-white p-4 rounded-lg">
        <p class="text-sm">{{ $error }}</p>
    </div>
    @endforeach
</div>
@endif