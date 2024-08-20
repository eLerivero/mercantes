CREATE DATABASE marinos_mercantes_exterior;

CREATE TABLE marinos (
    id SERIAL PRIMARY KEY,
    email VARCHAR(150) NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    tipo_cedula VARCHAR(2),
    sexo VARCHAR(10),
    cedula VARCHAR(20) NOT NULL,
    pais_code VARCHAR(15) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    empresa VARCHAR(150) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
