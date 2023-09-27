<x-layout>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
