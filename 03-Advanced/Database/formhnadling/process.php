<?php
// 1. Initialize variables
$name = $email = $gender = $message = "";
$nameErr = $emailErr = $genderErr = $msgErr = "";
$success = false;

// 2. Sanitize function
function test_input($data) {
    $data = trim($data);           // remove extra spaces
    $data = stripslashes($data);   // remove backslashes
    $data = htmlspecialchars($data); // prevent HTML injection
    return $data;
}

// 3. Process only on POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- Name validation ---
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // --- Email validation ---
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // --- Gender validation ---
    if (empty($_POST["gender"])) {
        $genderErr = "Please select a gender";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // --- Message validation (optional) ---
    if (!empty($_POST["message"])) {
        $message = test_input($_POST["message"]);
        if (strlen($message) > 250) {
            $msgErr = "Message must be 250 characters or less";
        }
    }

    // --- Success check ---
    if (!$nameErr && !$emailErr && !$genderErr && !$msgErr) {
        $success = true;
    }
}
?>

<?php if ($success): ?>
  <p style="color:green">
    Submitted! Name: <?php echo $name; ?>,
    Email: <?php echo $email; ?>,
    Gender: <?php echo $gender; ?>
  </p>
<?php endif; ?>