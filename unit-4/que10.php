<?php
// 4.10 Edit profile page for a logged-in user
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: 4.9_login_authentication.php");
    exit;
}

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_SESSION["user_id"];
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");

    $stmt = $conn->prepare(
        "UPDATE users SET username = ?, email = ? WHERE id = ?"
    );
    $stmt->bind_param("ssi", $username, $email, $userId);

    if ($stmt->execute()) {
        $_SESSION["username"] = $username;
        $message = "Profile updated successfully.";
    } else {
        $message = "Unable to update profile.";
    }
    $stmt->close();
}

$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$profile = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Profile</title></head>
<body>
<h2>Edit Profile</h2>

<?php if ($message): ?>
    <p><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username"
           value="<?php echo htmlspecialchars($profile["username"] ?? ""); ?>" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email"
           value="<?php echo htmlspecialchars($profile["email"] ?? ""); ?>" required>
    <br><br>

    <button type="submit">Update Profile</button>
</form>

<br>
<a href="4.9_home.php">Back to Home</a>
</body>
</html>