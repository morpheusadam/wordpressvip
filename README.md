<div align="center">

# 🛍️ WordPress VIP — Full WooCommerce Store Install

### A complete, self-hosted WordPress 6.8.x site setup built around the premium Woodmart (XTemos) WooCommerce theme — ready to clone, configure, and deploy as an e-commerce storefront.

<p>
  <img src="https://img.shields.io/github/license/morpheusadam/wordpressvip?style=for-the-badge&color=4c1" alt="License" />
  <img src="https://img.shields.io/github/stars/morpheusadam/wordpressvip?style=for-the-badge&color=ffca28" alt="Stars" />
  <img src="https://img.shields.io/github/forks/morpheusadam/wordpressvip?style=for-the-badge&color=42a5f5" alt="Forks" />
  <img src="https://img.shields.io/github/last-commit/morpheusadam/wordpressvip?style=for-the-badge&color=8e44ad" alt="Last commit" />
  <img src="https://img.shields.io/github/repo-size/morpheusadam/wordpressvip?style=for-the-badge&color=e67e22" alt="Repo size" />
</p>

<p>
  <img src="https://img.shields.io/badge/WordPress-6.8.3-21759B?style=for-the-badge&logo=wordpress&logoColor=white" alt="WordPress" />
  <img src="https://img.shields.io/badge/PHP-7.2.24%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/MySQL-5.5.5%2B-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/WooCommerce-Store-96588A?style=for-the-badge&logo=woocommerce&logoColor=white" alt="WooCommerce" />
  <img src="https://img.shields.io/badge/Woodmart-XTemos-FF6633?style=for-the-badge&logo=wordpress&logoColor=white" alt="Woodmart" />
  <img src="https://img.shields.io/badge/Elementor-Builder-92003B?style=for-the-badge&logo=elementor&logoColor=white" alt="Elementor" />
</p>

</div>

---

## 📖 Overview

**WordPress VIP** is a **complete, self-hosted WordPress installation** (WordPress **6.8.3** core) configured as a ready-to-deploy **WooCommerce e-commerce storefront**. Rather than a single plugin or theme, this repository contains the full WordPress file tree — core (`wp-admin/`, `wp-includes/`), the front controller (`index.php`), bootstrap files (`wp-load.php`, `wp-settings.php`, `wp-config-sample.php`), and a populated `wp-content/` with themes and plugins — so the entire site can be cloned, configured, and stood up in one step.

The site is built around **Woodmart** by **XTemos** — a premium ThemeForest WooCommerce theme (v8.3.4) with deep **WooCommerce** template overrides and **Elementor / Elementor Pro** integration — alongside the bundled default themes (Twenty Twenty-Three / Four / Five) and the **Akismet** anti-spam plugin. WooCommerce shop, cart, and checkout templates are customized within the Woodmart theme, making this a turnkey base for an online store.

This repo is intended for **developers and store owners** who want a known-good, version-pinned WordPress + WooCommerce baseline to fork, theme, and deploy.

> 🔎 **Keywords:** WordPress install, WooCommerce store, Woodmart theme, XTemos, self-hosted WordPress, e-commerce WordPress, Elementor WooCommerce, WordPress 6.8, online store setup, WordPress boilerplate.

---

## ✨ What's Inside

- 🧩 **Full WordPress 6.8.3 core** — `wp-admin/`, `wp-includes/`, and all bootstrap entry points (`index.php`, `wp-load.php`, `wp-settings.php`, `wp-login.php`, `xmlrpc.php`, etc.).
- 🛒 **WooCommerce-ready storefront** — Woodmart ships extensive WooCommerce template overrides (archive, cart, checkout, mini-cart, thank-you, and more).
- 🎨 **Premium Woodmart theme (v8.3.4, XTemos)** — RTL-ready styles, Elementor & Elementor Pro style parts, and a WooCommerce-focused design system.
- 🧱 **Default block themes** — Twenty Twenty-Three, Twenty Twenty-Four, and Twenty Twenty-Five included.
- 🛡️ **Akismet** — bundled anti-spam plugin under `wp-content/plugins/`.
- 🌐 **Languages directory** — `wp-content/languages/` for localization.
- 🧪 **Sample config** — `wp-config-sample.php` to template your database, salts, and environment settings.

