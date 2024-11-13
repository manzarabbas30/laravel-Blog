{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    @include('bootstrap');
    <title>Document</title>
</head>
<body>
    <x-user-component componentName="Users" />
<h1 id="greenId" class="heading">This is Home Page</h1>
<button onclick="makegreen()">Chang color to green</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
<x-view-component>


    <x-slot name="Pagetitle">Home</x-slot>
</x-view-component>

</body>
</html> --}}





@extends('layout')

@section('title', 'Home page')


@section('main')

<div>
<x-view-component>

    <x-slot name="Pagetitle">Home</x-slot>
</x-view-component>



<pre>
    
In Laravel, PHP migration commands are used to create, modify, and manage the database schema. Here’s a list of the most commonly used migration commands in Laravel, along with their purposes:

1. Create a Migration
bash
Copy code
php artisan make:migration <migration_name>
Purpose: Generates a new migration file. You can specify a descriptive name, like create_users_table, to define a specific change or table creation. The file will be placed in the database/migrations folder.
bash
Copy code
php artisan make:migration Create_<table_name>_table
Purpose: Creates a migration for an existing table. Use the _table option to target a specific table for modifications.
2. Run All Pending Migrations
bash
Copy code
php artisan migrate
Purpose: Executes all new migrations that haven’t been run yet. This command applies changes to the database schema based on migration files.
3. Rollback the Last Migration Batch
bash
Copy code
php artisan migrate:rollback
Purpose: Reverses the last migration batch. Useful if you need to undo recent changes.
bash
Copy code
php artisan migrate:rollback --step=<number>
Purpose: Rolls back the specified number of migrations. For example, --step=2 undoes the last two migration batches.
4. Reset All Migrations
bash
Copy code
php artisan migrate:reset
Purpose: Rolls back all migrations in the database, essentially reverting it to its initial state (with no tables created by migrations).
5. Refresh All Migrations
bash
Copy code
php artisan migrate:refresh
Purpose: Rolls back all migrations and then re-runs them. This is helpful when testing schema changes.
bash

bash
Copy code
php artisan migrate --path=<path_to_migration_file>
Purpose: migrations only in the specified path, usually targeting a specific migration file or folder.

</pre>
</div>

@endsection