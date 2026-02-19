<?php
/**
 * Password Security
 * 
 * Demonstrates secure password handling using PHP's password functions.
 */

echo "<h2>Password Security</h2>";

// 1. Password hashing
echo "<h3>1. Password Hashing</h3>";

$password = "mySecurePassword123!";
echo "Original password: $password<br>";

// Hash the password (uses bcrypt by default)
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo "Hashed password: $hashed<br>";
echo "Hash length: " . strlen($hashed) . " characters<br>";

// 2. Password verification
echo "<br><h3>2. Password Verification</h3>";

$input_password = "mySecurePassword123!";
$wrong_password = "wrongPassword";

if (password_verify($input_password, $hashed)) {
    echo "✓ Correct password - Access granted<br>";
} else {
    echo "✗ Wrong password - Access denied<br>";
}

if (password_verify($wrong_password, $hashed)) {
    echo "✓ Correct password<br>";
} else {
    echo "✗ Wrong password<br>";
}

// 3. Password hashing options
echo "<br><h3>3. Hashing Options</h3>";

// Using bcrypt with custom cost
$options = ['cost' => 12]; // Higher cost = more secure but slower
$hash_bcrypt = password_hash($password, PASSWORD_BCRYPT, $options);
echo "BCrypt hash: " . substr($hash_bcrypt, 0, 40) . "...<br>";

// 4. Check if rehash is needed
echo "<br><h3>4. Password Rehashing</h3>";

if (password_needs_rehash($hashed, PASSWORD_DEFAULT)) {
    echo "Password needs rehashing<br>";
    $new_hash = password_hash($password, PASSWORD_DEFAULT);
} else {
    echo "Password hash is up to date<br>";
}

// 5. Complete user registration example
echo "<br><h3>5. Complete Registration Example</h3>";

class UserAuth {
    private $users = []; // In real app, this would be a database
    
    public function register($username, $password) {
        // Validate password strength
        if (!$this->isPasswordStrong($password)) {
            return "Password is too weak!";
        }
        
        // Hash the password
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        
        // Store user (in real app, save to database)
        $this->users[$username] = $hashed;
        
        return "User registered successfully!";
    }
    
    public function login($username, $password) {
        // Check if user exists
        if (!isset($this->users[$username])) {
            return "Invalid username or password";
        }
        
        // Verify password
        if (password_verify($password, $this->users[$username])) {
            return "Login successful!";
        } else {
            return "Invalid username or password";
        }
    }
    
    private function isPasswordStrong($password) {
        // At least 8 characters
        if (strlen($password) < 8) {
            return false;
        }
        
        // Contains uppercase letter
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        
        // Contains lowercase letter
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
        
        // Contains number
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
        
        return true;
    }
}

$auth = new UserAuth();
echo $auth->register("john_doe", "SecurePass123") . "<br>";
echo $auth->login("john_doe", "SecurePass123") . "<br>";
echo $auth->login("john_doe", "WrongPassword") . "<br>";

// 6. Password security best practices
echo "<br><h3>6. Best Practices</h3>";
echo "<strong>Password Storage:</strong><br>";
echo "✓ Always use password_hash()<br>";
echo "✓ Never store plain text passwords<br>";
echo "✓ Never use MD5 or SHA1 for passwords<br>";
echo "✓ Use PASSWORD_DEFAULT algorithm<br>";
echo "<br><strong>Password Requirements:</strong><br>";
echo "✓ Minimum 8-12 characters<br>";
echo "✓ Mix of uppercase and lowercase<br>";
echo "✓ Include numbers and special characters<br>";
echo "✓ Implement password strength meter<br>";
echo "<br><strong>Additional Security:</strong><br>";
echo "✓ Implement rate limiting<br>";
echo "✓ Use CAPTCHA for login forms<br>";
echo "✓ Enable two-factor authentication<br>";
echo "✓ Force password changes periodically<br>";
echo "✓ Prevent common passwords<br>";

// 7. Common passwords to avoid
echo "<br><h3>7. Example: Checking Common Passwords</h3>";

function isCommonPassword($password) {
    $common_passwords = [
        'password', '123456', '12345678', 'qwerty', 
        'abc123', 'password123', 'admin', 'letmein'
    ];
    return in_array(strtolower($password), $common_passwords);
}

$test_passwords = ['password', 'SecurePass123!', '123456'];
foreach ($test_passwords as $pass) {
    $common = isCommonPassword($pass);
    echo ($common ? "✗" : "✓") . " Password: $pass<br>";
}

?>
