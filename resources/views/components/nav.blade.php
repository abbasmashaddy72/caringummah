<nav id="header" class="fixed top-0 z-30 w-full text-white">
    <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0 ">
        <div class="flex items-center pl-4">
            @include('components.svg')
            <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="/">
                <!--Icon from: http://www.potlabicons.com/ -->

                Caring Ummah
            </a>
        </div>
        <div class="block pr-4 lg:hidden">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0"
            id="nav-content">
            <ul class="items-center justify-end flex-1 list-reset lg:flex">
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-white no-underline toggleColour hover:text-gray-800 hover:text-underline"
                        href="#">Home</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-white no-underline toggleColour hover:text-gray-800 hover:text-underline"
                        href="#about">Mission</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-white no-underline toggleColour hover:text-gray-800 hover:text-underline"
                        href="#khidmath">Khidmath</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-white no-underline toggleColour hover:text-gray-800 hover:text-underline"
                        href="#contact_us">Contact Us</a>
                </li>
            </ul>
            <a href="{{ route('login') }}">
                <button id="navAction"
                    class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-90 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                    Login
                </button>
            </a>
        </div>
    </div>
    <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
</nav>
