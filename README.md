# Audax Demo
Demo panel contracts.
Marc Duran
## Objectives

### Auth Objectives
:question: Create login page
:question: Access to the panel when credentials are correct
:question: Wrong credentials alert when auth fails

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

## About the project

Project made with Laravel
