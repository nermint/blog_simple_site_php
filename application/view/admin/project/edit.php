<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- <pre>
                <?php  print_r($data['single']); ?>
            </pre> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">
                                EDIT PROJECT
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" id="editproject">

                            <input type="hidden" class="form-control" name="last_img" value="<?php echo $data['single']["img"]; ?>" placeholder="id">

                            <!-- id ni serialize vasitesile gondermek ucun bele usuldan ist olunur ve type hidden olur -->
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['single']["id"]; ?>" placeholder="id">

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Project image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">                            
                                                <img class="editimg" src="<?=SOURCE?>img/portfolio/thumbnails/<?=$data['single']['img'];?>" alt=""> <br> <br>
 
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Change image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="document"  name="files">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Project heading</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="heading" class="form-control" value="<?=$data['single']['heading'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Project name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="project_name" class="form-control" value="<?=$data['single']['project_name'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" id="editbtn" class="btn btn-success m-t-15 waves-effect">EDIT</button>
                                    </div>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>