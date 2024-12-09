
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		/*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
	}
	
</style>
<link rel="stylesheet" type="text/css" href="assets/css/matarial.css">
<nav id="sidebar" class='mx-lt-5 bg-white' >
		
		<div class="sidebar-list">
			<div  id="sidebar-menu" class="sidebar-inner">
                <ul class="p-0">
					<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'> <i data-feather="airplay"></i></span> Dashboard</a>

				

					 <li class="has_sub">
                        <a href="javascript:void(0);" class="nav-item nav-categories waves-effect">
                            <i data-feather="align-justify"></i>
                                <span> House Type</span> <span class="float-right">
                                   <i class="mdi mdi-chevron-right"></i>
                                    </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=categories">Add</a></li>
                                    <li><a href="index.php?page=manage_categories">Manage</a></li>
                                </ul>
                            </li>
				
					<li class="has_sub">
                        <a href="javascript:void(0);" class="nav-item nav-categories waves-effect">
                            <i data-feather="home"></i>
                                <span> House</span> <span class="float-right">
                                   <i class="mdi mdi-chevron-right"></i>
                                    </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=houses">Add</a></li>
                                    <li><a href="index.php?page=manage_houses">Manage</a></li>
                                </ul>
                            </li>
					<a href="index.php?page=tenants" class="nav-item nav-tenants"><span class='icon-field'><i data-feather="user"></i></span> Tenants</a>
					<a href="index.php?page=invoices" class="nav-item nav-invoices"><span class='icon-field'><i data-feather="credit-card"></i></span> Payments</a>
					
					<li class="has_sub">
                        <a href="javascript:void(0);" class="nav-item nav-categories waves-effect">
                            <i data-feather="align-justify"></i>
                                <span>  Reports</span> <span class="float-right">
                                   <i class="mdi mdi-chevron-right"></i>
                                    </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="index.php?page=payment_report">Monthly Payments Report</a></li>
                                    <li><a href="index.php?page=balance_report">Rental Balances Report</a></li>
                                </ul>
                            </li>
					
					<?php if($_SESSION['login_type'] == 1): ?>
					<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i data-feather="users"></i></span> Users</a>
					
					<?php endif; ?>
					<a href="https://github.com/dev-mhrony" class="nav-item" target="_blank"><span class='icon-field'> <i data-feather="github"></i></span> More Projects</a>

                    <a href="https://www.youtube.com/playlist?list=PLwC8LFb2Ws3K0SBdiBJjyvGpqHnEyiRK6" class="nav-item" target="_blank"><span class='icon-field'> <i data-feather="film"></i></span> More Project Video</a>
				</ul>
			</div>
		</div>

</nav>
<!--  Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    Visit My Website : developerrony.com 
-->
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
<!--  Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    Visit My Website : developerrony.com 
-->
<script src="https://unpkg.com/feather-icons@4.29.1/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

<script>
	$(document).ready(function() {
    // Hide all submenus by default
    $('.has_sub ul').hide();

    // Bind click event to menu items with submenus
    $('.has_sub > a').click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        var $submenu = $(this).next('ul'); // Find the submenu

        // Close all other submenus
        $('.has_sub ul').not($submenu).slideUp();

        // Toggle the clicked submenu's visibility
        $submenu.slideToggle();

        // Toggle active class on the clicked menu item
        $(this).toggleClass('nav-active');
    });
});

</script>
<!--  Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    Visit My Website : developerrony.com 
-->