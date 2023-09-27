<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Book;
use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'books' => Book::all(),
            'authors' => Author::all()
        ]);
    }

    public function destroy(Book $book): RedirectResponse
	{
		$book->delete();
		return back();
	}

    public function createAurhor(StoreAuthorRequest $request): RedirectResponse
	{
		$author = new Author($request->validated());
        $author->save();
		return back();
	}

    public function showAuthors(): View
    {
        return view('authors', [
            'authors' => Author::all()
        ]);
    }
}
