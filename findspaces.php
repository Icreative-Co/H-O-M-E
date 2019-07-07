<!-- Frank Stein Edits -->
<?php
include 'includes/f_head.php';
include 'includes/navigation.php';
?>

<head>
    <script>
        // function uses ajax to communicate with the php file and pass the filter variable
        function showUser(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("events").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "php/spaces.php?q=" + str, true);
            xmlhttp.send();
        }
        showUser("All");
    </script>
</head>
<div class="mt-5">
    <nav class="navbar navbar-expand-lg  navbar-light text-dark" id="filter_nav">
        <a href="#" class="navbar-brand">Filters</a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" aria-expanded="false" data-target="#Filter" id="filter_btn"><span class="navbar-toggler-icon"></span></button>

        <div id="Filter" class="navbar navbar-collapse navbar-toggleable-xs">
            <ul class="nav navbar-nav">
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Price per hour<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="dropdown-item">Kshs.2500-5000</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Kshs.5001-10,000</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Kshs.10001-20,000</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Kshs.20000-30000</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Kshs.30000-50000</a></li>
                    </ul>


                </li>
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Atendees<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="dropdown-item">10-60</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">61-100</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">101-200</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">201-400</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">401+</a></li>
                    </ul>


                </li>
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Venue Type<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="dropdown-item">Garden/Outdoor</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Bar</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Hall</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Boardroom</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Beachside</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Hotel setting</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Lakeyard</a></li>
                    </ul>


                </li>
                <li class="dropdown nav-item">
                    <a id="event_type" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Event Type<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="dropdown-item">Workshops</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Wedding</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Meeting</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Launch</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Parties</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Graduations</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">All</a></li>
                    </ul>


                </li>
                <li class="dropdown nav-item ">
                    <a id="location" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Venue location<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="dropdown-item">Nairobi</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Nakuru</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Mombasa</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Machakos</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Nyeri</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a href="#" class="dropdown-item">Kiambu</a></li>
                    </ul>


                </li>
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Others<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <div class="">
                            <li><a href="#" class="dropdown-item " id="accomadation">Accomodation<span class="caret"></span></a>

                                <input type="radio" name="acc_answer" value="no" class="ml-4" checked>No<br>
                                <input type="radio" name="acc_answer" value="yes" class="ml-4">Yes
                        </div>
                </li>
                <div class="dropdown-divider"></div>
                <div class="">
                    <li><a href="#" class="dropdown-item " id="catering">Catering<span class="caret"></span></a>

                        <input type="radio" name="cat_answer" value="no" class="ml-4" checked>No<br>
                        <input type="radio" name="cat_answer" value="yes" class="ml-4">Yes
                </div>
                </li>
                <div class="dropdown-divider"></div>
            </ul>


            </li>
            <div class="form-inline my-lg-0 my-2 ">
                <!-- <form class="form-inline my-lg-0 my-2 "> -->
                <!-- <input id="search_txt" type="search" name="search" placeholder="Search" aria-label="Search" class="form-control "> -->
                <input id="search_txt" type="text" placeholder="Search" class="form-control">
                <button id="search_btn" style="margin-left: 5px;" class="btn btn-outline-success">Find Space</button>
            </div>
            </ul>
        </div>
    </nav>
</div>

<div id="events"></div>

<footer style="float: bottom;" class="mt-5">&copy; Copyright 2018-2019 Pataspace </footer>

<script type="text/javascript">
    function search() {
        alert("Search Clicked");
        console.log('Clicked Button');
    }

    // drop down functions...
    $('.dropdown-menu li a').click(function() {
        $(this).text($(this).text());

        var eventt = $(this).text();

        $(this).text(eventt);

        showUser(eventt);
    });

    // search function
    $('#search_btn').click(function() {
        var text = $('#search_txt').val();
        // alert(text);
        showUser(text);
    });
</script>
</body>

</html>