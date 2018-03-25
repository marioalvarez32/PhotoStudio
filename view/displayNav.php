<nav>
    <div id="nav">
        <img id="nav-background" src="Images/nav.png">
        <div class="row">
            <div class="col-md-4 nav-content">
                <p>xdddd</p>
            </div>
            <div class="col-md-4 nav-content">
                <a href="index.php?"><img id="nav-logo" src="Images/Logo.svg"></a>
            </div>
            <div class="col-md-4 nav-content">
                <p>Col 1</p>
            </div>
        </div>
    </div>
    <?php
    if ($ref == 'home') {
        ?>
        <div class="header">
            <img id="background" src="Images/background.png">
            <div class="fullscreen-bg">

                <iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>

                <!--
                <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
                    <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
                    <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
                </video>
                -->
            </div>
            <img id="logo" src="Images/logo.svg">
        </div>
        <?php
    }
    ?>
</nav>
