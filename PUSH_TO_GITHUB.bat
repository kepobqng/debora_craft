@echo off
echo ========================================
echo Push Debora Craft ke GitHub
echo ========================================
echo.
echo Masukkan username GitHub Anda:
set /p GITHUB_USERNAME=
echo.
echo Menambahkan remote repository...
git remote add origin https://github.com/%GITHUB_USERNAME%/Debora_Craft.git
echo.
echo Mengubah branch ke main...
git branch -M main
echo.
echo Push ke GitHub...
git push -u origin main
echo.
echo Selesai!
pause

