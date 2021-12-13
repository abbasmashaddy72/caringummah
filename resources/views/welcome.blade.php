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

    @include('components.styles')
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif">
    <!--Nav-->
    @include('components.nav')
    <!--Hero-->
    @include('components.hero')
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
    <section id="about" class="py-8 bg-white border-b">
        <div class="container max-w-5xl m-8 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 ">
                Mission
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full p-6">
                    {{-- <h3 class="mb-3 text-3xl font-bold leading-none text-gray-800">
                        Syed Abbas Mashaddy
                    </h3> --}}
                    <p class="mb-8 text-center text-gray-600">
                        To connect ummah with the teachings of Quran & Hadith. And encourage them to help each other in
                        whatever way they can contribute either by time, intellect, money, skills, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="khidmath" class="py-8 bg-white border-b">
        <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 ">
                Khidmaat
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg ">
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
                {{-- <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-start">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div> --}}
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg ">
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
                {{-- <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-center">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div> --}}
            </div>
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg ">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Sunday Clinics for the Poor
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-800">
                            sunday clinics at 10 rupees for the poor with medications and labs at subsidised prices
                        </p>
                    </a>
                </div>
                {{-- <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow ">
                    <div class="flex items-center justify-end">
                        <button
                            class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                            Action
                        </button>
                    </div>
                </div> --}}
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
    <section id="contact_us" class="container py-6 mx-auto mb-12">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="w-full p-4 mt-40 text-center md:w-1/2">
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
                </div>
                <div
                    class="relative z-10 flex flex-col w-full p-4 p-8 mt-10 bg-white rounded-lg shadow-md md:w-1/2 md:ml-auto md:mt-0">
                    <h2 class="mb-1 text-lg font-medium text-center text-gray-900 title-font">Join Hands With Us</h2>
                    <div class="max-w-full py-4 sm:px-6 lg:px-8">
                        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                            @include('components.message')
                        </div>
                    </div>
                    <form class="flex-1 mt-6 xl:mt-0" method="POST" action="{{ route('response.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                <input type="text" id="name" value="{{ old('name') }}" name="name"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="phone" class="text-sm leading-7 text-gray-600">Contact No.</label>
                                <input type="number" id="phone" value="{{ old('phone') }}" name="phone"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                                <input type="text" id="email" value="{{ old('email') }}" name="email"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <label for="message" class="text-sm leading-7 text-gray-600">What services you can
                                provide?</label>
                            <textarea id="message" name="message"
                                class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">{{ old('message') }}</textarea>
                        </div>
                        <button
                            class="px-6 py-2 ml-2.5 text-lg text-white bg-blue-900 border-0 rounded focus:outline-none hover:bg-blue-700">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery if you need it
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    -->
    @yield('scripts')
</body>

</html>
