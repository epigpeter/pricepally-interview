<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/script.js"></script>
<script src="{{ asset('assets') }}/js/multislider.js"></script>
<script src="{{ asset('assets') }}/js/multislider.min.js"></script>

@yield('scripts')

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>
