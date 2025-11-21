# E-Grocery Website (Laravel) — Portfolio Project

E-Grocery Website is a web-based grocery store application built using Laravel.  
It was developed to demonstrate full-stack development fundamentals such as:

- Secure authentication and authorization (RBAC)
- MVC architecture
- CRUD operations for cart and profile management
- Admin-only user management
- Localization support (English & Indonesian)

## Features

### 🔐 **Authentication & Authorization**
- Login, registration, and logout
- Role-Based Access Control (Admin & User)
- Permission-restricted routes via middleware

### 🛒 **Shopping & Cart System**
- View paginated grocery product catalog
- View product detail page
- Add/remove items from cart
- Checkout flow that clears the user’s cart

### 👤 **User Profile Management**
- Update profile details (name, email, gender)
- Update password
- Upload/update profile picture

### 🛠️ **Admin Functionality**
- View all registered users
- Update user roles
- Delete user accounts
- Admin-only dashboard

### 🌐 **Localization**
- Multi-language support (English & Indonesian)
- Language toggle through middleware

## Tech Stack

**Backend:** PHP 8+, Laravel 8.x  
**Frontend:** Blade Templates, Bootstrap 5  
**Database:** MySQL  
**Tools:** Composer, NPM, Artisan CLI, Git

## Project Structure (some important parts)

```
E-Grocery-Website/
├── app/
│   ├── Http/Controllers/    # Handles request logic (Auth, Cart, Admin maintenance)
│   ├── Http/Middleware/     # Custom auth and localization middleware
│   └── Models/              # Eloquent models (User, Item, Order, Role)
├── database/
│   ├── migrations/          # Database schema definitions
│   └── seeders/             # Initial data population (Default Admin, Items)
├── resources/
│   ├── lang/                # Localization files (en/ina)
│   └── views/               # Frontend Blade templates
└── routes/
    └── web.php              # Application route definitions
```

## How to Run This Project
Follow these steps to set up the project locally:

1.  **Clone the repository**

    ```bash
    git clone https://github.com/riopramana21/e-grocery-website.git
    cd e-grocery-website
    ```

2.  **Install Dependencies**

    ```bash
    composer install
    npm install && npm run dev
    ```

3.  **Environment Configuration**
    Copy the example environment file and configure your database details.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    *Ensure your `.env` file has the correct DB\_DATABASE, DB\_USERNAME, and DB\_PASSWORD credentials.*

4.  **Database Setup**
    Run migrations and seed the database with default roles, users, and items.

    ```bash
    php artisan migrate --seed
    ```

5.  **Run the Application**

    ```bash
    php artisan serve
    ```

    Access the app at `http://localhost:8000`.

### Default Test Credentials
* **Admin:** `admin@gmail.com` | Password: `Admin123!`
* **User:** `user@gmail.com` | Password: `User123!`

## Demo Screenshots
*(To be added...)*

## API / Route Examples

Some key routes defining the application flow:

  * `GET /` - Landing page (Guest only)
  * `GET /home` - Main product catalog (Auth required)
  * `POST /my-cart` - Add item to cart
  * `DELETE /checkout` - Process order
  * `GET /acc-maintenance` - User management dashboard (Admin only)
  * `GET /locale/{lang}` - Switch language

## Security & Best Practices

- Route protection using custom `IsAdmin` middleware  
- CSRF protection enabled for all web routes  
- Password hashing with bcrypt  
- Strict server-side validation  
- Sensitive data stored in `.env` (excluded from Git)

## Future Improvements

- Product management CRUD for Admin  
- Search and filtering for product list  
- Order history page for users

## Contact

**Rio Pramana**

  * **GitHub:** [riopramana21](https://github.com/RioPramana21)
  * **Email:** [Google Mail](mailto:riopramana1021@gmail.com)
  * **LinkedIn:** [Linkedin](https://www.linkedin.com/in/riopramana/)
