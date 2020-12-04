<Footer>
    <div class="container-fluid colorRed">
        <div class="row">
            <div class="col-sm tWhite center">
                <p>Legal Notice </p>
            </div>
            <div class="col-sm tWhite center">
                <p>Personnal Data </p>
            </div>
            <div class="col-sm tWhite center">
                <p>Terms of Sales </p>
            </div>
            <div class="col-sm tWhite center">
                <p>Sitemap </p>
            </div>
            <div class="col-sm tWhite center">
                <p>Contact</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <p>Site created by <img src="./includes/images/logo.png" height="50" width="55">

                </p>
                <p>All rights reserved <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
</Footer>
<script type="text/javascript" src="./includes/javascript/slick.min.js"></script>
<script src="./includes/javascript/ready.js"></script>
<script>
    $(document).ready(function() {
        $("#carouselExampleSlidesOnly").slick({
            dots: false,
            infinite: true,
            speed: 500,
            adaptiveHeight: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    })
</script>
</body>

</html>