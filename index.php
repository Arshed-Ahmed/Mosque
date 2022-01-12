<?php include 'incl/header.php'; ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/slider1.jpg" class="d-block w-100" alt="Madina Mosque">
            <div class="carousel-caption d-none d-md-block" style="bottom: 27%;">
                <h1 class="brown-orange"> الله </h1>
                <p class="caption-header">"And Allah invites to the<br>Home of Peace"</p>
                <h4 class="roboto b-400 grey">Surah Yunus, Verse 25</h4>
                <button class="btn btn-warning m-4 px-4 py-2" style="color: white;" onclick="window.location.href='register.php'">Become a member</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/slider2.jpg" class="d-block w-100" alt="Qur'an">
            <div class="carousel-caption d-none d-md-block" style="bottom: 27%;">
                <h1 class="brown-orange"> الله </h1>
                <p class="caption-header">Women Qur'an class Every Friday night</p>
                <h4 class="roboto b-400 grey">Between Maghrib and Isha</h4>
                <button class="btn btn-warning m-4 px-4 py-2" style="color: white;">Learn more</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/slider3.jpg" class="d-block w-100" alt="Qur'an">
            <div class="carousel-caption d-none d-md-block" style="bottom: 27%;">
                <h1 class="brown-orange"> الله </h1>
                <p class="caption-header">Sirath Rasul Allah Every 2nd & 4th Friday</p>
                <h4 class="roboto b-400 grey">After Maghrib Prayers</h4>
                <button class="btn btn-warning m-4 px-4 py-2" style="color: white;" onclick="window.location.href='register.php'">Become a member</button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 py-5">
            <script type="text/javascript" src="http://www.muslimpro.com/muslimprowidget.js?cityid=1248991&width=400" async></script>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 prayertime-next-div">
            <h1 class="brown-orange"> الله </h1>
            <p class="cinzel f-35 maroon b-700">Welcome to the Mosque</p>
            <p class="dark-grey">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio adipisci velit eaque vitae voluptatibus voluptate quo nesciunt, nulla at deleniti! Libero beatae, eius inventore reiciendis voluptatem cupiditate qui ducimus numquam nisi et nemo neque ipsam nesciunt officia odit omnis magnam. Distinctio, deleniti natus. Officia tempora veniam porro mollitia sint dolores quas itaque numquam ipsam architecto, neque ab est sunt esse sit consequuntur, minus minima magni.
            </p>
            <button class="btn btn-success mx-0 my-4 px-4 py-2" style="color: white;" onclick="window.location.href='#'">Donate</button>
        </div>
    </div>
</div>

<?php include 'incl/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('.nav-item').removeClass('active');
        $('#home').addClass('active');
    });
</script>