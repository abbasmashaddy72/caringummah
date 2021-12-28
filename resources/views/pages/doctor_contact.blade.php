@extends('layouts.welcome')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection
@section('section')
    <section class="py-8 bg-white">
        @include('components.doctor_form')
    </section>
    @if (Session::has('message'))
        <div class="fixed inset-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto outline-none focus:outline-none"
            id="modal-id">
            <div class="relative w-auto max-w-sm mx-auto my-6">
                <!--content-->
                <div
                    class="relative flex flex-col w-full bg-white border-0 rounded-lg shadow-lg outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-3 border-b border-solid rounded-t border-blueGray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            {{ Session::get('message') }}
                        </h3>
                    </div>
                    <!--body-->
                    <div class="relative flex-auto p-3">
                        <p class="my-4 text-lg leading-relaxed text-gray-900">
                            We are Pleased to have you on board.<br>Who can bring us new ideas and energy to our
                            Organization.
                        </p>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-3 border-t border-solid rounded-b border-blueGray-200">
                        <button onclick="toggleModal('modal-id')" type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:cursor-pointer hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed inset-0 z-40 bg-black opacity-25" id="modal-id-backdrop"></div>
    @endif
@endsection
@section('scripts')
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
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
@endsection
