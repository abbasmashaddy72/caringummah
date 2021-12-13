<div class="pt-24">
    <div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
        <div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left">
            <h1 class="my-4 text-5xl font-bold leading-tight">
                {{ $ayath }}
            </h1>
            <p class="mb-8 text-2xl leading-normal">
                {{ $translation }}
            </p>
            <p class="w-full uppercase tracking-loose">{{ $reference }}</p>
            <a href="tel:+91-74165-45740">
                <button
                    class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
                    {{ $contact }}
                </button>
            </a>
        </div>
        <div class="w-full py-6 text-center md:w-3/5">
            <img class="z-50 w-full md:w-4/5" src="{{ asset('images/website/' . $image) }}" />
        </div>
    </div>
</div>
