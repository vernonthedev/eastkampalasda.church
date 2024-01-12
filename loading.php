<!-- loading.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Hide scroll bars when preloader is displayed */
        }

        .preloader {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f1f2f3;
            z-index: 9999;
        }

        .preloader img {
            width: 50px; /* Adjust the width and height as per your GIF dimensions */
            height: 50px;
        }
    </style>
</head>
<body>

<div class="preloader" id="preloader">
    <img src="assets/images/logo-black.png" alt="Seventh-day Adventist East Kampala Logo" width="100%"/><br>  
    <img src="assets/preloader.gif" alt="Loading...">
</div>

<script>
    window.addEventListener("load", function () {
        // Hide the preloader when the page is fully loaded
        var preloader = document.getElementById("preloader");
        preloader.style.display = "none";
        document.body.style.overflow = "auto"; /* Restore scroll bars after preloader is hidden */
    });
</script>

</body>
</html>
