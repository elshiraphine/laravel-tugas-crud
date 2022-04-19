@extends('app', ['title' => 'Add New Country'])

@section('content')
    <div class="flex items-center justify-center mt-10">
        <div class="w-1/2 py-4 relative overflow-x-auto shadow-md sm:rounded-lg items-center">
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

            @if (Session::has('wrongUsername'))
                <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
            @endif
            <form class="py-4 px-2 mx-4" id="form-login" action="{{ route('country.buat-data') }}" method="post">
                @csrf
                <div>
                    <input
                        class="mb-6 @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                </div>

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div>
                    <input
                        class="mb-6 @error('status') Status must be 0 or 1! @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="status" type="text" placeholder="Status" value="{{ old('status') }}">
                </div>

                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </form>

            <div class="mb-6 px-2 mx-4 justify-between">
                <a href="/">
                    <button type="button"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm py-2 px-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <svg class="h-6 w-6 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 8 8 12 12 16" />
                            <line x1="16" y1="12" x2="8" y2="12" />
                        </svg>
                    </button>
                </a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                    country</button>
            </div>
        </div>
        <br>

    </div>
@endsection
