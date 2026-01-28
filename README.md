# Engineering Firm Website Template (PHP + Tailwind v4)

A fast, SEO-friendly, server-rendered website built for an engineering firm.  
The goal was simple: **maximize response speed** and **keep SEO strong** by choosing a lightweight stack and rendering pages on the server.

During development, I removed any firm-specific references and converted the project into a **clean, reusable template** that can be adapted for other businesses.

---

## Highlights

- ⚡ **Fast response times** (minimal runtime overhead)
- 🧠 **Server-Side Rendered (SSR) with plain PHP** for SEO and performance
- 🌍 **Multi-language support** via **custom router + language files**
- 🧱 **Customizable component structure** (reusable layout blocks)
- 📱 **Mobile-friendly & responsive**
- ✨ **Clean UI** built with Tailwind CSS v4
- 🪶 **Very little JavaScript** (only where needed)

---

## Tech Stack

- **PHP** (plain PHP, server-rendered pages)
- **Tailwind CSS v4**
- **Minimal JavaScript** (small enhancements only)

---

## Project Philosophy

This project prioritizes:

- **Speed first**: avoid heavy frameworks when content pages + SEO are the main requirement.
- **SEO-first rendering**: server-generated HTML to ensure search engines and social previews work reliably.
- **Long-term maintainability**: reusable components and consistent structure.

---

## Getting Started

### Requirements
- PHP **8.x+**
- (Optional) Node.js **18+** (only if you want to build/watch Tailwind)

### Run locally (PHP server)

From the project root:

````bash
php -S localhost:8000
````

Use tailwind CLI.

npx @tailwindcss/cli -i ./css/main.css -o ./css/output.css --watch, is the current folder structure for the css.

Run before every deployment.