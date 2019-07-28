<footer class="py-5" style="background-color:#eee;color:black;">
      <div class="formdata">
          <div class="data_body">
            
          </div>
        </div>
        <div class="container">
          <div class="col-6 col-sm-4 text-center" id="subs">
            
          <form>
            <div class="form-group">
              <input type="text" placeholder="xyz@gmail.com" name="email" id="email">
              <button type="submit" class="sub">Subscribe</button>
            </div>
          </form>
        </div>
        <p Contacts>
        +91 9337751074
      </p>
          <p class="m-0 text-center">© 2019 SPIC MACAY.All rights Reserved.</p>
        </div>
        <!-- /.container -->
      </footer>


       <!-- Bootstrap core JavaScript -->
    <script>
       $(document).ready(function(){
    $(".sub").click(function(event){
      event.preventDefault();
      var data=$("input[name=email]").val();
      // alert(data);
      $.post("subscribe.php",{
        email : data 
      },function(res,stat){
        if(stat="success"){
          $(".formdata").css("display","flex");
          $(".data_body").html(res);
        }
      });

      
    })
    $(".formdata").click(function(){
      $(this).hide();
    });



  })
    </script>
  </body>
  </html>