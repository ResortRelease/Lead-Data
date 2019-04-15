  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js" type="text/javascript"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/line-chart/2.0.28/LineChart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="/src/linegraph.js"></script>
  <script>
  jQuery(document).ready(function () {
    jQuery("#content div").hide(); // Initially hide all content
    jQuery("#tabs li:first").attr("id", "current"); // Activate first tab
    jQuery("#content div:first").fadeIn(); // Show first tab content

    jQuery('#tabs a').click(function (e) {
      e.preventDefault();
      if (jQuery(this).closest("li").attr("id") == "current") { //detection for current tab
        return
      } else {
        jQuery("#content div").hide(); //Hide all content
        jQuery("#tabs li").attr("id", ""); //Reset id's
        jQuery(this).parent().attr("id", "current"); // Activate this
        jQuery('#' + jQuery(this).attr('name')).fadeIn(); // Show content for current tab
      }
    });
    jQuery('.menu-item').hover(
      function() {
        jQuery( this ).find('.title').toggle();
      }
    );
  });
</script>
  </body>
  <footer class="gorilla-logo">
    <a href="./">
		  <img src="/assets/icons/gorilla.svg" alt="" class="img-fluid">
    </a>
	</footer>
</html>