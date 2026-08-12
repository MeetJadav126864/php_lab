<!DOCTYPE html>
<html>
<head>
    <title>Navigation Menu with AJAX</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>

<nav>
    <a href="#" class="menu" data-page="home.php">Home</a>
    <a href="#" class="menu" data-page="about.php">About</a>
</nav>

<div id="content">
    <h2>Welcome</h2>
    <p>Click a menu item to load content.</p>
</div>

<script>
$(document).ready(function(){

    $(".menu").click(function(e){
        e.preventDefault();

        let page = $(this).data("page");

        $("#content").load(page);
    });

});
</script>

</body>
</html>
