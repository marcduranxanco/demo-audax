# AUDAX DEMO
Demo panel contracts.
Marc Duran
## OBJECTIVES

### AUTH OBJECTIVES
:question: Create login page
:question: Access to the panel when credentials are correct
:question: Wrong credentials alert when auth fails

- Using Laravel make:auth as default Bootstrap-based design theme. I've removed the ability to register.

```
composer require laravel/ui
php artisan ui bootstrap --auth
php artisan migrate
php artisan make:seeder UserAdminSeeder
php artisan db:seed --class=UserAdminSeeder
```
_Default credentials_
u: `admin@audax.com`
p: `password`

### Database Objectives
:question: The database must be relacional
:question: A customer can have 1 to n contracts, but a contract only belongs to one customer

#### Database proposal
```
Contracts DB table consists of these fields:
    · Contract reference (required)
    . Id customer 
Customer DB table consists of these fields:
    · First name (required)
    · last name (required)
    · Email
    · phone
```

Using database migrations to create those schema above:
```
php artisan make:migration create_contracts_table
php artisan make:migration create_customers_table
...
php artisan migrate
```
MODEL CREATION:
```
php artisan make:model Contracts
php artisan make:model Customer
```
SEEDING THE DATABASE:
Using database seeds to create data
```
php artisan make:seeder customerSeeder
php artisan make:seeder contractsSeeder
...
php artisan db:seed --class=customerSeeder
php artisan db:seed --class=contractsSeeder
```

### Controllers creation
```
php artisan make:controller ContractsController --resource --model=Contracts
```

### Extra objectives
:question: Bootstrap usage

# Main running commands

`php artisan key:generate`
`php artisan serve`


# About the project

This project was made with Laravel. The database could be created with docker with de Docker-compose file. This fille will create two containers, one with the latest MySQL and another one with phpmyadmin. 

```
docker-compose up
php artisan key:generate
php artisan migrate
php artisan db:seed --class=UserAdminSeeder
php artisan db:seed --class=customerSeeder
php artisan db:seed --class=contractsSeeder
```
