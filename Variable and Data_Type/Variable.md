# Lesson 2 — Variables & Data Types (Deep Understanding)

## 1. What is a Variable?

A variable stores data.

In PHP:

- Always starts with `$`
- Case-sensitive
- No type declaration required (Dynamic Typing)

Example:

```php
$name = "Shanbel";
$age = 22;
```

---

## 2. Variable Rules

✅ Must start with `$`
✅ Must start with a letter or underscore
❌ Cannot start with a number

Valid:

```php
$userName = "John";
$_age = 20;
```

Invalid:

```php
$1name = "Error";
```

---

## 3. PHP Data Types

### 3.1 String

Text data.

```php
$name = "Shanbel";
$country = 'Ethiopia';
```

Used for:

- Names
- Emails
- Product titles

---

### 3.2 Integer

Whole numbers.

```php
$age = 25;
$price = 100;
```

Used for:

- Age
- Quantity
- IDs

---

### 3.3 Float (Double)

Decimal numbers.

```php
$salary = 1500.50;
$rating = 4.8;
```

Used for:

- Prices
- Percentages
- Ratings

---

### 3.4 Boolean

True or False values.

```php
$isLoggedIn = true;
$isAdmin = false;
```

Used for:

- Authentication
- Status checking
- Conditions

---

### 3.5 Array

Stores multiple values.

Indexed Array:

```php
$colors = ["Red", "Green", "Blue"];
```

Associative Array (key-value):

```php
$user = [
    "name" => "Shanbel",
    "age" => 22,
    "country" => "Ethiopia"
];
```

Used for:

- Database results
- API responses
- Configuration settings

---

### 3.6 NULL

Represents no value.

```php
$data = null;
```

Used when:

- Value is empty
- Resetting variable
- Data not available

---

## 4. Dynamic Typing

PHP automatically detects type.

```php
$value = 10;      // integer
$value = "Ten";   // now string
```

Type changes automatically.

---

## 5. Checking Data Type

Use `var_dump()`:

```php
$name = "Shanbel";
var_dump($name);
```

Output example:

```
string(8) "Shanbel"
```

---

## 6. Type Casting

Convert one data type to another.

```php
$number = "100";
$intNumber = (int)$number;
```

Common casts:

```php
(int)
(float)
(string)
(bool)
(array)
```

Important for:

- Database operations
- API handling
- Form validation

---

## 7. String Operations

Concatenation using dot (`.`):

```php
$first = "Shanbel";
$last = "Kassa";

$full = $first . " " . $last;
echo $full;
```

Output:

```
Shanbel Kassa
```

---

## 8. Variable Scope

### 8.1 Local Scope

Variable inside function:

```php
function test() {
    $name = "PHP";
}
```

Accessible only inside function.

---

### 8.2 Global Scope

```php
$name = "Shanbel";

function show() {
    global $name;
    echo $name;
}
```

Global variables are generally avoided in professional applications.

Laravel avoids using global variables — remember this.

---

## 9. Real-World Example

```php
<?php
$userName = "Shanbel";
$userAge = 22;
$isStudent = true;

echo "Name: " . $userName . "<br>";
echo "Age: " . $userAge . "<br>";

if ($isStudent) {
    echo "Status: Student";
}
?>
```

---

## 10. Professional Understanding

In real projects:

- Strings → user input
- Integers → IDs
- Boolean → status
- Arrays → database/API data
- Null → missing data

Master arrays deeply — frameworks like Laravel rely heavily on arrays and objects.

---

## Practice Task

Create `profile.php`:

Store:

- name (string)
- age (integer)
- height (float)
- isEmployed (boolean)
- skills (array)
