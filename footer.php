<div class="small-menu">
    <a href="#"><img src="http://localhost:8888/hyggelodge/wp-content/uploads/2022/02/logo.png" alt="logo" class="logo"></a>
    <a>Liens</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(window).scroll(function() {
            var winTop = $(window).scrollTop();
            if (winTop >= 30) {
                $(".medium-menu").removeClass("transparent");
            } else {
                $(".medium-menu").addClass("transparent");
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>