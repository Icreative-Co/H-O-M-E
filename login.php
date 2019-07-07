<html>

<head>
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "php/search.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>

            <option value="WEDDING">WEDDING</option>
            <option value="LAUNCHER">LAUNCHER</option>
            <option value="1003">Joseph Swanson</option>
            <option value="1004">Glenn Quagmire</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>EVENTS</b></div>

</body>

</html>