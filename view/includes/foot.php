<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script async src="view/assets/js/navbar-color-change.js"></script>
<script async src="view/assets/js/js-scrollTo.js"></script>
<script async src="view/assets/js/videos.js"></script>
<script async src="view/assets/js/show.js"></script>
<script async src="https://rawgit.com/oriongunning/gridder/master/dist/js/jquery.gridder.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        // Call Gridder
        $(".gridder").gridderExpander({
            scroll: true,
            scrollOffset: 30,
            scrollTo: "panel", // panel or listitem
            animationSpeed: 400,
            animationEasing: "easeInOutExpo",
            showNav: false,
            onStart: function(){},
            onContent: function(){},
            onClosed: function(){}
        });
    });
</script>
</body>
</html>

<!--END FOOT-->
