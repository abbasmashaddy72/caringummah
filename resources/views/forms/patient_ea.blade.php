<x-app-layout>
    @section('title')
        Add Patient
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Patient') }}
        </h2>
    </x-slot>
    <div class="py-12" x-data="{ show: false }">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ $action }}">
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Phone</label>
                                    <input type="number" id="email" name="phone" value="{{ $data->phone ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            @livewire('city-locality-dropdown')
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Age</label>
                                    <input type="number" id="name" name="age" value="{{ $age ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Gender</label>
                                    @php
                                        $genders = ['Male', 'Female', 'Trans'];
                                    @endphp
                                    <select name="gender"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($genders as $item)
                                            <option value="{{ $item }}" @if (!empty($data->gender) && $data->gender == $item) selected @endif>
                                                {{ $item }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Ummah Name</label>
                                    <select name="ummah_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($ummah as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->ummah_id) && $data->ummah_id == $item->id) selected @endif>
                                                {{ $item->name }}, {{ $item->phone }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Relation</label>
                                    @php
                                        $family_members = ['father', 'mother', 'son', 'daughter', 'husband', 'wife', 'brother', 'sister', 'grandfather', 'grandmother', 'grandson', 'granddaughter', 'uncle', 'aunt', 'nephew', 'niece', 'cousin'];
                                    @endphp
                                    <select name="relation"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($family_members as $item)
                                            <option value="{{ $item }}" @if (!empty($data->relation) && $data->relation == $item) selected @endif>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative mt-9">
                                    <label for="appointment" class="text-sm leading-7 text-gray-600">Do You Need an
                                        Appointment?</label>
                                    <input type="checkbox" id="appointment" class="ml-8 form-checkbox"
                                        name="appointment" @click="show = !show"
                                        :aria-expanded="show ? 'true' : 'false'">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto lg:w-1/2 md:w-2/3" x-show="show">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Doctor Name</label>
                                    <select name="doctor_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($doctor as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->doctor_id) && $data->doctor_id == $item->id) selected @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div
                                    class="relative w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-opacity-50 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                        <div class="container">
                                            <div class="w-64 mb-5">
                                                <label for="datepicker"
                                                    class="block mb-1 font-bold text-gray-700">Select
                                                    Date</label>
                                                <div class="relative">
                                                    <input name="appointment_date" type="hidden" name="date"
                                                        x-ref="date" :value="datepickerValue" />
                                                    <input name="appointment_date" type="text"
                                                        x-on:click="showDatepicker = !showDatepicker"
                                                        x-model="datepickerValue"
                                                        x-on:keydown.escape="showDatepicker = false"
                                                        class="w-full py-3 pl-4 pr-10 font-medium leading-none text-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-600 focus:ring-opacity-50"
                                                        placeholder="Select date" readonly />
                                                    <div class="absolute top-0 right-0 px-3 py-2">
                                                        <svg class="w-6 h-6 text-gray-400" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </div>
                                                    <div class="absolute top-0 left-0 p-4 mt-12 bg-white rounded-lg shadow"
                                                        style="width: 17rem" x-show.transition="showDatepicker"
                                                        @click.away="showDatepicker = false">
                                                        <div class="flex items-center justify-between mb-2">
                                                            <div>
                                                                <span x-text="MONTH_NAMES[month]"
                                                                    class="text-lg font-bold text-gray-800"></span>
                                                                <span x-text="year"
                                                                    class="ml-1 text-lg font-normal text-gray-600"></span>
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                    class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                                    @click="if (month == 0) {
                                                                          year--;
                                                                          month = 12;
                                                                      } month--; getNoOfDays()">
                                                                    <svg class="inline-flex w-6 h-6 text-gray-400"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M15 19l-7-7 7-7" />
                                                                    </svg>
                                                                </button>
                                                                <button type="button"
                                                                    class="inline-flex p-1 transition duration-100 ease-in-out rounded-full cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100"
                                                                    @click="if (month == 11) {
                                                                          month = 0;
                                                                          year++;
                                                                      } else {
                                                                          month++;
                                                                      } getNoOfDays()">
                                                                    <svg class="inline-flex w-6 h-6 text-gray-400"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M9 5l7 7-7 7" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap mb-3 -mx-1">
                                                            <template x-for="(day, index) in DAYS" :key="index">
                                                                <div style="width: 14.26%" class="px-0.5">
                                                                    <div x-text="day"
                                                                        class="text-xs font-medium text-center text-gray-800">
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                        <div class="flex flex-wrap -mx-1">
                                                            <template x-for="blankday in blankdays">
                                                                <div style="width: 14.28%"
                                                                    class="p-1 text-sm text-center border border-transparent">
                                                                </div>
                                                            </template>
                                                            <template x-for="(date, dateIndex) in no_of_days"
                                                                :key="dateIndex">
                                                                <div style="width: 14.28%" class="px-1 mb-1">
                                                                    <div @click="getDateValue(date)" x-text="date"
                                                                        class="text-sm leading-none leading-loose text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                                                        :class="{
                                                'bg-indigo-200': isToday(date) == true,
                                                'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                                'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                              }">
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Symptoms</label>
                                    <textarea id="message" name="symptoms"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->symptoms ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div class="w-full p-2 mb-4" x-show="show">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Book Appointment') }}
                                </button>
                            </div>
                            <div class="w-full p-2 mb-4" x-show="!show">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Add Patient') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const MONTH_NAMES = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ];
            const MONTH_SHORT_NAMES = [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ];
            const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

            function app() {
                return {
                    showDatepicker: false,
                    datepickerValue: "",
                    // selectedDate: $data->appointment_date,
                    selectedDate: Date(),

                    dateFormat: "YYYY-MM-DD",
                    month: "",
                    year: "",
                    no_of_days: [],
                    blankdays: [],
                    initDate() {
                        let today;
                        if (this.selectedDate) {
                            today = new Date(Date.parse(this.selectedDate));
                        } else {
                            today = new Date();
                        }
                        this.month = today.getMonth();
                        this.year = today.getFullYear();
                        this.datepickerValue = this.formatDateForDisplay(
                            today
                        );
                    },
                    formatDateForDisplay(date) {
                        let formattedDay = DAYS[date.getDay()];
                        let formattedDate = ("0" + date.getDate()).slice(
                            -2
                        ); // appends 0 (zero) in single digit date
                        let formattedMonth = MONTH_NAMES[date.getMonth()];
                        let formattedMonthShortName =
                            MONTH_SHORT_NAMES[date.getMonth()];
                        let formattedMonthInNumber = (
                            "0" +
                            (parseInt(date.getMonth()) + 1)
                        ).slice(-2);
                        let formattedYear = date.getFullYear();
                        if (this.dateFormat === "DD-MM-YYYY") {
                            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
                        }
                        if (this.dateFormat === "YYYY-MM-DD") {
                            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
                        }
                        if (this.dateFormat === "D d M, Y") {
                            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
                        }
                        return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
                    },
                    isSelectedDate(date) {
                        const d = new Date(this.year, this.month, date);
                        return this.datepickerValue ===
                            this.formatDateForDisplay(d) ?
                            true :
                            false;
                    },
                    isToday(date) {
                        const today = new Date();
                        const d = new Date(this.year, this.month, date);
                        return today.toDateString() === d.toDateString() ?
                            true :
                            false;
                    },
                    getDateValue(date) {
                        let selectedDate = new Date(
                            this.year,
                            this.month,
                            date
                        );
                        this.datepickerValue = this.formatDateForDisplay(
                            selectedDate
                        );
                        // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
                        this.isSelectedDate(date);
                        this.showDatepicker = false;
                    },
                    getNoOfDays() {
                        let daysInMonth = new Date(
                            this.year,
                            this.month + 1,
                            0
                        ).getDate();
                        // find where to start calendar day of week
                        let dayOfWeek = new Date(
                            this.year,
                            this.month
                        ).getDay();
                        let blankdaysArray = [];
                        for (var i = 1; i <= dayOfWeek; i++) {
                            blankdaysArray.push(i);
                        }
                        let daysArray = [];
                        for (var i = 1; i <= daysInMonth; i++) {
                            daysArray.push(i);
                        }
                        this.blankdays = blankdaysArray;
                        this.no_of_days = daysArray;
                    },
                };
            }
        </script>
    @endpush
</x-app-layout>