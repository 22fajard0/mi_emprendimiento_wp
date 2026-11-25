# Fajardo Motors V · Sitio WordPress

- **Sitio en producción:** https://proyectofajardo.freedev.app/
- **Prototipo en Stitch:** https://stitch.google.com/projects/2050693211074279070
- **Repo del Parcial 02:** https://github.com/22fajard0/mi-emprendimiento
- **Autor/a:** Ignacio Fajardo (Sección 001-D)

## Contexto de la web

**Fajardo Motors V** es una automotora de autos usados seleccionados en la V Región (Viña del Mar / Valparaíso). Está orientada a personas y familias que buscan comprar un vehículo usado de forma segura, sin incertidumbre mecánica ni trámites engorrosos. Bajo la promesa **"Compras tranquilo"**, el sitio resuelve la falta de confianza en el mercado de autos usados destacando la inspección técnica en más de 100 puntos y la **Garantía Fajardo** de 3 meses, con el objetivo principal de que el visitante explore el stock destacado, resuelva dudas y cotice directamente mediante el formulario de contacto o WhatsApp.

## Mi tema

- [x] **Tema propio:** `Fajardo Motors V` (ubicado en [`proyecto/mi-tema/`](proyecto/mi-tema/))

---

## Instrucciones de instalación (tema propio)

Cómo instalar mi tema en un WordPress limpio:

1. **Descarga el tema:** comprime la carpeta [`proyecto/mi-tema/`](proyecto/mi-tema/) en un archivo `.zip` (o genera el paquete con `git archive` desde la raíz del repo).
2. **Instálalo:** en el panel de WordPress, ve a **Apariencia > Temas > Añadir nuevo > Subir tema**, selecciona el `.zip` y pulsa **Instalar ahora**.
3. **Actívalo:** pulsa **Activar** en el tema **Fajardo Motors V**.
4. **Configura la portada:** ve a **Ajustes > Lectura > Tu página de inicio muestra > Una página estática** y selecciona la página **Inicio** (para activar la plantilla `front-page.php`).
5. **Crea el menú:** en **Apariencia > Menús**, crea el menú con las páginas principales (Inicio, Quiénes somos, Garantía Fajardo, Preguntas frecuentes, Contacto) y asígnalo a la ubicación **«Menú principal»**.
6. **Instala los plugins** recomendados (ver tabla más abajo) y configura el shortcode del formulario de **Forminator** en la página **Contacto**.
7. **Crea las páginas y entradas** de la fase 1 (ver sección más abajo).

**Qué debe tener el servidor:** WordPress 6.6+ (probado con **PHP 8.4.28** de 64 bits y MySQL 5.7+ / MariaDB).

---

## Respaldo y reinstalación en otro servidor

El objetivo de este proyecto es poder **respaldar el sitio completo y reinstalarlo en cualquier servidor**. Sigue estos pasos para migrarlo o recuperarlo:

**Qué respaldar:**

- **Los archivos de WordPress:** carpeta `wp-content/` completa (tema `proyecto/mi-tema/`, plugins instalados e imágenes subidas en `uploads/`).
- **La base de datos:** tablas de MySQL/MariaDB con páginas, entradas, menús, formularios y configuración.

**Cómo respaldo mi sitio:**

1. Desde el panel de WordPress, entrar a **UpdraftPlus** en el menú lateral izquierdo (o desde **Plugins > Plugins instalados > UpdraftPlus > Ajustes**).
2. Pulsar **Respaldar ahora**, marcando las opciones de incluir **Base de datos** y **Todos los archivos** (plugins, temas, archivos subidos).
3. Al finalizar, descargar los archivos `.zip` (temas, plugins, uploads, otros) y `.gz` (base de datos) al computador o sincronizarlos con **Google Drive** para guardarlos **fuera del servidor**. Se recomienda respaldar antes de cada actualización o cambio importante y de forma semanal.

**Cómo lo reinstalo en un servidor nuevo:**

1. **Requisitos del servidor:** servidor web Apache/Nginx con **PHP 7.4 o superior** (recomendado PHP 8.1+), base de datos **MySQL 5.7+ / MariaDB 10.4+**, certificado SSL (HTTPS) y al menos **500 MB** de espacio libre (se sugiere 10 GB+ para etapa 2).
2. **Instalar WordPress limpio:** crear una base de datos vacía en el nuevo servidor, instalar una copia limpia de WordPress y verificar que el panel `/wp-admin` abra correctamente.
3. **Restaurar el respaldo:** en el WordPress nuevo, instalar y activar el plugin **UpdraftPlus** desde **Plugins > Añadir nuevo**, ir a **Respaldos existentes > Subir archivos de respaldo**, cargar los archivos descargados y pulsar **Restaurar** seleccionando Base de datos, Plugins, Temas y Uploads.
4. **Ajustar:**
   - Entrar a **Ajustes > Generales** y comprobar que la **Dirección de WordPress (URL)** y la **Dirección del sitio (URL)** correspondan al nuevo dominio.
   - Ir a **Ajustes > Enlaces permanentes** y pulsar **Guardar cambios** para regenerar las rutas.
   - Verificar **Ajustes > Lectura** (portada estática en **Inicio**) y **Apariencia > Menús** (asignado a **Menú principal**).
