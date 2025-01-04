# **API de Avila Digital**

## **Descripción**
Este repositorio contiene una API desarrollada con Laravel para la gestión de endpoints para la Aplicación Ávila Digital. Permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una base de datos que almacena información sobre los distintos apartados de la aplicación.

---

## **Requisitos Previos**
Antes de empezar, asegúrate de tener instalado lo siguiente:

- **PHP** >= 8.1
- **Composer**
- **MAMP**, **XAMPP** o cualquier servidor compatible con MySQL
- **Node.js** y **npm** (para manejar dependencias frontend si es necesario)

---

## **Instalación**

1. Clona el repositorio:
   ```bash
   git clone https://github.com/diegoherrub/laravel-api.git
   ```

2. Instala las dependencias de PHP usando Composer:
   ```bash
   composer install
   ```

3. Copia el archivo de entorno y configúralo:
   ```bash
   cp .env.example .env
   ```
    - Configura la conexión a tu base de datos en el archivo `.env`:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=nombre_de_tu_base_de_datos
      DB_USERNAME=root
      DB_PASSWORD=root
      ```

4. Ejecuta las migraciones para crear las tablas en la base de datos:
   ```bash
   php artisan migrate
   ```

---

## **Uso**

1. Inicia el servidor de desarrollo de Laravel:
   ```bash
   php artisan serve
   ```
   o desde tu gestor de servidores web(**MAMP** o similar)

2. Accede a la API desde `http://127.0.0.1:8000` si usas el servidor de Laravel o, desde la dirección proporcionada por tu gestor de servidores.

3. Endpoints principales disponibles (muestra del apartado de farmacias de guardia):

    - **GET** `/api/pharmacies` - Lista todas las farmacias.
    - **POST** `/api/pharmacies` - Crea una nueva farmacia.
    - **GET** `/api/pharmacies/{id}` - Muestra una farmacia específica.
    - **PUT** `/api/pharmacies/{id}` - Actualiza una farmacia.
    - **DELETE** `/api/pharmacies/{id}` - Elimina una farmacia.

   Ejemplo de creación de farmacia (**POST**):
   ```json
   {
       "name_pharmacie": "Farmacia Central",
       "range_date": "2025-01-04",
       "location": "Av. Principal 123",
       "phone": "+123456789",
       "day": "04",
       "month": "January"
   }
   ```

---
