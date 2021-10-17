<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        
?>
    
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Users
            </li>
        </ol>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 1 end -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-users"></i> View Users
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No: </th>
                                <th> Name: </th>
                                <th> Image: </th>
                                <th> Email: </th>
                                <th> Country: </th>
                                <th> Job: </th>
                                <th> Contact: </th>
                                <th> Edit: </th>                           
                                <th> Delete: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_user = "select * from admins";
                                $run_user = mysqli_query($conn, $get_user);
                                while($row_user = mysqli_fetch_array($run_user))
                                {
                                    $user_id = $row_user['admin_id'];
                                    $user_name = $row_user['admin_name'];
                                    $user_image = $row_user['admin_image'];
                                    $user_email = $row_user['admin_email'];
                                    $user_country = $row_user['admin_country'];
                                    $user_contact = $row_user['admin_contact'];
                                    $user_job = $row_user['admin_job'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $user_name; ?> </td>
                                 <td>
                                    <img src="admin_images/<?php echo $user_image; ?>" width="70" height="70"">
                                </td>
                                <td> <?php echo $user_email; ?> </td>
                                <td> <?php echo $user_country; ?> </td>
                                <td> <?php echo $user_job; ?> </td>
                                <td> <?php echo $user_contact; ?> </td>                                                                                 
                                <td>
                                    <a href="index.php?user_profile=<?php echo $user_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_user=<?php echo $user_id ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 2 end -->

<?php } ?>