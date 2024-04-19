<? include_once("includes/pagesource.php"); ?>

<body>
    <? include_once("includes/header.php"); ?>
    <div class="container-fluid inner-banenr banner p-0">
        <img src="images/banner-4.jpg" class="ban-bk">
        <div class="container position-relative h-100" style="z-index: 1;">
            <div class="row align-items-center h-100">
                <div class="col-12 col-md-6 banner-content">
                    <div>
                        <h2 class="animate__zoomIn animate__animated wow animated" style="visibility: visible; animation-name: zoomIn;">Contact Us</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-6 position-relative service-main-wrap">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 service-list-wrap contact-link">
                    <div class="service-list-box animate__fadeInUp animate__animated wow ">
                        <img src="images/locator.png">
              
                        <div>
                            <p>Kolkata - 700081</p>
                        </div>
                    </div>
                    <div class="service-list-box animate__fadeInUp animate__animated wow ">
                        <img src="images/locator.png">
   
                        <div>
                            <p>Mumbai - 741203</p>
                        </div>
                    </div>
                    <div class="service-list-box animate__fadeInUp animate__animated wow ">
                        <img src="images/call.png">

                        <div>
                            <p>
                                +91 62940 68029<br>
                                +91 98513 09616</p>
                        </div>
                    </div>
                    <div class="service-list-box animate__fadeInUp animate__animated wow ">
                        <img src="images/mail.png">
             
                        <div>
                            <p>busines@v-class.com<br>
                                support@v-class.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid reach-us py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 main-heaing">
                    <h2 class="animate__fadeInUp animate__animated wow text-center ">Get In <span>Touch</span></h2>
                </div>
                <div class="col-12 col-md-8 offset-md-2 getfrm ">
                    <form id="contactForm" class="row m-0 p-0" action="contact_message_process.php" method="POST">
                        <div class="col-12 form-group animate__fadeInUp animate__animated wow ">
                            <div class="col-12 input-from-group rounded">

                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12 form-group animate__fadeInUp animate__animated wow ">
                            <div class="col-12 input-from-group rounded">

                                <input type="text" class="form-control" id="cemail" name="cemail" placeholder="Email Id">
                            </div>
                        </div>
                        <div class="col-12 form-group animate__fadeInUp animate__animated wow ">
                            <div class="col-12 input-from-group rouned">

                                <input type="text" class="form-control" id="cphone" name="cphone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-12 form-group animate__fadeInUp animate__animated wow ">
                            <div class="col-12 input-from-group ">
                                <textarea class="form-control msg" rows="4" id="ccomment" name="ccomment" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 mb-0 form-group text-center  mt-4 mt-md-0">
                            <a type="submit" class="main-btn-red animate__fadeInUp animate__animated wow animated" id="submit" style="visibility: visible; animation-name: fadeInUp;"><span class="position-relative">Send</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/odometer.js"></script>
<script src="js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script>
    $(document).ready(function() {
        $('.has-arrow').click(function() {
            if ($(this).hasClass("active")) {
                $(".sub-ui").slideUp();
                $(".has-arrow").removeClass("active");
            } else {
                $(".sub-ui").slideUp();
                $(".has-arrow").removeClass("active");
                $(this).parent().find(".sub-ui").slideToggle();
                $(this).parent().find(".has-arrow").toggleClass("active");
            }
        });
    });
</script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });

    $('.service-owl').owlCarousel({
        loop: true,
        margin: 60,

        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1200: {
                items: 3,
                nav: true,
            },
            1500: {
                items: 4,
                nav: true,
            }
        }
    })

    $('.client-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })

    $('.banner-owl').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        margin: 0,
        nav: false,
        dots: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.testi-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 1
            },
            1500: {
                items: 1
            }
        }
    })
    $('.tec-owl').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    })
    $(document).ready(function() {
        $('.tablinks').click(function() {
            $(".tabcontent").removeClass('active');
            $(".tabcontent[data-id='" + $(this).attr('data-id') + "']").addClass("active");
            $(".tablinks").removeClass('active-a');
            $(this).addClass('active-a');
        });
        $('.tab-links').click(function() {
            $(".tab-content").removeClass('active');
            $(".tab-content[data-id='" + $(this).attr('data-id') + "']").addClass("active");
            $(".tab-links").removeClass('active-a');
            $(this).addClass('active-a');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.has-drop').click(function() {
            if ($(".drop-menu[data-id='" + $(this).attr('data-id') + "']").hasClass("active")) {
                $(".drop-menu").hide().removeClass('active');
                $(".has-drop").removeClass('active-a');
                $(".has-drop").removeClass('active');
            } else {
                $(".drop-menu").hide().removeClass('active');
                $(".drop-menu[data-id='" + $(this).attr('data-id') + "']").show().addClass("active");
                $(".has-drop").removeClass('active-a');
                $(this).parent().find(".has-drop").addClass('active-a');
                $(this).parent().find(".has-drop").addClass('active');
            }
        });
    });
</script>
<script src="js/wow.js"></script>
<script>
    new WOW().init();

    function gotoTop(top) {

        $("html, body").animate({

            scrollTop: top + "px"

        }, 'slow');

    }
</script>

</html>