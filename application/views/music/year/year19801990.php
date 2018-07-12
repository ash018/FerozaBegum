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
                <h4> <?php echo $page_title ?></h4>
            </div>
        </div>
    </div>

    <?php
    ?>

    <div class = "container">
        <div class = "row">


            <div class = "col-md-3">

                <button  class="btn catbtn catsong" type="button" id="about-us" data-target="#modal19401950" data-toggle="modal" data-node="1"  />Nazrul Sangeet</button>

            </div>

            <div class = "col-md-3">

                <button  class="btn catbtn catsong" type="button" id="about-us" data-target="#modal19401950" data-toggle="modal" data-node="2" />Rabindra Sangeet</button>
                </a>
            </div>

            <div class = "col-md-3">

                <button  class="btn catbtn catsong" type="button" id="about-us" data-target="#modal19401950" data-toggle="modal" data-node="3" />Modern Bengali<br> Song</button>

            </div>

        </div>


        <br><br> 

        <div class="modal fade" id="modal19401950" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center">Song From 1980-1990</h4>
                        <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                    </div>
                    <div id="fullList" class="modal-body">

                    </div>

                </div>

            </div>
        </div>
        
        

    </div>
</div>






<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".catsong").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#fullList").empty();
        var songListID = $(this).attr('data-node');
        console.log(baseUrl);
        console.log(songListID);
        $.ajax({
            url: baseUrl + "Music/getSongList19801990",
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