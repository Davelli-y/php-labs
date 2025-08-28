# PHP Labs - Form and Data Processing 🚀

![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
![GitHub Repo Size](https://img.shields.io/github/repo-size/Davelli-y/php-labs)

This repository demonstrates a PHP form with **data processing** using `array_unique`, `strrev`, and `md5`.  
Great for practicing PHP basics, array and string manipulation, and dynamic HTML/CSS display.

---

## Table of Contents
- [User Flow](#user-flow-📝)
- [Function Details](#detailed-function-explanation-🔍)
- [Notes](#notes-💡)
- [License](#license-📄)

---

## User Flow 📝

┌─────────────┐
│ User │
│ enters data │
└─────┬───────┘
│
v
┌─────────────┐
│ Form │
│ (Submit) │
└─────┬───────┘
│
v
┌─────────────┐
│ $_POST │
│ receives │
│ data │
└─────┬───────┘
│
v
┌─────────────┐
│ PHP Block │
│ processes │
│ data │
│ - array_unique
│ - strrev
│ - md5 │
└─────┬───────┘
│
v
┌─────────────┐
│ Result │
│ Variables │
│ - $array_result
│ - $strrev_result
│ - $md5_result │
└─────┬───────┘
│
v
┌─────────────┐
│ HTML / CSS │
│ displays │
│ results │
└─────────────┘

yaml
Copiar código

---

## Detailed Function Explanation 🔍

### 1️⃣ `array_unique()`
- **Input:** `"1,2,2,3,4,4,5"`  
- **Process:**
  - `explode(',')` → `[1,2,2,3,4,4,5]`  
  - `trim()` removes spaces  
  - `array_filter()` removes empty values  
  - `array_unique()` → `[1,2,3,4,5]`  
  - `array_values()` → reindexes `[0=>1,1=>2,...]`  
- **Output:** `"1, 2, 3, 4, 5"`

### 2️⃣ `strrev()`
- **Input:** `"Programar"`  
- **Output:** `"rammargorP"`

### 3️⃣ `md5()`
- **Input:** `"12345"`  
- **Output:** `"827ccb0eea8a706c4c34a16891f84e7b"`

---

## Notes 💡
- Practice **PHP fundamentals**, **array and string manipulation**  
- Can be extended to **add new functions** or **validate form input**  
- Results are dynamically displayed in `<div class="resultado">`  
- Ideal for beginners or for testing new PHP features

---

## License 📄
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

## Demo / Try it Yourself 🔗
- You can **clone this repo** and run it locally:
```bash
git clone https://github.com/Davelli-y/php-labs.git
Open index.php in a browser using XAMPP, MAMP, WAMP, or PHP built-in server:

bash
Copiar código
php -S localhost:8000