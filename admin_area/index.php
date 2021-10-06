<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <title>M-Dev Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/body-style.css">
        <link rel="stylesheet" href="css/panel-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <link rel="stylesheet" href="css/admin-profile-style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <?php
                include("includes/sidebar.php");
            ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <?php
                        if(isset($_GET['dashboard']))
                        {
                            include("dashboard.php");
                        }
                    ?>
                </div>
            </div>
        </div> <!-- end wrapper -->
    </body>
</html>
