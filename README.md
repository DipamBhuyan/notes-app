<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# 📝 Notes App – Laravel

A **simple and efficient Notes App** built using **Laravel**, designed to help users create, organize, and manage their personal and work-related notes with ease.

🔗 **Project Repository:** [Notes App on GitHub](https://github.com/DipamBhuyan/notes-app/tree/main)

## 🚀 Features
- ✅ User authentication (Register/Login) 🔐
- ✅ Create, edit, delete, and view notes ✍️
- ✅ Organized note management 📂
- ✅ Responsive and clean UI 🎨
- ✅ Secure and scalable backend with Laravel ⚡

## 🛠️ Tech Stack
- **Backend:** Laravel 10
- **Frontend:** Blade Templates, Tailwind CSS (or Bootstrap)
- **Database:** MySQL
- **Authentication:** Laravel Breeze (or Jetstream)

## 📦 Installation

### 1️⃣ Clone the repository
```sh
git clone https://github.com/DipamBhuyan/notes-app.git
cd notes-app
```

### 2️⃣ Install dependencies
```sh
composer install
npm install && npm run dev
```

### 3️⃣ Configure environment
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Set up the database
Edit `.env` file and update database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notes_app
DB_USERNAME=root
DB_PASSWORD=
```
Then run migrations:
```sh
php artisan migrate
```

### 5️⃣ Start the application
```sh
php artisan serve
```
Now, visit **http://127.0.0.1:8000** and start using the Notes App! 🚀

## 📸 Screenshots 
### Home Page
![image](https://github.com/user-attachments/assets/34178503-3e42-4a96-b919-b2120a09b764)

### Home Page (while viewing the notes)
![image](https://github.com/user-attachments/assets/2f23b545-6a20-44fa-89ba-b319fd7b51b3)

### About Page
![image](https://github.com/user-attachments/assets/3ee5da91-0e4d-4c0f-96ad-19a31648a506)

### Contact Us Form
![image](https://github.com/user-attachments/assets/0c2c6fa4-dcc8-46cd-bd9c-302293e52c95)

## 🤝 Contributing
Feel free to fork the repository and submit a pull request. Contributions are welcome!

## 📜 License
This project is open-source and available under the **MIT License**.
