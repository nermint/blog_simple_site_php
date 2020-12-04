<!-- Jquery Core Js -->
<!-- bootstrap teleb edir 3 den awagi jquery cdn -->
<!-- <script src="<?=SOURCE;?>admin/plugins/jquery/jquery.min.js"></script> -->

<!-- 3 den yuxarida saytin bezi hisseleri iwlemir -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>


<!-- Bootstrap Core Js -->
<script src="<?=SOURCE;?>admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?=SOURCE;?>admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?=SOURCE;?>admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=SOURCE;?>admin/plugins/node-waves/waves.js"></script>


<!-- Jquery CountTo Plugin Js -->
<script src="<?=SOURCE;?>admin/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?=SOURCE;?>admin/plugins/editable-table/mindmup-editabletable.js"></script>
<script src="<?=SOURCE;?>admin/plugins/raphael/raphael.min.js"></script>
<script src="<?=SOURCE;?>admin/plugins/morrisjs/morris.js"></script>



<!-- Custom Js -->
<script src="<?=SOURCE;?>admin/js/admin.js"></script>
<script src="<?=SOURCE;?>admin/js/pages/tables/editable-table.js"></script>
<script src="<?=SOURCE;?>admin/js/pages/index.js"></script>

<!-- for active link  -->
<script src="<?=SOURCE;?>admin/js/activelink.js"></script>

<!-- for sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Demo Js -->
<script src="<?=SOURCE;?>admin/js/demo.js"></script>


<script>
        var mainurl="http://localhost/sinama/";
        $(document).ready(function(){
            // general settings'de sayt melumatlarini deyiwmek ucun
            $('#updatebtn').click(function(){
                alert('Clicked');
                var forminfo = $('#update').serialize();
                //ajax
                $.post(mainurl + "postlar/general_update", {form_data: forminfo} ,function(data){
                    alert("Geldi!");
                    swal("Congrats!", "Your info is updated!", "success");
                    location.href=mainurl+"admin/generalsetting";
                   
               });
            });

            // admin loginde deyiwiklik etmek ucun
            $('#adminupdatebtn').click(function(){
                var forminfo = $('#adminupdate').serialize();
                //alert(forminfo);
                $.post(mainurl + "postlar/admin_update", {form_data: forminfo} ,function(data){
	                swal("Congrats!", "Your info is updated!", "success");
                    
               });
            });

            //service melumat elave et
            $('#addbtn').click(function(){
                var forminfo = $('#addservices').serialize();
                //alert(forminfo);
                $.post(mainurl + "postlar/services_add", {form_data: forminfo} ,function(data){
                    alert(data.operation);
                    if(data.operation=="success"){
                        swal("Congrats!", "Your info is inserted!", "success");
                        setTimeout(() => {
                            location.href=mainurl+"admin/services";
                        }, 2000);
                        
                    }

               },"json");
            });

            // project elave et

            $('#addprojectbtn').click(function(){
                alert('Clicked');
                var formData = new FormData();
                formData.append('files', $(".document")[0].files[0]);
                var forminfo = $("#addproject").serialize();
                formData.append('forminfo', forminfo);
                //alert(forminfo);
                $.ajax({
                    url: mainurl + "postlar/add_project", // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        
                        alert(data.operation);
                        if (data.operation == "success")
                        {
                            swal("Congrats!", "Your project is inserted!", "success");
                            setTimeout(() => {
                            location.href= mainurl +"admin/project";
                            }, 2000);
                        }

                    },
                    error: function (data) {
                        alert("ERROR!!!");
                        console.log(data);
                    }
                });
            });

            //project editle
            $('#editbtn').click(function(){
                alert('click!');
                var formData = new FormData();
                formData.append('files', $(".document")[0].files[0]);
                var forminfo = $("#editproject").serialize();
                formData.append('forminfo', forminfo);
                //alert(forminfo);
                $.ajax({
                    url: mainurl + "postlar/edit_project", // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        
                        alert(data.operation);
                        if (data.operation == "success")
                        {
                            swal("Congrats!", "Your project is updated!", "success");
                            setTimeout(() => {
                            location.href= mainurl +"admin/project";
                            }, 2000);
                        }

                    },
                    error: function (data) {
                        alert("ERROR!!!");
                        console.log(data);
                    }
                });

            });
            
        });
    </script>

</body>

</html>