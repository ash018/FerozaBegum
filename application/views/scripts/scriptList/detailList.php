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
echo '<img src="'
 . base_url()
 . 'asset/img/NB/'
 . $detailsID
 . '.jpg" class = "imageboxX">';
?>

    <?php
    if ($infoList[0]->SongTitle != '') {
        echo '<h7><strong>Song Title: </strong>' . $infoList[0]->SongTitle . '</h7><br>';
    }
    if ($infoList[0]->Category != '') {
        echo '<h7><strong>Category: </strong>' . $infoList[0]->Category . '</h7><br>';
    }
    if ($infoList[0]->ReleaseYearSong != '') {
        echo '<h7><strong>Release Year(Song): </strong>' . $infoList[0]->ReleaseYearSong . '</h7><br>';
    }
    if ($infoList[0]->AlbumTitle != '') {
        echo '<h7><strong>Album Title: </strong>' . $infoList[0]->AlbumTitle . '</h7><br>';
    }
    if ($infoList[0]->ReleaseYearAlbum != '') {
        echo '<h7><strong>Release Year(Album): </strong>' . $infoList[0]->ReleaseYearAlbum . '</h7><br>';
    }
    if ($infoList[0]->VocalArtist != '') {
        echo '<h7><strong>Vocal Artist: </strong>' . $infoList[0]->VocalArtist . '</h7><br>';
    }
    if ($infoList[0]->Lyricist != '') {
        echo '<h7><strong>Lyricist: </strong>' . $infoList[0]->Lyricist . '</h7><br>';
    }
    if ($infoList[0]->MusicComposer != '') {
        echo '<h7><strong>Music Composer: </strong>' . $infoList[0]->MusicComposer . '</h7><br>';
    }
    if ($infoList[0]->MusicDirector != '') {
        echo '<h7><strong>Music Director: </strong>' . $infoList[0]->MusicDirector . '</h7><br>';
    }
    if ($infoList[0]->MusicArranger != '') {
        echo '<h7><strong>Music Arranger: </strong>' . $infoList[0]->MusicArranger . '</h7><br>';
    }
    if ($infoList[0]->SoundRecordist != '') {
        echo '<h7><strong>Sound Recordist: </strong>' . $infoList[0]->SoundRecordist . '</h7><br>';
    }
    if ($infoList[0]->RecordingStudio != '') {
        echo '<h7><strong>Recording Studio: </strong>' . $infoList[0]->RecordingStudio . '</h7><br>';
    }
    if ($infoList[0]->Producer != '') {
        echo '<h7><strong>Producer: </strong>' . $infoList[0]->Producer . '</h7><br>';
    }
    if ($infoList[0]->RecordLabel != '') {
        echo '<h7><strong>Record Label: </strong>' . $infoList[0]->RecordLabel . '</h7><br>';
    }
    if ($infoList[0]->Remarks != '') {
        echo '<h7><strong>Remarks: </strong>' . $infoList[0]->Remarks . '</h7><br>';
    }
    if ($infoList[0]->AlbumFormat != '') {
        echo '<h7><strong>Album Format: </strong>' . $infoList[0]->AlbumFormat . '</h7><br>';
    }
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
            . '" class="btn btn-success dupButton" data-toggle="modal" data-target="#myModal2" data-node="'
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
