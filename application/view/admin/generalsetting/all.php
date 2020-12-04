

 <!-- Vertical Layout -->
 <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">GENERAL SETTINGS</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Site title</th>
                                        <th>Site phone</th>
                                        <th>Site mail</th>
                                        <th>Site address</th>
                                        <th>Site footer</th>
                                        <th>EDIT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$data['info']['title'];?></td>
                                        <td><?=$data['info']['phone'];?></td>
                                        <td><?=$data['info']['email'];?></td>
                                        <td><?=$data['info']['address'];?></td>
                                        <td><?=$data['info']['footer'];?></td>
                                        <td><a href="<?=HOME;?>admin/generalsetting/edit" class="btn btn-info waves-effect">EDIT</a></td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- #END# Vertical Layout -->


