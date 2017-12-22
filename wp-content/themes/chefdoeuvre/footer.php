<footer id="footer" class="footer container-fluid">
    <div class="row">
        <div class="col-lg-12 pt-5">
            <img src=<?php echo IMAGES_URL?>/logo-footer.png" alt="logo-footer" class="img-fluid logo__footer">
            <?php
            $args=array(
                'theme_location' => 'footer', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu__footer', // class à attribuer au menu
                // voir les autres arguments possibles sur le codex
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="col-lg-12 footer__icons">
            <div class="footer__iconsBloc">
                <ul class="socials">
                    <li><a href="#"><img src=<?php echo IMAGES_URL?>/twitter.svg" alt="twitter-footer" class="img-fluid"></a></li>
                    <li><a href="#"><img src=<?php echo IMAGES_URL?>/instagram.svg" alt="instagram-footer" class="img-fluid"></a></li>
                    <li><a href="#"><img src=<?php echo IMAGES_URL?>/snapchat.svg" alt="snapchat-footer" class="img-fluid"></a></li>
                </ul>
            </div>
            <p>
                @ima_UNESCO
            </p>
        </div>
    </div>
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
            nextArrow:  '<button type="button" class="next-arrow"> <img class="img-fluid" src=<?php echo IMAGES_URL?>/right-arrow.png" alt="right"> </button>',
            prevArrow:  '<button type="button" class="prev-arrow"> <img class="img-fluid" src=<?php echo IMAGES_URL?>/left-arrow.png" alt="left"> </button>',
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
        $('.item-sliderMobile').slick({
            centerMode: true,
            infinite: true,
            slidesToShow: 3,
            variableWidth: true,
            autoplay: false,
            prevArrow: false,
            nextArrow:false,
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
                        dots: false
                    }
                }]
        });
    });
</script>
</body>
</html>