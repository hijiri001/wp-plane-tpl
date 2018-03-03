<div class="bg-white text-dark">
    <footer class="content-info mt-5">
        <div class="container">
            <?php dynamic_sidebar('third-footer'); ?>
        </div>
        <?php dynamic_sidebar('fourth-footer'); ?>
        <div class="container">
            <hr /><small> ©
        <?php echo date('Y');?>
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>. design by
        <a class="デジタルバス" href="//www.digitalbath.jp/">
            DigitalBath
        </a>.</small>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script>
    // --navbar fade--
    $(document).ready(function() {
        var $win = $(window),
            $main = $('body'),
            $nav = $('.navbar'),
            navHeight = $nav.outerHeight(),
            navPos = $nav.offset().top,
            fixedClass = 'is-fixed';

        $win.on('load scroll', function() {
            var value = $(this).scrollTop();
            if (value > navPos) {
                $nav.addClass(fixedClass);
                $main.css('margin-top', navHeight);
            } else {
                $nav.removeClass(fixedClass);
                $main.css('margin-top', '0');
            }
        });
    });

</script>



<script>
    jQuery(function() {
        var pageTop = jQuery('.page-top');
        pageTop.hide();
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 400) {
                pageTop.fadeIn();
            } else {
                pageTop.fadeOut();
            }
        });
        pageTop.click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 900);
            return false;
        });
    });

</script>
<div class="page-top"><a href="#"><i class="fa fa-step-forward fa-2x fa-rotate-270"></i></a></div>
