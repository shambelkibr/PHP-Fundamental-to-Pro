<?php
/**
 * Database Connection with PDO
 * 
 * PDO (PHP Data Objects) provides a consistent interface for accessing databases.
 */

echo "<h2>Database Connection with PDO</h2>";

// Database configuration
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = '';

echo "<h3>1. Basic Connection</h3>";
try {
    // Create PDO connection
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "✓ Connected to database successfully!<br>";
    
} catch (PDOException $e) {
    echo "✗ Connection failed: " . $e->getMessage() . "<br>";
    die();
}

echo "<br><h3>2. Connection Options Explained</h3>";
echo "<strong>PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION</strong><br>";
echo "- Throws exceptions on errors<br>";
echo "<strong>PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC</strong><br>";
echo "- Returns associative arrays by default<br>";
echo "<strong>PDO::ATTR_EMULATE_PREPARES => false</strong><br>";
echo "- Uses real prepared statements<br>";

echo "<br><h3>3. Creating a Database Connection Class</h3>";
class Database {
    private $host = 'localhost';
    private $dbname = 'test_db';
    private $username = 'root';
    private $password = '';
    private $pdo;
    
    public function connect() {
        if ($this->pdo === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
            } catch (PDOException $e) {
                throw new Exception("Connection failed: " . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}

// Usage
$db = new Database();
$connection = $db->connect();
echo "✓ Connected using Database class<br>";

echo "<br><h3>4. Different Database Drivers</h3>";
echo "<strong>MySQL:</strong> mysql:host=localhost;dbname=test<br>";
echo "<strong>PostgreSQL:</strong> pgsql:host=localhost;dbname=test<br>";
echo "<strong>SQLite:</strong> sqlite:/path/to/database.db<br>";

echo "<br><h3>5. Security Best Practices</h3>";
echo "✓ Store credentials in environment variables or config files<br>";
echo "✓ Never commit credentials to version control<br>";
echo "✓ Use prepared statements to prevent SQL injection<br>";
echo "✓ Set appropriate error reporting (don't expose details in production)<br>";

?>
