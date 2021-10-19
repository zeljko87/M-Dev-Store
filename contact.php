<?php
    $active = "Contact";
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php include("includes/sidebar.php"); ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9">
                    <div class="box">
                        <div class="box-header">
                            <center>
                                <h2>Feel free to Contact Us</h2>
                                <p class="text-muted">
                                    If you have any question, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                                </p>
                            </center>
                            <form action="contact.php" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Send Message
                                    </button>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['submit']))
                                {
                                    // Admin receive message with this
                                    $sender_name = $_POST['name'];
                                    $sender_email = $_POST['email'];
                                    $sender_subject = $_POST['subject'];
                                    $sender_message = $_POST['message'];
                                    $receiver_email = "zeljkomilutinovic566@gmail.com";
                                    mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                                    // Auto reply to sender with this ///
                                    $email = $_POST['email'];
                                    $subject = "Welcome to my website";
                                    $msg = "Thanks for sending us message. ASAP i will reply your message";
                                    $from = "zeljkomilutinovic566@gmail.com";
                                    mail($email, $subject, $msg, $from);
                                    echo "<h2> Your message has sent successfully </h2>";
                                }
                            ?>
                        </div> <!-- box-header end -->
                    </div> <!-- box end -->
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
