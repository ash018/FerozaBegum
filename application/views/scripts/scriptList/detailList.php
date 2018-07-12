<?php
//print_r($detailsList[0]->LiveLink);
//var_dump($infoList);

if ($infoList[0]->LiveLink != '') {
    $id = substr($infoList[0]->LiveLink, strrpos($infoList[0]->LiveLink, '/') + 1);
}
$detailListSize = 1;
if ($infoList[0]->Album02C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album03C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album04C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album05C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album06C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album07C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album08C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album09C != '') {
    $detailListSize++;
}
if ($infoList[0]->Album10C != '') {
    $detailListSize++;
}
//echo $detailListSize;
?>

<div id="dupSong" >

<?php
echo '<a target="_blank" href="'
 .base_url()
 . 'asset/img/NB/'
 . $detailsID
 .'.jpg" data-fancybox data-caption="My caption">'
 . '<img src="'
 . base_url()
 . 'asset/img/NB/'
 . $detailsID
 . '.jpg" class = "imageboxX"></a>';

    echo '<br>'
?>

    
    
    

<?php
    $i = 1;
    $chk = 1;
    //echo $detailListSize;
    while ($i <= $detailListSize and $chk == 1) {

        $chk++;
        
        if ($infoList[0]->Album01C != '') {
            echo '<button id="'
            . $infoList[0]->Album01C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . '</button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album02C != '') {
            echo '<button id="'
            . $infoList[0]->Album02C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . '</button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album03C != '') {
            echo '<button id="'
            . $infoList[0]->Album03C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album04C != '') {
            echo '<button id="'
            . $infoList[0]->Album04C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album05C != '') {
            echo '<button id="'
            . $infoList[0]->Album05C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album06C != '') {
            echo '<button id="'
            . $infoList[0]->Album06C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album07C != '') {
            echo '<button id="'
            . $infoList[0]->Album07C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album08C != '') {
            echo '<button id="'
            . $infoList[0]->Album08C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album09C != '') {
            echo '<button id="'
            . $infoList[0]->Album09C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }

        if ($infoList[0]->Album10C != '') {
            echo '<button id="'
            . $infoList[0]->Album10C
            . '" class="btn catbtn dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
            . $detailsID
            . '">Album - '
            . $i
            . ' </button> &nbsp;'
            . '';
            $i++;
        }
    }
    $detailListSize = 0;
?>
    <br>
    <br>
    
    
    
    <?php if ($infoList[0]->LiveLink != '') { ?>
        <a target="_blank" href="<?php echo $infoList[0]->LiveLink; ?>" data-fancybox data-caption="My caption">
            <button class="btn btn-warning scriptButton">Video Link</button>
        </a>

    <?php } ?>

    
    <div class="col-md-12 line"></div>
</div>



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

<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".dupButton").click(function () {
            var baseUrl = "<?php echo base_url(); ?>";
            $("#dupSong").empty();
            var detailsID = $(this).attr('id');
            //var script_id = $(this).attr('id');
            console.log(detailsID);
            //console.log(script_id);
            var data = {'detailsID': detailsID};
            $.ajax({
                url: baseUrl + "Music/getSongDetailsList",
                type: "get",
                data: data,
                cache: false,
                success: function (data) {
                    console.log(data);
                    $("#detailsList").html('');
                    $("#detailsList").append(data);
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
