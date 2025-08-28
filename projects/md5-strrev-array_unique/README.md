# PHP Labs - Form and Data Processing 🚀

![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
![GitHub Repo Size](https://img.shields.io/github/repo-size/Davelli-y/php-labs)

This repository demonstrates a PHP form with **data processing** using `array_unique`, `strrev`, and `md5`.  
It is great for practicing PHP basics, array and string manipulation, and dynamic HTML/CSS display.

---

## Table of Contents
- [User Flow](#user-flow)
- [Function Details](#detailed-function-explanation)
- [Notes](#notes)
- [License](#license)
- [Demo / Try it Yourself](#demo--try-it-yourself)

---

## User Flow

1. **User Interaction**  
   The user enters a value in the form and clicks the **Submit** button.

2. **Receiving Data**  
   PHP captures the submitted values using `$_POST`.

3. **Processing**  
   In the PHP block at the top of the page:
   - Checks which button was clicked
   - Processes the data using one of the following functions:
     - `array_unique`: removes duplicate values from arrays
     - `strrev`: reverses strings
     - `md5`: generates an MD5 hash

4. **Result Variables**  
   The processed results are stored in variables:
   - `$array_result` → unique array
   - `$strrev_result` → reversed string
   - `$md5_result` → MD5 hash

5. **Display**  
   Results are displayed dynamically in the page using HTML/CSS.  
   The input field retains the value entered by the user.

---

## Detailed Function Explanation

### 1️⃣ `array_unique()`
- **Input:** `"1,2,2,3,4,4,5"`  
- **Process:**
  1. Split the input by commas: `explode(',')` → `[1,2,2,3,4,4,5]`  
  2. Remove spaces: `trim()`  
  3. Remove empty values: `array_filter()`  
  4. Remove duplicates: `array_unique()` → `[1,2,3,4,5]`  
  5. Reindex the array: `array_values()` → `[0=>1,1=>2,...]`  
- **Output:** `"1, 2, 3, 4, 5"`

### 2️⃣ `strrev()`
- **Input:** `"Programar"`  
- **Output:** `"rammargorP"`

### 3️⃣ `md5()`
- **Input:** `"12345"`  
- **Output:** `"827ccb0eea8a706c4c34a16891f84e7b"`

---

## Notes 💡
- Useful for practicing **PHP fundamentals**, **array and string manipulation**  
- Can be extended to **add new functions** or **validate form input**  
- Results are displayed dynamically in `<div class="resultado">`  
- Ideal for beginners or testing new PHP features

---

## License 📄
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

## Demo / Try it Yourself 🔗
1. Clone the repository:
```bash
git clone https://github.com/Davelli-y/php-labs.git
Open the index.php file in a browser using XAMPP, MAMP, WAMP, or PHP built-in server:

bash
Copiar código
php -S localhost:8000