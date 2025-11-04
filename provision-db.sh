#!/usr/bin/env bash

# Actualizar paquetes
sudo apt-get update -y

# Instalar PostgreSQL
sudo apt-get install -y postgresql postgresql-contrib

# Habilitar e iniciar servicio
sudo systemctl enable postgresql
sudo systemctl start postgresql

# Crear base de datos y tabla de ejemplo
sudo -u postgres psql -c "CREATE DATABASE tallerdb;"
sudo -u postgres psql -d tallerdb -c "CREATE TABLE alumnos (id SERIAL PRIMARY KEY, nombre VARCHAR(50));"
sudo -u postgres psql -d tallerdb -c "INSERT INTO alumnos (nombre) VALUES ('Juan'), ('María'), ('Pedro');"

echo "Provisionamiento de base de datos completado."
