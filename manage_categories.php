	<?php include('db_connect.php');?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<div class="container-fluid">
	
	<div class="col-lg-12 mt-5">
	<marquee onMouseOver="this.stop()" onMouseOut="this.start()">For any software development or website designing work contact me at <a href="mailto:codecampbdofficial@gmail.com" >codecampbdofficial@gmail.com  </a> Or Contact <a href="https://www.facebook.com/dev.mhrony/" target="_blank" >Facebook</a> </marquee>

		<div class="row">
			<!-- FORM Panel -->
		
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Category List</b>
					</div>
					<div class="card-body">
						<table id="example" class="display table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Category</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$category = $conn->query("SELECT * FROM categories order by id asc");
								while($row=$category->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p><?php echo $row['name'] ?></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_category" type="button" data-id="<?php echo $row['id'] ?>"  data-name="<?php echo $row['name'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_category" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
</style>



<script>

$('.edit_category').click(function(){
    var id = $(this).attr('data-id');
    window.location.href = 'index.php?page=edit-cate?id=' + id;
});


	
$('#manage-category').submit(function(e){
    e.preventDefault();
    start_load();
    $.ajax({
        url:'ajax.php?action=save_category',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp==1){
                alert_toast("Data successfully added",'success');
                setTimeout(function(){
                    window.location.href = 'manage_categories.php'; // Redirect to manage-category.php
                },1500);
            }
            else if(resp==2){
                alert_toast("Data successfully updated",'success');
                setTimeout(function(){
                    location.reload();
                },1500);
            }
        }

    });
});

	$('.edit_category').click(function(){
		start_load()
		var cat = $('#manage-category')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		end_load()
	})
	$('.delete_category').click(function(){
		_conf("Are you sure to delete this category?","delete_category",[$(this).attr('data-id')])
	})
	function delete_category($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	// $('table').dataTable()
</script>

<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script>
   $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "bs5": true
        });
    });
</script><footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
<p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.facebook.com/dev.mhrony/" target="_blank">Tenant Management System Software</a> - Design and Develop By MH RONY </p>
   
</footer>