// function to redirect page
function redirect() {
    window.location.href = "findspaces.php";
    return false;
} 

$(".events").click(function(){
    redirect();
});

// Search button functionality
function findspaces(){
    alert("Space Found");


}