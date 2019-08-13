<?php
require("header.php");
?>
   <!-- Main Body-->
        <div class="container">
            <div class="lightbox">
                
                <div class="controllers">
                        <button class="btn btn-default" id="close"><i class="fa fa-close"></i></button>
                        <i class="fa fa-angle-left" id="left_ctrl"></i>
                        <i class="fa fa-angle-right" id="right_ctrl"></i>
                </div>
                <div>
                <img src="" id="lightimg" class="img-responsive">
                </div>
            </div>
        

            <div class="gallery" id="gallery">
                <div class="row" id="gal_row">
                    <div class="col-md-4 col-sm-6">
                            <img src="img/inno1.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/inno2.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/inno3.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/inno4.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/inno5.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/manager.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                                <img src="img/profile.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                                    <img src="img/shivam.jpg" class="img">
                    </div>
                    <div class="col-md-4 col-sm-6">
                            <img src="img/shivani.jpg" class="img">
                    </div>
                </div>
                
                
                
                
               
                
                
                
                
                

            </div>



        </div>


     <!-- Footer -->
     <script>
       $(document).ready(function(){
            $("img").click(function(){
                var w=$(this).attr("src");
                $("#lightimg").attr("src",w);
                $(".lightbox").show();

                

            })
            $("#close").click(function(){
                $(".lightbox").hide();
            })
            
       })
   </script>
   <script>

   </script>
   <?php
require("footer.php");
?>