<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Basics</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>PHP Basics</h1>

    <?php 
        $cars = array(array('name' => 'Ford', 'country' => 'USA', 'year' => 1988),
                array('name' => 'Mercedes', 'country' => 'Germany', 'year' => 1978),
                array('name' => 'Toyota', 'country' => 'Japan', 'year' => 1958));
    ?>

    <?php 
        echo "Car";
        echo "<ul>";
        foreach($cars as $key => $value) {
            echo "<li>". $value['name'] . " - " . $value['country'] . " - " . $value['year'] ."</li>";
        }
        echo "</ul>";
    ?>

    <hr>

    <?php 
        echo "Car";
        echo "<table>";
        echo "<tr><th>Name</th><th>Country</th><th>Year</th></tr>";
        foreach($cars as $key => $value) {
            echo "<tr><td>". $value['name'] . "</td><td>" . $value['country'] . "</td><td>" . $value['year'] ."</td></tr>";
        }
        echo "</table>";
    ?>

</body>
</html>
