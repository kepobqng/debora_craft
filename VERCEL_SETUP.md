# Panduan Setup Vercel untuk Debora Craft

## 1. Environment Variables di Vercel Dashboard

Setelah deploy ke Vercel, set environment variables berikut di dashboard Vercel:

### Required Variables:
- `APP_URL` - URL production Anda (contoh: https://debora-craft.vercel.app)
- `APP_KEY` - Gunakan: `base64:9Rb81rGYuEtu5p6fS9wHXEdCHJ7uVW8gPa/5IpSHWec=`
- `DB_CONNECTION` - `mysql`
- `DB_HOST` - Host database Anda
- `DB_PORT` - `3306`
- `DB_DATABASE` - Nama database
- `DB_USERNAME` - Username database
- `DB_PASSWORD` - Password database

### Optional Variables:
- `APP_ENV` - `production`
- `APP_DEBUG` - `false`

## 2. File Structure

Pastikan struktur file berikut ada:
- `api/index.php` - Sudah ada ✓
- `vercel.json` - Sudah ada ✓
- `public/index.php` - Sudah ada ✓
- `public/.htaccess` - Sudah ada ✓

## 3. Build Settings

Vercel akan otomatis:
- Install dependencies dengan `composer install` dan `npm install`
- Build assets dengan `npm run build`
- Cache config, routes, dan views

## 4. Storage

Untuk file uploads (gambar produk), pastikan menggunakan storage external seperti:
- AWS S3
- Cloudinary
- Atau storage service lainnya

Karena Vercel menggunakan filesystem read-only untuk `/tmp`.

## 5. Deploy

1. Push code ke GitHub/GitLab
2. Connect repository ke Vercel
3. Set environment variables
4. Deploy!

