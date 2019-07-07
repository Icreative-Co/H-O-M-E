<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    $q = intval($_GET['q']);

    
    $con = mysqli_connect('localhost', 'root', '', 'pata_space');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "event_types");
    $sql = "SELECT * FROM event_type WHERE ID = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>ID</th>
<th>EVENT_TYPE</th>
<th>IMAGE</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['EVENT_TYPE'] . "</td>";
        echo "<td><img style='height: 50px; width: 70px;' src='" . $row['IMAGE']."'></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>