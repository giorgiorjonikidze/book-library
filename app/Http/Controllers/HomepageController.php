<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class HomepageController extends Controller
{
	public function index(): View
	{
		return view('home', [
			'books' => Book::all(),
		]);
	}
}
