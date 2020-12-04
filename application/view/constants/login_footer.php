    <!-- Jquery Core Js -->
    <script src="<?=SOURCE;?>admin/plugins/jquery/jquery.min.js"></script>
    

    <!-- Bootstrap Core Js -->
    <script src="<?=SOURCE;?>admin/plugins/bootstrap/js/bootstrap.js"></script>
   

    <!-- Waves Effect Plugin Js -->
    <script src="<?=SOURCE;?>admin/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?=SOURCE;?>admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?=SOURCE;?>admin/js/admin.js"></script>
    <script src="<?=SOURCE;?>admin/js/pages/examples/sign-in.js"></script>

    <!-- for sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div id="yazdir">Buraya yazacaq</div>
    <div id="text"></div>

    <!-- my codes -->
    <!-- eger giris duzgundurse admin panel'e getsin -->


    <script>
        var mainurl="http://localhost/sinama/";
        //console.log("test");
        $(document).ready(function(){
            $('#signbtn').click(function(){
                //alert($('#sign_in').serialize());
                $("#text").html($('#sign_in').serialize());
                var forminfo=($('#sign_in').serialize());
                //ajax
                $.post(mainurl + "postlar/login", {form_data:forminfo} ,function(data){
                    //alert("Geldi!");
                    alert(data.operation);
                    
                    //alert(typeof(data.operation));

                    if(data.operation == "not admin"){
                        //alert("You aren't the admin");
                        swal("OOPS!", "You aren't the admin!", "error");
                    }else if(data.operation == "password"){
                        //alert("Password is wrong");
                        swal("WARNING!", "Password is wrong!", "info");
                    }else if(data.operation == "success"){
                        //alert("Login is successfull!\nRedirecting...");
                        swal("Congrats!", "Login is successfull!\nRedirecting...", "success");
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                        
                    }
                },"json");
                
            });
        });
    </script>


</body>

</html>