# 🚀 Recodex ID - Template Admin Laravel Breeze

![version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![license](https://img.shields.io/badge/license-MIT-green.svg)
![Laravel](https://img.shields.io/badge/Laravel-11.31-red.svg)

Selamat datang di dokumentasi Template Admin Recodex ID! Template ini dibangun dengan Laravel Breeze dan Tailwind CSS untuk memberikan pengalaman development yang modern dan efisien dalam membangun antarmuka admin yang profesional.

## ✨ Fitur Unggulan

### 🛡️ Sistem Autentikasi

-   Sistem login dan registrasi yang aman dengan Laravel Breeze
-   Perlindungan rute dan middleware yang terkonfigurasi
-   Manajemen sesi pengguna yang handal

### 🎨 Antarmuka Pengguna

-   Desain responsif dengan Tailwind CSS
-   Komponen UI yang modern dengan Flowbite
-   Tema yang dapat disesuaikan
-   Tata letak yang bersih dan profesional

### 📊 Visualisasi Data

-   Integrasi dengan ApexCharts untuk grafik interaktif
-   Peta vektor interaktif dengan jVectorMap
-   Dashboard dengan berbagai jenis grafik dan statistik

### ⚡ Performa

-   Kompilasi aset yang cepat dengan Vite
-   Optimasi gambar otomatis
-   Lazy loading untuk komponen berat

## 💻 Persyaratan Sistem

```markdown
-   PHP ^8.2
-   Node.js >= 16.x
-   Composer
-   MySQL/PostgreSQL/SQLite
```

## 🚀 Panduan Instalasi

### 1. Persiapan Awal

# Clone repositori

```bash
git clone https://github.com/zachran-recodex/dashboard-recodex.git
cd dashboard-recodex
```

# Instal dependensi PHP

```bash
composer install
```

# Instal dependensi JavaScript

```bash
npm install
```

### 2. Konfigurasi Lingkungan

# Salin file environment

```bash
cp .env.example .env
```

# Generate kunci aplikasi

```bash
php artisan key:generate
```

# Siapkan database

```bash
touch database/database.sqlite
```

### 3. Migrasi Database

```bash
php artisan migrate --graceful
```

## 🛠️ Pengembangan

### Mode Development

Jalankan semua layanan development dengan satu perintah:

```bash
composer run dev
```

Perintah ini akan menjalankan:

-   Server Laravel (`http://localhost:8000`)
-   Queue Worker
-   Log Viewer
-   Vite dengan Hot Module Replacement

### Perintah Individual

```bash
# Frontend
npm run dev          # Memulai server Vite
npm run build        # Build untuk production

# Backend
php artisan serve    # Memulai server Laravel
php artisan queue:listen    # Menjalankan queue worker
php artisan pail    # Membuka log viewer
```

## 📦 Teknologi yang Digunakan

### Backend

-   Laravel v11.31
-   Laravel Breeze v2.3
-   Laravel Tinker v2.9
-   Pest PHP untuk testing
-   Laravel Pint untuk formatting kode

### Frontend

-   Tailwind CSS v3.4.17
-   Alpine.js v3.4.2
-   ApexCharts v4.3.0
-   jQuery v3.7.1
-   jVectorMap v2.0.4
-   Flowbite v2.5.2

## 📝 Pengujian

Jalankan test suite dengan Pest PHP:

```bash
./vendor/bin/pest
```

## 💅 Format Kode

Jaga konsistensi kode dengan Laravel Pint:

```bash
./vendor/bin/pint
```

## 📚 Struktur Proyek

```
app/                  # Kode aplikasi
├── Http/            # Controllers, Middleware
├── Models/          # Model Eloquent
└── Services/        # Logika bisnis
database/            # Migrasi dan seeders
resources/           # Views, assets, bahasa
tests/               # Suite pengujian
```

## 🤝 Kontribusi

Kami sangat menghargai kontribusi Anda! Silakan buat pull request atau laporkan issues jika menemukan bug atau memiliki saran pengembangan.

## 📄 Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT. Lihat file LICENSE untuk detail lebih lanjut.

## 👥 Tim Pengembang

Dikembangkan dengan ❤️ oleh Tim Recodex ID

## 🆘 Dukungan

Butuh bantuan? Kami siap membantu:

-   Buat issue di repositori GitHub
-   Hubungi tim support Recodex ID
-   Kunjungi dokumentasi resmi Laravel

## 🔐 Keamanan

Jika Anda menemukan celah keamanan, mohon laporkan langsung ke tim Recodex ID melalui form kontak kami. Kami akan menangani laporan tersebut dengan prioritas tinggi.

---

**Dibuat dengan ❤️ oleh [Recodex ID](https://recodex.id)**
