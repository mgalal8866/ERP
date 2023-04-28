<!-- BEGIN: Vendor JS-->
    <script src={{URL::asset('app-assets/vendors/js/vendors.min.js')}}></script>
<!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
    <script src={{URL::asset('app-assets/js/core/app-menu.js')}}></script>
    <script src={{URL::asset('app-assets/js/core/app.js')}}></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <!-- END: Page JS-->

  <script>
    var getUrl = window.location;
        // $(".navigation a[href='" + getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/" + getUrl.pathname.split('/')[2] + "']").closest('.nav-item').find('.nav-item').addClass('active');
        // $(".navigation a[href='" + getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/" + getUrl.pathname.split('/')[2] + "']").closest('.item').find('.sub-item').addClass('active');
        // $(".navigation a[href='" + getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/" + getUrl.pathname.split('/')[2] + "']").closest('.item').find('.sub-item').find("a[href='" + getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/" + getUrl.pathname.split('/')[2] + "']").addClass('active');
        $(".navigation a[href='" + getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/" + getUrl.pathname.split('/')[2] + "'] >div").addClass('active');
        // $(".navigation a[href='" + window.location.href + "'] >div").addClass('active');
        // $(".navigation a[href='" + window.location.href + "']").addClass('active');
        $(".navigation a[href='" + window.location.href + "']").closest('li').addClass('active');

      $(window).on('load', function() {
          if (feather) {
              feather.replace({
                  width: 14,
                  height: 14
              });
          }
      });
      if (window.location.hash === "#_=_"){
    history.replaceState
        ? history.replaceState(null, null, window.location.href.split("#")[0])
        : window.location.hash = "";
}
  </script>
