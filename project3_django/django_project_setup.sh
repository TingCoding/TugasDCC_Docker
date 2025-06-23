#!/bin/bash

# Buat virtual environment
python -m venv venv
source venv/bin/activate

# Install dependencies
pip install -r requirements.txt

# Start Django project
django-admin startproject django_project .

# Create basic app
python manage.py startapp core

# Deactivate virtual environment
deactivate

echo "Project setup complete!"