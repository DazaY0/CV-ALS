<header>
    <nav class="relative bg-[#0F58D8] py-4 text-[#EBEBEB] shadow-md mb-5">
        <div class="flex w-full items-center justify-between md:px-4 px-2">

            <!-- Logo/Image on the left -->
            <div class="flex items-center">
                <a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', [""])) }}">
                    <img src="{{asset("assets/logo.png")}}" alt="Logo" class="md:max-w-[10rem] max-w-[7rem]" />
                </a>
            </div>

            <!-- Right side: Search icon, Spenden button, and Burger menu -->
            <div class="flex items-center md:space-x-6 space-x-4">
                <!-- Search Icon Button -->
                <button id="search-toggle"
                        class="text-[#EBEBEB] hover:text-gray-200 transition-colors duration-200 focus:outline-none"
                        aria-label="Toggle search">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- Spenden button - always visible -->
                <button onclick="window.location.href='{{ LaravelLocalization::localizeUrl(route('frontend.page', ['donate'])) }}'"
                        class="flex items-center gap-2 rounded-md bg-white px-2 py-1 md:px-4 md:py-2 text-decoration-none font-bold text-[#0F58D8] transition-colors duration-200 hover:bg-[#0B3B8E] hover:text-black">
                    <!-- Heart icon -->
                    <svg class="h-4 w-4 fill-[#0F58D8] stroke-[#0F58D8]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                    </svg>

                    @if(App::getLocale() === 'en')
                        Donate
                    @elseif(App::getLocale()=== 'de')
                        Spenden
                    @else
                        Donare
                    @endif

                </button>

                <!-- Burger menu button - always visible -->
                <button id="burger-btn" class="text-[#EBEBEB] focus:outline-none" aria-label="Toggle menu">
                    <!-- Hamburger icon -->
                    <svg id="hamburger-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- X icon (hidden by default) -->
                    <svg id="close-icon" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Search Form - Appears below header when toggled -->
        <div id="search-container"
             class="max-h-0 overflow-hidden bg-[#0F58D8] transition-all duration-300 ease-in-out">
            <div class="p-4">
                <form action="{{ route('search') }}" method="GET" class="flex items-center w-full">
                    <input type="text"
                           name="query"
                           @if(App::getLocale() === 'en')
                               placeholder="Search..."
                           @elseif(App::getLocale()=== 'de')
                               placeholder="Suchen..."
                           @else
                               placeholder="Cercare..."
                           @endif
                           value="{{ request('query') }}"
                           class="flex-1 min-w-0 px-3 py-2 text-gray-800 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-[#0F58D8] focus:border-transparent">
                    <button type="submit"
                            class="flex-shrink-0 px-3 sm:px-6 py-[0.8rem] bg-[#1E1E1E] text-[#EBEBEB] rounded-r-lg hover:bg-[#0B3B8E] active:bg-white transition-colors duration-200">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Mobile menu - always available -->
        <div id="mobile-menu" class="absolute right-0 left-0 z-50 max-h-0 overflow-hidden bg-[#0F58D8] shadow-lg transition-all duration-300 ease-in-out">
            <div class="flex w-full flex-col space-y-4 px-4 py-4">
                @foreach($links as $link)
                    <a class="border-b border-blue-400 py-3 font-medium transition-colors duration-200 hover:underline text-decoration-none text-[#EBEBEB] hover:text-black"
                       href="{{route('frontend.page', [$link->getRelated('page')->first()->slug])}}">
                        {{$link->title}}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Search functionality
            const searchToggle = document.getElementById('search-toggle');
            const searchContainer = document.getElementById('search-container');
            let isSearchOpen = false;

            // Search toggle functionality
            searchToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                isSearchOpen = !isSearchOpen;

                if (isSearchOpen) {
                    searchContainer.style.maxHeight = '200px';
                    // Focus on the input
                    setTimeout(() => {
                        searchContainer.querySelector('input').focus();
                    }, 300);
                } else {
                    searchContainer.style.maxHeight = '0';
                }
            });

            // Close search when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideSearch = searchContainer.contains(event.target);
                const isClickOnSearchToggle = searchToggle.contains(event.target);

                if (!isClickInsideSearch && !isClickOnSearchToggle && isSearchOpen) {
                    isSearchOpen = false;
                    searchContainer.style.maxHeight = '0';
                }
            });

            // Mobile menu toggle functionality
            const burgerBtn = document.getElementById('burger-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            let isMenuOpen = false;

            burgerBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                isMenuOpen = !isMenuOpen;

                if (isMenuOpen) {
                    mobileMenu.style.maxHeight = '500px';
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.style.maxHeight = '0';
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    isMenuOpen = false;
                    mobileMenu.style.maxHeight = '0';
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnBurger = burgerBtn.contains(event.target);

                if (!isClickInsideMenu && !isClickOnBurger && isMenuOpen) {
                    isMenuOpen = false;
                    mobileMenu.style.maxHeight = '0';
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        });
    </script>
</header>
