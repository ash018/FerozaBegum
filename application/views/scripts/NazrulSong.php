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
                <h4>Feroza Begum Nazrul Sangeet</h4>
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
                       .$results[$i]->NazrulSangeetLyrics.'<br>'.'Published Year: '.$results[$i]->Year
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
                       .'.jpg" class = "imageboxX"></a>'
                       .'<button id = "'
                       .$results[$i]->Album01C
                       .'"'
                       .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$results[$i]->Album01
                       .'">Details</button><br>&nbsp;'
                       .'</div>';
               
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
                            <h4 class="modal-title">Nazrul Song Book</h4>
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
            
            <?php
                $nRange = floor(($rangeYear[0]->Diff)/10 + 1);
                
                echo '<div class="row">';
                echo '<div class="col-md-3" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="1">
                                        FULL LIST
                                    </button>  

                                    <div class="modal fade" id="myModal1" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align: center">'.$page_title.'</h4>
                                                    <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                                                </div>
                                                <div id="fullList" class="modal-body">

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>';
                
                for($i=0;$i<$nRange;$i++){
                    if(strval(((int)($rangeYear[0]->MN))+$i*10)!='2010'){
                        echo '<div class="col-md-3" style="margin-bottom: 30px; margin-right: 10px;"> <div class="dropup">';
                        echo '<button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="'.strval(((int)($rangeYear[0]->MN))+$i*10)
                        . '">'.strval(((int)($rangeYear[0]->MN))+$i*10).'-'.strval((((int)($rangeYear[0]->MN))+$i*10)+9).'</button>';   
                        echo '</div></div>';
                    }
                    else{
                        echo '<div class="col-md-3" style="margin-bottom: 30px; margin-right: 10px;"> <div class="dropup">';
                        echo '<button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="'.strval(((int)($rangeYear[0]->MN))+$i*10).'">'.strval(((int)($rangeYear[0]->MN))+$i*10).'-'.strval((((int)($rangeYear[0]->MN))+$i*10)+4).'</button>';   
                        echo '</div></div>';
                    }
                }
                
                echo '<div class="col-md-3" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="2">
                                        Others
                                    </button>  

                                    

                                </div>
                            </div>';
                
                
                echo '</div>';
                ?>
            
            
                
            
            
    
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
        var data = { 'detailsID': detailsID , 'script_id': script_id,'title':'NazrulSong'};
        
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

            
//        $(".ferozaButton").click(function(){
//        var baseUrl = "<?php //echo base_url(); ?>"; 
//        $("#fullList").empty();
//        var songListID = $(this).attr('data-node');
//        console.log(baseUrl);
//        console.log(songListID);
//        $.ajax({
//            url: baseUrl + "Music/getSongList",
//            type: "get",
//            data: "songListID=" + songListID,
//            cache: false,
//            success: function (data) {
//                console.log(data);
//                $("#fullList").append(data);
//                console.log("success");
//            }
//        });
//    });
        
        $(".scriptButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#fullList").empty();
        var SongbookID = $(this).attr('data-node');
        console.log(baseUrl);
        console.log(SongbookID);
        $.ajax({
            url: baseUrl + "Scripts/getSongbook",
            type: "get",
            data: {SongbookID:SongbookID, bookID:1},
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




<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>

<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>