<?php include 'db_connect.php' ?>
<style>
   span.float-right.summary_icon {
   font-size: 3rem;
   position: absolute;
   right: 1rem;
   top: 0;
   }
   .imgs{
   margin: .5em;
   max-width: calc(100%);
   max-height: calc(100%);
   }
   .imgs img{
   max-width: calc(100%);
   max-height: calc(100%);
   cursor: pointer;
   }
   #imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
   height: 60vh !important;background: black;
   }
   #imagesCarousel .carousel-item.active{
   display: flex !important;
   }
   #imagesCarousel .carousel-item-next{
   display: flex !important;
   }
   #imagesCarousel .carousel-item img{
   margin: auto;
   }
   #imagesCarousel img{
   width: auto!important;
   height: auto!important;
   max-height: calc(100%)!important;
   max-width: calc(100%)!important;
   }
</style>
<div class="containe-fluid">
   <div class="row mt-3 ml-3 mr-3">
      <div class="col-lg-12">
         <div class="">
            <div class="">
               <h4 class="page-title"><?php echo "Welcome back ". $_SESSION['login_name']."!"  ?></h4>
               <hr>
                  <marquee onMouseOver="this.stop()" onMouseOut="this.start()">For any software development or website designing work contact me at <a href="mailto:codecampbdofficial@gmail.com" >codecampbdofficial@gmail.com  </a> Or Contact <a href="https://www.facebook.com/dev.mhrony/" target="_blank" >Facebook</a> </marquee>
               <hr>
               <div class="row">
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-primary p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-home "></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php echo $conn->query("SELECT * FROM houses")->num_rows ?>
                                       </h3>
                                       <p>Total Houses</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=houses" class="text-primary float-right">View List <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-warning p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-user-friends "></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php echo $conn->query("SELECT * FROM tenants where status = 1 ")->num_rows ?>
                                       </h3>
                                       <p>Total Tenants</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=tenants" class="text-primary float-right">View List <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-success p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-file-invoice "></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php 
                                             $payment = $conn->query("SELECT sum(amount) as paid FROM payments where date(date_created) = '".date('Y-m-d')."' "); 
                                             echo $payment->num_rows > 0 ? number_format($payment->fetch_array()['paid'],2) : 0;
                                             ?>
                                       </h3>
                                       <p>Payments This Month</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=invoices" class="text-primary float-right">View Payments <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-danger p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-list"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php echo $conn->query("SELECT * FROM tenants where status = 1 ")->num_rows ?>
                                       </h3>
                                       <p>Total Reports</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=tenants" class="text-primary float-right">View List <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-info p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-home"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php echo $conn->query("SELECT * FROM tenants where status = 1 ")->num_rows ?>
                                       </h3>
                                       <p>Total House Type</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=tenants" class="text-primary float-right">View List <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
                  <div class="col-md-4 mb-3">
                     <div class="card card-1">
                        <div class="card-body card-1 bg-secondary p-0">
                           <div class="card-body text-white py-4">
                              <div class="d-flex flex-row">
                                 <div class="col-3 align-self-center">
                                    <div class="round">
                                       <span class="float-right summary_icon"> <i class="fa fa-users"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-9 align-self-center text-right">
                                    <div class="m-l-10">
                                       <h3 class="text1">
                                          <?php echo $conn->query("SELECT * FROM tenants where status = 1 ")->num_rows ?>
                                       </h3>
                                       <p>Total Users</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="card-footer">
                           <div class="row">
                               <div class="col-lg-12">
                                   <a href="index.php?page=tenants" class="text-primary float-right">View List <span class="fa fa-angle-right"></span></a>
                               </div>
                           </div>
                           </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 mb-3">
         <div id="piechart" style="width: 100%; height: 500px;"></div>
      </div>
   </div>
</div>
<script src="https://unpkg.com/feather-icons@4.29.1/dist/feather.min.js"></script>
<script>
   feather.replace();
</script>
<script>
   $('#manage-records').submit(function(e){
          e.preventDefault()
          start_load()
          $.ajax({
              url:'ajax.php?action=save_track',
              data: new FormData($(this)[0]),
              cache: false,
              contentType: false,
              processData: false,
              method: 'POST',
              type: 'POST',
              success:function(resp){
                  resp=JSON.parse(resp)
                  if(resp.status==1){
                      alert_toast("Data successfully saved",'success')
                      setTimeout(function(){
                          location.reload()
                      },800)
   
                  }
                  
              }
          })
      })
      $('#tracking_id').on('keypress',function(e){
          if(e.which == 13){
              get_person()
          }
      })
      $('#check').on('click',function(e){
              get_person()
      })
      function get_person(){
              start_load()
          $.ajax({
                  url:'ajax.php?action=get_pdetails',
                  method:"POST",
                  data:{tracking_id : $('#tracking_id').val()},
                  success:function(resp){
                      if(resp){
                          resp = JSON.parse(resp)
                          if(resp.status == 1){
                              $('#name').html(resp.name)
                              $('#address').html(resp.address)
                              $('[name="person_id"]').val(resp.id)
                              $('#details').show()
                              end_load()
   
                          }else if(resp.status == 2){
                              alert_toast("Unknow tracking id.",'danger');
                              end_load();
                          }
                      }
                  }
              })
      }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
      var data = google.visualization.arrayToDataTable([
         ['Types', 'Booking'],
         ['Single-Family Home',     11],
         ['Townhouse',      2],
         ['Condominium',  2],
         ['Duplex', 2],
         ['Tiny House',    7]
      ]);

      var options = {
         title: 'Booking Trend'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      draw();

      // Redraw the chart when the window is resized
      window.addEventListener('resize', draw);

      function draw() {
         // Get the dimensions of the container
         var chartContainer = document.getElementById('piechart');
         var width = chartContainer.offsetWidth;
         var height = chartContainer.offsetHeight;

         // Set chart options
         options.width = width;
         options.height = height;

         // Draw the chart with updated options
         chart.draw(data, options);
      }
   }
</script><footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
   <p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.facebook.com/dev.mhrony/" target="_blank">Tenant Management System Software</a> - Design and Develop By MH RONY </p>
   
</footer>