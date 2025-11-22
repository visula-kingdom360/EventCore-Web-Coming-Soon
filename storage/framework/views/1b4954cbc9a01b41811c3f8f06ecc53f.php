<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!--- basic page needs -->
    <meta charset="utf-8">
    <title>Dazzle</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <section id="home" class="home-video">
        <video autoplay muted loop playsinline id="bg-video">
            <source type="video/mp4">
        </video>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const video = document.getElementById('bg-video');
            const source = video.querySelector('source');

            if (window.innerWidth <= 768) {
                source.src = 'videos/video-mobile.mp4';
            } else {
                source.src = 'videos/video.mp4';
            }

            video.load();

            const homeSection = document.getElementById("home");

            // Redirect to Google Form when clicking "Join Now"
            homeSection.addEventListener("click", function() {
                window.open(
                    "https://docs.google.com/forms/d/e/1FAIpQLScSpLsrCKaiz4yAxyIQNU_FsZoaUZljjQjyp7uVQVYDtNAdgg/viewform?usp=header",
                    "_blank");
            });

        });
        document.addEventListener("DOMContentLoaded", () => {
            const vidMobile = document.getElementById("bg-video-mobile");
            console.log("Mobile video detected:", vidMobile);

            vidMobile.addEventListener("error", (e) => {
                console.error("Mobile video error:", e);
            });
        });
    </script>

    <!-- Java Script -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<?php /**PATH D:\KDM360\Wedding Apps\web-site\resources\views/welcome.blade.php ENDPATH**/ ?>