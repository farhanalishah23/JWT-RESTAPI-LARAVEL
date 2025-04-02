JWT Authentication REST API with Laravel
This project is a REST API built with Laravel, using JWT (JSON Web Tokens) for user authentication. The API provides basic authentication functionality, including user registration and login. Upon successful authentication, a JWT token is generated, which can be used to access protected routes in the API.

Features
User Registration: Allows users to create a new account with their credentials.

User Login: Authenticates users and returns a JWT token.

Protected Routes: Access to certain routes is restricted, and only users with a valid JWT token can access them.

JWT Authentication: The application uses JWT tokens for stateless authentication.

Tech Stack
Backend: Laravel

Authentication: JWT (using tymon/jwt-auth package)

Database: MySQL (or any database you prefer)

Installation
Clone the repository:

bash
Copy
git clone https://github.com/yourusername/JWT-RESTAPI-LARAVEL.git
cd JWT-RESTAPI-LARAVEL
Install dependencies:

bash
Copy
composer install
Set up the environment:

Copy the .env.example file to .env:

bash
Copy
cp .env.example .env
Update the .env file with your database and JWT configuration.

Generate the application key:

bash
Copy
php artisan key:generate
Generate JWT secret key:

bash
Copy
php artisan jwt:secret
Run migrations to set up the database:

bash
Copy
php artisan migrate
Serve the application:

bash
Copy
php artisan serve
The API will now be running at http://127.0.0.1:8000.

API Endpoints
1. Register User
Endpoint: /api/register

Method: POST

Request Body:

json
Copy
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "password": "password123"
}
Response:

json
Copy
{
    "message": "User created successfully"
}
2. Login User
Endpoint: /api/login

Method: POST

Request Body:

json
Copy
{
    "email": "john.doe@example.com",
    "password": "password123"
}
Response:

json
Copy
{
    "token": "your_jwt_token_here"
}
3. Get User Info (Protected Route)
Endpoint: /api/user

Method: GET

Authorization: Bearer token (JWT token required)

Headers:

http
Copy
Authorization: Bearer your_jwt_token_here
Response:

json
Copy
{
    "id": 1,
    "name": "John Doe",
    "email": "john.doe@example.com"
}
4. Logout User
Endpoint: /api/logout

Method: POST

Authorization: Bearer token (JWT token required)

Headers:

http
Copy
Authorization: Bearer your_jwt_token_here
Response:

json
Copy
{
    "message": "Successfully logged out"
}
JWT Authentication Flow
User Registration:

When a user registers, the provided data is validated, and the user is created in the database.

User Login:

When the user logs in, the server verifies the credentials. If valid, a JWT token is generated and returned to the user.

Access Protected Routes:

To access protected routes, the user must include the JWT token in the Authorization header using the Bearer schema.

Token Expiry:

JWT tokens are time-sensitive and will expire after a set period. You will need to handle token renewal or re-authentication for expired tokens.
