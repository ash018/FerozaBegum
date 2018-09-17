<div class="container">
    <h3 class="text-muted">Feroza Begum</h3>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--<a class="navbar-brand" href="#">Navbar</a>-->

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('biography'); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BIOGRAPHY
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('biography'); ?>">English</a></li>
                        <li class="divider" role="separator"></li>
                        <li><a class="dropdown-item" href="#">Bangla</a></li>
                        <li class="divider" role="separator"></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('biography/Awards'); ?>">Awards</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('music'); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MUSIC
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" >Solo Album</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/RabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/ModernBengaliSong'); ?>">Modern Bengali Song</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/KabboGeetiSong'); ?>">Kabbo Geeti</a>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Music.html">Mixed Album</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music/Mixed'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/MixedRabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/MixedModernBengaliSong'); ?>">Modern Bengali Song</a>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Music.html">Collected Recording</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music/Collected'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/CollectedRabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/CollectedModernBengaliSong'); ?>">Modern Bengali Song</a>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('programme'); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROGRAMME
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('programme/tvProgram'); ?>">TV Programme</a></li>

                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Radio Programme</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('programme') ?>">English</a>
                                <a class="dropdown-item" href="#">Bengali</a>
                            </ul>
                        </li>

                        <li><a class="dropdown-item" href="<?php echo base_url('programme') ?>">Stage Show</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MEDIA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('media') ?>">Tv</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('media') ?>">Radio</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Press</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('media/PressEnglish') ?>">English</a>
                                <a class="dropdown-item" href="<?php echo base_url('media/PressBengali') ?>">Bengali</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('photogallery') ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PHOTO&nbsp;GALLERY
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery') ?>">Single Photo</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery/familyLife') ?>">Family Life</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery/singingCareer') ?>">Singing Career</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery/withMaestro') ?>">With Maestro</a> </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('scripts') ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SONG BOOK
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('scripts') ?>">Feroza Begum</a>
                            
                            <ul class="dropdown-submenu">
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/FullVolume') ?>">Full Volume</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/NazrulSong') ?>">Nazrul Sangeet Lyrics</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/NazrulSongScript') ?>">Nazrul Sangeet Lyrics & Staff Notation</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/RabindraSong') ?>">Rabindra Sangeet Lyrics</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/RabindraSong') ?>">Rabindra Sangeet Lyrics & Staff Notation</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/ModernBengaliSong') ?>">Modern Bengali Song Lyrics</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/ModernBengaliLyricsStuffNotation') ?>">Modern Bengali Song Lyrics & Staff Notation</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/FerozaBegumSong') ?>">Feroza Begum's Song</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/GeetGhazalBhajanSong') ?>">Geet/ Ghazal/ Bhajan Lyrics</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/GeetGhazalBhajanLyricsStuffNotation') ?>">Geet/ Ghazal/ Bhajan Lyrics & Staff Notation</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/OthersSong') ?>">Others Lyrics</a>
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/OthersSongLyricsStuffNotation') ?>">Others Lyrics & Staff Notation</a>
                                    <a class="dropdown-item" href="<?php echo base_url('')   ?>">Script</a>
                                    <a class="dropdown-item" href="<?php echo base_url('')   ?>">Letter</a>
                                    <a class="dropdown-item" href="<?php echo base_url('')   ?>">Others</a>
                                </ul>
                            </ul>

                        </li>


                        <li><a class="dropdown-item" href="<?php echo base_url('scripts/FullVolumeKamal') ?>">Kamal Das Gupta</a>
                            
                        </li>
                        
<!--                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="">Other Songbook</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php //echo base_url('scripts/FullVolumeOthers') ?>">Full Volume</a>
                            </ul>
                        </li>-->
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="">Published Book</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('scripts/FullVolumeOthers') ?>">Full Volume</a>
                            </ul>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item ">
                    <a class="nav-link " href="<?php echo base_url('catalogue') ?>" id="navbarDropdownMenuLink"  aria-expanded="false">
                        CATALOGUE
                    </a>
                    
                </li>
            </ul>
<!--            <div class="input-group">-->
            <form class="form-inline" action="<?php echo base_url('Search'); ?>" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" placeholder="Search Song" name="searchSong" id="searchSong">
            <!--                <span class="input-group-btn">-->
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
<!--                </span>-->
<!--            </div>-->
            

    

        </div>
    </nav>
</div>



<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/jquery-3.2.1.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        
        $("#CollectedRecording").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        //$("#dupSong").empty();
        var SubCategory = $(this).attr('id');
        console.log(SubCategory);
        alert(SubCategory);
        $.ajax({
            url: baseUrl + "Music/getCollectedRecording",
            type: "get",
            data: "SubCategory=" + SubCategory,
            cache: false,
            success: function (data) {
                console.log(data);
                //$("#dupSong").append(data);
                console.log("success");
                }
            });
        });

      
        
    });
</script>