5. **Probar:** navegar por la portada, Quiénes somos, Garantía Fajardo, Preguntas frecuentes y entradas del blog; confirmar que cargan las imágenes y enviar un **mensaje de prueba en Contacto** para comprobar confirmación y recepción en el correo.

**Problemas que tuve y cómo los resolví:**
- **Contact Form 7 no funcionó en el sitio:** al probar el formulario en producción presentó errores de funcionamiento, por lo que se reemplazó por **Forminator** (`1.58.4`), quedando los envíos registrados en el panel de WordPress.
- **Confirmación y envío de correos en Forminator:** al probar el formulario en InfinityFree inicialmente no mostraba el mensaje en pantalla ni llegaba al correo externo; se corrigió la configuración de comportamiento y entrega de correos para mostrar confirmación al enviar y recibir los avisos correctamente.
- **Caché y redirección de InfinityFree:** W3 Total Cache servía versiones cacheadas tras realizar cambios (solucionado purgando las cachés desde el panel), y el hosting agrega una redirección `?i=1` → `?i=2` que afecta levemente los tiempos iniciales de Lighthouse.

## Plugins instalados

| Plugin | Para qué lo uso | Gratis o de pago | Versión |
|---|---|---|---|
| **Yoast SEO** | Metadatos, análisis SEO y mapa del sitio XML | Gratis (con Premium opcional) | 28.8 |
| **Forminator** | Formulario de contacto y cotización de vehículos | Gratis (con Pro opcional) | 1.58.4 |
| **Smush** | Compresión y carga diferida (*lazy load*) de imágenes | Gratis (con Pro opcional) | 4.3.7 |
| **UpdraftPlus** | Respaldos completos y restauración en otro servidor | Gratis (con Premium opcional) | 1.26.16 |
| **Akismet Anti-spam** | Protección contra spam en formularios y comentarios | Gratis (plan personal) | 5.7 |
| **W3 Total Cache** | Caché de página y mejora de velocidad de carga | Gratis (con Pro opcional) | 2.11.0 |
| **Loginizer / Loginizer Pro** | Protección contra intentos de fuerza bruta en el acceso | Gratis / Pro | 2.1.2 |
| **WPConsent** | Banner y gestión de consentimiento de cookies | Gratis (con Pro opcional) | 1.2.0 |

## Páginas y entradas

- **Páginas (fase 1):**
  1. Inicio
  2. Quiénes somos
  3. Garantía Fajardo
  4. Preguntas frecuentes
  5. Contacto
- **Entradas del blog:**
  1. ¿Cómo financiar tu vehículo? Opciones de pago para comprar autos usados sin estrés
  2. Cómo calcular el pie y la cuota de tu auto
  3. Checklist para revisar un auto usado antes de comprar

## Cómo me organicé

Mi plan inicial, tabla de plugins, Carta Gantt, Plan B y cambios del checkpoint están documentados en [`proyecto/documentacion/decisiones.md`](proyecto/documentacion/decisiones.md). Durante el desarrollo se consolidó el tema propio **Fajardo Motors V** en PHP y CSS respetando la identidad visual de la automotora, y en la etapa final se reemplazó Contact Form 7 por **Forminator** e integró WhatsApp directamente mediante enlaces `wa.me` en el tema.

## Plan de continuidad y rendimiento

- **Plan de continuidad (etapa 2 de mi web):** [`proyecto/documentacion/plan-de-continuidad.md`](proyecto/documentacion/plan-de-continuidad.md)
- **Análisis de rendimiento con Lighthouse:** [`proyecto/documentacion/lighthouse.md`](proyecto/documentacion/lighthouse.md)

## Uso de IA

- **Asistente de IA (Antigravity / Gemini):** apoyo en la estructuración de las plantillas PHP del tema propio (`front-page.php`, `single.php`, `archive.php`, `page.php`, `header.php`, `footer.php`), estilos CSS responsivos y redacción/organización de la documentación en Markdown; revisado, adaptado e integrado manualmente al proyecto **Fajardo Motors V**.
