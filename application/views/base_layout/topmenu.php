<div class="col-12 top-menu-container">
  <div class="row no-gutters">
    <div class="col-10">
      <div class="top-menu">
        <div class="bar">
          <a href="#" id="menu-toggle"><ion-icon name="menu"></ion-icon></a>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="top-menu">
        <div class="bar force-right">
          <a href="#popup_toggle" data-toggle="custom_popup">
            <div class="profile-picture" style="background-image: url('https://assets.vg247.com/current//2018/05/fortnite_thanos_avengers_infinity_war_event_square_header_1.jpg')"></div>
          </a>
        </div>
        <div class="bar force-right">
          <div id="popup_toggle" class="collapse profile-popup">
            <div class="profile-popup-body">
              <div class="picture" style="background-image: url('https://assets.vg247.com/current//2018/05/fortnite_thanos_avengers_infinity_war_event_square_header_1.jpg')"></div>
              <div class="name">
                Thanos Wijaya
              </div>
              <a href="<?php echo base_url()."logout"?>">
                <div class="logout">
                  Logout
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script for toggle menu popup -->
<script>
  $.each($("[data-toggle=custom_popup]"), function(i, v) {
    $(this).on("click", function(e) {
      e.preventDefault();
      $($(this).attr("href")).toggle();
    })
  });
</script>

<!-- Script for toggle sidebar menu popup -->
<script type="text/javascript">
  $(function() {
    $(window).resize(function() {
      if ($(window).width() < 768) {
        if ($(".sidebar-container").is(":visible")) {
          $(".sidebar-container").hide();
          $(".sidebar-container").removeClass("col-9")
          $(".sidebar-container").addClass("col-12");
          $(".wrapper").removeClass("visible col-sm-8 col-md-9 col-xl-10");
          $(".wrapper").addClass("col-12 col-sm-12 col-md-12 col-xl-12");
        }
      } else {
        if ($(".sidebar-container").is(":hidden")) {
          $(".sidebar-container").show();
          $(".sidebar-container").removeClass("col-12")
          $(".sidebar-container").addClass("col-9");
          $(".wrapper").removeClass("col-12 col-sm-12 col-md-12 col-xl-12");
          $(".wrapper").addClass("col-sm-8 col-md-9 col-xl-10");
        }
      }
    });

    $("#menu-toggle").on("click", function(e) {
      e.preventDefault();
      if ($(".sidebar-container").is(":visible")) {
        console.log("Is Visible, hiding");
        $(".sidebar-container").hide();
        $(".sidebar-container").removeClass("col-9");
        $(".sidebar-container").addClass("col-12");
        $(".wrapper").removeClass("visible col-sm-8 col-md-9 col-xl-10");
        $(".wrapper").addClass("col-12 col-sm-12 col-md-12 col-xl-12");
      } else {
        console.log("Is not Visible, showing");
        $(".sidebar-container").show();
        $(".sidebar-container").removeClass("col-12")
        $(".sidebar-container").addClass("col-9");
        $(".wrapper").removeClass("col-12 col-sm-12 col-md-12 col-xl-12");
        if ($(window).width() < 768) {
          $(".wrapper").addClass("visible col-sm-8 col-md-9 col-xl-10");
        } else {
          $(".wrapper").addClass("col-sm-8 col-md-9 col-xl-10");
        }
      }
    });
  })
</script>
