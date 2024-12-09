  <style>
   .logo {
   margin: auto;
   font-size: 20px;
   background: white;
   padding: 7px 11px;
   border-radius: 50% 50%;
   color: #000000b3;
   }
</style>
<nav class="navbar navbar-light fixed-top bg-white" style="padding:0;min-height: 3.5rem">
   
   <div class="container-fluid mt-2 mb-2">
   <div class="row">
      <div class="col-md-2 text-center">
         <a href="index.php" class="logo logo-admin"><img src="assets/img/logo.png" alt="logo" width="220"></a>
      </div>
      <div class="col-md-8 text-white d-flex justify-content-between">
         <!-- <large class="text-center text-dark"><b><//?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></b></large> -->
          <b id="time" class="ml-lg-5 pl-lg-5 d-none d-md-block text-dark time"></b>
          <div id="google_translate_element"></div>
      </div>

      <div class="col-md-2">
         <div class="float-right">
            <div class=" dropdown mr-4">
              <p></p>
                <a href="#" class="text-dark"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/img.jpg" width="36" height="36" class="rounded-circle"></a>
               <div class="dropdown-menu p-0" aria-labelledby="account_settings" style="left: -2.5em;">
                  <div class="dropdown-item noti-title profile-dropdown">
                     <h5 class="text3">Welcome</h5>
                  </div>
                  <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog text-muted"></i> Manage Account</a>
                  <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off text-muted"></i> Logout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</nav>
<script>
   $('#manage_my_account').click(function(){
     uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
   })
</script>


<script language="javascript">
    var today = new Date();
    document.getElementById('time').innerHTML = today;
</script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');

        var $googleDiv = $("#google_translate_element .skiptranslate");
        var $googleDivChild = $("#google_translate_element .skiptranslate div");
        $googleDivChild.next().remove();

        $googleDiv.contents().filter(function() {
            return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
        }).remove();

    }
</script>
<style>
    .goog-te-gadget .goog-te-combo {
        margin: 0px 0;
        padding: 8px;
        color: #000;
        background: #eeee;
    }
</style>
