# Portfolio de Paula García

Portfolio profesional desarrollado con **Laravel**, **Livewire** y **TailwindCSS**, donde muestro mis proyectos, tecnologías con las que trabajo y un formulario de contacto funcional con envío de correo y reCAPTCHA.

🔗 **Web online:** https://paula.pkstudio.es

---

## ✨ Secciones principales

- 🏠 **Inicio** – Presentación personal y breve resumen de mi perfil.
- 💼 **Proyectos** – Listado de proyectos destacados con detalle, aprendizajes y enlaces.
- 🧩 **Tecnologías** – Stack principal con iconos.
- 📬 **Contacto** – Formulario con validación, envío de correo y protección reCAPTCHA.

---

## 🛠️ Tecnologías

- **Backend:** Laravel + Livewire
- **Frontend:** Blade, TailwindCSS, Alpine.js
- **Build:** Vite
- **Mail:** SMTP (Hostinger)
- **Otros:** reCAPTCHA v3, Git, GitHub

---

## 🚀 Puesta en marcha en local

```bash
# Clonar el repositorio
git clone https://github.com/Paugarperezdt/portfolio-paula.git
cd portfolio-paula

# Instalar dependencias PHP y JS
composer install
npm install

# Copiar .env de ejemplo y configurar variables
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate

# (Si se usa base de datos, configurar y ejecutar migraciones)
# php artisan migrate

# Lanzar servidor de desarrollo
php artisan serve

# En otra terminal, lanzar Vite
npm run dev
