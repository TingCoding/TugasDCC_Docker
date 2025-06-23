@echo off
REM Setup script untuk Windows

REM Hapus artifacts sebelumnya jika ada
for /d /r . %%d in (__pycache__) do @if exist "%%d" rd /s /q "%%d"
for /r . %%f in (*.pyc) do @if exist "%%f" del "%%f"
del /f /q db.sqlite3 2>nul

REM Buat virtual environment
python -m venv venv
call venv\Scripts\activate.bat

REM Install dependencies
pip install -r requirements.txt

REM Start Django project jika belum ada
if not exist django_project (
    django-admin startproject django_project .
    python manage.py startapp core
)

REM Deaktivasi virtual environment
deactivate

echo Project setup complete!