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
                <h4> <?php echo $page_title?></h4>
            </div>
        </div>
    </div>

    <?php 
        
    ?>
    
    <div class = "container">
        <div class = "row">
            
            
                <div class = "col-md-3">
<!--                    <a href="<?php echo base_url('catalogue/albumSection'); ?>">     
                        <button  class="btn catbtn" type="submit" />Nazrul Sangeet</button>
                    </a>-->
                    <?php
                        if($page_title=='Full Album'){
                            echo '<a href="';
                            echo base_url('music');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Nazrul Sangeet</button></a>';
                            
                            
                        }
                            
                        else if($page_title=='Collected Recording'){
                            echo '<a href="';
                            echo base_url('music/Collected');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Nazrul Sangeet</button></a>';
                        }
                            
                        
                        else if($page_title=='Mixed Album'){
                            echo '<a href="';
                            echo base_url('music/mixed');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Nazrul Sangeet</button></a>';
                        }    
                            
                    ?>
                </div>

                <div class = "col-md-3">
                    
                    
                    <?php
                        if($page_title=='Full Album'){
                            echo '<a href="';
                            echo base_url('music/RabindraSangeet');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Rabindra Sangeet</button></a>';
                               
                        }
                        
                        else if($page_title=='Collected Recording'){
                            echo '<a href="';
                            echo base_url('music/CollectedModernBengaliSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali'. '<br>'.' Song</button></a>';
                        }
                        
                        
                        
                    ?>
                    
                </div>

                <div class = "col-md-3">
                    <?php
                        if($page_title=='Full Album'){
                            echo '<a href="';
                            echo base_url('music/ModernBengaliSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali'. '<br>'.' Song</button></a>';
                        }
                        
                        
                        
                        
                        
                    ?>
                </div>
                    
               
             
            
             <?php $i=0; 
            
//            while($i<sizeof($FullVolume)){
//             
//                
//               
//                echo '<div class = "col-md-4">'
//                       . '<a target="_blank" href="'
//                       .base_url()
//                       .'asset/img/NB/'
//                       .$FullVolume[$i]->Album01
//                       .'.pdf" data-fancybox data-caption="My caption">'
//                        .'<button  class="btn catbtn2" type="submit" />'
//                       .$FullVolume[$i]->FullVolume.'<br>'.'Published Year: '.$FullVolume[$i]->Year
//                       .'</button>'
//                       .'</a>'
//                       .'</div>';
//               
//                $i++;
            ?>
            
            <!--Code Here -->
           
         <?php// }?>
            
           
        </div>

            
        <br><br> 
           
            
<!--            <div class="row">
                <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                    <div class="dropup">
                        <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS"  data-toggle="modal" data-node="1">
                            FULL LIST
                        </button>  

                        <div class="modal fade" id="myModalS" role="dialog">
                            <div class="modal-dialog">

                                 Modal content
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="text-align: center">Nazrul Sangit Script</h4>
                                        <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                                    </div>
                                    <div id="scriptList" class="modal-body">

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS"  data-toggle="modal" data-node="2">
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
                

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="3">
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

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="4">
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

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="5">
                        2000-2014
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
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="6">
                        Others
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
    
            </div>-->
        </div>
    </div>






<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        
       

            
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