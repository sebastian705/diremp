# Diremp - Sistema de Directorio Empresarial

**Diremp** es una aplicación web moderna (SPA) diseñada para la gestión, registro y búsqueda centralizada de directorios de empresas. El proyecto está construido bajo una arquitectura desacoplada, utilizando **Laravel** como una API REST robusta y segura, y **React** en el frontend para ofrecer una interfaz de usuario fluida, reactiva y de alto rendimiento.

---

## 🚀 Características y Funcionalidades Técnicas

*   **Arquitectura API RESTful:** Backend desacoplado desarrollado en Laravel para procesar la lógica de negocio, consultas optimizadas a la base de datos y respuestas JSON consistentes.
*   **Autenticación por Tokens (Stateless):** Flujo de seguridad implementado con **Laravel Sanctum** para la emisión, validación y almacenamiento seguro de tokens de sesión, garantizando comunicaciones cifradas entre React y el servidor.
*   **Control de Acceso basado en Roles (RBAC):** Sistema estricto de roles y permisos. El backend restringe los endpoints mediante *Middlewares*, mientras que el frontend protege las rutas de navegación dinámicamente según el tipo de usuario (Administrador, Empresa, Usuario).
*   **Interfaz SPA Interactiva:** Desarrollada con componentes reutilizables en **React**, asegurando una navegación instantánea, manejo eficiente del estado y manipulación óptima del DOM sin recargas de página.
*   **Formularios Dinámicos y Asíncronos:** Gestión avanzada de formularios con validación de datos en tiempo real (tanto en cliente como en servidor), utilizando peticiones HTTP asíncronas con **Axios / Fetch API**.

---

## 🛠️ Stack Tecnológico

*   **Backend:** Laravel 12+, PHP 8.2+
*   **Frontend:** React, JavaScript (ES6+), React Router
*   **Seguridad:** Laravel Sanctum (Tokens de autenticación)
*   **Estilos:** CSS3 / Tailwind CSS (Interfaz 100% responsiva y adaptativa)
*   **Base de Datos:** MySQL
*   **Gestores de Paquetes:** Composer (PHP) y pnpm (JavaScript)

---

## 💻 Requisitos Previos

Asegúrate de tener instalado en tu máquina local:
*   PHP 8.2 o superior
*   Composer
*   Node.js (Versión LTS recomendado)
*   pnpm
*   MySQL

---

## 🔧 Instalación y Configuración Paso a Paso

### 1. Clonar el repositorio
```bash
git clone [https://github.com/sebastian705/diremp.git](https://github.com/sebastian705/diremp.git)
cd diremp
