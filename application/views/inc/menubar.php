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
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Music.html">Full Album</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/RabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/ModernBengaliSong'); ?>">Modern Bengali Song</a>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Music.html">Collected Recording</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/RabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/ModernBengaliSong'); ?>">Modern Bengali Song</a>
                            </ul>
                        </li>
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="Music.html">Mixed Album</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('music'); ?>">Nazrul Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/RabindraSangeet'); ?>">Rabindra Sangeet</a>
                                <a class="dropdown-item" href="<?php echo base_url('music/ModernBengaliSong'); ?>">Modern Bengali Song</a>
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

                        <li><a class="dropdown-item" href="#">Stage Show</a></li>
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
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">Bengali</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('photogallery') ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PHOTO&nbsp;GALLERY
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery') ?>">Family Life</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery') ?>">Singing Career</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('photogallery') ?>">With Maestro</a>
                            
                        </li>
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
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown">Single Page</a>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/NazrulSong') ?>">Nazrul Sangeet</a>
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/NazrulSongScript') ?>">Nazrul Sangeet & Script</a>
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/RabindraSong') ?>">Rabindra Sangeet</a>
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/ModernBengaliSong') ?>">Modern Bengali Song</a>
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/GeetGhazalBhajanSong') ?>">Geet Ghazal Bhajan</a>
                                            <a class="dropdown-item" href="<?php echo base_url('scripts/OthersSong') ?>">Others Song</a>
            <!--                            <a class="dropdown-item" href="<?php //echo base_url('scripts/RabindraSongScript')  ?>">Rabindra Sangit & Script</a>-->
                                        </ul>
                                    </li>
                                </ul>
                            </ul>

                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="">Kamal Das Gupta</a>
                            <ul class="dropdown-submenu">
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url('scripts/FullVolumeKamal') ?>">Full Volume</a>
                                </ul>
                            </ul>

                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="">Others</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('scripts/FullVolumeOthers') ?>">Full Volume</a>
                            </ul>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo base_url('catalogue') ?>" id="navbarDropdownMenuLink"  aria-expanded="false">
                        CATALOGUE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1940-1950</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1951-1960</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1961-1970</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1971-1980</a></li>    
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1981-1990</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">1991-2000</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('catalogue') ?>">2001-2014</a></li>  
                    </ul>
                </li>
            </ul>
            <form class="navbar-form" role="search">
                <input type="text" class="f_search" placeholder="Search Your song">      
            </form>
        </div>
    </nav>
</div>