# Shrestha — Select the Optimal Option

A small static website with a minimal PHP login demo that showcases curated restaurant and dish selections across three cities: **Vijayawada (Andhra)**, **Bengaluru**, and **Hyderabad**.  
The project uses **HTML, CSS, and Bootstrap (via CDN)** and includes a simple **PHP session-based login** feature.  

This README documents the project structure, how to run it locally, important notes, and recommended improvements.

---

## Project overview

This repository contains a simple front-end website built using **HTML, CSS, Bootstrap, and PHP** with the following structure:

- A **home page** (`index.html`) that links to three city-specific pages.
- **City pages** containing restaurant and dish showcases:
  - `andhra.html` → Vijayawada (Andhra)
  - `bengaluru.html` → Bengaluru
  - `hyderabad.html` → Hyderabad
- Stylesheets:
  - `style.css` — shared styles for all pages.
  - `home.css` — home page–specific styles.
- **PHP login demo**:
  - `login.php` — processes login form submission.
  - `welcome.php` — greets the logged-in user.
- **Static assets**:
  - Images, icons, and carousel photos (stored in the repository root and `Grid-imgs/` folder).
- **Bootstrap dependency**:
  - Bootstrap loaded via CDN links in HTML.
  - `package.json` lists Bootstrap for optional Node-based use.

---

## Features

### 🌆 Multi-page static website
- Responsive layout using HTML, CSS, and Bootstrap.
- Each city page includes:
  - A header/navigation bar.
  - A Bootstrap carousel with curated restaurant images.
  - A grid layout showcasing dishes and ratings.
  - Local anchors or selectors for in-page navigation.

### 🔐 TODO: Minimal PHP login demo
- `login.php` validates credentials and redirects to `welcome.php` upon success.
- Default (hard-coded) credentials:
  ```
  Username: admin
  Password: admin
  ```
- Demonstrates basic session handling in PHP.

### 🧭 Simple and portable setup
- Fully static — runs without a build system.
- Bootstrap CDN eliminates dependency installation.
- Optional `package.json` if you wish to manage Bootstrap via npm.
