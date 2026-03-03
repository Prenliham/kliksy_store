# kliksy_store
Laravel Store Project
Project ini adalah bagian dari perjalanan belajar saya dalam membangun sebuah sistem toko online sederhana menggunakan Laravel.
Tujuan utama project ini adalah memahami:
- Authentication (Register, Login, Logout)
- Middleware (auth & guest)
- Service Layer
- Database Transaction
- CRUD Product
- Session & Flash Message
- Validasi Form Request


🚀 Fitur yang Sudah Dibuat

🔐 Authentication
- Register user
- Login dengan remember me
- Logout
- Middleware auth & guest
- Validasi menggunakan Form Request

👤 User
- Generate username otomatis
- Hash password
- Login setelah register

🛍️ Product (Dalam Pengembangan)
- CRUD Product
- Upload gambar
- Tampilan produk 1:1 image
- Detail produk

🏗️ Teknologi yang Digunakan
- PHP 8+
- Laravel 11
- MySQL
- Blade Template
- Tailwind CSS
- Git & GitHub

📂 Struktur Konsep
- Project ini menggunakan pendekatan:
- Controller → Handle request
- Service → Handle business logic
- Form Request → Handle validation
- DB Transaction → Handle atomic process
- Exception Handling → Handle error

📖 Hal yang Saya Pelajari
- Beberapa hal penting yang saya pelajari dari project ini:
- Perbedaan Auth::login() dan Auth::attempt()
- Cara menggunakan DB::transaction()
- Cara menangani throw new Exception()
- Perbedaan Exception dan Throwable
- Flash session (with() vs withInput())
- Cara kerja middleware auth dan guest
- Session regenerate untuk keamanan login

🔥 Tujuan Selanjutnya
- Role (Admin & User)
- Cart System
- Checkout
- Order History
- Dashboard Admin
- Payment Gateway Integration
- API Version