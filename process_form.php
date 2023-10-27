<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $dob = $_POST["dob"];

        echo "<p>Name: $name</p>";
        echo "<p>Surname: $surname</p>";
        echo "<p>Date of Birth: $dob</p>";
    }
    ?>
</body>
</html>
