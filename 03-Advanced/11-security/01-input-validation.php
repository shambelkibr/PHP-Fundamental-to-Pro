<?php
/**
 * Input Validation and Sanitization
 * 
 * Never trust user input! Always validate and sanitize data.
 */

echo "<h2>Input Validation and Sanitization</h2>";

// 1. Filter functions
echo "<h3>1. PHP Filter Functions</h3>";

// Validate email
$email = "user@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "✓ Valid email: $email<br>";
} else {
    echo "✗ Invalid email<br>";
}

// Validate URL
$url = "https://www.example.com";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "✓ Valid URL: $url<br>";
} else {
    echo "✗ Invalid URL<br>";
}

// Validate integer
$age = "25";
if (filter_var($age, FILTER_VALIDATE_INT)) {
    echo "✓ Valid integer: $age<br>";
} else {
    echo "✗ Invalid integer<br>";
}

// 2. Sanitization
echo "<br><h3>2. Sanitizing Input</h3>";

$dirty_email = "user@EXAMPLE.COM  ";
$clean_email = filter_var($dirty_email, FILTER_SANITIZE_EMAIL);
echo "Original: '$dirty_email'<br>";
echo "Sanitized: '$clean_email'<br>";

$dirty_string = "<script>alert('XSS')</script>Hello";
$clean_string = filter_var($dirty_string, FILTER_SANITIZE_SPECIAL_CHARS);
echo "Original: $dirty_string<br>";
echo "Sanitized: $clean_string<br>";

// 3. Custom validation function
echo "<br><h3>3. Custom Validation</h3>";

function validateUsername($username) {
    // Username must be 3-20 characters, alphanumeric and underscore only
    if (strlen($username) < 3 || strlen($username) > 20) {
        return false;
    }
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        return false;
    }
    return true;
}

$test_users = ["john_doe", "ab", "user@123", "valid_user_name"];
foreach ($test_users as $username) {
    $valid = validateUsername($username);
    echo ($valid ? "✓" : "✗") . " Username: $username<br>";
}

// 4. Validation class
echo "<br><h3>4. Validation Class</h3>";

class Validator {
    public static function required($value) {
        return !empty(trim($value));
    }
    
    public static function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    public static function minLength($value, $min) {
        return strlen($value) >= $min;
    }
    
    public static function maxLength($value, $max) {
        return strlen($value) <= $max;
    }
    
    public static function numeric($value) {
        return is_numeric($value);
    }
    
    public static function alphanumeric($value) {
        return ctype_alnum($value);
    }
}

// Example usage
$formData = [
    'email' => 'test@example.com',
    'password' => 'secret123',
    'age' => '25'
];

echo "Validating form data:<br>";
echo "Email valid? " . (Validator::email($formData['email']) ? "Yes" : "No") . "<br>";
echo "Password min 6 chars? " . (Validator::minLength($formData['password'], 6) ? "Yes" : "No") . "<br>";
echo "Age numeric? " . (Validator::numeric($formData['age']) ? "Yes" : "No") . "<br>";

// 5. Escaping output
echo "<br><h3>5. Escaping Output</h3>";

$user_input = "<script>alert('XSS');</script>Hello";
echo "Unescaped (DANGEROUS): $user_input<br>";
echo "Escaped (SAFE): " . htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8') . "<br>";

// 6. Security best practices
echo "<br><h3>6. Security Best Practices</h3>";
echo "<strong>Always:</strong><br>";
echo "✓ Validate all user input<br>";
echo "✓ Sanitize data before processing<br>";
echo "✓ Escape output before displaying<br>";
echo "✓ Use prepared statements for database queries<br>";
echo "✓ Implement proper error handling<br>";
echo "✓ Use HTTPS for sensitive data<br>";
echo "<br><strong>Never:</strong><br>";
echo "✗ Trust user input<br>";
echo "✗ Display raw user input<br>";
echo "✗ Concatenate SQL queries with user data<br>";
echo "✗ Store passwords in plain text<br>";

?>
