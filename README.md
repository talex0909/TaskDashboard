# Task Dashboard Project Laravel

## Installation

### 1. Clone the repository

```bash
git clone <repository_url>
cd <project_directory>
```

### 2. Install dependencies

Run the following command to install the required dependencies via Composer:

```
composer install
```

### 3. Set up environment file

Copy the .env.example file to create your .env file:

```
cp .env.example .env
```

### 4. Generate the application key

Run the following command to generate the application key:

```
php artisan key:generate
```

### 5. Run migrations

Run the following command to migrate the database:

```
php artisan migrate
```
## Creating a User Account from Tinker

You can create a user account from Tinker using the following steps:

### 1. Open Tinker

```
php artisan tinker
```

### 2. Create a user

Run the following command in Tinker to create a user:

```
$user = new App\Models\User();
$user->name = 'John Doe';
$user->email = 'john.doe@example.com';
$user->password = bcrypt('password');
$user->save();
```

You can replace John Doe, john.doe@example.com, and password with your desired values.

### 3. Exit Tinker

After creating the user, you can exit Tinker by typing:

```
exit
```

Now you should be ready to use your Laravel application!