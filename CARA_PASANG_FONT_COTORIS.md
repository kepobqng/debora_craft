# Cara Memasang Font Cotoris dari Canva

## Yang Sudah Dikonfigurasi ✅

1. ✅ Folder `public/fonts/` sudah dibuat
2. ✅ CSS sudah dikonfigurasi untuk menggunakan font Cotoris
3. ✅ Font Cotoris akan menjadi font utama website

## Langkah Selanjutnya:

### 1. Dapatkan File Font Cotoris

Karena font Cotoris dari Canva, Anda perlu mendapatkan file font-nya. Beberapa cara:

**Cara A: Cek di Canva**
- Jika Anda memiliki Canva Pro, beberapa font bisa didownload
- Atau gunakan Canva untuk export desain dan extract font dari sana

**Cara B: Gunakan Browser Developer Tools**
1. Buka Canva, buat desain dengan font Cotoris
2. Tekan F12 untuk membuka Developer Tools
3. Buka tab "Network" dan filter dengan "font"
4. Refresh halaman atau render text dengan font Cotoris
5. Download file font yang muncul (biasanya .woff2 atau .woff)

**Cara C: Gunakan Tool Online**
- Gunakan tool seperti "Canva Font Extractor" atau serupa (cari di Google)

### 2. Upload File Font

Setelah mendapatkan file font, upload ke folder:
```
public/fonts/
```

File yang diperlukan:
- `Cotoris-Regular.woff2` (prioritas utama)
- atau `Cotoris-Regular.woff`
- atau `Cotoris-Regular.ttf`
- `Cotoris-Bold.woff2` (opsional, untuk teks bold)

### 3. Rebuild CSS (jika perlu)

Jika Anda menggunakan development server, jalankan:
```bash
npm run build
```

Atau jika menggunakan dev server, restart dengan:
```bash
npm run dev
```

### 4. Clear Cache Browser

Tekan `Ctrl + F5` (Windows) atau `Cmd + Shift + R` (Mac) untuk refresh halaman dan melihat font baru.

## Status Saat Ini

- ✅ Folder fonts: `public/fonts/` - **SUDAH DIBUAT**
- ✅ CSS Configuration: `resources/css/app.css` - **SUDAH DIUPDATE**
- ⏳ File font: **PERLU DIUPLOAD** oleh Anda

## Catatan Penting

- Font Cotoris akan otomatis digunakan setelah file font diupload
- Jika file font belum diupload, website akan menggunakan fallback font (Instrument Sans)
- Format .woff2 adalah yang paling direkomendasikan (ukuran kecil, performa baik)

## Bantuan Lebih Lanjut

Jika mengalami masalah, periksa:
1. Nama file harus sesuai: `Cotoris-Regular.woff2` (case-sensitive)
2. File harus berada di folder `public/fonts/`
3. Browser console untuk error loading font (F12 > Console)

