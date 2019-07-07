<!-- Frank Stein Edits -->
<!--
Create a table called `find_spaces`
find Screenshot in screenshot folder
-->
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


    // Category filter
    $category = substr($q, 0, 1);
    $filter = substr($q, 1);

    // first filter based on filter name (_only event_type..now)
     if ($q == "1All") {
        $sql = "SELECT * FROM find_spaces";
    } else {
        switch(intval($category)){
            case 1:
                $sql = "SELECT * FROM find_spaces WHERE NAME_ LIKE '".$filter."'";
                break;
            case 2:
                $range = explode("-", $filter);
                $sql = "SELECT * FROM find_spaces WHERE PRICING BETWEEN '".$range[0]."' AND '".$range[1]."'";
                break;
            case 3:
                $sql = "SELECT * FROM find_spaces WHERE VENUE_TYPE LIKE '" . $filter . "'";
                break;
            case 4:
                $sql = "SELECT * FROM find_spaces WHERE LOCATION_ LIKE '" . $filter."'";
                break;
            case 5:
                $range = explode("-", $filter);
                $sql = "SELECT * FROM find_spaces WHERE MAX_CAPACITY BETWEEN '" . $range[0] . "' AND '" . $range[1] . "'";
                break;
            default:
                $sql = "SELECT * FROM find_spaces";
        }
        
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
    // index counter
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