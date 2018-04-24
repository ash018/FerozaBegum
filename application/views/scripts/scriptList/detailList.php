<?php
   //print_r($detailsList[0]->LiveLink);
   
   //$id = substr($detailsList[0]->LiveLink, strrpos($detailsList[0]->LiveLink, '/') + 1);
   
   
   //echo $detailListSize;
   
    
   
?>

<div id="dupSong" >
<!--    <h7><strong>Song Title: </strong><?php //echo $detailsList[0]->NazrulSangeetLyrics.' ';?></h7>
    <br>
    <h7><strong>Release Year(Song): </strong><?php //echo $detailsList[0]->YearAlbum;?></h7>
    <br>
    <h7><strong>Album Title: </strong><?php //echo $detailsList[0]->AlbumTitle;?></h7>
    <br>
    <h7><strong>Release Year(Album): </strong><?php //echo $detailsList[0]->ReleaseYearAlbum;?></h7>-->
    

    <?php 
    echo '<img src="'
            . base_url()
            . 'asset/img/NB/'
            . $detailsID
            . '.jpg" class = "imageboxX">';
    
    $i = 1;
    
    foreach($detailsList as $detail){
        
        echo '<div class="bor">';
        echo '<strong>Album-'.$i.'</strong><br>';
        
        if($detail->Script01 == $detailsID){
            echo '<h7><strong>Song Title: </strong>'.  $detail->SongTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Category: </strong>'.  $detail->Category.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Sub Category: </strong>'.  $detail->SubCategory.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Year: </strong>'.  $detail->Year.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Title: </strong>'.  $detail->AlbumTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Code: </strong>'.  $detail->AlbumCode.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Record Title/Specifications: </strong>'.  $detail->RecordTitleSpecifications.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Format: </strong>'.  $detail->AlbumFormat.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Volume: </strong>'.  $detail->Volume.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album No: </strong>'.  $detail->AlbumNo.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Genre: </strong>'.  $detail->Genre.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Vocal Artist: </strong>'.  $detail->VocalArtist.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Lyricist: </strong>'.  $detail->Lyricist.' '.'</h7>';
            echo '<br>';
            echo '</div>';
        }
        if($detail->Script02 == $detailsID){
            echo '<h7><strong>Song Title: </strong>'.  $detail->SongTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Category: </strong>'.  $detail->Category.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Sub Category: </strong>'.  $detail->SubCategory.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Year: </strong>'.  $detail->Year.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Title: </strong>'.  $detail->AlbumTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Code: </strong>'.  $detail->AlbumCode.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Record Title/Specifications: </strong>'.  $detail->RecordTitleSpecifications.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Format: </strong>'.  $detail->AlbumFormat.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Volume: </strong>'.  $detail->Volume.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album No: </strong>'.  $detail->AlbumNo.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Genre: </strong>'.  $detail->Genre.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Vocal Artist: </strong>'.  $detail->VocalArtist.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Lyricist: </strong>'.  $detail->Lyricist.' '.'</h7>';
            echo '<br>';
            echo '</div>';
            
        }
        if($detail->Script03 == $detailsID){
            echo '<h7><strong>Song Title: </strong>'.  $detail->SongTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Category: </strong>'.  $detail->Category.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Sub Category: </strong>'.  $detail->SubCategory.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Year: </strong>'.  $detail->Year.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Title: </strong>'.  $detail->AlbumTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Code: </strong>'.  $detail->AlbumCode.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Record Title/Specifications: </strong>'.  $detail->RecordTitleSpecifications.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Format: </strong>'.  $detail->AlbumFormat.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Volume: </strong>'.  $detail->Volume.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album No: </strong>'.  $detail->AlbumNo.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Genre: </strong>'.  $detail->Genre.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Vocal Artist: </strong>'.  $detail->VocalArtist.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Lyricist: </strong>'.  $detail->Lyricist.' '.'</h7>';
            echo '<br>';
            echo '</div>';
        }
        if($detail->Script04 == $detailsID){
            echo '<h7><strong>Song Title: </strong>'.  $detail->SongTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Category: </strong>'.  $detail->Category.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Sub Category: </strong>'.  $detail->SubCategory.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Year: </strong>'.  $detail->Year.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Title: </strong>'.  $detail->AlbumTitle.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Code: </strong>'.  $detail->AlbumCode.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Record Title/Specifications: </strong>'.  $detail->RecordTitleSpecifications.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album Format: </strong>'.  $detail->AlbumFormat.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Volume: </strong>'.  $detail->Volume.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Album No: </strong>'.  $detail->AlbumNo.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Genre: </strong>'.  $detail->Genre.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Vocal Artist: </strong>'.  $detail->VocalArtist.' '.'</h7>';
            echo '<br>';
            echo '<h7><strong>Lyricist: </strong>'.  $detail->Lyricist.' '.'</h7>';
            echo '<br>';
            echo '</div>';
        }
        $i++;
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
