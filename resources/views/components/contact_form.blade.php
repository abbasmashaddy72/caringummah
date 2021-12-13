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