---

## 🛠️ Tech Stack

| Component | Detail |
| --- | --- |
| CMS | WordPress 6.8.3 |
| Language | PHP 7.2.24+ |
| Database | MySQL 5.5.5+ / MariaDB |
| Commerce | WooCommerce (via Woodmart templates) |
| Theme | Woodmart 8.3.4 (XTemos) — Requires PHP 7.4 |
| Page builder | Elementor / Elementor Pro (integration styles) |
| Anti-spam | Akismet |

<p align="center">
  <img src="https://skillicons.dev/icons?i=wordpress,php,mysql,js,css" alt="Tech stack" />
</p>

---

## 🚀 Getting Started

### Prerequisites

- **PHP 7.4+** (WordPress core requires 7.2.24+; the Woodmart theme requires 7.4+)
- **MySQL 5.5.5+ / MariaDB**
- A web server (**Apache** or **Nginx**) with mod_rewrite/equivalent

### Installation

```bash
git clone https://github.com/morpheusadam/wordpressvip.git
cd wordpressvip
```

1. **Create a database** and a MySQL user with full privileges.
2. **Copy and configure** the sample config:
   ```bash
   cp wp-config-sample.php wp-config.php
   ```
   Set your `DB_NAME`, `DB_USER`, `DB_PASSWORD`, `DB_HOST`, and fresh authentication salts.
3. **Point your web server** document root at this directory.
4. Visit the site in your browser and complete the **WordPress installer**.
5. From **Appearance → Themes**, activate **Woodmart** (install/activate WooCommerce and any required builder plugins it depends on).

---

## 🗂️ Project Structure

```text
wordpressvip/
├── index.php                 # front controller
├── wp-admin/                 # WordPress admin
├── wp-includes/              # WordPress core (v6.8.3)
├── wp-content/
│   ├── themes/
│   │   ├── woodmart/         # premium WooCommerce theme (XTemos, v8.3.4)
│   │   ├── twentytwentythree/
│   │   ├── twentytwentyfour/
│   │   └── twentytwentyfive/
│   ├── plugins/akismet/      # anti-spam plugin
│   └── languages/            # translations
├── wp-config-sample.php      # config template
├── wp-load.php · wp-settings.php · wp-login.php · ...
└── license.txt               # WordPress GPLv2 license
```

---

## 🔒 Security Notes

- Generate **fresh salts** and a **strong database password** before going live; never reuse the sample values.
- Do **not** commit a real `wp-config.php` containing live credentials.
- Keep WordPress core, the Woodmart theme, and all plugins **updated**.

## 🤝 Contributing

Contributions are welcome! Open an [issue](https://github.com/morpheusadam/wordpressvip/issues) or submit a pull request with deployment improvements, configuration hardening, or documentation.

## 📜 License

WordPress is distributed under the **GNU General Public License v2 (or later)**. See [`license.txt`](license.txt). Bundled themes and plugins retain their own licenses (the Woodmart theme is a commercial ThemeForest product, licensed under GPLv3 per its theme header).

---

<div align="center">

### 👤 Author — Morpheus Adam

Web developer & cheerful hacker · PHP · Laravel · Go

<p>
  <a href="https://github.com/morpheusadam"><img src="https://img.shields.io/badge/GitHub-morpheusadam-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" /></a>
  <a href="https://sam.zeonic.me"><img src="https://img.shields.io/badge/Website-sam.zeonic.me-4c1?style=for-the-badge&logo=googlechrome&logoColor=white" alt="Website" /></a>
  <a href="mailto:morpheusadam95@gmail.com"><img src="https://img.shields.io/badge/Email-Contact-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Email" /></a>
</p>

⭐ **If this WordPress + WooCommerce base saved you setup time, consider giving it a star!** ⭐

</div>
