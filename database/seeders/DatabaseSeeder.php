<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		\App\Models\User::factory(10)->create();

		\App\Models\User::factory()->create([
			'name'  => 'John doe',
			'email' => 'john@example.com',
			'password' => bcrypt('your_password'),
		]);

		$this->call([
			AuthorsTableSeeder::class,
			BooksTableSeeder::class,
			AuthorBookSeeder::class,
		]);
	}
}
