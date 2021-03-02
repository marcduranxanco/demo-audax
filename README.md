# AUDAX DEMO
Demo panel contracts.
Marc Duran
## OBJECTIVES

### AUTH OBJECTIVES
:question: Create login page
:question: Access to the panel when credentials are correct
:question: Wrong credentials alert when auth fails

#### Creation
- Using Laravel make:auth as default Bootstrap-based design theme. The ability to register have been removed.

```
composer require laravel/ui
php artisan ui bootstrap --auth
```

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

### Extra objectives
:question: Bootstrap usage

# Main running commands

`php artisan serve`
`php artisan key:generate`

# About the project

Project made with Laravel
