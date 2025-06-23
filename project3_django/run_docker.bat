@echo off
REM Script untuk build dan jalankan Docker di Windows

echo === Building Docker Image dengan Multi-stage Build ===
docker build -t project3_django .

echo === Menjalankan Container ===
docker run -p 8000:8000 project3_django

echo === Selesai ===
echo Jika container berjalan, kunjungi http://localhost:8000 di browser Anda