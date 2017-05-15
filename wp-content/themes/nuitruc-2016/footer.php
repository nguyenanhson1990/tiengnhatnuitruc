<!-- footer -->
<footer class="footer" role="contentinfo">

    <!--google maps-->
    <div class="map_canvas">
        <div id="googlemaps"></div>
    </div>
    <div class="contactinfo">
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico_footer01.png" width="18" height="26"
                 alt="số 15 ngõ núi trúc - kim mã - ba đình - hà nội">
            <span>Số 15 ngõ núi trúc - Kim Mã - Ba Đình - Hà Nội</span>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico_footer02.png" width="24" height="26"
                 alt="(84 4)38 460 341">
            <span>(84 4)38 460 341</span>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico_footer03.png" width="32" height="30"
                 alt="(84 4)38 463 681">
            <span>(84 4)38 460 341</span>
        </div>
    </div>
    <p class="copyright"> Copy right &copy; 2015 Bản quyền thuộc về trung tâm tiếng nhật Núi Trúc</p>
    <script>
        var marker;

        function initMap() {
            var map = new google.maps.Map(document.getElementById('googlemaps'), {
                zoom: 16,
                center: {lat: 21.0297386, lng: 105.824335}
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat: 21.030333, lng: 105.824918}
            });
            marker.addListener('click', toggleBounce);
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/569926cb87faab54268145c1/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</footer>
<!-- /footer -->
<?php wp_footer(); ?>

</body>
</html>
