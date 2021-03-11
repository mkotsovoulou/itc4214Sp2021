<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Car listings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<h1>
    Our car listings
</h1>

<?php
include('database.php');

foreach ($cars as $car) {
    echo '<img src="' .$car["photo"] . '" width="100px"/>';
    echo "<h1>" . $car["model"] . "</h1>" ;
    echo "<p>" . $car["year"] . " Doors:" . $car["doors"] . " Color:" . $car["colour"] . "</p>" ;
    echo '<br>';
}

?>

</body>
</html>
