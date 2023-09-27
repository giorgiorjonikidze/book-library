<x-layout>
    <form method="POST" action="{{ route('book.update', ['book' => $book]) }}"
        class="dark:bg-gray-800 p-5 pb-10 flex flex-col items-center">
        @csrf
        @method('PUT')
        <p class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">Add new book
        </p>

        {{-- title --}}
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" name="title" value={{ old('title', $book->title) }}
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        {{-- publication data  --}}
        <div class="mb-6 w-[234px]">
            <label for="written_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Publication
                Date</label>
            <input type="date" id="written_at" name="written_at" value={{ old('written_at', $book->written_at) }}
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
            @error('written_at')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- available --}}
        <ul
            class="items-center w-[234px] h-10 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-6">
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="horizontal-list-radio-license" type="radio" name="is_available" value="1"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-license"
                        class="w-full py-2 ml-2 text-[12px] font-medium text-gray-900 dark:text-gray-300">Available
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0  dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="horizontal-list-radio-id" type="radio" name="is_available" value="0"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-id"
                        class="w-full py-3 ml-2 text-[12px] font-medium text-gray-900 dark:text-gray-300">Not
                        Available</label>
                </div>
            </li>
        </ul>
        @error('is_available')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        {{-- authors drop down --}}
        <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
            class="mb-6 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Select author<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg></button>

        <!-- Dropdown menu -->
        <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
            <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownSearchButton">
                @foreach ($authors as $author)
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="{{ $author->id }}" type="checkbox" name="authors[]" value="{{ $author->id }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-11"
                                class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $author->name }}</label>
                        </div>
                    </li>
                @endforeach

            </ul>
            <a href="{{ route('dashboard.authors') }}"
                class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">Add
                new author
            </a>
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</x-layout>
