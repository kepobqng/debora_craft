# Cara Push ke GitHub

## Langkah-langkah:

### 1. Buat Repository di GitHub
1. Buka https://github.com
2. Login dengan akun **kbangetya@gmail.com**
3. Klik tombol **"New"** atau **"+"** di pojok kanan atas
4. Isi nama repository: `Debora_Craft` (atau nama lain)
5. Pilih **Public** atau **Private**
6. **JANGAN** centang "Initialize with README"
7. Klik **"Create repository"**

### 2. Push ke GitHub
Setelah repository dibuat, jalankan perintah berikut di terminal:

```bash
# Tambahkan remote repository (ganti YOUR_USERNAME dengan username GitHub Anda)
git remote add origin https://github.com/YOUR_USERNAME/Debora_Craft.git

# Push ke GitHub
git branch -M main
git push -u origin main
```

### Atau jika sudah ada repository:
```bash
git remote add origin https://github.com/kbangetya/Debora_Craft.git
git branch -M main
git push -u origin main
```

## Catatan:
- Git config sudah di-set dengan email: **kbangetya@gmail.com**
- Semua file sudah di-commit
- Tinggal push ke GitHub!

