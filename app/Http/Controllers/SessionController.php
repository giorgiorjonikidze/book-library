<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreLoginRequest;

class SessionController extends Controller
{
    public function login(StoreLoginRequest $request): RedirectResponse
	{
		$attributes = $request->validated();

		if (auth()->attempt($attributes)) {
			session()->regenerate();
			return to_route('show.books');
		}
		return back();
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return to_route('home');
	}
}
