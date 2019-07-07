<?php
require_once 'php/connection.php';
include 'includes/i_head.php';
include 'includes/navigation.php';
error_reporting(0);

$sql = "SELECT * FROM event_type";
$events = $dbc->query($sql);

if ($_POST['submit']) {
    header("location:findspaces.php");

    $event = $_POST['Event'];
    $region = $_POST['Region'];

    // code... 
}


// Filter Data code 

if (isset($_POST['submit'])) {
    $selected_val = $_GET['Event'];
    $sql_filter = "SELECT * FROM event_type WHERE EVENT_TYPE LIKE '" . $selected_val. "'";
    $events = $dbc->query($sql_filter);

    echo " <script> update(); </script> ";
}
    




// code...
?>

<!-- navbar and background -->
<div class="container-fluid fluid">
    <!-- Header intros -->
    <div class="text-white intro pt-6">
        <center>
            <h1 style="font-family: Times New Roman; font-size: 50; padding-top: 100px;">Welcome to PataSpace</h1>
        </center><br>
        <center>
            <h3>Making your dream events come true.</h3>
        </center><br>
        <center>
            <h3>Discover and book unique places for your upcoming activities.</h3>
        </center>

        <div class="row mt-5 col-sm-12" style="padding-bottom: 100px;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" id="index_form">
                <select class="form-control" id="Event" name="Event">
                    <option value="1">Weddings</option>
                    <option value="2">Meetings</option>
                    <option value="3">Workshops</option>
                    <option value="4">Parties</option>
                    <option value="5">Perfomances</option>
                    <option value="6">Launches</option>
                    <option disabled selected>Choose the event you want to have.</option>
                </select>

                <select class="form-control" id="Region" name="Region">
                    <option value="1">Nairobi</option>
                    <option value="2">Nakuru</option>
                    <option value="3">Mombasa</option>
                    <option value="4">Machakos</option>
                    <option value="4">Nyeri</option>
                    <option disabled selected>Choose the region you are in.</option>
                </select>

                <button class="btn btn-outline-info form-control" style="float: left;" type="submit" id="filterSpaces">Search</button>
            </form>


        </div>
        <div class="form-group" style="float: right;">
            <!-- <input class="btn btn-outline-info form-control" type="submit" name="submit" value="Search"> -->

        </div>
        </form>
    </div>
</div>

<center>
    <h1 class="mt-3" style="font-family: Times New Roman;">Popular Activities</h1>
</center>

<div class="row mt-3 col-sm-12" id="events_div">
    <?php while ($event_ty = mysqli_fetch_assoc($events)) : ?>
        <div class="col-sm-4">
            <div class="card events" id="eventsimg">
                <img src="<?= $event_ty['IMAGE']; ?>" class="imgs">
                <h4 class="text-white eventstext" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><?= $event_ty['EVENT_TYPE']; ?></h4>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<div class="card helpcard mt-5">
    <div class="row mt-2">
        <div class="col-sm-12">
            <center>
                <h3 class="titlesfont">How it works</h3>
            </center>
        </div>
    </div>
    <div class="row col-sm-12 p-2">
        <div class="col-sm-4">
            <i class="fa fa-search" style="font-size: 60px; color: grey;"></i><br>
            <p>Easily Search for the venue <br> based on the county you wish to hold the event in.</p>
        </div>
        <div class="col-sm-4">
            <i class="fa fa-calendar" style="font-size: 60px;color: grey; text-align: center;"></i><br>
            <p>Book an ideal space at the time you desire</p>
        </div>
        <div class="col-sm-4">
            <i class="fa fa-comments-o" style="font-size: 60px;color: grey;"></i><br>
            <p>Enables you to interact with the customer service of the venues selected .</p>
        </div>
    </div>

    <footer class="text-center" id="footer">&copy; Copyright 2018-2019 Pataspace</footer>
    <script type="text/javascript">
        // function to redirect page
        function redirect() {
            window.location.href = "findspaces.php";
            return false;
        }

        $(".events").click(function() {
            redirect();
        });

        // Search button functionality

        function searchEvents(c){
        
        }

        function update() {
            // $.get("index.php", function(data) {
            //     $("#events_div").html(data);
            //     window.setTimeout(update, 10000);
            // });
            $("#events_div").load(location.href + " #events_div");
            alert("updated...");
        }
    </script>
</div>
</body>

</html>