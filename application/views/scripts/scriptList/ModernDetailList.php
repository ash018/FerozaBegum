<h1><?php echo $title;?></h1>
<?php 

    $sizeSongBook = sizeof($FullSongBookList);
    echo '<div class="w3-content w3-display-container">';
    
    for($i=0;$i<$sizeSongBook;$i++){
        echo '<div class="w3-display-container mySlides">'
        .'<a target="_blank" href="'
        . base_url()
        . 'asset/img/NB/'
        . $FullSongBookList[$i]->Album01
        . '.jpg" data-fancybox data-caption="My caption">'
        . '<img src="'
        . base_url()
        . 'asset/img/NB/'
        . $FullSongBookList[$i]->Album01
        . '.jpg" class = "imageboxX"></a>'
        .'<div class="w3-display-center w3-container w3-padding-16 w3-feroza">'
        .$FullSongBookList[$i]->ModernBengaliSongLyrics
        .'</div>'
        .'<div class="w3-display-center w3-container w3-padding-16 w3-feroza">'
        .'Year:'
        .$FullSongBookList[$i]->Year
        .'</div>'
        .'</div>';
    }
    
    echo '<button class="w3-button w3-feroza w3-display-left" onclick="plusDivs(-1)">&#10094;</button>';
    echo '<button class="w3-button w3-feroza w3-display-right" onclick="plusDivs(1)">&#10095;</button>';


   
    
?>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

 