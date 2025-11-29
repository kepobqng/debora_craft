# Instruksi Autentikasi GitHub

## Error: Permission Denied (403)

Anda perlu melakukan autentikasi ke GitHub terlebih dahulu.

## Cara 1: Menggunakan Personal Access Token (Recommended)

### Langkah-langkah:

1. **Buat Personal Access Token di GitHub:**
   - Buka: https://github.com/settings/tokens
   - Klik **"Generate new token"** → **"Generate new token (classic)"**
   - Beri nama: `Debora Craft Push`
   - Centang scope: **`repo`** (full control of private repositories)
   - Klik **"Generate token"**
   - **COPY TOKEN** (hanya muncul sekali!)

2. **Push dengan Token:**
   ```bash
   git push -u origin main
   ```
   - Username: `kepobqng` (atau username GitHub Anda)
   - Password: **PASTE TOKEN** (bukan password GitHub!)

## Cara 2: Menggunakan GitHub CLI

```bash
# Install GitHub CLI (jika belum)
# Download dari: https://cli.github.com/

# Login
gh auth login

# Pilih GitHub.com
# Pilih HTTPS
# Authenticate via web browser
# Follow instructions

# Setelah login, push lagi
git push -u origin main
```

## Cara 3: Menggunakan SSH (Alternatif)

```bash
# Generate SSH key (jika belum ada)
ssh-keygen -t ed25519 -C "kbangetya@gmail.com"

# Copy public key
cat ~/.ssh/id_ed25519.pub

# Add ke GitHub: https://github.com/settings/keys
# Klik "New SSH key"
# Paste public key

# Ubah remote ke SSH
git remote set-url origin git@github.com:kepobqng/debora_craft.git

# Push
git push -u origin main
```

## Setelah Berhasil:

Repository akan tersedia di: https://github.com/kepobqng/debora_craft

