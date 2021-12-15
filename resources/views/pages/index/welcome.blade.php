@extends('layouts.welcome')
@section('section')
    <section id="about" class="py-8 bg-white">
        <div class="container max-w-5xl m-8 mx-auto">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 ">
                Mission
            </h1>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full p-6">
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
                    <a href="{{ route('hidayyah_index') }}" class="flex flex-wrap no-underline hover:no-underline">
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
                    <a href="{{ route('doctor_index') }}" class="flex flex-wrap no-underline hover:no-underline">
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
                    <a href="{{ route('sunday_index') }}" class="flex flex-wrap no-underline hover:no-underline">
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
@endsection
