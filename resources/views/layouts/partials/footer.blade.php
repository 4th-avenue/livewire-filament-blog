<footer class="text-sm flex items-center border-t border-gray-100 flex-wrap justify-between px-4 py-4">
    <div class="flex space-x-4">
        <a href="{{ route('locale', 'en') }}"><x-flag-country-us class="w-6 h-6" /></a>
        <a href="{{ route('locale', 'ko') }}"><x-flag-country-kr class="w-6 h-6" /></a>
    </div>
    <div class="flex space-x-4">
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.login') }} </a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.profile') }} </a>
        <a class="text-gray-500 hover:text-yellow-500" href="">{{ __('menu.blog') }} </a>
    </div>
</footer>