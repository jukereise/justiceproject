<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/justice_project/style.css">
<title>ANTI AMERICAN DYSTOPIA</title>
</head>
<body>

<div>this exists because i</div>, <div>an kid want more teachers and</div> <br>
<div>lawmakers to realize making thinks</div> <div>that limit freedom of speech</div><br>

<?php
$filename = __DIR__ . "/clickcount.txt";  // safer path

// Create the file if it doesn't exist
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// Detect click
if (true) {
    // Read current value
    $count = (int)file_get_contents($filename);

    // Increment
    $count++;

    // Save updated count
    file_put_contents($filename, $count);
} else {
    // Read current count without increment
    $count = (int)file_get_contents($filename);
}

echo "<p>this project has <strong>$count</strong> helpers</p>";
?>
<br>
<div><h1> why i want this to work:</h1></div><div>imagine if your teachers bans saying """anti teacher things"""</div><br>
<div>you would be very upset, right</div><div> you would start protesting, right, thats my goal for the world</div><br>
<div> share this website with others if you</div><div> appreciate my goal for the people to get sensitized to this problem</div><br>

</body>
</html>
