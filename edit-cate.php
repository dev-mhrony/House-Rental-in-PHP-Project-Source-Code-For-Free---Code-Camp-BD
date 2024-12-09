<?php include('db_connect.php');

// Check if the category ID is set
if(isset($_GET['id'])) {
    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM categories WHERE id=?");
    // Bind the category ID parameter
    $stmt->bind_param("i", $_GET['id']);
    // Execute the query
    $stmt->execute();
    // Get the result
    $result = $stmt->get_result();
    // Fetch the record
    $record = $result->fetch_assoc();
    // Close the statement
    $stmt->close();
} else {
    // If no category ID is provided, handle the error or redirect as needed
    // For example:
    // header("Location: error.php");
    // exit();
}

?>

<div class="container-fluid">
    <div class="col-lg-12">
    <marquee onMouseOver="this.stop()" style="color: #e92f33;" onMouseOut="this.start()">This is a Code Camp BD's free source code for educational use only. It can never be used for commercial purposes. Don't forget to take <a target="_blank" href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> permission if needed! to contact - <a target="_blank" href="https://www.facebook.com/dev.mhrony">MH RONY</a> </marquee>

        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-4">
                <form action="" id="manage-category">
                    <div class="card">
                        <div class="card-header">
                            Edit Category Form
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $record['name']; ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-primary col-sm-3 offset-md-3">Save</button>
                                    <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-category').get(0).reset()">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FORM Panel -->
        </div>
    </div>
</div>

<style>
    td {
        vertical-align: middle !important;
    }
</style>
<script>
    $('#manage-category').submit(function(e){
        e.preventDefault();
        start_load();
        $.ajax({
            url:'ajax.php?action=edit_cate',
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
                        window.location.href = 'index.php?page=manage_categories'; // Redirect to manage-category.php
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
</script>
<!--  Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    Visit My Website : developerrony.com 
-->