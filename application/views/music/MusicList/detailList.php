<?php
   //print_r($detailsList[0]->LiveLink);
   

   
   if($detailsList[0]->LiveLink!=''){
        $id = substr($detailsList[0]->LiveLink, strrpos($detailsList[0]->LiveLink, '/') + 1);
   }
   $detailListSize = 0;
   if($detailsList[0]->Album02!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album03!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album04!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album05!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album06!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album07!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album08!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album09!=''){
       $detailListSize++;
   }
   if($detailsList[0]->Album10!=''){
       $detailListSize++;
   }
   
   //echo $detailListSize;
   
   
?>

<div id="dupSong" >
    <h7><strong>Song Title: </strong><?php echo $detailsList[0]->SongTitle.' ';?></h7>
    <br>
    <h7><strong>Category: </strong><?php echo $detailsList[0]->Category.' ';?></h7>
    <br>
    <h7><strong>Release Year(Song): </strong><?php echo $detailsList[0]->ReleaseYearSong;?></h7>
    <br>
    <h7><strong>Album Title: </strong><?php echo $detailsList[0]->AlbumTitle;?></h7>
    <br>
    <h7><strong>Release Year(Album): </strong><?php echo $detailsList[0]->ReleaseYearAlbum;?></h7>
    
    
    
    <iframe width="455" height="315" src="https://www.youtube.com/embed/<?php echo $id;?>" frameborder="0" allowfullscreen></iframe>
    
    <br>
    <h7><strong>Vocal Artist: </strong><?php echo $detailsList[0]->VocalArtist;?></h7>
    <br>
    <h7><strong>Lyricist: </strong><?php echo $detailsList[0]->Lyricist;?></h7>
    <br>
    <h7><strong>Music Composer: </strong><?php echo $detailsList[0]->MusicComposer;?></h7>
    <br>
    <h7><strong>Music Director: </strong><?php echo $detailsList[0]->MusicDirector;?></h7>
    <br>
    <h7><strong>Music Arranger: </strong><?php echo $detailsList[0]->MusicArranger;?></h7>
    <br>
    <h7><strong>Sound Recordist: </strong><?php echo $detailsList[0]->SoundRecordist;?></h7>
    <br>
    <h7><strong>Recording Studio: </strong><?php echo $detailsList[0]->RecordingStudio;?></h7>
    <br>
    <h7><strong>Producer: </strong><?php echo $detailsList[0]->Producer;?></h7>
    <br>
    <h7><strong>Record Label: </strong><?php echo $detailsList[0]->RecordLabel;?></h7>
    <br>
    <h7><strong>Remarks: </strong><?php echo $detailsList[0]->Remarks;?></h7>
    <br>
    <h7><strong>Album Format: </strong><?php echo $detailsList[0]->AlbumFormat;?></h7>
    <br>

    
    
<?php
 $i = 1;
 $chk = 1;
 //echo $detailListSize;
 while($i <= $detailListSize and $chk==1){
    
    $chk++;
    
    if($detailsList[0]->Album02 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album02
        .'">Album - '
        .$i
        . '</button> &nbsp;'    
        .'';
        $i++;
    }
    
    if($detailsList[0]->Album03 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album03
        .'">Album - '
        .$i        
        .' </button> &nbsp;'    
        .'';
        $i++;
    }
    
    if($detailsList[0]->Album04 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album04
        .'">Album - '
        .$i
        .' </button> &nbsp;'    
        .'';
        $i++;
    } 
    
    if($detailsList[0]->Album05 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album05
        .'">Album - '
        .$i
        .' </button> &nbsp;'    
        .'';
        $i++;
    }
    
    if($detailsList[0]->Album06 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album06
        .'">Album - '
        .$i
        . '</button> &nbsp;'    
        .'';
        $i++;
    }
    
    if($detailsList[0]->Album07 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album07
        .'">Album - '
        .$i        
        . ' </button> &nbsp;'    
        .'';
        $i++;
    } 
    
    if($detailsList[0]->Album08 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album08
        .'">Album - '
        .$i        
        . ' </button> &nbsp;'    
        .'';
        $i++;
    } 
    
    if($detailsList[0]->Album09 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album09
        .'">Album -'
        .$i        
        . ' </button> &nbsp;'    
        .'';
    }
    
    if($detailsList[0]->Album10 != ''){
        echo '<button class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
        .$detailsList[0]->Album10
        .'">Album -'
        .$i        
        . ' </button>'    
        .'';
        $i++;
    }
    
   }
   $detailListSize = 0;
    
    
    ?>
    <br>
    <br>
    <?php if($detailsList[0]->Script01 !=''){ ?>
        <a target="_blank" href="<?php echo base_url(); ?>asset/img/NB/<?php echo $detailsList[0]->Script01; ?>.jpg" data-fancybox data-caption="My caption">
            <button class="btn btn-warning scriptButton">Song Book</button>
        </a>
        
    <?php } ?>
 
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
            url: baseUrl + "Music/getSongDetailsList",
            type: "get",
            data: "detailsID=" + detailsID,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#dupSong").append(data);
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
