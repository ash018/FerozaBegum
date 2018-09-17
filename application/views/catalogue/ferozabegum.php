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
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/FullVolume');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Full Volume</button></a>';
                            
                            
                        }
                            
                           
                            
                    ?>
                </div>

                <div class = "col-md-3">
                    
                    
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/NazrulSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Nazrul Sangeet <br> Lyrics</button></a>';
                               
                        }
                        
                        
                    ?>
                    
                </div>

                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/NazrulSongScript');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Nazrul Sangeet <br> Lyrics & Stuff Notation</button></a>';
                        }
                        
                    ?>
                </div>
            
                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/RabindraSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Rabindra Sangeet</button></a>';
                        }
                        
                    ?>
                </div>
                    
               
             
            
             <?php $i=0; 
            

            ?>
            
            
           
         <?php// }?>
            
           
        </div>
        
        <div class = "row">
            
            
                <div class = "col-md-3">

                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/RabindraSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Rabindra Sangeet <br> Lyrics & Stuff Notation</button></a>';
                            
                            
                        }
                            
                           
                            
                    ?>
                </div>

                <div class = "col-md-3">
                    
                    
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/ModernBengaliSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali Song <br> Lyrics</button></a>';
                               
                        }
                        
                        
                    ?>
                    
                </div>

                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/ModernBengaliLyricsStuffNotation');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Modern Bengali Song <br> Lyrics & Stuff Notation</button></a>';
                        }
                        
                    ?>
                </div>
            
                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/FerozaBegumSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Feroza Begum Song</button></a>';
                        }
                        
                    ?>
                </div>
                    
               
             
            
             <?php $i=0; 
            

            ?>
            
            
           
         <?php// }?>
            
           
        </div>
        
        <div class = "row">
            
            
                <div class = "col-md-3">
<!--                    <a href="<?php echo base_url('catalogue/albumSection'); ?>">     
                        <button  class="btn catbtn" type="submit" />Nazrul Sangeet</button>
                    </a>-->
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/GeetGhazalBhajanSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Geet Gazal Bhajan <br> Lyrics</button></a>';
                            
                            
                        }
                            
                           
                            
                    ?>
                </div>

                <div class = "col-md-3">
                    
                    
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/GeetGhazalBhajanLyricsStuffNotation');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Geet Gazal Bhajan <br> Lyrics & Stuff Notation</button></a>';
                               
                        }
                        
                        
                    ?>
                    
                </div>

                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/OthersSong');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Other Lyrics </button></a>';
                        }
                        
                    ?>
                </div>
            
                <div class = "col-md-3">
                    <?php
                        if($page_title=='Feroza Begum Song Book'){
                            echo '<a href="';
                            echo base_url('scripts/OthersSongLyricsStuffNotation');
                            echo '"';
                            echo '<button class="btn catbtn" type="submit" />Other Lyrics  <br>& Stuff Notation</button></a>';
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