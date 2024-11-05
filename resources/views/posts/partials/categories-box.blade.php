<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @foreach ($categories as $category)
            <a href="#" class="bg-red-600 text-white rounded-xl px-3 py-1 text-base">
                {{ $category->title }}
            </a>
        @endforeach
    </div>
</div>