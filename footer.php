<?php
$logo = get_theme_mod('hyggelodge_logo');
$logo_white = get_theme_mod('hyggelodge_logo_white');
?>

<div class="grid-container footer">
    <div class="grid-x grid-margin-x grid-margin-y">
        <div class="cell medium-4 small-12">
            <p>Liens pages</p>
        </div>

        <div class="cell medium-4 small-12">
            <p>
                458, route de la Gare
                <br>
                74210 Doussard
                <br>
                Lac d'Annecy
                <br>
                France
            </p>
            <p>
                Tél: +33 6 70 16 55 15
                <br>
                hyggelodge@outlook.com
            </p>
        </div>

        <div class="cell medium-4 small-12">
            <p>©</p>
        </div>
    </div>
</div>


<div class="small-menu">
    <a href="#"><img class="logo-mobile" src="<?php echo $logo; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"></a>
    <a href="#">Réserver</a>
    <a href="<?php echo get_permalink(get_page_by_path('prestations')); ?>">Nos prestations</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $(".medium-menu-home").removeClass("transparent");
                $(".logo-home").attr("src", <?php echo '"' . $logo . '"'; ?>);
            } else {

                $(".medium-menu-home").addClass("transparent");
                $(".logo-home").attr("src", <?php echo '"' . $logo_white . '"'; ?>);
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>