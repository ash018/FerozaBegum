<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $results[0]->LiveLink;



if (sizeof($results) == 0) {
    echo '<div class="container">';
    echo '<h1>No Song Found</h1>';
    echo '</div>';
}
//
else {
    //var_dump($results);
    echo '<div class ="container">';
    echo '<h1>Total '.sizeof($results).' Songs Found.';
    echo '<br><br>';
    echo '      <div class = "row">';
    
    $i = 0;
    //var_dump($results);
    while ($i < (sizeof($results))) {
        //echo $results[$i]->LiveLink; 
        $id = substr($results[$i]->LiveLink, strrpos($results[$i]->LiveLink, '/') + 1);
               
                echo '<div class = "col-md-4">' 
                       . '<iframe width="350" height="350" src="https://www.youtube.com/embed/'
                       .$id
                       .'" frameborder="0" allowfullscreen></iframe>'
                       .''
                       .'<button id = "'
                       .$results[$i]->Album01
                       .'"'
                       .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                       .$results[$i]->Album01
                       .'">Details</button>'
                       .'<br>'
                       .'&nbsp;'
                       .'</div>';
               
                $i++;
    }
    echo '</div>';
    echo '</div>';
}
    

?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Feroza Begum</h4>
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
        console.log(baseUrl);
        $.ajax({
            url: baseUrl + "Music/getSongList",
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