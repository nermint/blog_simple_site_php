<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">
                                LOGIN SETTINGS
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" id="adminupdate">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Admin name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  class="form-control" value="<?=$data['admininfo']['admin_name'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Change admin name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="admin_name" class="form-control" placeholder="Enter name" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" value="<?=$data['admininfo']['password'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">New password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7 eye-open-close">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="changeInput" name="password" type="password" class="form-control" placeholder="Enter new password" maxlength="20">
                                                <!-- <i class="fa fa-eye eye-side" onclick="(this).classList.toggle('fa-eye-slash');"></i> -->
                                                <i onclick="change(this);" class="fa fa-eye eye-side" ></i>
                                               
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button onclick="JSalert()" type="button" id="adminupdatebtn" class="btn btn-success m-t-15 waves-effect">EDIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <script>
        //  eye open-close for password
        function change(a){
            a.classList.toggle('fa-eye-slash');
            var x = document.getElementById("changeInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
    
        }
    </script>
</section>