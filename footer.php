<?php
$logo = get_theme_mod('hyggelodge_logo');
$logo_white = get_theme_mod('hyggelodge_logo_white');
?>

<div class="grid-container footer">
    <div class="grid-x grid-margin-x grid-margin-y content">        
        <div class="cell medium-4 small-12"> 
            <p>
                Tél: +33 6 70 16 55 15
                <br>
                hyggelodge@outlook.com
            </p>
            <br>
            <p>
                458, route de la Gare
                <br>
                74210 Doussard
                <br>
                Lac d'Annecy
                <br>
                France
            </p>
            <br>
            <p>© Hygge Lodge Annecy - 2022</p>
        </div>
        <div class="cell medium-4 small-12">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
                <li><a href="<?php echo esc_url(home_url('/reserver/')); ?>">Réserver</a></li>
                <li><a href="<?php echo esc_url(home_url('/prestations/')); ?>">Nos prestations</a></li>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/hebergements/')); ?>">La maison d’hôtes</a></li>
                    <li><a href="<?php echo esc_url(home_url('/table-dhote/')); ?>">Côté papilles</a></li>
                    <li><a href="<?php echo esc_url(home_url('/sejours-et-evenements/')); ?>">Séjours & évenements</a></li>
                    <li><a href="<?php echo esc_url(home_url('/activites/')); ?>">Quoi faire au Hygge Lodge Annecy</a></li>
                    <li><a href="<?php echo esc_url(home_url('/activites-exterieures/')); ?>">Et aux alentours ?</a></li>
                </ul>
            </ul>
        </div>
        <div class="cell medium-4 small-12">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>">Politique de confidentialité</a></li>
                <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>">Conditions génerales de vente</a></li>
                <li><a href="<?php echo esc_url(home_url('/mentions-legales/')); ?>">Mentions légales</a></li>
            </ul>
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-facebook"></ion-icon>
        </div>
    </div>
</div>


<div class="small-menu">
    <a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-mobile" src="<?php echo $logo; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"></a>
    <a href="<?php echo esc_url(home_url('/reserver/')); ?>">Réserver</a>
    <a href="<?php echo esc_url(home_url('/prestations/')); ?>">Nos prestations</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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