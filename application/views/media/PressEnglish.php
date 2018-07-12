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
    
    
    <div class ="container">
        <div class = "row">
            <?php $i=0; 
            
            while($i<sizeof($singlePhoto)){
             
                
               
                echo '<div class = "col-md-6">'
                       .'<h6 class="lyricBoxX">'
                       .$singlePhoto[$i]->Caption.'<br>'.'Year: '.$singlePhoto[$i]->Year
                       .'</h6>'
                       . '<a href="'
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
                       .'<button id = "'
                       .$singlePhoto[$i]->ID
                       .'"'
                       .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$singlePhoto[$i]->NewsCode
                       .'">Details</button>'
                       .'<br>'
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