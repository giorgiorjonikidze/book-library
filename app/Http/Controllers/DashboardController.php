<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\StoreAuthorRequest;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
	public function index(): View
	{
		return view('dashboard', [
			'books'   => Book::all(),
			'authors' => Author::all(),
		]);
	}

	public function destroy(Book $book): RedirectResponse
	{
		$book->delete();
		return back();
	}

	public function createAuthor(StoreAuthorRequest $request): RedirectResponse
	{
		$author = new Author($request->validated());
		$author->save();
		return back();
	}

	public function showAuthors(): View
	{
		return view('authors', [
			'authors' => Author::all(),
		]);
	}

	public function createBook(StoreBookRequest $request)
	{
		$bookData = $request->validated();
		$authors = $bookData['authors'];
		unset($bookData['authors']);

		$book = Book::create($bookData);
		$book->authors()->attach($authors);

		return back();
	}

	public function editBook(Book $book): View
	{
		return view('editBook', ['book' => $book, 'authors' => Author::all()]);
	}

	public function updateBook(Request $request, Book $book)
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

		return redirect('dashboard');
	}
}
