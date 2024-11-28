

# Laravel 11 dengan Filament

Ini adalah aplikasi Laravel 11 yang menggunakan Filament sebagai admin panel. Ikuti petunjuk berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda.

## Prasyarat

- PHP 8.1 atau lebih tinggi
- Composer
- Node.js dan npm (untuk pengelolaan aset front-end)
- Database seperti MySQL atau SQLite
- Laravel 11

## Langkah-langkah Instalasi

### 1. **Clone Repositori**

Clone repositori ke komputer lokal Anda:


git clone https://github.com/username/repository-name.git
cd repository-name

2. Install Dependensi PHP

Pastikan Anda sudah menginstal Composer di sistem Anda. Jalankan perintah berikut untuk menginstal dependensi PHP:

composer install

3. Atur File .env

Salin file .env.example ke file .env:

cp .env.example .env

Kemudian buka file .env dan sesuaikan konfigurasi database dan pengaturan lainnya sesuai dengan kebutuhan Anda:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
4. Generate Key Aplikasi

Generate key aplikasi Laravel dengan perintah berikut:
```
php artisan key:generate
```
5. Migrasi Database

Jalankan migrasi untuk membuat tabel-tabel di database:
```
php artisan migrate --seed
```
6. Install Filament

Instal Filament menggunakan Composer:
```
composer require filament/filament
```
Setelah itu, jalankan perintah berikut untuk menginstall Filament secara penuh:
```
php artisan filament:install
```
Ini akan mempublikasikan file konfigurasi dan sumber daya untuk Filament.
7. Setup User Admin untuk Filament

Filament menggunakan sistem autentikasi Laravel. Untuk membuat pengguna admin, jalankan perintah berikut:
```
php artisan make:filament-user
```
Perintah ini akan meminta Anda untuk memasukkan nama, email, dan password untuk pengguna admin.
8. Install Dependensi Frontend (Opsional)

Jika Anda ingin mengelola aset frontend (misalnya, untuk menjalankan Vite atau Mix), jalankan perintah berikut:
```
npm install
```
Jika menggunakan Vite atau Laravel Mix, Anda bisa menjalankan:
```
npm run dev
```
9. Menjalankan Server

Sekarang Anda dapat menjalankan aplikasi menggunakan server lokal Laravel:

php artisan serve

Aplikasi Anda akan tersedia di http://localhost:8000.
10. Mengakses Panel Admin Filament

Untuk mengakses panel admin Filament, buka URL berikut di browser:

http://localhost:8000/admin

Login menggunakan akun admin yang Anda buat sebelumnya.
Penggunaan

Setelah aplikasi berjalan, Anda dapat mulai menggunakan Laravel Filament untuk mengelola aplikasi melalui antarmuka admin yang telah disediakan.
Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat branch baru dan ajukan pull request.

    Fork repositori ini
    Buat branch fitur baru (git checkout -b fitur-anda)
    Commit perubahan Anda (git commit -am 'Menambahkan fitur baru')
    Push branch Anda (git push origin fitur-anda)
    Buat pull request

Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file LICENSE untuk informasi lebih lanjut.


Cukup salin seluruh teks di atas dan paste ke dalam file `README.md` Anda. Semoga membantu!
