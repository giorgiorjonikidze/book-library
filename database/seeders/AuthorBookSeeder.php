<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$author1 = Author::find(1);
		$author2 = Author::find(2);
		$book1 = Book::find(1);
		$book2 = Book::find(2);

		$book1->authors()->attach([$author1->id, $author2->id]);
		$book2->authors()->attach([$author2->id]);
	}
}
