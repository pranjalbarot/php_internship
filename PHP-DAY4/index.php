<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/templatemo-comparto.css" rel="stylesheet" />
    <title>home page</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IMAGE GALLARY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- main -->
        <section class="tm-mb-1" id="about">
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                    <img src="img/comparto-image-01.jpg" alt="About image" class="tm-img-responsive">
                </div>
                <article class="tm-section-1-r tm-bg-color-8">
                    <h2 class="tm-mb-2 tm-title-color">01 Image Of House</h2>
                    <p><a rel="nofollow" href="https://templatemo.com/tm-544-comparto" target="_parent">Comparto</a> is a custom light-weight CSS layout for your website. You can easily adapt and use this for your commercial or personal websites. Feel free to use it.</p>
                    <p>You cannot redistribute this template ZIP file in any template collection website. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> if you have any question.</p>
                    <p>Nunc sed gravida elit. Curabitur rutrum elit id lobortis viverra. Fusce at libero dui.</p>
                    
                    <a href="#services" class="tm-btn tm-btn-1 tm-link-to-services">More Detail</a>
                </article>
            </div>
        </section>
        <div class="tm-bg-color-1 tm-mb-1 tm-row tm-social-row">
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#services">
                        <i class="fas fa-synagogue fa-4x tm-mb-1"></i>
                        <p>Aenean vel est id massa condimentum</p>
                    </a>
                </div>
            </div>
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#gallery">
                        <i class="fas fa-chart-bar fa-4x tm-mb-1"></i>
                        <p>Suspendisse interdum lectus purus</p>
                    </a>
                </div>
            </div>
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#contact">
                        <i class="fas fa-images fa-4x tm-mb-1"></i>
                        <p>Nulla ac sodales est vel iaculis purus</p>
                    </a>
                </div>
            </div>
        </div>
        <section class="tm-mb-1 tm-row tm-services-row" id="services">
            <div class="tm-section-2-l">
                <article class="tm-bg-color-6 tm-box-pad tm-mb-1">
                    <h2 class="tm-mb-2">Image of working girl</h2>
                    <p>Cras tempus, velit amet facilisis venenatis, erat felis imperdiet lectus, at posuere elit metus. Title #333 BG #F2F2F2</p>
                    <p class="tm-mb-0">Nam iaculis, urna ut laoreet aliquam, massa magna dapibus. Text #666</p>
                </article>
                <div class="tm-bg-color-7 tm-em-box">
                    <p class="tm-text-color-2">Nam iaculis, urna ut laoreet aliquam, massa magna dapibus nibh, at pellentesque lectus odio non risus. Nulla ac sodales est, vel iaculis. Text #333 . BG #DDD</p>
                    <a href="#gallery" class="tm-btn tm-btn-2">Read More</a>
                </div>
            </div>
            <div class="tm-section-2-r">
                <img src="img/comparto-image-02.jpg" alt="Services image" class="tm-img-responsive">
            </div>
        </section>

        <!-- gallary -->
        <?php
       include 'gallery.php';
       ?>

        <!-- contact us -->
       <?php
       include 'contact.php';
       ?>
        <div class="tm-mb-4 text-center tm-social-s">
            <a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
            <a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
            <a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
            <a href="https://youtube.com" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
        </div>
        <footer class="text-center tm-mb-1">
            <p>Copyright &copy; 2020 Comparto Studio 
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </footer>
    </div> 
    <script src="js/jquery.min.js"></script> <!-- https://jquery.com/download/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script>

        // Scroll to Top button
        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });

        // DOM is ready
        $(function () {
            // Single Page Nav
            $('#tm-nav').singlePageNav({ speed: 600 });

            // Smooth Scroll (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 600, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });

            /* Isotope Gallery */

            // init isotope
            var $gallery = $(".tm-gallery").isotope({
                itemSelector: ".tm-gallery-item",
                layoutMode: "fitRows"
            });
            // layout Isotope after each image loads
            $gallery.imagesLoaded().progress(function () {
                $gallery.isotope("layout");
            });

            $(".filters-button-group").on("click", "a", function () {
                var filterValue = $(this).attr("data-filter");
                $gallery.isotope({ filter: filterValue });
            });

            $(".tabgroup > div").hide();
            $(".tabgroup > div:first-of-type").show();
            $(".tabs a").click(function (e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this
                        .closest("li")
                        .siblings()
                        .children("a"),
                    target = $this.attr("href");
                others.removeClass("active");
                $this.addClass("active");
            });
        });
    </script>
</body>
</html>