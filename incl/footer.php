<footer class="">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col">
                <h4 class="brown-orange text-center notranslate"> الله </h4>
                <p class="f-42 b-700 cinzel text-center">Newsletter</p>
                <p class="b-400 grey text-center">Subscribe our mailing list</p>
                <div class="col-lg-7 col-md-7 col-sm-12 m-auto">
                    <div class="input-group mb-1">
                        <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="terms">
                        <label class="form-check-label" for="terms">
                            I have read and agree to the <a href="#">terms & conditions</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row justify-content-center py-5">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <p class="cinzel text-center b-700 f-22">Menu</p>
                <ul class="list-unstyled text-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <p class="cinzel text-center b-700 f-22">Services</p>
                <ul class="list-unstyled text-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <p class="cinzel text-center b-700 f-22">Contact</p>
                <ul class="list-unstyled text-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <p class="cinzel text-center b-700 f-22">Social</p>
                <ul class="list-unstyled text-center">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-5 ">
        <p class="grey">Copyright © <?php echo date("Y"); ?> by Mosque. All rights reserved.</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    // Scrolling Effect
    $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })
</script>
<script>
    var items = document.querySelectorAll(".nav-link");
    var ind = document.querySelector(".indicator");

    function handleIndicator(el) {
        ind.style.width = el.offsetWidth + "px";
        ind.style.left = el.offsetLeft + "px";
    }
    items.forEach(function(item, index) {
        item.addEventListener("mousemove", function(e) {
            handleIndicator(e.target);
        });
    });
</script>
</body>

</html>