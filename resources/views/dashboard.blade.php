<x-layout>
    {{-- nav bar  --}}

    <form class="dark:bg-gray-800 p-5 pb-10 flex flex-col items-center">
        <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">Add new book
        </h1>

        {{-- title --}}
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        {{-- publication data  --}}
        <div class="mb-6 w-[234px]">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Publication
                Date</label>
            <input type="date" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>

        {{-- available --}}
        <ul
            class="items-center w-[234px] h-10 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white mb-6">
            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-license"
                        class="w-full py-2 ml-2 text-[12px] font-medium text-gray-900 dark:text-gray-300">Available
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 sm:border-b-0  dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="horizontal-list-radio-id"
                        class="w-full py-3 ml-2 text-[12px] font-medium text-gray-900 dark:text-gray-300">Not
                        Available</label>
                </div>
            </li>
        </ul>

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
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-11" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-11"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Bonnie
                            Green</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input checked id="checkbox-item-12" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-12"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Jese
                            Leos</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-13" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-13"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Michael
                            Gough</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-14" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-14"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Robert
                            Wall</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-15" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-15"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Joseph
                            Mcfall</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-16" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-16"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Leslie
                            Livingston</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="checkbox-item-17" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox-item-17"
                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Roberta
                            Casas</label>
                    </div>
                </li>
            </ul>
            <a href="#"
                class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">Add new author
            </a>

            {{-- <form id="myForm" method="POST" action="{{ route('create.author') }}">
                @csrf
                <div class="relative">
                    <input type="text" id="search"
                        class="block w-full p-4 pl-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Add author" required>
                    <button id="myButton" 
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </div>
            </form> --}}

        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>



    </form>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Book title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Authors
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Published
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Availability
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->title }}
                        </th>
                        <td class="px-6 py-4">
                            @foreach ($book->authors as $author)
                                <li>{{ $author->name }}</li>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->written_at }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($book->is_available == 1)
                                <p>available</p>
                            @else
                                <p>not available</p>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex gap-3 items-center">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline text-sm">Edit</a>
                            <form action="{{ route('delete.book', ['book' => $book->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="focus:outline-none text-white  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-layout>
