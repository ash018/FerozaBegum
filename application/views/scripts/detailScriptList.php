<style>
   .imagebox2{
	margin-bottom: 60px;
	cursor: pointer;
        width: 300px;
        height: 300px;
} 
</style>




         
<div id="dupSong" >
    
    
    <?php foreach($detailScriptList as $Image){ ?>
    
        <div class = "col-md-12">
            <a href="<?php echo base_url(); ?>asset/img/NB/<?php echo $Image->Album01; ?>.jpg" data-fancybox data-caption="My caption">
                <img src="<?php echo base_url(); ?>asset/img/NB/<?php echo $Image->Album01; ?>.jpg" class = "img-responsive imagebox"> 
            </a>
            
        </div>
    
    <?php }?>
    
        
    

    <br>
    <br>
    <div class="col-md-12 line"></div>
</div>



<!--<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Feroza Begum</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div id="dupSong" class="modal-body">
                <iframe width="455" height="315" src="https://www.youtube.com/embed/jaav7T_vcTk" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>-->
  
<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        
</script>



<!--<div class="f_top_margin_30"></div>-->
<br>


<!--<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>             -->
