<div id="map"></div>
    <footer>
        <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4>تماس با ما</h4>
                <ul>
                    <li>تبریز - سربالایی ولیعصر - ساختمان صدر - طبقه ی 6</li>
                    <li>تلفن : <a href="tel:04133273264">04133273264</a></li>
                    <li>موبایل : <a href="tel:09383850168">09383850168</a></li>
                    <li>info@ClinicVaris.com : ایمیل</li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h4>ساعات کار</h4>
                <ul>
                    <li>شنبه<span>10  -  21</span></li>
                    <li>یکشنبه<span>10  -  21</span></li>
                    <li>دوشنبه<span>10  -  21</span></li>
                    <li>سه شنبه<span>10  -  21</span></li>
                    <li>چهارشنبه<span>10  -  21</span></li>
                    <li>پنجشنبه<span>10  -  16</span></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4>دکتر مهرداد یاوری کیا</h4>
                <p>
                    متخصص قلب و عروق - فلوشیپ فوق تخصص اینترونشنال کاردیولوژی و بالون آنژیوپلاستی دوره تکمیلی آنژیولوژی از آلمان
                </p>
                <div class="logo-footer"></div>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            </canvas>
        </div>
    </footer>
    <div class="copyright">

        <?php wp_nav_menu( array('container' => '', 'menu_class' => ' ','menu' => 'mainmenu' ) ); ?>
        <span>&copy; 2017  |  ClinicVaris  |  All Rights Reserved.</span>
    </div>

    <script>
    function initMap() {
        var uluru = {
            lat: 38.059107,
            lng: 46.355392
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd7Hn7tVU4htgmp_jfbhK4oCyCOrmHMLE&callback=initMap"></script>
    <?php wp_footer(); ?>
</body>

</html>