<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    public function index(Request $request): View
	{
		$searchTerm = strtolower($request->get('search'));

		$books = Book::where('title', 'LIKE', "%{$searchTerm}%")
			->orWhereHas('authors', function ($query) use ($searchTerm) {
				$query->where('name', 'LIKE', "%{$searchTerm}%");
			})
	->get();

		return view('dashboard', [
			'books'         => $books,
			'authors'       => Author::all(),
			'searchHistory' => $searchTerm,
		]);
	}

    public function destroy(Book $book): RedirectResponse
	{
		$book->delete();
		return back();
	}

    public function create(StoreBookRequest $request): RedirectResponse
	{
		$bookData = $request->validated();
		$authors = $bookData['authors'];
		unset($bookData['authors']);

		$book = Book::create($bookData);
		$book->authors()->attach($authors);

		return to_route('show.books');
	}

    public function edit(Book $book): View
	{
		return view('editBook', ['book' => $book, 'authors' => Author::all()]);
	}

	public function update(Request $request, Book $book): RedirectResponse
	{
		$validatedData = $request->validate([
			'title'        => 'required|string|max:255',
			'is_available' => 'required|boolean',
			'written_at'   => 'required|date',
			'authors'      => 'required|array',
		]);

		$bookAuthors = $validatedData['authors'];
		unset($validatedData['authors']);

		$book->update($validatedData);
		$book->authors()->sync($bookAuthors);

		return to_route('show.books');
	}
}
