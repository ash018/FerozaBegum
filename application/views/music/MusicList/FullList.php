<?php
   // print_r($FullSongList);
  // echo'<pre />'; echo ($FullSongList[0]);
    //$AlbumTitle = $FullSongList[0]['AlbumTitle'];
    //var_dump($FullSongList);
//    foreach ($FullSongList as $result){
//        
//        echo $result->AlbumTitle;
//        echo $result->SongTitle;
//
//    }
    
    
?>


<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>
<div class="container-fluid" style="background-color: #fff">

    <div class="row">
        <div class="col-md-12">
            <div class="container"> 
                <div class="row">
                    <div class="musicheader">
                        <h4><?php
                            if($songListID==1)
                                echo 'Full List';
                            if($songListID==2)
                                echo'1970-1979';
                            if($songListID==3)
                                echo'1980-1989';
                            if($songListID==4)
                                echo'1990-1999';
                            if($songListID==5)
                                echo'2000-2014';
                            if($songListID==6)
                                echo 'Others'?></h4>
                    </div>
                    
                    <table class="table">
                        <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Album Title</th>
                                        <th>Release Year</th>
                                        <th>Record Label</th>
                                        <th>Song Title</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                   
                    </table>
                    
                    <?php
                    // print_r($FullSongList);
                    // echo'<pre />'; echo ($FullSongList[0]);
                    //$AlbumTitle = $FullSongList[0]['AlbumTitle'];
                    //var_dump($FullSongList);
                    $i = 1;
                    
                    
                    
                    
                    foreach ($FullSongList as $result){

                         

                   ?>
                     <table class="table">
<!--                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Album Title</th>
                                        <th>Release Year</th>
                                        <th>Record Label</th>
                                        <th>Song Title</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>-->
                   	
                                <tbody>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $result->AlbumTitle;?></td>
                                        <td><?php echo $result->ReleaseYearAlbum;?></td>
                                        <td><?php echo $result->RecordLabel;?></td>
                                        <td><?php echo $result->SongTitle;?></td>
                                        <?php 
                                            if($result->LiveLink !=''){
                                                    echo '<td><a href="'.$result->LiveLink.'">YouTube Link</a></td>';
                                            }
                                            else {
                                                echo '<td>Link Not Published Yet</td>';
                                            }
                                        ?>

                                    </tr>

                                </tbody>
                            </table>
                    <?php  }?>
                    
                </div>
            </div>	 
        </div>
    </div>
    
</div> 

    
<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        $(".ferozaButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#fullList").empty();
        var songListID = $(this).attr('data-node');
        console.log(baseUrl);
        $.ajax({
            url: baseUrl + "Music/getSongList",
            type: "get",
            data: "songListID=" + songListID,
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
</div>             <!-- END Maincontent -->
