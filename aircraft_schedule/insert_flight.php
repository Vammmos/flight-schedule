<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aircraft_name = trim($_POST['aircraft_name']);
    $departure_location = trim($_POST['departure_location']);
    $destination = trim($_POST['destination']);
    $departure_time = trim($_POST['departure_time']);

    $stmt = $conn->prepare("INSERT INTO Flights (aircraft_name, departure_location, destination, departure_time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $aircraft_name, $departure_location, $destination, $departure_time);

    if ($stmt->execute()) {
        header("Location: success.html");
    } else {
        echo "<p style='color:red;'>Error: " . htmlspecialchars($stmt->error) . "</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
