<!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted"><?=$data['info']['footer'];?></div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= SOURCE;?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= SOURCE;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= SOURCE;?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= SOURCE;?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= SOURCE;?>js/creative.min.js"></script>

  <!-- for sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

<script>
  var mainurl="http://localhost/sinama/";
        $(document).ready(function(){
            $('#sendmsj').click(function(){
                var forminfo = $('#messages').serialize();
                alert(forminfo);
                $.post(mainurl + "postlar/send_message", {form_data: forminfo} ,function(data){
                    //alert(data.operation);
                    if(data.operation == "success"){
                      swal("Congrats!", "Your message is sent!", "success");
                    }else if(data.operation == "fail"){
                      swal("OOPS!","Your message isn't sent!","error");
                    }
                    
                   
               },"json");
            });

        });
</script>

</html>