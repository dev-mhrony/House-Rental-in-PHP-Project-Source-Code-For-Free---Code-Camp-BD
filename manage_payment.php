<?php 
include 'db_connect.php'; 
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM payments where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
    $$k=$val;
}
}
?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<div class="container-fluid">
    <form action="" id="manage-payment">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div id="msg"></div>
        <div class="form-group">
            <label for="" class="control-label">Tenant</label>
            <select name="tenant_id" id="tenant_id" class="custom-select select2">
                <option value=""></option>

            <?php 
            $tenant = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM tenants where status = 1 order by name asc");
            while($row=$tenant->fetch_assoc()):
            ?>
            <option value="<?php echo $row['id'] ?>" <?php echo isset($tenant_id) && $tenant_id == $row['id'] ? 'selected' : '' ?>><?php echo ucwords($row['name']) ?></option>
            <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group" id="details">
            
        </div>

        <div class="form-group">
            <label for="" class="control-label">Invoice: </label>
            <input type="text" class="form-control" name="invoice"  value="<?php echo isset($invoice) ? $invoice :'' ?>" >
        </div>
        <div class="form-group">
            <label for="" class="control-label">Amount Paid: </label>
            <input type="number" class="form-control text-right" step="any" name="amount"  value="<?php echo isset($amount) ? $amount :'' ?>" >
        </div>
</div>
    </form>
</div>
<div id="details_clone" style="display: none">
    <div class='d'>
        <large><b>Details</b></large>
        <hr>
        <p>Tenant: <span class="tname"></span></p>
        <p>Monthly Rental Rate: <span class="price"></span></p>
        <p>Outstanding Balance: <span class="outstanding"></span></p>
        <p>Total Paid: <span class="total_paid"></span></p>
        <p>Rent Started: <span class='rent_started'></span></p>
        <p>Payable Months: <span class="payable_months"></span></p>
        <hr>
    </div>
</div>
<script>
    $(document).ready(function(){
        if('<?php echo isset($id)? 1:0 ?>' == 1)
             $('#tenant_id').trigger('change') 
    })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   $('#tenant_id').change(function(){
    if($(this).val() <= 0)
        return false;

    start_load()
    $.ajax({
        url:'ajax.php?action=get_tdetails',
        method:'POST',
        data:{id:$(this).val(),pid:'<?php echo isset($id) ? $id : '' ?>'},
        success:function(resp){
            if(resp){
                resp = JSON.parse(resp)
                var details = $('#details_clone .d').clone()
                details.find('.tname').text(resp.name)
                details.find('.price').text(resp.price)
                details.find('.outstanding').text(resp.outstanding)
                details.find('.total_paid').text(resp.paid)
                details.find('.rent_started').text(resp.rent_started)
                details.find('.payable_months').text(resp.months)
                console.log(details.html())
                $('#details').html(details)
            }
        },
        complete:function(){
            end_load()
        }
    })
   })
    $('#manage-payment').submit(function(e){
        e.preventDefault()
        start_load()
        $('#msg').html('')
        $.ajax({
            url:'ajax.php?action=save_payment',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                if(resp==1){
                    alert_toast("Data successfully saved.",'success')
                        setTimeout(function(){
                            location.reload()
                        },1000)
                }
            }
        })
    })
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script>
    new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
        }
    }
});
</script><footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
<p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.facebook.com/dev.mhrony/" target="_blank">Tenant Management System Software</a> - Design and Develop By MH RONY </p>
   
</footer>