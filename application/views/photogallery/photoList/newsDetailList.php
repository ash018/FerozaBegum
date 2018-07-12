<?php
   //print_r($detailsList[0]->LiveLink);
   

   
   //echo $detailListSize;

   //var_dump($detailsList);
   
   
?>

<div id="dupSong" >
    
<?php 
    echo '<h2 style="font-family: times new roman">'.$detailsList[0]->Caption.'</h2>';
    echo '<img src="'
                       .base_url()
                       .'asset/img/press/'
                       .$detailsList[0]->NewsCode
                       .'.jpg" class= "img-responsive imagebox">';
        

?>
    
    
<?php
 $i = 1;
 $chk = 1;
 $PhotographCount = 0;
 if($detailsList[0]->Photograph01!=''){
     $PhotographCount++;
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph01
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 if($detailsList[0]->Photograph02!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph02
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 if($detailsList[0]->Photograph03!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph03
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 if($detailsList[0]->Photograph04!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph04
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph05!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph05
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph06!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph06
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph07!=''){
     $PhotographCount++;
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph07
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph08!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph08
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph09!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph09
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 if($detailsList[0]->Photograph10!=''){
     $PhotographCount++;
     
     
     
     echo '<button class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Photograph10
        .'">Photograph - '
        .$PhotographCount
        . '</button> &nbsp;'    
        .'';
 }
 
 
 
 
    
    ?>
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
        $(document).ready(function () {
        
        $(".dupButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#dupSong").empty();
        var detailsID = $(this).attr('data-node');
        console.log(detailsID);
        $.ajax({
            url: baseUrl + "Photogallery/getPhotoDetailsList",
            type: "get",
            data: "detailsID=" + detailsID,
            cache: false,
            success: function (data) {
                //console.log(data);
                $("#dupSong").html('');
                $("#dupSong").append(data);
                console.log("success");
                }
            });
        });

        $(".scriptButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#detailsList").empty();
        var detailsID = $(this).attr('id');
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
                $("#detailsList").html('');
                $("#detailsList").append(data);
                console.log("success");
                }
            });
        });
        
    });
</script>



<!--<div class="f_top_margin_30"></div>-->
<br>


<!--<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>             -->
