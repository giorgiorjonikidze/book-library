# book library

This application allows users to browse books, view their authors, and check their availability. Admin users have the capability to manage books and authors, adding or deleting them as needed.

## Installation

Follow these steps to install and set up the project on your local machine:

1. Clone the repository:

```bash
git clone https://https://github.com/giorgiorjonikidze/book-library
```

2. Navigate to the project directory:

```bash
cd book-library
```

3.Install dependencies using Composer:

```bash
composer install

npm install
```

4. Copy the example environment file and configure your app:

```bash
cp .env.example .env
```

5. Generate an application key:

```bash
php artisan key:generate
```

6. Run migrations and seeders (if applicable):

```bash
php artisan migrate --seed
```

7. Start the local development server:

```bash
php artisan serve
```

8.  is used to compile frontend assets:

```bash
npm run dev
```

## Usage

note: seeder will create user, which is default value of log in inputs, so you do not need to create a new user to test application.

1. To create a new user, run the following custom Artisan command:

```bash
php artisan user:create "John Doe" "john@example.com" "your_password"
```

Replace "John Doe", "john@example.com", and "your_password" with the desired name, email, and password for the new user.

2. Log in to the application using the created user credentials by visiting the following URL:

```bash
http://localhost:8000/login
```

3. After logging in, you can manage the content of the application.





