<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class CreateUserCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:create-user-command';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected function configure()
	{
		$this->setName('user:create')
				->setDescription('Create a new user with name, email, and password')
				->addArgument('name', InputArgument::REQUIRED, 'The name of the user')
				->addArgument('email', InputArgument::REQUIRED, 'The email of the user')
				->addArgument('password', InputArgument::REQUIRED, 'The password of the user');
	}

	protected $description = 'Command description';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$name = $this->argument('name');
		$email = $this->argument('email');

		$password = $this->argument('password');

		$user = User::create([
			'name'     => $name,
			'email'    => $email,
			'password' => bcrypt($password),
		]);

		$this->info("User created successfully with ID: {$user->id}");
	}
}
