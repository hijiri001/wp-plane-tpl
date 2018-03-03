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

<script>
    // --navbar fade--
    jQuery(document).ready(function() {
        var $win = jQuery(window),
            $main = jQuery('body'),
            $nav = jQuery('.navbar'),
            navHeight = $nav.outerHeight(),
            navPos = $nav.offset().top,
            fixedClass = 'is-fixed';

        $win.on('load scroll', function() {
            var value = jQuery(this).scrollTop();
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
