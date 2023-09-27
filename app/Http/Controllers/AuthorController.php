<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreAuthorRequest;

class AuthorController extends Controller
{
	public function index(): View
	{
		return view('authors', [
			'authors' => Author::all(),
		]);
	}

	public function create(StoreAuthorRequest $request): RedirectResponse
	{
		$author = new Author($request->validated());
		$author->save();
		return to_route('show.authors');
	}
}
