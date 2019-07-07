<!-- Frank Stein Edits -->
<!DOCTYPE html>
<html>

<body>

    <?php
    // gets the passed filter variable
    $q = strval($_GET['q']);


    $con = mysqli_connect('localhost', 'root', '', 'pata_space');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "find_spaces");

    // first filter based on filter name (_only event_type..now)
     if ($q == "All") {
        $sql = "SELECT * FROM find_spaces";
    } else {
        $sql = "SELECT * FROM find_spaces WHERE NAME_ LIKE '" . $q . "'";
    }


    $result = mysqli_query($con, $sql);
    $total_rows = mysqli_num_rows($result);

    // if an error occurs
    if (!$result) {
    // printf("Error: %s\n", mysqli_error($con));
        echo "<h3 style='Font-Family: Segoe UI Light;'>Oops....An error occured on our end :(</h3>";
        exit();
    }

    // if no data is found based on the selected filter
    if ($total_rows == 0) {
        echo "<h3 style='Font-Family: Segoe UI Light;'>Sorry...No available spaces</h3>";
        exit();
    }

    echo "<div id='events_showing'>";
    echo "<p>" . $total_rows . " out of 50 showing</p></div>";
    echo '<div class="row col-sm-12"  id="spaces_listing">';

    // looping through the data while creating the cards...
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='col-sm-3' style='margin-top: 10px;'> <div class='card' id='vcard'>";
        echo "<img src='" . $row['IMAGE'] . "'>";
        echo "<p id='vname'>Name: " . $row['NAME_'] . "</p>";
        echo "<p id='vprice'>Pricing: " . $row['PRICING'] . "</p>";
        echo "<p id='vlocation' class='lg-0'>Location: " . $row['EVENT_LOCATION'] . "</p>";
        echo "<p id='vlocation'>Rating: " . $row['RATING'] . "</p>";
        echo "</div></div>";
    }

    mysqli_close($con);
    ?>


</body>

</html>