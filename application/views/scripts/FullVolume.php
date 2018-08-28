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

    <?php if($FullVolume[0]->Category=='Kamal Das Gupta'){
       echo '<div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div style="margin-top:40px; margin-bottom: 60px;"class="col-md-5">
                        <img src="'.base_url().'asset/img/Kamal.jpg" class="img-responsive" alt="Firoza Begum"> 
                    </div>
                    <div  class="col-md-7 f_body_text_right">
                        <h4>Kamal Das Gupta</h4>
                        <p>Kamal Dasgupta (28 July 1912 – 20 July 1974) was a Bangladeshi music director, composer and folk artist. Rāga and Thumri were the main elements of his music. His wife Feroza Begum was a noted Nazrul Sangeet singer. Their second and third sons Hamin Ahmedand Shafin Ahmed are the lead singers with Bangladeshi Band Miles.<br> 
						</p>
                        <p>	Dasgupta was born on 28 July 1912 in Narail, Jessore of the then British India. He matriculated in 1928 from Calcutta Academy and later completed B. Com. from Comilla Victoria Government College. He earned his doctorate in music from Banaras Hindu University in 1943 for his work on Meerabai, the composer and singer of Bhajans. His early inspiration came from his father, Tara Prasanna Dasgupta. He took his first music lessons from his brother, Bimal Das Gupta. Later he studied under Dilip Kumar Roy, Kana Kesta, and Ustad Jamiruddin Khan.<br></p>
                                <p>Dasgupta sang modern songs in Bengali, Urdu, Hindi, and Tamil. He was also a composer, composing the music for about eight thousand songs. His work was based on classical music and tended towards the Thungri style, though he also drew inspiration from other sources. <br>
                        </p>
                        <p>Dasgupta composed the music for about eighty Bangla films, among them Tufan Mail, Jhamelar Prem, Ei Ki Go Shes Dan. His last film as a music director was Badhu Bharan (1967). He also composed the background music for an American film, War Propaganda. His active life as a composer covered about fourteen years. His unique contribution in music is his invention of a shorthand method for swaralipi (notations). <br></p>
                        
<p>In 1935, Dasgupta joined the Gramophone Company of India as a music director. During his term there, he developed a close association with Kazi Nazrul Islam and composed the music for almost four hundred of his songs. The gramophone records for which Dasgupta composed music were notable in the 1950s and 1960s. Among his songs still notable today are Sanjher Taraka Ami (I am the star of twilight), Prthivi Amare Chay (The world needs me), and Ami Bhorer Juthika (I am the jasmine of morning). <br></p>
 <p>In 1956, he converted to Islam and took the name Kamal Uddin Ahmed. He married Feroza Begum, a Nazrul Sangeet singer, in the same year. They have three sons, Tahsin Ahmed, Hamin Ahmed and Shafin Ahmed.<br></p>  
 <p>Dasgupta died on 18 July 1974 in Dhaka.<br></p>
  <p>Source: <b>Wikipedia</b> </p>                      
						      
						       
						
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
    </div>';
    }
?>
    
    <div class="container"> 
        <div class="row">
            <div class="programmeheader col-md-12">
                <h4><?php echo $FullVolume[0]->Category?> Full Volume</h4>
            </div>
        </div>
    </div>

    <?php 
        
    ?>
    
    <div class = "container">
        <div class = "row">
            
            
             
            
             <?php $i=0; 
            
            while($i<sizeof($FullVolume)){
             
                
               
                echo '<div class = "col-md-4">'
                       . '<a target="_blank" href="'
                       .base_url()
                       .'asset/img/NB/'
                       .$FullVolume[$i]->Album01
                       .'.pdf" data-fancybox data-caption="My caption">'
                        .'<button  class="btn catbtn2" type="submit" />'
                       .$FullVolume[$i]->SubCategory.'<br>'.'Published Year: '.$FullVolume[$i]->Year
                       .'</button>'
                       .'</a>'
                       .'</div>';
               
                $i++;
            ?>
            
            <!--Code Here -->
           
         <?php }?>
            
           
        </div>

            
        <br><br> 
           
            
<!--            <div class="row">
                <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                    <div class="dropup">
                        <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS"  data-toggle="modal" data-node="1">
                            FULL LIST
                        </button>  

                        <div class="modal fade" id="myModalS" role="dialog">
                            <div class="modal-dialog">

                                 Modal content
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="text-align: center">Nazrul Sangit Script</h4>
                                        <h4 id="modalTitleControll" class="modal-title" style="text-align: center"></h4>
                                    </div>
                                    <div id="scriptList" class="modal-body">

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS"  data-toggle="modal" data-node="2">
                        1970-1979
                    </button>  
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                        <div class="songlist">
                            Song List				
                        </div>	 

                        <div class="card-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: black;">×</span>
                            </button>

                        </div>	
                    </div>	
                </div>
            </div>
                

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="3">
                        1980-1989
                    </button>  
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                         

                        <div class="card-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: black;">×</span>
                            </button>

                        </div>	
                    </div>	
                </div>
            </div>

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="4">
                        1990-1999
                    </button>  
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                        	 

                        <div class="card-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: black;">×</span>
                            </button>
  
                        </div>	
                    </div>	
                </div>
            </div>

            <div class="col-md-2" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="5">
                        2000-2014
                    </button>  
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                        <div class="songlist">
                            Song List				
                        </div>	 

                        <div class="card-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: black;">×</span>
                            </button>

                        </div>	
                    </div>	
                </div>
            </div>

            <div class="col-md-1" style="margin-bottom: 30px; margin-right: 10px;">  
                <div class="dropup">
                    <button class="btn btn-custom scriptButton" type="button" id="about-us" data-target="#myModalS" data-toggle="modal" data-node="6">
                        Others
                    </button>  
                    <div class="dropdown-menu f_dropdown-menu-right" style=" background-color: #fff;width:550px;">
                        <div class="songlist">
                            Song List				
                        </div>	 

                        <div class="card-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 10px;">
                                <span aria-hidden="true" style="color: black;">×</span>
                            </button>

                        </div>	
                    </div>	
                </div>
            </div>
    
            </div>-->
        </div>
    </div>






<script src="/ferozabegum/asset/js/jquery.min.js"></script>
<script src="/ferozabegum/asset/js/modulesupportjs/feroza.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        
       

            
        $(".scriptButton").click(function(){
        var baseUrl = "<?php echo base_url(); ?>"; 
        $("#scriptList").empty();
        var scriptListID = $(this).attr('data-node');
        console.log(scriptListID);
        $.ajax({
            url: baseUrl + "Scripts/getScriptListWithID",
            type: "get",
            data: "scriptListID=" + scriptListID,
            cache: false,
            success: function (data) {
                console.log(data);
                $("#scriptList").append(data);
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