# Checklist Folder untuk Hosting Vercel

## ✅ Folder yang Sudah Siap

### 1. Folder Utama
- ✅ `api/` - Folder untuk Vercel serverless function
  - `index.php` - Entry point untuk Vercel
- ✅ `app/` - Folder aplikasi Laravel
- ✅ `bootstrap/` - Folder bootstrap Laravel
- ✅ `config/` - Folder konfigurasi
- ✅ `database/` - Folder database (migrations, seeders)
- ✅ `public/` - Folder public (akan di-deploy)
  - `index.php` - Laravel entry point
  - `img/` - Folder gambar produk
  - `fonts/` - Folder font Cotoris
  - `build/` - Folder assets Vite
- ✅ `resources/` - Folder resources (views, css, js)
- ✅ `routes/` - Folder routes
- ✅ `storage/` - Folder storage (logs, cache, sessions)
- ✅ `tests/` - Folder tests

### 2. File Konfigurasi
- ✅ `vercel.json` - Konfigurasi Vercel
- ✅ `api/index.php` - Entry point untuk Vercel
- ✅ `index.php` - Entry point di root (redirect ke public)
- ✅ `.htaccess` - Apache rewrite rules
- ✅ `composer.json` - Dependencies PHP
- ✅ `package.json` - Dependencies Node.js
- ✅ `vite.config.js` - Konfigurasi Vite

### 3. File Ignore
- ✅ `.gitignore` - File yang di-ignore oleh Git
- ✅ `.vercelignore` - File yang di-ignore oleh Vercel

## ⚠️ Catatan Penting untuk Vercel

### 1. Storage
- Vercel menggunakan **read-only filesystem** untuk `/tmp`
- File upload (gambar produk) disimpan di `public/img/bunga/` ✅ (OK karena di public folder)
- Cache disimpan di `/tmp` (sesuai konfigurasi di vercel.json) ✅

### 2. Environment Variables
**WAJIB SET DI VERCEL DASHBOARD:**
- `APP_URL` - URL production Anda
- `APP_KEY` - `base64:9Rb81rGYuEtu5p6fS9wHXEdCHJ7uVW8gPa/5IpSHWec=`
- `DB_CONNECTION` - `mysql`
- `DB_HOST` - Host database
- `DB_PORT` - `3306`
- `DB_DATABASE` - Nama database
- `DB_USERNAME` - Username database
- `DB_PASSWORD` - Password database

### 3. Folder yang TIDAK Perlu Di-Upload
- ❌ `vendor/` - Akan diinstall otomatis oleh Vercel
- ❌ `node_modules/` - Akan diinstall otomatis oleh Vercel
- ❌ `.env` - Jangan pernah upload!
- ❌ `storage/logs/*.log` - Log files
- ❌ `storage/framework/cache/*` - Cache files
- ❌ `storage/framework/sessions/*` - Session files
- ❌ `storage/framework/views/*` - Compiled views

### 4. Build Process
Vercel akan otomatis:
1. Install dependencies: `composer install --no-dev` + `npm install`
2. Build assets: `npm run build`
3. Deploy ke production

## ✅ Status: SIAP HOSTING!

Semua folder dan file yang diperlukan sudah ada dan siap untuk hosting di Vercel.

