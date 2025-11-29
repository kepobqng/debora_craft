# Debora Craft

E-commerce Laravel application untuk toko bunga dan aksesoris.

## Tentang

Debora Craft adalah aplikasi e-commerce berbasis Laravel untuk menjual produk bunga, aksesoris, dan gift set.

## Fitur

- ✅ Manajemen Produk (CRUD)
- ✅ Manajemen Kategori (Bunga, Aksesoris, Gift Set)
- ✅ Manajemen Stok
- ✅ Manajemen Pelanggan
- ✅ Manajemen Pesanan
- ✅ Manajemen Promo/Diskon
- ✅ Keranjang Belanja (Database-backed)
- ✅ Authentication (Admin & User)
- ✅ Dashboard Admin
- ✅ Dashboard User

## Teknologi

- Laravel 11
- PHP 8.2+
- MySQL
- Tailwind CSS
- Vite

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/kepobqng/debora_craft.git
cd debora_craft
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Setup environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database di `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=debora_craft
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations & seeders:
```bash
php artisan migrate
php artisan db:seed
```

6. Build assets:
```bash
npm run build
```

7. Start server:
```bash
php artisan serve
```

## Deployment

Aplikasi ini siap untuk di-deploy ke Vercel. Lihat `VERCEL_SETUP.md` untuk instruksi lengkap.

## License

MIT License
