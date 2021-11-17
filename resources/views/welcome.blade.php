<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet" />

    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }

    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif">
    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full text-white">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0 ">
            <div class="flex items-center pl-4">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                    <style>
                        @keyframes pulsate {

                            0%,
                            to {
                                transform: scale(1);
                            }

                            50% {
                                transform: scale(0.9);
                            }
                        }

                    </style>
                    <g style="
                  animation: pulsate 0.5s ease-in-out infinite both;
                  transform-origin: center center;
                " stroke-width="1.5">
                        <path stroke="#0A0A30"
                            d="M11.515 6.269l.134.132a.5.5 0 00.702 0l.133-.132A4.44 4.44 0 0115.599 5c.578 0 1.15.112 1.684.33a4.41 4.41 0 011.429.939c.408.402.733.88.954 1.406a4.274 4.274 0 010 3.316 4.331 4.331 0 01-.954 1.405l-6.36 6.259a.5.5 0 01-.702 0l-6.36-6.259A4.298 4.298 0 014 9.333c0-1.15.464-2.252 1.29-3.064A4.439 4.439 0 018.401 5c1.168 0 2.288.456 3.114 1.269z" />
                        <path stroke="#265BFF" stroke-linecap="round" stroke-linejoin="round"
                            d="M15.5 7.5c.802.304 1.862 1.43 2 2" />
                    </g>
                </svg>
                <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl"
                    href="#">
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
                        <a class="inline-block px-4 py-2 font-bold text-black no-underline" href="#">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline"
                            href="#">About Ummah</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline"
                            href="#">Branches</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" <button id="navAction"
                    class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                    Login
                    </button>
                </a>
            </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
    <!--Hero-->
    <div class="pt-24">
        <div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
            <!--Left Col-->
            <div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left">
                <p class="w-full uppercase tracking-loose">What business are you?</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    <!-- Caring about your Happiness as  -->
                    Happiness begins with good Health.

                </h1>
                <p class="mb-8 text-2xl leading-normal">
                    Saving People Saving Communities.
                </p>
                <button
                    class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
                    Contact Us
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full py-6 text-center md:w-3/5">
                <img class="z-50 w-full md:w-4/5" src="../images/website/hero.png" />
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>
    <section class="py-8 bg-white border-b">
        <div class="container max-w-5xl m-8 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 ">
                Our Doctors
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 p-6 sm:w-1/2">
                    <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">
                        Syed Abbas Mashaddy
                    </h3>
                    <p class="mb-8 text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        at ipsum eu nunc commodo posuere et sit amet ligula.
                    </p>
                </div>
                <div class="w-full p-6 sm:w-1/2">
                    <img class="w-5/6 mx-auto sm:h-64" src="../images/website/img-2.png" />

                </div>
            </div>
            <div class="flex flex-col-reverse flex-wrap sm:flex-row">
                <div class="w-full p-6 mt-6 sm:w-1/2">
                    <img class="w-5/6 mx-auto sm:h-64" src="../images/website/img-1.jpg" />

                </div>
                <div class="w-full p-6 mt-6 sm:w-1/2">
                    <div class="align-middle">
                        <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">
                            Lorem ipsum dolor sit amet
                        </h3>
                        <p class="mb-8 text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 bg-white border-b">
        <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 ">
                Khidmaat
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Hidayyah for Ummah
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-800">
                            Learnings from the Quran , Hadith and Sunnah to guide us to straight path of success both in
                            duniya and aaqirah
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-start">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Doctors for Ummah
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-800">
                            Free consultation for Ummah (Molvi/Imam/Hafeez/Aalim) muazzan, their family members and poor
                            people from qualified specialist doctors
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-center">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Sunday Clinics for the Poor
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-800">
                            sunday clinics at 10 rupees for the poor with medications and labs at subsidised prices
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-end">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f8fafc">
                    <path
                        d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                    </path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g
                        transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>
    <section class="container py-6 mx-auto mb-12 text-center">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white ">
            Join Hands With Us
        </h1>
        <div class="w-full mb-4">
            <div class="w-1/6 h-1 py-0 mx-auto my-0 bg-white rounded-t opacity-25"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            <!-- Caring about your Happiness as -->
            To Serve & Strengthen the Society.
        </h3>
        <button
            class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
            <a href="tel:+91-74165-45740">Contact Us!</a>
        </button>
    </section>
    <!--Footer-->
    <footer class="bg-white">
        <div class="container px-8 mx-auto">
            <div class="flex flex-col w-full py-6 md:flex-row">
                <div class="flex-1 mb-6 text-black">
                    <a class="text-2xl font-bold text-pink-600 no-underline hover:no-underline lg:text-4xl" href="#">
                        <!--Icon from: http://www.potlabicons.com/ -->
                        <svg class="inline h-8 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none">
                            <style>
                                @keyframes pulsate {

                                    0%,
                                    to {
                                        transform: scale(1);
                                    }

                                    50% {
                                        transform: scale(0.9);
                                    }
                                }

                            </style>
                            <g style="
                      animation: pulsate 0.5s ease-in-out infinite both;
                      transform-origin: center center;
                    " stroke-width="1.5">
                                <path stroke="#0A0A30"
                                    d="M11.515 6.269l.134.132a.5.5 0 00.702 0l.133-.132A4.44 4.44 0 0115.599 5c.578 0 1.15.112 1.684.33a4.41 4.41 0 011.429.939c.408.402.733.88.954 1.406a4.274 4.274 0 010 3.316 4.331 4.331 0 01-.954 1.405l-6.36 6.259a.5.5 0 01-.702 0l-6.36-6.259A4.298 4.298 0 014 9.333c0-1.15.464-2.252 1.29-3.064A4.439 4.439 0 018.401 5c1.168 0 2.288.456 3.114 1.269z" />
                                <path stroke="#265BFF" stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.5 7.5c.802.304 1.862 1.43 2 2" />
                            </g>
                        </svg>
                        Caring Ummah
                    </a>
                </div>
                <div class="flex-1">
                    <p class="text-gray-500 uppercase md:mb-6">Links</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">FAQ</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Help</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="text-gray-500 uppercase md:mb-6">Legal</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Terms</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="text-gray-500 uppercase md:mb-6">Social</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Facebook</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Linkedin</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="text-gray-500 uppercase md:mb-6">Company</p>
                    <ul class="mb-6 list-reset">
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Official
                                Blog</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#" class="text-gray-800 no-underline hover:underline hover:text-pink-500">About
                                Us</a>
                        </li>
                        <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                            <a href="#"
                                class="text-gray-800 no-underline hover:underline hover:text-pink-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
