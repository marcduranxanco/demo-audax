# AUDAX DEMO
Demo panel contracts.
Marc Duran


# About the project

This project was made with Laravel. The database can be created with docker with the Docker-compose file. This fille will create two containers, one with the latest MySQL and  one with Phpmyadmin. The ports have to be setted on the .env file. <br/>

```
git clone https://github.com/marcduranxanco/demo-audax.git
cd demo-audax
cp .env.example .env
docker-compose up -d
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed --class=UserAdminSeeder
php artisan db:seed --class=customerSeeder
php artisan db:seed --class=contractsSeeder
php artisan serve
```
### _Default credentials_ <br/>
u: `admin@audax.com` <br/>
p: `password` <br/>

## OBJECTIVES

### AUTH OBJECTIVES
:heavy_check_mark: Create login page<br />
:heavy_check_mark: Access to the panel when credentials are correct<br />
:heavy_check_mark: Wrong credentials alert when auth fails<br />

- Using Laravel make:auth as default Bootstrap-based design theme. I've removed the ability to register.

```
composer require laravel/ui
php artisan ui bootstrap --auth
php artisan migrate
php artisan make:seeder UserAdminSeeder
php artisan db:seed --class=UserAdminSeeder
```

### Database Objectives
:heavy_check_mark: The database must be relacional <br/>
:heavy_check_mark: A customer can have 1 to n contracts, but a contract only belongs to one customer <br/>

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
:heavy_check_mark: Bootstrap usage
