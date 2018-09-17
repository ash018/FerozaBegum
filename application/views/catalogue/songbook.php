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
                        if($page_title=='Song Book'){
                            echo '<a href="';
                            echo base_url('catalogue/ferozabegum');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Feroza Begum</button></a>';
                            
                            
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
                        if($page_title=='Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/FullVolumeKamal');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Kamal Das Gupta</button></a>';
                               
                        }
                        
                        else if($page_title=='Collected Recording'){
                            echo '<a href="';
                            echo base_url('music/CollectedRabindraSangeet');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Rabindra Sangeet</button></a>';
                        }
                        
                        else if($page_title=='Mixed Album'){
                            echo '<a href="';
                            echo base_url('music/MixedRabindraSangeet');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Rabindra Sangeet</button></a>';
                        }
                        
                    ?>
                    
                </div>

                <div class = "col-md-3">
                    <?php
                        if($page_title=='Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/FullVolumeOthers');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Published Book</button></a>';
                        }
                        
                        else if($page_title=='Collected Recording'){
                            echo '<a href="';
                            echo base_url('music/CollectedModernBengaliSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali'. '<br>'.' Song</button></a>';
                        }
                        
                        else if($page_title=='Mixed Album'){
                            echo '<a href="';
                            echo base_url('music/MixedModernBengaliSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali'. '<br>'.' Song</button></a>';
                            
                        }
                        
                    ?>
                </div>
                    
               
             
            
             <?php $i=0; 
            

            ?>
            
            
           
         <?php// }?>
            
           
        </div>

            
        <br><br> 
           
            

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