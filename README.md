# Estructura de Ramas del Proyecto

Este repositorio utiliza una estrategia de trabajo basada en **tres ramas principales**, con el objetivo de organizar el desarrollo y mantener la rama principal siempre estable.

## 🌿 Ramas del repositorio

### `main`
- Es la **rama principal** del proyecto.
- Contiene la versión **estable y completa** del trabajo.
- No se trabaja directamente sobre ella de forma habitual.
- Recibe cambios únicamente mediante **merge** desde las ramas de desarrollo.

### `daniel`
- Rama de trabajo para **Daniel**.
- Aquí se desarrollan nuevas funcionalidades, mejoras y pruebas.
- Es una rama activa de desarrollo.

### `balbino`
- Rama de trabajo para **Balbino**.
- Se utiliza para desarrollar funcionalidades y realizar cambios de manera independiente.
- También es una rama activa de desarrollo.

## 🔁 Flujo de trabajo

1. Cada desarrollador trabaja principalmente en su **rama personal** (`daniel` o `balbino`).
2. Los cambios se confirman (commit) en la rama correspondiente.
3. Una vez que el trabajo está probado y finalizado, se realiza un **merge hacia la rama `main`**.
4. De esta forma, la rama `main` siempre contiene todo el trabajo integrado y estable.

## ✅ Ventajas de este enfoque

- Evita conflictos al trabajar en paralelo.
- Mantiene la rama `main` limpia y funcional.
- Permite un desarrollo organizado y controlado.
- Facilita la integración del trabajo de todos los miembros del equipo.

---

📌 **Nota:** Antes de hacer merge a `main`, se recomienda revisar el código y asegurarse de que todo funciona correctamente.
