<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}
.pagination a.active {
    background-color: #4CAF50;
    color: red;
}

.pagination a:hover:not(.active) {background-color: #33B5E5;}

</style>

<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>
<div class="container-fluid" style="background-color: #8e8e98">

    <div class="container"> 
        <div class="row">
            <div class="programmeheader col-md-12">
                <h4>Feroza Begum Others Song</h4>
            </div>
        </div>
    </div>

    <?php 
        
    ?>
    
    <div class = "container">
        <div class = "row">
            
            
             
            
             <?php $i=0; 
            
            while($i<sizeof($results)){
             
                
               
                echo '<div class = "col-md-4">'
                       .'<h6 class="lyricBox">'
                       .$results[$i]->Others.'<br>'.'Published Year: '.$results[$i]->Year
                       .'</h6>'
                       . '<a target="_blank" href="'
                       .base_url()
                       .'asset/img/NB/'
                       .$results[$i]->Album01
                       .'.jpg" data-fancybox data-caption="My caption">'
                       .'<img src="'
                       .base_url()
                       .'asset/img/NB/'
                       .$results[$i]->Album01
                       .'.jpg" class = "imageboxX"></a>';
                if($results[$i]->Album01C!=''){
                       echo '<button id = "'
                       .$results[$i]->Album01C
                       .'"'
                       .'class="btn btn-primary detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$results[$i]->Album01
                       .'">Details</button><br>&nbsp;';
                }
                       echo '</div>';
               
                $i++;
            ?>
            
            <!--Code Here -->
           
         <?php }?>
            
           
            
            <div class ="col-md-12">
                <h4 style = "font-family:Trebuchet MS;">More</h4>
                <div class="row">
                    <?php if (isset($links)) { ?>
                    <?php echo'<br><div class="pagination">';
                    echo $links;
                    echo '</div> '; ?>
                <?php } ?>
                     <br>  <br>
                </div>    
            </div>
            
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Other Song Book</h4>
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
           
            
            
        </div>
    </div>


</div>



<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        
        $(".detailsButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#detailsList").empty();
        var detailsID = $(this).attr('data-node');
        var script_id = $(this).attr('id');
        var data = { 'detailsID': detailsID , 'script_id': script_id};
    
        console.log("Data Node:"+detailsID);
        console.log("Script ID"+script_id);
        $.ajax({
            url: baseUrl + "Scripts/getScriptDetailsList",
            type: "get",
            data: data,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#detailsList").append(data);
                console.log("success");
                }
            });
        });
            
        $(".scriptButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#scriptList").empty();
        var scriptListID = $(this).attr('data-node');
        console.log(scriptListID);
        $.ajax({
            url: baseUrl + "Scripts/getScriptListWithID",
            type: "get",
            data: "scriptListID=" + scriptListID,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#scriptList").append(data);
                console.log("success");
            }
        });
    });
    });
</script>




<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>

<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>