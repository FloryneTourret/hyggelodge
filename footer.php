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
            <ul>
                <li>
                    <a href="https://www.instagram.com/hyggelodgeannecy/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://www.facebook.com/hyggelodge"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            </ul>
            
            
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
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 14018700;
  ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
  var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
  i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
  get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
  return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
  var n=t.createElement("script");
  n.async=!0,n.type="text/javascript",
  n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
  !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/14018700/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->

<?php wp_footer(); ?>
</body>

</html>