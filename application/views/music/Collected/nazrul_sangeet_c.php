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

    <div class="row">
        <div class="col-md-12">
            <div class="container"> 
                <div class="row">
                    <div class="musicheader">
                        <h4><?php echo $page_title?></h4>
                    </div>
                </div>
            </div>	 
        </div>
    </div>
    
   

    <div class ="container">
        <div class = "row">
            <?php $i=0; 
            
            while($i<sizeof($results)){
             
                $id = substr($results[$i]->LiveLink, strrpos($results[$i]->LiveLink, '/') + 1);
               
                echo '<div class = "col-md-4">' 
                       . '<iframe width="350" height="350" src="https://www.youtube.com/embed/'
                       .$id
                       .'" frameborder="0" allowfullscreen></iframe>'
                       .''
                       .'<button id = "'
                       .$results[$i]->Album01
                       .'"'
                       .'class="btn btn-primary detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$results[$i]->Album01
                       .'">Details</button>'
                       .'<br>'
                       .'&nbsp;'
                       .'</div>';
               
                $i++;
            ?>
            
            <!--Code Here -->
           
         <?php }?>
            
            
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Feroza Begum</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div id="detailsList" class="modal-body">
                            <iframe width="455" height="315" src="https://www.youtube.com/embed/jaav7T_vcTk" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
           
        <div class="row">
                <div class="col-md-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="musicheader">
<!--                                <h4 style = "font-family:Trebuchet MS;">Page List</h4>-->
                                <?php if (isset($links)) {  echo '<h4 style = "font-family:Trebuchet MS;">Page List</h4>'; ?>
                                    <?php ?>
                                    <?php
                                    echo'<div class="pagination">';
                                    echo $links;
                                    echo '</div> ';
                                    ?>
                                <?php } ?>
                                
                                <?php
//                $nRange = ($rangeYear[0]->Diff)/10 + 1;
//                echo '<div class="row">';
//                for($i=0;$i<$nRange;$i++){
//                    if(strval(((int)($rangeYear[0]->MN))+$i*10)!='2010'){
//                        echo '<div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;"> <div class="dropup">';
//                        echo '<button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="'.strval((int)($rangeYear[0]->MN))
//                        . '">'.strval(((int)($rangeYear[0]->MN))+$i*10).'-'.strval((((int)($rangeYear[0]->MN))+$i*10)+9).'</button>';   
//                        echo '</div></div>';
//                    }
//                    else{
//                        echo '<div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;"> <div class="dropup">';
//                        echo '<button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal">'.strval(((int)($rangeYear[0]->MN))+$i*10).'-'.strval((((int)($rangeYear[0]->MN))+$i*10)+4).'</button>';   
//                        echo '</div></div>';
//                    }
//                }
//                echo '</div>';
                
            ?>
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <?php if (!empty($results)) echo '<div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="1">
                                        FULL LIST
                                    </button>  

                                    <div class="modal fade" id="myModal1" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align: center">Nazrul Sangeet</h4>
                                                    <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                                                </div>
                                                <div id="fullList" class="modal-body">

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1"  data-toggle="modal" data-node="2">
                                        1970-1979
                                    </button>  
                                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                                        <div class="songlist">
                                            Song List				
                                        </div>	 

                                        <div class="card-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                                <span aria-hidden="true" style="color: black;">×</span>
                                            </button>

                                        </div>	
                                    </div>	
                                </div>
                            </div>    
                            
                            
                            <div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1" data-toggle="modal" data-node="3">
                                        1980-1989
                                    </button>  
                                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">


                                        <div class="card-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                                <span aria-hidden="true" style="color: black;">×</span>
                                            </button>

                                        </div>	
                                    </div>	
                                </div>
                            </div>
                            
                            <div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1" data-toggle="modal" data-node="4">
                                        1990-1999
                                    </button>  
                                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">


                                        <div class="card-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                                <span aria-hidden="true" style="color: black;">×</span>
                                            </button>

                                        </div>	
                                    </div>	
                                </div>
                            </div>
                            
                            <div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1" data-toggle="modal" data-node="5">
                                        2000-2014
                                    </button>  
                                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">


                                        <div class="card-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                                <span aria-hidden="true" style="color: black;">×</span>
                                            </button>

                                        </div>	
                                    </div>	
                                </div>
                            </div>
                            
                            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                                <div class="dropup">
                                    <button class="btn btn-custom ferozaButton" type="button" id="about-us" data-target="#myModal1" data-toggle="modal" data-node="6">
                                        Others
                                    </button>  
                                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">


                                        <div class="card-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                                <span aria-hidden="true" style="color: black;">×</span>
                                            </button>

                                        </div>	
                                    </div>	
                                </div>
                            </div>    


                            '?>
                            

                            

                            

                            
                            

                            


                        </div>

                    </div>
                </div>	 
            </div>

        </div>
        
        </div>
        

        
    </div>
</div><!-- /container-fluid-->	
<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        
        $(".detailsButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#detailsList").empty();
        var detailsID = $(this).attr('data-node');
        console.log(detailsID);
        $.ajax({
            url: baseUrl + "Music/getSongDetailsList",
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
        console.log(songListID);
        $.ajax({
            url: baseUrl + "Music/getCollectedSongList",
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

<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>

<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>             