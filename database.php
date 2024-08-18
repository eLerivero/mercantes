CREATE DATABASE marinos_mercantes_exterior;

CREATE TABLE marinos (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    tipo_cedula VARCHAR(100) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    cedula VARCHAR(20) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    empresa VARCHAR(255) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
