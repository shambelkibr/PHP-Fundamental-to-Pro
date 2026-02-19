<?php
/**
 * Singleton Design Pattern
 * 
 * Ensures a class has only one instance and provides a global point of access to it.
 */

echo "<h2>Singleton Design Pattern</h2>";

echo "<h3>1. Basic Singleton Implementation</h3>";

class DatabaseConnection {
    private static $instance = null;
    private $connection;
    
    // Private constructor prevents direct instantiation
    private function __construct() {
        echo "→ Creating new database connection...<br>";
        // Simulated connection
        $this->connection = "Connected to database";
    }
    
    // Prevent cloning
    private function __clone() {}
    
    // Prevent unserialization
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
    
    // Get the single instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function query($sql) {
        return "Executing: $sql";
    }
}

// Usage
$db1 = DatabaseConnection::getInstance();
echo $db1->query("SELECT * FROM users") . "<br>";

$db2 = DatabaseConnection::getInstance();
echo $db2->query("SELECT * FROM posts") . "<br>";

// Both variables reference the same instance
echo "Are they the same instance? " . ($db1 === $db2 ? "Yes" : "No") . "<br>";

echo "<br><h3>2. Practical Example: Configuration Manager</h3>";

class Config {
    private static $instance = null;
    private $settings = [];
    
    private function __construct() {
        // Load configuration
        $this->settings = [
            'app_name' => 'My Application',
            'version' => '1.0.0',
            'debug' => true,
            'database' => [
                'host' => 'localhost',
                'name' => 'myapp_db'
            ]
        ];
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function get($key) {
        return $this->settings[$key] ?? null;
    }
    
    public function set($key, $value) {
        $this->settings[$key] = $value;
    }
}

// Usage
$config = Config::getInstance();
echo "App Name: " . $config->get('app_name') . "<br>";
echo "Version: " . $config->get('version') . "<br>";

// Setting a value
$config->set('timezone', 'UTC');

// Getting from another part of code
$config2 = Config::getInstance();
echo "Timezone: " . $config2->get('timezone') . "<br>";

echo "<br><h3>3. Benefits and Use Cases</h3>";
echo "<strong>Benefits:</strong><br>";
echo "✓ Controlled access to single instance<br>";
echo "✓ Reduced memory footprint<br>";
echo "✓ Global access point<br>";
echo "✓ Lazy initialization<br>";
echo "<br><strong>Use Cases:</strong><br>";
echo "• Database connections<br>";
echo "• Configuration managers<br>";
echo "• Logging services<br>";
echo "• Cache managers<br>";

echo "<br><h3>4. Cautions</h3>";
echo "⚠ Can make unit testing difficult<br>";
echo "⚠ Can hide dependencies<br>";
echo "⚠ May violate Single Responsibility Principle<br>";
echo "⚠ Consider dependency injection as alternative<br>";

?>
