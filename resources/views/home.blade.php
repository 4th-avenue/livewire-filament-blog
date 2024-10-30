<x-app-layout>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span class="text-yellow-500">&lt;YELO&gt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection

    <div class="mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/laravel-34">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="http://127.0.0.1:8000/storage/3i5uKG05UnvhbORZ3ieDkvtAOL8ss5-metaZXAxNSAoMjIpLnBuZw==-.png">
                            </div>
                        </a>
                        <div class="mt-3">
                            <div class="flex items-center mb-2">
                                <a href="http://127.0.0.1:8000/categories/laravel" class="bg-red-600 
                                    text-white 
                                    rounded-xl px-3 py-1 text-sm mr-3">
                                    Laravel
                                </a>
                                <p class="text-gray-500 text-sm">2023-09-05</p>
                            </div>
                            <a class="text-xl font-bold text-gray-900">Laravel 10 tutorial feed page #34</a>
                        </div>

                    </div>
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>
</x-app-layout>
