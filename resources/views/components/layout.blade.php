<!doctype html>

<title>TEDxJumeirahBeachPark</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/16.png') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="{{ route('main') }}">
                    <img src="{{ asset('assets_main/assets/images/logo/logo-black.svg') }}" alt="Logo" width="100%" height="auto">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">
                            Welcome
                        </button>
                    </x-slot>

                    <x-dropdown-item
                        href="{{ route('home') }}"
                        :active="request()->is('/blogs')">
                        Home
                    </x-dropdown-item>

                    <x-dropdown-item
                        href="{{ route('aboutTed') }}">
                        TED
                    </x-dropdown-item>
                </x-dropdown>

                <a href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <div class="pb-4">
                <img src="{{ asset('assets_main/assets/images/122.png') }}" class="mx-auto -mb-6" style="width: 145px;">
            </div>

            <h5 class="text-3xl mt-5">Stay in touch with the latest articales</h5>
            <p class="text-sm mt-3">Keep your eye on evey thing new</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form id="subscribe" class="lg:flex text-sm" action='{{ route("storeEmail") }}' method="POST">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input id="email" name="email" type="email" placeholder="Your email address"
                                    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                                @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <!--for the sweet alert-->
    @include('sweetalert::alert')
    <x-flash />
</body>