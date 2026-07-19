# 🌍 ProyectoFAC

**Plataforma web para la integración y orientación en la ciudad de Popayán, Colombia.**

ProyectoFAC es una aplicación desarrollada con **Laravel 11** que ofrece herramientas para facilitar la adaptación a la vida universitaria y urbana en Popayán. Proporciona un sistema de publicaciones, gestión de libros académicos, mapas interactivos con zonas y rutas de buses, y un sistema de autenticación de usuarios.

---

## 📑 Índice

- [🌍 ProyectoFAC](#-proyectofac)
  - [📑 Índice](#-índice)
  - [✨ Características Principales](#-características-principales)
  - [🛠️ Stack Tecnológico](#️-stack-tecnológico)
  - [📂 Estructura del Proyecto](#-estructura-del-proyecto)
  - [🧩 Módulos del Sistema](#-módulos-del-sistema)
    - [1. 🔐 Autenticación (Login \& Registro)](#1--autenticación-login--registro)
    - [2. 👤 Perfil de Usuario](#2--perfil-de-usuario)
    - [3. 📝 Publicaciones](#3--publicaciones)
    - [4. 📚 Libros](#4--libros)
    - [5. 🗺️ Mapas Interactivos](#5-️-mapas-interactivos)
  - [🗄️ Modelo de Datos (ERD)](#️-modelo-de-datos-erd)
  - [🚀 Instalación y Configuración](#-instalación-y-configuración)
    - [Opción 1: Instalación Local (XAMPP/LAMPP)](#opción-1-instalación-local-xampplampp)
    - [Opción 2: Instalación con Docker 🐳](#opción-2-instalación-con-docker-)
  - [🧪 Testing](#-testing)
  - [🖥️ Comandos Útiles](#️-comandos-útiles)
  - [🔮 Mejoras Futuras (Roadmap)](#-mejoras-futuras-roadmap)
  - [🏗️ Arquitectura \& Decisiones Técnicas](#️-arquitectura--decisiones-técnicas)
    - [Arquitectura Actual](#arquitectura-actual)
    - [Propuesta de Mejora](#propuesta-de-mejora)
  - [🤝 Contribuir](#-contribuir)
  - [📄 Licencia](#-licencia)

---

## ✨ Características Principales

| Característica | Descripción |
|----------------|-------------|
| 🔐 **Autenticación** | Sistema de registro e inicio de sesión con sesiones persistentes |
| 👤 **Perfiles** | Personalización de perfil con foto, actualización de datos y eliminación de cuenta |
| 📝 **Publicaciones** | Creación, edición y visualización de publicaciones con imágenes |
| 📚 **Gestión de Libros** | CRUD completo para gestionar libros académicos con enlaces |
| 🗺️ **Mapa Interactivo** | Visualización de zonas, rutas de buses y puntos de interés en Popayán usando **Mapbox GL** |
| 📱 **Responsive Design** | Interfaz adaptable a dispositivos móviles, tablets y escritorio |

---

## 🛠️ Stack Tecnológico

| Tecnología | Versión | Propósito |
|------------|---------|-----------|
| **Laravel** | 11.9 | Framework PHP backend |
| **PHP** | 8.2 | Lenguaje de programación |
| **MySQL / MariaDB** | 10.4+ | Base de datos relacional |
| **Vite** | 5.x | Bundler de assets frontend |
| **Tailwind CSS** | 3.4 | Framework CSS utilitario |
| **Mapbox GL JS** | 3.8 | Mapas interactivos |
| **Blade** | - | Motor de plantillas PHP |
| **Pest PHP** | 3.5 | Framework de testing |

---

## 📂 Estructura del Proyecto

```
ProyectoFAC/
├── app/
│   ├── Http/
│   │   └── Controllers/      # Controladores de la aplicación
│   │       ├── BooksController.php
│   │       ├── Login.php
│   │       ├── MainPage.php
│   │       ├── Map.php
│   │       ├── Profile.php
│   │       ├── PublicationController.php
│   │       └── Register.php
│   └── Models/                # Modelos Eloquent
│       ├── Buseta.php         # Buses de transporte público
│       ├── Libro.php          # Libros académicos
│       ├── Mapa.php           # Mapas y ubicaciones
│       ├── Publicacion.php    # Publicaciones de usuarios
│       ├── Usuario.php        # Usuarios (autenticación manual)
│       └── Zona.php           # Zonas geográficas
├── bootstrap/                 # Configuración de Laravel
├── config/                    # Configuraciones de la app
├── database/
│   ├── migrations/            # Migraciones (8 tablas)
│   └── seeders/               # Pobladores de BD
├── resources/
│   ├── css/                   # Estilos CSS por módulo
│   ├── js/                    # JavaScript (Vue/Mapbox)
│   └── views/                 # Plantillas Blade
│       ├── Books/
│       ├── Publications/
│       ├── login/
│       ├── map/
│       ├── principal/
│       └── register/
├── routes/
│   └── web.php                # Definición de rutas web
├── tests/                     # Tests con Pest PHP
├── docker-compose.yml         # Orquestación Docker
├── Dockerfile                 # Imagen Docker de producción
└── README.md
```

---

## 🧩 Módulos del Sistema

### 1. 🔐 Autenticación (Login & Registro)

**Rutas:**

| Método | URI | Controlador | Función |
|--------|-----|-------------|---------|
| GET | `/register` | `Register@index` | Formulario de registro |
| POST | `/register/save-user` | `Register@store` | Guardar nuevo usuario |
| GET | `/login` | `Login@index` | Formulario de inicio de sesión |
| POST | `/login/check` | `Login@login` | Validar credenciales |
| POST | `/logout` | `Login@logout` | Cerrar sesión |

> **Nota técnica:** Usa `Illuminate\Auth\Authenticatable` y la fachada `Auth` de Laravel para manejo de autenticación. El modelo `Usuario` implementa `AuthenticatableContract`.

### 2. 👤 Perfil de Usuario

**Rutas:**

| Método | URI | Controlador | Función |
|--------|-----|-------------|---------|
| POST | `/profile/updateData` | `Profile@update` | Actualizar datos del perfil |
| POST | `/profile/delUser` | `Profile@deleted` | Eliminar cuenta de usuario |

**Características:**

- Foto de perfil (URL personalizada)
- Nombre y correo electrónico
- Eliminación de cuenta con confirmación

### 3. 📝 Publicaciones

**Rutas:**

| Método | URI | Controlador | Función |
|--------|-----|-------------|---------|
| GET | `/Publications/allPublication` | `PublicationController@all` | Listar todas las publicaciones |
| GET | `/Publications/viewPublication/{id}` | `PublicationController@show` | Ver publicación |
| GET | `/Publications/createPost` | `PublicationController@create` | Formulario de creación |
| POST | `/Publications/infoPublication` | `PublicationController@store` | Guardar publicación |
| GET | `/Publications/editPublication/{id}` | `PublicationController@edit` | Formulario de edición |
| PUT | `/Publications/updatePublication/{id}` | `PublicationController@update` | Actualizar publicación |
| DELETE | `/Publications/deletePublication/{id}` | `PublicationController@destroy` | Eliminar publicación |

**Modelo:** `Publicacion` — Tabla `publicacions` con campos: `user_id`, `content`, `url_file`, `date`

### 4. 📚 Libros

**Rutas:**

| Método | URI | Controlador | Función |
|--------|-----|-------------|---------|
| GET | `/Books/allBooks` | `BooksController@all` | Listar todos los libros |
| GET | `/Books/viewBooks/{id}` | `BooksController@show` | Ver libro |
| GET | `/Books/pushBooks` | `BooksController@push` | Formulario de subida |
| POST | `/Books/infoBooks` | `BooksController@store` | Guardar libro |
| GET | `/Books/editBooks/{id}` | `BooksController@edit` | Formulario de edición |
| PUT | `/Books/updateBook/{id}` | `BooksController@update` | Actualizar libro |
| DELETE | `/Books/deleteBook/{id}` | `BooksController@destroy` | Eliminar libro |

**Modelo:** `Libro` — Tabla `libros` con campos: `user_id`, `title`, `url`

### 5. 🗺️ Mapas Interactivos

**Rutas:**

| Método | URI | Controlador | Función |
|--------|-----|-------------|---------|
| GET | `/map` | `Map@index` | Vista del mapa interactivo |

**Tecnología:** Mapbox GL JS v3.8

**Características:**

- Visualización de zonas geográficas de Popayán
- Rutas de buses (Busetas) categorizadas por color:
  - 🔵 **Azul** — Zonas seguras / universitarias
  - 🟡 **Amarillo** — Zonas de precaución
  - 🔴 **Rojo** — Zonas de riesgo
- Interacción con marcadores y capas

**Modelos involucrados:**

- `Mapa` ↔ `Zona` (relación N:N mediante `r_mapas_zonas`)
- `Zona` ↔ `Buseta` (relación N:N mediante `r_zonas_busetas`)

---

## 🗄️ Modelo de Datos (ERD)

```
┌──────────────┐     ┌──────────────────┐
│   Usuario    │     │   Publicacion    │
├──────────────┤     ├──────────────────┤
│ id (PK)      │──┐  │ id (PK)          │
│ name         │  │  │ user_id (FK)─────┘
│ email        │  │  │ content
│ password     │  │  │ url_file
│ date_creation│  │  │ date
│ urlimg       │  │  └──────────────────┘
└──────────────┘  │
         │        │  ┌──────────────────┐
         │        └──│     Libro        │
         │           ├──────────────────┤
         │           │ id (PK)          │
         └───────────│ user_id (FK)     │
                     │ title            │
                     │ url              │
                     └──────────────────┘

┌──────────────────┐     ┌──────────────────┐     ┌──────────────────┐
│     Mapa         │     │     Zona         │     │    Buseta        │
├──────────────────┤     ├──────────────────┤     ├──────────────────┤
│ id (PK)          │     │ id (PK)          │     │ id (PK)          │
│ user_id (FK)     │     │ user_id (FK)     │     │ company          │
│ content          │────▶│ content          │◀────│ route_name       │
│ url_file         │ N:N │ url_file         │ N:N │                  │
│ date             │     │ date             │     └──────────────────┘
└──────────────────┘     └──────────────────┘
        │                       │
        └── r_mapas_zonas ──────┘
                                │
                        r_zonas_busetas
```

---

## 🚀 Instalación y Configuración

### Opción 1: Instalación Local (XAMPP/LAMPP)

**Requisitos previos:**

- PHP 8.2+
- Composer 2.x
- MySQL 5.7+ o MariaDB 10.4+
- Node.js 18+ y npm
- Extensión PHP `zip` habilitada

**Paso a paso:**

```bash
# 1. Clonar el repositorio
git clone https://github.com/T7Walker/ProyectoFAC.git
cd ProyectoFAC

# 2. Instalar dependencias PHP
composer install

# 3. Configurar el entorno
cp .env.example .env
php artisan key:generate

# 4. Configurar la base de datos (editar .env)
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=proyectofac
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Crear la base de datos
mysql -u root -p -e "CREATE DATABASE proyectofac"

# 6. Ejecutar migraciones
php artisan migrate

# 7. Instalar dependencias frontend
npm install

# 8. Iniciar servidores (dos terminales)

# Terminal 1: Servidor Laravel
php artisan serve

# Terminal 2: Assets frontend
npm run dev
```

> **Acceso:** Abrir en el navegador `http://localhost:8000`

### Opción 2: Instalación con Docker 🐳

**Requisitos previos:**

- Docker 24+
- Docker Compose 2.20+

**Paso a paso:**

```bash
# 1. Clonar el repositorio
git clone https://github.com/T7Walker/ProyectoFAC.git
cd ProyectoFAC

# 2. Copiar configuración para Docker
cp .env.docker .env

# 3. Construir e iniciar los contenedores
docker-compose up -d --build

# 4. Generar key de la aplicación
docker-compose exec app php artisan key:generate

# 5. Ejecutar migraciones
docker-compose exec app php artisan migrate

# 6. (Opcional) Poblar la base de datos con datos de ejemplo
docker-compose exec app php artisan db:seed
```

**Servicios disponibles:**

| Servicio | URL | Puerto |
|----------|-----|--------|
| 🌐 **Aplicación** | <http://localhost:8080> | `8080` |
| 🗄️ **phpMyAdmin** | <http://localhost:8081> | `8081` |
| 📦 **Base de datos** | localhost:3307 | `3307` |

**Comandos Docker útiles:**

```bash
# Ver logs de la aplicación
docker-compose logs -f app

# Acceder al contenedor
docker-compose exec app bash

# Detener servicios
docker-compose down

# Reconstruir tras cambios
docker-compose up -d --build app

# Ver estado de los servicios
docker-compose ps
```

---

## 🧪 Testing

El proyecto utiliza **Pest PHP 3.5** para pruebas automatizadas.

```bash
# Ejecutar todos los tests
./vendor/bin/pest

# Ejecutar tests con cobertura
./vendor/bin/pest --coverage

# Ejecutar un archivo de test específico
./vendor/bin/pest tests/Feature/ExampleTest.php
```

---

## 🖥️ Comandos Útiles

```bash
# Modo desarrollo completo (servidor + colas + logs + assets)
composer dev

# Compilar assets para producción
npm run build

# Limpiar caché de Laravel
php artisan optimize:clear

# Listar todas las rutas
php artisan route:list

# Ver estado de las migraciones
php artisan migrate:status

# Generar nueva migración
php artisan make:migration create_nombre_tabla_table

# Generar nuevo controlador
php artisan make:controller NombreController
```

---

## 🔮 Mejoras Futuras (Roadmap)

- [ ] **🔐 Sistema de Roles** — Implementar roles (admin, usuario, moderador) con Spatie Permission
- [ ] **🌐 API REST** — Crear API para consumo móvil con Laravel Sanctum
- [ ] **📱 App Móvil** — Desarrollo de app mobile con React Native o Flutter
- [ ] **🔔 Notificaciones** — Sistema de notificaciones en tiempo real con Laravel Echo + WebSockets
- [ ] **📊 Panel Admin** — Dashboard administrativo con estadísticas y reportes
- [ ] **🖼️ Gestión de Archivos** — Sistema de subida de archivos con Laravel Media Library
- [ ] **🔍 Búsqueda** — Motor de búsqueda avanzada con Laravel Scout + Algolia/Meilisearch
- [ ] **🌙 Modo Oscuro** — Implementar tema claro/oscuro con persistencia
- [ ] **♿ Accesibilidad** — Mejorar cumplimiento de pautas WCAG 2.1
- [ ] **🌍 Internacionalización** — Soporte multi-idioma (es, en) completo

---

## 🏗️ Arquitectura & Decisiones Técnicas

### Arquitectura Actual

El proyecto sigue una arquitectura **Monolítica MVC** clásica de Laravel:

```
Cliente (Navegador)
      │
      ▼
  ┌──────────┐
  │  Routes  │  routes/web.php
  └────┬─────┘
       │
       ▼
  ┌──────────┐
  │Controller│  app/Http/Controllers/
  └────┬─────┘
       │
       ├──────────▶ ┌──────────┐
       │            │  Models  │  app/Models/
       │            └────┬─────┘
       │                  │
       ▼                  ▼
  ┌──────────┐     ┌──────────┐
  │   Views  │     │ Database │  resources/views/ + migrations
  └──────────┘     └──────────┘
```

**Decisiones actuales:**

- ✅ **Autenticación manual** — Usa `Authenticatable` y fachada `Auth` en lugar de Laravel Breeze/Jetstream, lo que da control total sobre el flujo
- ✅ **Controladores planos** — Sin `Controller` base en todos los casos (algunos no extienden `Controller`)
- ✅ **Vistas Blade** — Sin framework JS pesado, solo HTML + CSS + JS vanilla
- ✅ **Mapa con Mapbox** — Integración directa de Mapbox GL JS

**Áreas de mejora identificadas:**

| Aspecto | Actual | Propuesto |
|---------|--------|-----------|
| **🔄 Middleware** | No hay middleware de autenticación | Implementar middleware `auth` en rutas protegidas |
| **🔍 Validación** | Validación manual en controladores | Usar Form Requests de Laravel |
| **📦 Repositorios** | Lógica de BD en controladores | Patrón Repository para desacoplar |
| **📝 Logging** | No implementado | Agregar logging con canales de Laravel |
| **🔐 Seguridad** | Sin CSRF en algunos formularios | Verificar y agregar `@csrf` en todos los formularios |
| **📐 Principios SOLID** | Controladores con múltiples responsabilidades | Separar en servicios y acciones |
| **🧪 Testing** | Sin tests implementados | Agregar tests con Pest PHP |
| **🗄️ Relaciones** | `hasOne` donde debería ser `hasMany` | Revisar y corregir relaciones en modelos |

### Propuesta de Mejora

```php
// ✅ 1. Corregir relaciones en modelos
// Usuario.php - Un usuario PUEDE tener MÚLTIPLES publicaciones y libros
public function libros() {
    return $this->hasMany(Libro::class, 'user_id');
}

public function publicaciones() {
    return $this->hasMany(Publicacion::class, 'user_id');
}

// ✅ 2. Implementar Form Request para validación
// app/Http/Requests/StorePublicationRequest.php
public function rules(): array
{
    return [
        'content' => 'required|string|max:1000',
        'url_file' => 'nullable|url',
        'date' => 'required|date',
    ];
}

// ✅ 3. Agregar middleware de autenticación en rutas
Route::middleware('auth')->group(function () {
    Route::get('/profile', ...);
    Route::get('/Publications/createPost', ...);
    Route::get('/Books/pushBooks', ...);
});

// ✅ 4. Crear Service Layer
// app/Services/PublicationService.php
class PublicationService {
    public function create(array $data): Publication {
        return Publication::create([
            ...$data,
            'user_id' => auth()->id(),
        ]);
    }
}
```

---

## 🤝 Contribuir

Las contribuciones son bienvenidas. Por favor, sigue estos pasos:

1. **Fork** el repositorio
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. **Commit** tus cambios (`git commit -m 'Add: AmazingFeature'`)
4. **Push** a la rama (`git push origin feature/AmazingFeature`)
5. Abre un **Pull Request**

**Estándares de código:**

- Sigue PSR-12 para PHP
- Usa el formateador `./vendor/bin/pint` antes de commitear
- Escribe tests para nuevas funcionalidades
- Mantén la documentación actualizada

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Ver el archivo `LICENSE` para más detalles.

---

<p align="center">
  <sub>Desarrollado con ❤️ para la comunidad de Popayán, Colombia</sub>
</p>
