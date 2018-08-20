<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>
<div class="container-fluid" style="background-color: #8e8e98">

    <div class="container"> 
        <div class="row">
            <div class="programmeheader col-md-12">
                <h4 style="font-family:Trebuchet MS;">Single Photo</h4>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Feroza Begum</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div id="detailsList" class="modal-body">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class ="container">
        <div class = "row">
            <?php $i=0; 
            
            while($i<sizeof($singlePhoto)){
             
                
               
                echo '<div class = "col-md-6">'
                       .'<h6 class="lyricBoxX">'
                       .$singlePhoto[$i]->Caption.'<br>'.'Year: '.$singlePhoto[$i]->Year
                       .'</h6>'
                       . '<a target="_blank" href="'
                       .base_url()
                       .'asset/img/press/'
                       .$singlePhoto[$i]->NewsCode
                       .'.jpg"'
                       .'data-fancybox data-caption="My caption">'
                       .'<img src="'
                       .base_url()
                       .'asset/img/press/'
                       .$singlePhoto[$i]->NewsCode
                       .'.jpg" class= "img-responsive imagebox">'
                       . '</a>'
//                       .'<button id = "'
//                       .$singlePhoto[$i]->ID
//                       .'"'
//                       .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
//                       .$singlePhoto[$i]->NewsCode
//                       .'">Details</button>'
                       .'<br>'
                       .'<button id = "'
                       .$singlePhoto[$i]->NewsCode
                       .'"'
                       .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$singlePhoto[$i]->NewsCode
                       .'">Details</button>'
                       .'&nbsp;'
                       .'</div>';
               
                $i++;
            ?>
            
            <!--Code Here -->
           
         <?php }?>
        </div>
    </div>
   
   
<!--    <div class = "container">
        <div class = "row">
            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic1.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic1.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic2.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic2.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic3.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic3.jpg" class = "img-responsive imagebox"> 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic4.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic4.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic5.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic5.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic6.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic6.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic7.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic7.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class = "col-md-3">
                <a href="<?php echo base_url();?>asset/img/photogallery/pic8.jpg" data-fancybox data-caption="My caption">
                    <img src="<?php echo base_url();?>asset/img/photogallery/pic8.jpg" class = "img-responsive imagebox" > 
                </a>
            </div>

            <div class ="col-md-12">
                <h4 style = "font-family:Trebuchet MS;">More</h4>
            </div>

        </div>
    </div>-->


</div>	


<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>

<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>

<script type="text/javascript">
        $(document).ready(function () {
        
        $(".detailsButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#detailsList").empty();
        var detailsID = $(this).attr('data-node');
        console.log(detailsID);
        $.ajax({
            url: baseUrl + "Media/getPressNewsList",
            type: "get",
            data: "detailsID=" + detailsID,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#detailsList").append(data);
                console.log("success");
                }
            });
        });

            
        $(".ferozaButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#fullList").empty();
        var songListID = $(this).attr('data-node');
        console.log(baseUrl);
        $.ajax({
            url: baseUrl + "Music/getSongList",
            type: "get",
            //data: "songListID=" + songListID,
            data: {songListID:songListID, songID:1},
            cache: false,
            success: function (data) {
                console.log(data);
                $("#fullList").append(data);
                console.log("success");
            }
        });
    });
    });
</script>