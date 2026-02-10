# Elemental Kids - Hub de Libros 📚

Un sitio web moderno y atractivo para la saga de libros Elemental Kids, construido con Next.js 14, TypeScript y Tailwind CSS.

## 🚀 Características

- **Hub de Libros**: Página principal con tarjetas interactivas para cada volumen de la saga
- **Páginas de Detalle**: Información completa de cada libro con descripción, características y enlaces de compra
- **Newsletter**: Modal de suscripción para notificar a los usuarios sobre nuevos lanzamientos
- **Responsive**: Diseño totalmente adaptable a móviles, tablets y desktop
- **Navegación Completa**: Header con menú y footer informativo
- **Páginas Adicionales**: Sobre Nosotros y Contacto

## 🎨 Diseño

El diseño está basado en los elementos de la saga:
- 🔥 **Fuego** (#FF9F1C): Lógica y matemáticas
- 💧 **Agua** (#2EC4B6): Creatividad y acertijos visuales
- 🌬️ **Aire** (#CBD5E0): Pensamiento abstracto (próximamente)

## 📦 Instalación

```bash
# Instalar dependencias
npm install

# Ejecutar en desarrollo
npm run dev

# Compilar para producción
npm run build

# Ejecutar en producción
npm start
```

Abre [http://localhost:3000](http://localhost:3000) en tu navegador para ver el resultado.

## 🛠️ Tecnologías

- **Next.js 16** - Framework React con App Router
- **TypeScript** - Tipado estático
- **Tailwind CSS** - Estilos utility-first
- **React Hooks** - Gestión de estado

## 📁 Estructura del Proyecto

```
elemental-kids-hub/
├── app/
│   ├── contacto/          # Página de contacto
│   ├── libro/[id]/        # Páginas dinámicas de libros
│   ├── sobre-nosotros/    # Página sobre nosotros
│   ├── layout.tsx         # Layout principal con Header y Footer
│   ├── page.tsx           # Homepage con hub de libros
│   └── not-found.tsx      # Página 404 personalizada
├── components/
│   ├── BookCard.tsx       # Tarjeta de libro
│   ├── Footer.tsx         # Footer del sitio
│   ├── Header.tsx         # Header con navegación
│   └── NewsletterModal.tsx # Modal de newsletter
└── public/                # Archivos estáticos
```

## 🎯 Próximos Pasos

- [ ] Añadir imágenes reales de portadas de libros
- [ ] Integrar servicio de newsletter (MailChimp, ConvertKit, etc.)
- [ ] Conectar formulario de contacto con backend
- [ ] Añadir enlaces de redes sociales reales
- [ ] Implementar Amazon Associates para enlaces de afiliados
- [ ] Añadir Google Analytics
- [ ] Optimizar SEO y metadatos
- [ ] Añadir blog o sección de recursos

## 🌐 Deploy

Este proyecto está listo para desplegarse en:
- **Vercel** (recomendado)
- **Netlify**
- **AWS Amplify**

```bash
# Deploy en Vercel
npx vercel
```

## 📝 Personalización

### Actualizar Links de Amazon
Edita `app/libro/[id]/page.tsx` y actualiza el campo `amazonLink` en el array `booksData`.

### Actualizar Información de Contacto
Edita `components/Footer.tsx` y `app/contacto/page.tsx` con tu email y redes sociales.

### Añadir Nuevos Libros
Añade nuevos objetos al array `books` en `app/page.tsx` y al array `booksData` en `app/libro/[id]/page.tsx`.

## 📄 Licencia

© 2026 Elemental Kids. Todos los derechos reservados.

## 🤝 Soporte

¿Preguntas? Contacta a info@elementalkids.com

---

Hecho con ❤️ para mentes inquietas
