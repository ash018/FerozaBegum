
<div class="container">
    <div class="row">
        <div class="col-md-12">&nbsp;</div>


    </div>
    <div class="row">
        <div class="col-md-5">&nbsp;</div>

        <div class="col-md-5">
            <img src="<?php echo base_url(); ?>asset/img/f.jpg" class="img-responsive f_footerImgF" alt="Facebook">
            <img src="<?php echo base_url(); ?>asset/img/s.jpg" class="img-responsive f_footerImg" alt="s"> 
            <img src="<?php echo base_url(); ?>asset/img/a.jpg" class="img-responsive f_footerImg" alt="a">
            <img src="<?php echo base_url(); ?>asset/img/t.jpg" class="img-responsive f_footerImg" alt="t">
            <img src="<?php echo base_url(); ?>asset/img/l.jpg" class="img-responsive f_footerImg" alt="l">
            <img src="<?php echo base_url(); ?>asset/img/p.jpg" class="img-responsive f_footerImg" alt="p">
        </div>            
        <div class="col-md-2">
            <p style="padding-top: 10px; font-size: 11px;">©ACI Foundation</p>
        </div>
    </div>
    <div class="col-md-5">&nbsp;</div>

</div>
<div class="container">
    <div class="row">

        


        <div class="col-5 col-md-1 f_margin_right_10">
            <div class="dropup" >
<!--                <button class="btn btn-custom" type="button" id="about-us" data-toggle="dropdown" >
                    SUBSCRIBE
                </button>  -->
                <button class="btn btn-custom2" type="button" id="about-us" data-target="#myModalSubscribe"  data-toggle="modal" data-node="1">
                    SUBSCRIBE
                </button> 
                <div class="modal fade" id="myModalSubscribe" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                Please Share Your Name & Email Address
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>   
                                <form  action="<?php echo base_url('Subscriber'); ?>" method="post">
                                      
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
        <!--<div class="col-1 col-md-1">&nbsp;</div>-->
        <div class="col-5 col-md-2">  
            <div class="dropup">
<!--                <button class="btn btn-custom2" type="button" id="about-us" data-toggle="dropdown" >
                    SUBMISSION
                </button>-->
                <a href="<?php echo base_url('upload'); ?>">
                    <button class="btn btn-custom2" type="submit"  >
                        SUBMISSION
                    </button>
                </a>
                
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;">
                        <div class="card-header" style="text-align: center; background-color: #2eb7c9; color: #fff;">
                            Content Submission								
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: #ccc;">×</span>
                            </button>
                        </div>
                        <div style="border: 0px solid; width: 260px; margin-top: 50px; margin-bottom: 20px;" >
                            
                                <div class="form-group" style="margin-bottom: 0rem;">
                                    <input type="text" name="SubscribeName" id="SubscribeName" class="form-control" placeholder="Your Name (Required)" required="">
                                </div>
                                <div class="form-group" style="margin-bottom: 0rem;">
                                    <input type="email" name="SubscribeEmail" id="SubscribeEmail" class="form-control" placeholder="Email (Required)" required="">
                                </div>
                                <div class="form-group" style="margin-bottom: 0rem;">
                                    <input type="text" name="SubscribePhone" id="SubscribeName" class="form-control" placeholder="Your Phone (Optional)">
                                </div>
                                <div class="form-group">
                                    <!--<input type="file" name="SubscribeAttach" id="SubscribeEmail" class="form-control-file" placeholder="Attachment">-->
                                    
                                    <label class="custom-file">
                                            
                                        <input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp" name="userfile" size="20" />
                                        <span  accesskey=""class="custom-file-control form-control-file "></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-custom form-control">SUBSCRIBE</button>
                        
                        </div>
                    </div>
               
            </div>
        </div>
    </div>   
</div>
<footer class="footer"></footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--        <script src="<?php echo base_url(); ?>asset/js/jquery-3.js"></script>-->
<script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/tether.min.js"></script>
<!--<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.js"></script>

<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });


        return false;
    });

</script>
</body>
</html>