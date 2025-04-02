# JWT Authentication REST API with Laravel

This project is a **REST API** built with **Laravel**, using **JWT (JSON Web Tokens)** for user authentication. The API provides basic authentication functionality, including **user registration** and **login**. Upon successful authentication, a JWT token is generated, which can be used to access protected routes in the API.

![Laravel Logo](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel_logo.svg/1200px-Laravel_logo.svg.png)  
![JWT Logo](https://upload.wikimedia.org/wikipedia/commons/a/a8/JSON_Web_Token_Logo.svg)

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

- **PHP** (version 7.3 or higher)
- **Composer** (for dependency management)
- **MySQL** (or any relational database)
- **Postman** or any API testing tool for testing the API.

### Step-by-Step Guide

#### 1. Clone the Repository

Clone the repository to your local machine using Git:

```bash
git clone https://github.com/yourusername/JWT-RESTAPI-LARAVEL.git
cd JWT-RESTAPI-LARAVEL
