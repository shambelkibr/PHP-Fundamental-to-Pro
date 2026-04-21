## Lab Practice Questions

### 1. Write PHP code to read JSON file

```php
<?php
// Step 1: Read the JSON file
$jsonData = file_get_contents("data.json");

// Step 2: Decode JSON into a PHP associative array
$dataArray = json_decode($jsonData, true);

// Step 3: Access the data
echo "Name: " . $dataArray['name'] . "<br>";
echo "Age: " . $dataArray['age'] . "<br>";
echo "City: " . $dataArray['city'];
?>
```

---

### 2. Write data into a JSON file using file_put_contents()

```php
<?php
// Data to write
$data = [
    "employees" => [
        ["firstName" => "John", "lastName" => "Doe"],
        ["firstName" => "Anna", "lastName" => "Smith"],
        ["firstName" => "Peter", "lastName" => "Jones"]
    ]
];

// Convert to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write into a JSON file
file_put_contents("employees.json", $jsonData);

echo "Data successfully written to employees.json";
?>
```

---

### 3. Write data into a JSON file using fopen() and fwrite()

```php
<?php
$data = [
    "id" => 1,
    "name" => "Aster",
    "role" => "Developer"
];

$jsonData = json_encode($data);

$file = fopen("user.json", "w");
fwrite($file, $jsonData);
fclose($file);

echo "Data written to user.json";
?>
```

---

### 4. HTML Form and PHP File Handling

#### Form.html

````html
<form action="file.php" method="post">
  First Name:<input type="text" name="fname" /><br />
  Second Name:<input type="text" name="lname" /><br />
  Email:<input type="text" name="email" /><br />
  <input type="submit" name="submit" value="Submit" />
</form>
``` #### file.php ```php <?php $fname=$_POST["fname"]; $lname=$_POST["lname"];
$mail=$_POST["email"]; $fh= fopen("guest.txt", "w+"); if(!$fh) echo "the info is
not saved, the file doesn't exists"; else { fwrite($fh,
$fname."\t".$lname."\t".$mail."\t"); echo "<br />"; echo "your data is
Saved!!"."<br />"; fclose($fh); } ?>
````

---

### Note

Practice reading and writing XML files on your own.

---

### 5. Smart Agriculture IoT Project (DBU)

Debre Berhan University (DBU) has four research centers:

- Livestock
- Soil
- Shewarobit
- Ankober

The centers coordinator has planned to deploy IoT sensors to monitor soil moisture, temperature, and humidity in different plots of land. The data will be sent periodically to a central server.

As a Software Engineer, design a MySQL database and write PHP code to:

- Insert new sensor readings
- Display the latest 10 readings
- Display average temperature, humidity, and soil moisture for each plot

Practice both procedural and object-oriented programming styles in PHP.

---

### Step 1: Create Database

```sql
CREATE DATABASE smart_farm;
```

---

### Step 2: Create sensor_data table

```sql
CREATE TABLE sensor_data (
id INT AUTO_INCREMENT PRIMARY KEY,
plot_id VARCHAR(10) NOT NULL,
temperature FLOAT NOT NULL,
humidity FLOAT NOT NULL,
soil_moisture FLOAT NOT NULL,
timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

---

### PHP Code (Insert and Retrieve Data)

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_farm";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sensor_data (plot_id, temperature, humidity, soil_moisture)
VALUES ('P1', 25.5, 60, 40)";

if (mysqli_query($conn, $sql)) {
echo "New sensor record inserted successfully<br>";
} else {
echo "Error: " . mysqli_error($conn);
}

$result = mysqli_query($conn, "SELECT * FROM sensor_data ORDER BY timestamp DESC LIMIT 10");

echo "<h2>Latest Sensor Readings</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Plot</th>
<th>Temperature (°C)</th>
<th>Humidity (%)</th>
<th>Soil Moisture (%)</th>
<th>Timestamp</th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['plot_id']."</td>
<td>".$row['temperature']."</td>
<td>".$row['humidity']."</td>
<td>".$row['soil_moisture']."</td>
<td>".$row['timestamp']."</td>
</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
```

---

**Have a nice code!! 🚀**
