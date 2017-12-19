<footer id="footer" class="footer">

</footer>

<?php wp_footer();  ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.item-slider').slick({
            centerMode: true,
            infinite: true,
            slidesToShow: 3,
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 3000,
//            nextArrow:  '<button type="button" class="next-arrow"> <img class="img-fluid" src="{{ asset('/images/right-arrow.svg') }}" alt=""> </button>',
//            prevArrow:  '<button type="button" class="prev-arrow"> <img class="img-fluid" src="{{ asset('/images/left-arrow.svg') }}" alt=""> </button>',
            responsive: [
                {
                    prevArrow: false,
                    nextArrow:false,
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        variableWidth: true,
                        dots: false,
                        autoplay: true,
                        autoplaySpeed: 2000
                    }
                }]
        });
    });
</script>
</body>
</html>