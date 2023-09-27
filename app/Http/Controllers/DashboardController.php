<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\StoreAuthorRequest;

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
		// dd($bookData);
		$authors = $bookData['authors'];
		unset($bookData['authors']);

		$book = Book::create($bookData);
		$book->authors()->attach($authors);

		return back();
	}
}
