<div class="col-12 top-menu-container">
  <div class="row no-gutters">
    <div class="col-10">
      <div class="top-menu">
        <div class="bar">
          Enterprise Resource Planning Software Telkom Indonesia
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="top-menu">
        <div class="bar force-right">
          <a href="#popup_toggle" data-toggle="custom_popup">
            <div class="profile-picture"></div>
          </a>
        </div>
        <div class="bar force-right">
          <div id="popup_toggle" class="collapse profile-popup">
            <div class="profile-popup-body">
              <div class="picture"></div>
              <div class="name">
                Lorem ipsum dolor
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
