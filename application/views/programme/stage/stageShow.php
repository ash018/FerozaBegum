<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>
<div class="container-fluid" style="background-color: #8e8e98">

    <div class="container"> 
        <div class="row">
            <div class="programmeheader col-md-12">
                <h4><b><?php echo $page_title?></b></h4>
            </div>
        </div>
    </div>	
    <?php //var_dump($stageShow)?>
    <div class ="container">
        
        <div class = "row">
            
            <?php
            $i = 0;
            $c = 1;
            $cc = 1;
            $sz = sizeof($stageShow)-(sizeof($stageShow)-1);
            while ($i < sizeof($stageShow)) {

                //$id = substr($results[$i]->LiveLink, strrpos($results[$i]->LiveLink, '/') + 1);
                
                if($stageShow[$i]->LiveLink==''){
                    echo '<div class = "col-md-4">'
                        .'<div class="card text-center">'
                        .'<div class="card-header">'
                        .$page_title.'-'
                        .$sz  
                        .'</div>'
                        .'<div class="card-body">'
                        .'<h5 class="card-title">'
                        .$stageShow[$i]->ProgramTitle
                        .'</h5>'
                        .'<p class="card-text">'
                        . '</p>'
                        .'<button id = "'
                        .$stageShow[$i]->EntryCode
                        .'"'
                        .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                        .$stageShow[$i]->EntryCode
                        .'">Details</button>'
                        .'<br>'
                        .'&nbsp;'
                        .'</div>'
                        .'<div class="card-footer text-muted">'

                        .'</div></div><br></div>';
                }
                else{
                    echo '<div class = "col-md-4">'
                        .'<div class="card text-center">'
                        .'<div class="card-header">'
                        .$page_title.'-'
                        .$sz  
                        .'</div>'
                        .'<div class="card-body">'
                        .'<h5 class="card-title">'
                        .$stageShow[$i]->ProgramTitle
                        .'</h5>'
                        .'<p class="card-text">'
                        .'<button id = "'
                        .$stageShow[$i]->EntryCode
                        .'"'
                        .'class="btn catbtn detailsButton" type="button" data-toggle="modal" data-target="#myModal" data-node="'
                        .$stageShow[$i]->EntryCode
                        .'">Details</button>'
                        .'<br>'
                        .'&nbsp;'    
                        . '</p>'
                        .'<a href="'
                        .$stageShow[$i]->LiveLink
                        . '" class="btn btn-primary">Live Link</a>'
                        .'</div>'
                        .'<div class="card-footer text-muted">'

                        .'</div></div><br></div>';
                }
                
                $i++;
                
                $sz++;
                
                ?>

                <!--Code Here -->

<?php } ?>
            
            
            

        </div>
        
        
        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Feroza Begum</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div id="detailsList">
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
        
        <div class = "row">

            <div class = "col-md-4">
                <img src = "<?php echo base_url();?>asset/img/Programme.jpg" class = "img-responsive">
                <div class = "col-md-12">
                    <div class="mainhader">Nazrul Jayanti Programme</div>
                    <div class="subheader" >Banga Shammalon, USA, 1998</div>
                </div>
            </div>

            <div class = "col-md-4">
                <img src = "<?php echo base_url();?>asset/img/Programme.jpg" class = "img-responsive">
                <div class = "col-md-12">
                    <div class="mainhader">Nazrul Jayanti Programme</div>
                    <div class="subheader">Banga Shammalon, USA, 1998</div>
                </div>
            </div>

            <div class = "col-md-4">
                <img src = "<?php echo base_url();?>asset/img/Programme.jpg" class = "img-responsive">
                <div class = "col-md-12">
                    <div class="mainhader">Nazrul Jayanti Programme</div>
                    <div class="subheader" >Banga Shammalon, USA, 1998</div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">

        <table class="table table-bordered" id="programtable">
            <thead class="table-content">
                <tr>
                    <th>SL</th>
                    <th>Programme Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="tablefont">
                <tr>
                    <td>01</td>
                    <td>Nazrul Jayanti Programme<br>Banga Shammalon, USA, 1998</td>
                    <td>
                        <audio controls>
                            <source src="" type="audio/mp4">
                        </audio>	
                    </td>

                </tr>
                <tr>
                    <td>01</td>
                    <td>Nazrul Jayanti Programme<br>Banga Shammalon, USA, 1998</td>
                    <td>
                        <audio controls>
                            <source src="" type="audio/mp4">
                        </audio>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <br>
   

    
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
            url: baseUrl + "Programme/getProgrammeDetailsList",
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


<div class="f_top_margin_30"></div>
<div class="col-md-12 line"></div>

<div class="row">        
    <div class="col-md-12">&nbsp;</div>                  
</div>