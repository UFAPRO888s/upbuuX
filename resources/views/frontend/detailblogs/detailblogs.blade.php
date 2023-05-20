@extends('layouts.app')
@section('content')
    <div class="mx-auto">
        <bannercomponent status="1" data="test" src="{{ asset('images/Statistics/01_Agriculture/Banner-Agriculture.jpg') }}">
        </bannercomponent>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <div class="grid grid-cols-1 px-4 md:px-20 ">
            <div class="text-center mb-10">
                <h1 class="text-[50px] text-primarybuu font-bold pb-2 capitalize">Agriculture</h1>
            </div>
            <div class="grid grid-cols-1 gap-24 justify-items-end mb-10 mr-6">
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input {{-- datepicker datepicker-autohide  --}}type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Short by Date">
                </div>
            </div>
            <dataservicestype></dataservicestype>
        </div>
    </div>
    <div class="mx-auto mb-5 mt-16 w-full">
        <linkboxComponent></linkboxComponent>
    </div>
@endsection
