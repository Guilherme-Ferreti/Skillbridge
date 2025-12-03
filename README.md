<p align="center"><img src="https://raw.githubusercontent.com/Guilherme-Ferreti/Skillbridge/refs/heads/main/resources/images/logos/skillbridge-full.svg" width="400" alt="Laravel Logo"></p>

## About Skillbridge

A fictional platform that helps you unlock your creative potential by offering a wide range of online design and development courses.

## 📄 Overview

Skillbridge is a fictional e-learning platform that helps you unlock your creative potential by offering a wide range of online design and development courses.


This project utilizes PHP, Laravel Framework and SASS. Any database compatible with Laravel may be used (e.g., MySQL, PostgreSQL).

You can view the original design for this project [here](https://www.figma.com/community/file/1302328770970984511).

Access the website [here](https://skillbridge-guilherme-ferreti.laravel.cloud/).

## 🎨 SCSS Style Guide

This project uses a modular SCSS architecture based on the 7-1 Pattern for maintainability and scalability. Styles are organized into seven folders and a single main file for compilation.

### Folder structure

```
scss/
|– abstracts/
|– base/
|– components/
|– layout/
|– pages/
|– vendors/
|– themes/
`– app.scss
```

* **Abstracts**: SCSS helpers like variables and mixins.
* **Base**: Foundational styles for HTML elements.
* **Components**: Reusable UI components.
* **Layout**: Main structural elements like headers and footers.
* **Pages**: Page-specific styles.
* **Vendors**: Third-party library styles.
* **Themes**: Visual themes like dark mode.
* **app.scss**: The main file that imports all partials.
