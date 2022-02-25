<div class="small-menu">
    <a href="#"><img src="http://hyggelodge.org/wp-content/uploads/2022/02/Hygge-lodge-logo-sans-baseline.png" alt="logo" class="logo"></a>
    <a>Réserver</a>
    <a>Nos prestations</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $(".medium-menu").removeClass("transparent");
                $(".logo").attr("src", "http://hyggelodge.org/wp-content/uploads/2022/02/Hygge-lodge-logo-sans-baseline.png");
            } else {

                $(".medium-menu").addClass("transparent");
                $(".logo").attr("src", "http://hyggelodge.org/wp-content/uploads/2022/02/Hygge-lodge-logo-blanc.png");
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>