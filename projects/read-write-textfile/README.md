# Read & Write Text File (PHP)

This project is a simple **user registration system** built with PHP.  
It demonstrates how to **save and read data from a text file**, without using a database.

## 📌 Features
- Register new users with **login** and **password**  
- Passwords are stored using **hashing** for security  
- Prevents duplicate usernames  
- Allows showing/hiding the password when typing  
- List registered users in:
  - **Plain text format**
  - **Table format**
- Data stored in a `.txt` file with:
  - Login
  - Password (hash)
  - Creation date & time

## 🛠️ How it works
1. The user fills in the form with **login and password**  
2. PHP checks if the username already exists  
3. If not, it saves the new data in a `.txt` file  
4. You can view all registered users through the provided pages

## 📂 Project Structure
read-write-textfile/
│── index.php # Main page with registration form
│── gravar.php # Handles saving new users
│── ler.php # Displays users in plain text
│── ler_tabela.php # Displays users in table format
│── usuarios.txt # Text file where data is stored


## 👨‍💻 Authors
- Guilherme Henrique Yamaguchi Davelli  
- Livia De Lima Evers Rocha

---
📖 *This project was developed for academic purposes to practice PHP file handling.*