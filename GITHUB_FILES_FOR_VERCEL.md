# File & Folder yang Harus Ada di GitHub untuk Hosting Vercel

## ✅ File Wajib (MUST HAVE)

### 1. File Konfigurasi Vercel
- ✅ `vercel.json` - Konfigurasi routing dan build Vercel
- ✅ `api/index.php` - Entry point untuk Vercel serverless function
- ✅ `.vercelignore` - File yang di-ignore saat deploy

### 2. File Konfigurasi Laravel
- ✅ `composer.json` - Dependencies PHP
- ✅ `composer.lock` - Lock file untuk dependencies
- ✅ `package.json` - Dependencies Node.js
- ✅ `package-lock.json` - Lock file untuk Node.js
- ✅ `vite.config.js` - Konfigurasi Vite
- ✅ `artisan` - Laravel CLI
- ✅ `.env.example` - Template environment variables

### 3. Folder Aplikasi Laravel
- ✅ `app/` - Semua file aplikasi (Controllers, Models, Middleware, dll)
- ✅ `bootstrap/` - Bootstrap files
- ✅ `config/` - File konfigurasi Laravel
- ✅ `database/` - Migrations, Seeders, Factories
- ✅ `public/` - Public assets (index.php, img/, fonts/, build/)
- ✅ `resources/` - Views, CSS, JS
- ✅ `routes/` - Route definitions
- ✅ `storage/` - Folder structure (tapi isinya di-ignore)

### 4. File Root
- ✅ `index.php` - Redirect ke public/index.php (untuk shared hosting)
- ✅ `.htaccess` - Apache rewrite rules (untuk shared hosting)
- ✅ `.gitignore` - File yang di-ignore oleh Git

### 5. File Dokumentasi (Optional tapi Recommended)
- ✅ `README.md` - Dokumentasi project

---

## ❌ File yang TIDAK Perlu Di-Upload (Sudah di .gitignore)

### 1. Dependencies (Akan diinstall otomatis oleh Vercel)
- ❌ `vendor/` - Akan diinstall via `composer install`
- ❌ `node_modules/` - Akan diinstall via `npm install`

### 2. Environment & Config
- ❌ `.env` - JANGAN PERNAH upload! Set di Vercel Dashboard
- ❌ `.env.*` - Semua file environment

### 3. Build Files (Akan di-build otomatis)
- ❌ `public/build/` - Akan di-build via `npm run build`
- ❌ `public/hot` - File Vite dev server

### 4. Cache & Logs
- ❌ `storage/logs/*.log` - Log files
- ❌ `storage/framework/cache/*` - Cache files
- ❌ `storage/framework/sessions/*` - Session files
- ❌ `storage/framework/views/*` - Compiled views

### 5. Development Files
- ❌ `.idea/`, `.vscode/`, `.fleet/` - IDE configs
- ❌ `*.log` - Log files
- ❌ `.DS_Store`, `Thumbs.db` - OS files

---

## 📋 Checklist Sebelum Push ke GitHub

### File Konfigurasi Vercel
- [x] `vercel.json` ada dan sudah dikonfigurasi
- [x] `api/index.php` ada
- [x] `.vercelignore` ada

### File Laravel
- [x] `composer.json` dan `composer.lock` ada
- [x] `package.json` dan `package-lock.json` ada
- [x] `vite.config.js` ada
- [x] `.env.example` ada (template untuk environment variables)

### Folder Struktur
- [x] `app/` - Semua controllers, models, middleware
- [x] `config/` - Semua file config
- [x] `database/migrations/` - Semua migrations
- [x] `database/seeders/` - Semua seeders
- [x] `resources/views/` - Semua views
- [x] `resources/css/` - CSS files
- [x] `resources/js/` - JavaScript files
- [x] `routes/web.php` - Routes
- [x] `public/` - Public assets
  - [x] `public/index.php` - Laravel entry point
  - [x] `public/img/` - Gambar produk
  - [x] `public/fonts/` - Font Cotoris
  - [x] `public/favicon.ico` - Favicon

### File Root
- [x] `index.php` - Redirect ke public
- [x] `.htaccess` - Apache rewrite
- [x] `.gitignore` - Sudah dikonfigurasi dengan benar

### Environment Variables (Set di Vercel Dashboard, BUKAN di file)
- [ ] `APP_URL` - URL production
- [ ] `APP_KEY` - `base64:9Rb81rGYuEtu5p6fS9wHXEdCHJ7uVW8gPa/5IpSHWec=`
- [ ] `DB_CONNECTION` - `mysql`
- [ ] `DB_HOST` - Host database
- [ ] `DB_PORT` - `3306`
- [ ] `DB_DATABASE` - Nama database
- [ ] `DB_USERNAME` - Username database
- [ ] `DB_PASSWORD` - Password database

---

## 🚀 Langkah-langkah Push ke GitHub

1. **Pastikan semua file penting sudah ada:**
   ```bash
   git status
   ```

2. **Add semua file:**
   ```bash
   git add .
   ```

3. **Commit:**
   ```bash
   git commit -m "Prepare for Vercel deployment"
   ```

4. **Push ke GitHub:**
   ```bash
   git push origin main
   ```

---

## ⚠️ Catatan Penting

1. **JANGAN upload `.env`** - Set environment variables di Vercel Dashboard
2. **`vendor/` dan `node_modules/`** akan diinstall otomatis oleh Vercel
3. **`public/build/`** akan di-build otomatis saat deploy
4. **Gambar produk** di `public/img/bunga/` harus di-upload ke GitHub
5. **Font Cotoris** di `public/fonts/` harus di-upload ke GitHub

---

## ✅ Status: SIAP PUSH!

Semua file yang diperlukan sudah ada dan siap untuk di-push ke GitHub!

