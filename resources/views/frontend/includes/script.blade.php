<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/form-validator.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/contact-form-script.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/aos.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/odometer.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/fancybox.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/jquery.appear.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/tweenmax.min.js"></script>
<script src="{{ asset('/') }}frontend/assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').each(function() {
            var $this = $(this);
            if ($this.hasClass('partner-carousel')) {
                $this.owlCarousel({
                    loop: true,
                    margin: 20,
                    autoplay: true,
                    autoplayTimeout: 2500,
                    autoplayHoverPause: true,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2
                        },
                        576: {
                            items: 3
                        },
                        768: {
                            items: 4
                        },
                        992: {
                            items: 5
                        },
                        1200: {
                            items: 6
                        }
                    }
                });
            } else {
                $this.owlCarousel();
            }
        });
    });
</script>
