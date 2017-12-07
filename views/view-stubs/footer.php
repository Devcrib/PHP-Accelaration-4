<footer>
    <div class = "inner-container">
        &copy; <?= date('Y'); ?> PHP. <br> Made with &hearts; From Planet Nest
    </div>
</footer>
<!--<script src = "--><?//= ASSET_PATH .'js/jquery.min.js'; ?><!--"></script>-->
<!--<script src = "--><?//= ASSET_PATH .'js/bootstrap.min.js'; ?><!--"></script>-->
<!--<script src = "--><?//= ASSET_PATH .'js/home.js'; ?><!--"></script>-->
<!--<script src = "--><?//= ASSET_PATH .'js/owl.carousel.min.js'; ?><!--"></script>-->
<!--<script src = "--><?//= ASSET_PATH .'js/lightbox.min.js'; ?><!--"></script>-->
<!--<script src="http://vjs.zencdn.net/6.4.0/video.js"></script>-->
<!--<script src = "--><?//= ASSET_PATH .'js/wow.min.js'; ?><!--"></script>-->
<script>
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();

</script>
<script>
    lightbox.option({
        'fadeDuration': 600,
        'showImageNumberLabel' : true
    })
</script>
</body>
</html>
