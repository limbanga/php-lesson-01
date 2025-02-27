### **Lesson 1: Basic Syntax and Writing PHP**  

Now that you've installed PHP, let's start writing your first PHP code.  

---

### **1. Writing PHP Code**  
PHP is embedded in HTML and enclosed within `<?php ... ?>`. Example:  

```php
<?php
    echo "Welcome to PHP!";
?>
```
Save this file as **index.php** and place it in `C:\xampp\htdocs\`.  
Open your browser and visit:  
```
http://localhost/index.php
```
If you see **"Welcome to PHP!"**, your setup is successful.  

---

### **2. Variables and Data Types in PHP**  
#### **Declaring Variables**  
Variables in PHP start with `$`, for example:  

```php
<?php
    $name = "John";
    $age = 25;
    echo "Hello, my name is $name and I am $age years old.";
?>
```

🔹 **Variable Naming Rules**:  
- Must start with `$` followed by a letter or `_`, but not a number.  
- Case-sensitive (`$name` and `$Name` are different).  

#### **Data Types in PHP**  
PHP has several data types:  
- **String**: `"Hello"`  
- **Integer**: `123`  
- **Float**: `3.14`  
- **Boolean**: `true` or `false`  
- **Array**: `["Apple", "Orange", "Mango"]`  
- **Object**, **NULL**  

Example:

```php
<?php
    $string = "Hello";
    $number = 123;
    $float = 3.14;
    $boolean = true;
    $array = array("Apple", "Orange", "Mango");

    echo "String: $string <br>";
    echo "Integer: $number <br>";
    echo "Float: $float <br>";
    echo "Boolean: $boolean <br>";
    echo "First array element: $array[0]";
?>
```

---

### **3. Operators in PHP**  
PHP supports various types of operators:  

#### **Arithmetic Operators**  
| Operator | Meaning | Example (`$a = 10`, `$b = 5`) |
|----------|---------|------------------|
| `+`      | Addition | `$a + $b = 15`  |
| `-`      | Subtraction | `$a - $b = 5`  |
| `*`      | Multiplication | `$a * $b = 50`  |
| `/`      | Division | `$a / $b = 2`  |
| `%`      | Modulus | `$a % $b = 0`  |

Example:

```php
<?php
    $a = 10;
    $b = 5;
    echo "Sum: " . ($a + $b);
?>
```

#### **Comparison Operators**  
| Operator | Meaning | Example (`$a = 10`, `$b = 5`) |
|----------|---------|------------------|
| `==`    | Equal | `$a == $b` → false  |
| `!=`    | Not Equal | `$a != $b` → true  |
| `>`     | Greater than | `$a > $b` → true  |
| `<`     | Less than | `$a < $b` → false  |

---

### **Practice Exercises**  
1️⃣ Create a **variables.php** file in `htdocs` that displays your name and age.  
2️⃣ Write a program that calculates the sum, difference, product, and quotient of two numbers.  
3️⃣ Use comparison operators to check if two numbers are equal.  

Try these exercises and let me know how it goes! 🚀