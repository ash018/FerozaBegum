
<?php
    if (isset($alertCheck)) {
        $message = "You've been logged out!";
    ?>
    <script src="/ferozabegum/asset/js/jquery-3.2.1.min.js"></script>    
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal1').modal('show');
        });
        console.log("hello");
    </script>
    <?php echo $header ?>
    <?php echo $menubar; ?>
    <!-- END SIDEBAR -->
    <?php echo $main_content; ?>
    <!-- END Maincontent -->


    <div class="col-5 col-md-1 f_margin_right_10">
        <div class="dropup" >
            <!--                <button class="btn btn-custom" type="button" id="about-us" data-toggle="dropdown" >
                                SUBSCRIBE
                            </button>  -->
<!--            <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="1">
                SUBSCRIBE
            </button> -->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            Please Share Your Name & Email Address
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>   
                        <form  action="<?php echo base_url('Subscriber'); ?>" method="post">
                            <?php
                            if ($alertCheck == 1) {
                                echo '<div class="alert alert-success" role="alert">
                                                  <strong>Thank You!</strong> You have successfully subscribed.
                                                  </div>';
                            } else {
                                echo 'Fail';
                            }
                            ?>  
                            <div class="form-group" style="margin-bottom: 0rem;">
                                <input type="text" name="SubscribeName" id="SubscribeName"  class="form-control" placeholder="Enter Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" name="SubscribeEmail" id="SubscribeEmail"  class="form-control" placeholder="Enter Email">
                            </div>
                            <button type="submit" class="btn btn-custom form-control">SUBSCRIBE</button>
                        </form>




                    </div>

                </div>
            </div>         
        </div>
    </div>
    <?php echo $footer; ?>
<?php } ?>

