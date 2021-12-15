<div>
    <div class="container p-2 m-8 mx-auto max-w-7xl">
        <div class="flex flex-wrap mb-8 -mx-2">
            <div class="w-full px-2 mb-4 md:w-2/5 lg:w-2/5" wire:ignore>
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                    your Location</label>
                <select id="location" wire:model='searchLocality'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Select Location</option>
                    @foreach ($doc_locations as $item)
                        <option value="{{ $item->locality->id }}">{{ $item->locality->name }}</option>
                    @endforeach
                    @foreach ($static_location as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full px-2 mb-4 md:w-3/5 lg:w-3/5">
                <label for="search"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                <input type="search" id="search" wire:model="searchTerm"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required @if (url()->previous() != url('/doctors')) autofocus @endif>
            </div>
        </div>
    </div>
    <div class="container p-2 m-8 mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            @if ($doctors && $doctors->count() > 0)
                @foreach ($doctors as $doctor)
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center pb-10 mt-5">
                            @if (!empty($doctor->photo))
                                <img src="{{ asset('images/doctors/' . $doctor->photo) }}"
                                    class="w-24 h-24 mb-3 rounded-full shadow-lg" alt="{{ $doctor->name }}" />
                            @else
                                <img src="{{ asset('images/doctors/no-doctor-image-300x300.png') }}"
                                    class="w-24 h-24 mb-3 rounded-full shadow-lg" alt="{{ $doctor->name }}" />
                            @endif
                            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Dr.
                                {{ $doctor->name }}
                            </h3>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $doctor->qualification }}</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $doctor->department->title }} |
                                {{ $doctor->locality->name }}</span>
                            <div class="flex mt-4 space-x-3 lg:mt-6">
                                <a href="tel:{{ get_static_option('contact_1') }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book
                                    Appointment</a>
                                <a class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:cursor-pointer hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"
                                    type="button"
                                    onclick="toggleModal('{{ str_replace([' ', '.'], '_', $doctor->name) }}')">
                                    Learn More
                                </a>
                            </div>
                            <span
                                class="px-5 mt-5 text-sm text-gray-500 dark:text-gray-400">{{ $doctor->about }}</span>
                        </div>
                    </div>
                    <div class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none"
                        id="{{ str_replace([' ', '.'], '_', $doctor->name) }}">
                        <div class="relative w-auto h-full max-w-6xl mx-auto my-6">
                            <!--content-->
                            <div
                                class="relative flex flex-col w-full bg-white border-0 rounded-lg shadow-lg outline-none focus:outline-none">
                                <!--header-->
                                <div
                                    class="flex items-start justify-between p-5 border-b border-solid rounded-t border-blueGray-200">
                                    <h3 class="text-3xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                                        Dr. {{ $doctor->name }}
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        onclick="toggleModal('{{ str_replace([' ', '.'], '_', $doctor->name) }}')">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!--body-->
                                <div class="grid grid-cols-1 gap-4 p-6 md:grid-cols-2 lg:grid-cols-2">
                                    <div>
                                        <a href="tel:{{ get_static_option('contact_1') }}"
                                            class="inline-flex items-center px-4 py-2 font-semibold text-center text-white bg-blue-700 rounded-lg text-m hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book
                                            Appointment</a>
                                        <h1 class="mt-5 font-semibold text-gray-900 text-l lg:text-2xl dark:text-white">
                                            {{ __('Services') }}</h1>
                                        <div class="mt-5 list-none">
                                            @if (!empty($doctor->services->titles))
                                                @foreach (explode(',', $doctor->services->titles) as $item)
                                                    <li class="text-gray-500">{{ $item }}</li>
                                                @endforeach
                                            @else
                                                <li class="text-gray-500">{{ __('No Services Available') }}</li>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        @if (!empty($doctor->popup_image))
                                            <img src="{{ asset('images/doctors/popup/' . $doctor->popup_image) }}">
                                        @else
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                {{ $doctor->about }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <!--footer-->
                                <div
                                    class="flex items-center justify-end p-6 border-t border-solid rounded-b border-blueGray-200">
                                    <button
                                        onclick="toggleModal('{{ str_replace([' ', '.'], '_', $doctor->name) }}')"
                                        type="button"
                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:cursor-pointer hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">
                                        Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fixed inset-0 z-40 hidden bg-black opacity-25"
                        id="{{ str_replace([' ', '.'], '_', $doctor->name) }}-backdrop"></div>
                @endforeach
            @else
                <div class="flex justify-center">
                    <div class="text-gray-800">No Doctors found</div>
                </div>
            @endif
        </div>
    </div>
    @section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#location').select2();
                $('#location').on('change', function(e) {
                    var data = $('#location').select2("val");
                    @this.set('searchLocality', data);
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#department_id').select2();
                $("#selState").select2();
                $("#selCity").select2();
                $("#selLocality").select2();
                $('#selState').on('change', function() {
                    var state_id = this.value;
                    $("#selCity").html('');
                    $.ajax({
                        url: "{{ url('get-cities-by-state') }}",
                        type: "POST",
                        data: {
                            state_id: state_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.cities, function(key, value) {
                                $("#selCity").append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                            $('#selLocality').html(
                                '<option value="">-- Select City First --</option>');
                        }
                    });
                });
                $('#selCity').on('change', function() {
                    var city_id = this.value;
                    $("#selLocality").html('');
                    $.ajax({
                        url: "{{ url('get-localities-by-cities') }}",
                        type: "POST",
                        data: {
                            city_id: city_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $.each(result.localities, function(key, value) {
                                $("#selLocality").append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });

                });
            });
        </script>
        <script type="text/javascript">
            function toggleModal(modalID) {
                document.getElementById(modalID).classList.toggle("hidden");
                document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                document.getElementById(modalID).classList.toggle("flex");
                document.getElementById(modalID + "-backdrop").classList.toggle("flex");
            }
        </script>
    @endsection
</div>
