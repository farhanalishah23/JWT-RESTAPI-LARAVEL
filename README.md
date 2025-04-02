# JWT Authentication REST API with Laravel

This project is a **REST API** built with **Laravel**, using **JWT (JSON Web Tokens)** for user authentication. The API provides basic authentication functionality, including **user registration** and **login**. Upon successful authentication, a JWT token is generated, which can be used to access protected routes in the API.

![Laravel Logo](https://logowik.com/content/uploads/images/laravel8530.jpg)  
![JWT Logo](https://miro.medium.com/v2/resize:fit:800/0*WddOBoMIYbSPNGSD.png)

## Features

- **User Registration**: Allows users to create a new account with their credentials.
- **User Login**: Authenticates users and returns a JWT token.
- **Protected Routes**: Access to certain routes is restricted, and only users with a valid JWT token can access them.
- **JWT Authentication**: The application uses JWT tokens for stateless authentication.

## Tech Stack

- **Backend**: Laravel
- **Authentication**: JWT (using `tymon/jwt-auth` package)
- **Database**: MySQL (or any database you prefer)

## Installation

### Prerequisites

- **PHP** (8)
- **Composer** (for dependency management)
- **MySQL** (or any relational database)
- **Postman** or any API testing tool for testing the API.

### Step-by-Step Guide

#### 1. Clone the Repository

Clone the repository to your local machine using Git:

```bash
git clone https://github.com/farhanalishah23/JWT-RESTAPI-LARAVEL.git
cd JWT-RESTAPI-LARAVEL
