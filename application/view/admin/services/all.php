

 <!-- Vertical Layout -->
 <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
            <!-- <pre>
                <?php print_r($data['infoservices']);?>
            </pre> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">SERVICES</h2>
                            <ul class="header-dropdown m-r-15">
                                <span><a href="<?=HOME;?>admin/services/add" class="btn btn-primary">ADD SERVICES</a></span>
                            </ul>
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($data['infoservices'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><i class="<?=$value['icon'];?> text-danger icon-services"></i></td>
                                                <td><?=$value['heading'];?></td>
                                                <td><?=$value['description'];?></td>
                                                <td><a href="<?=HOME;?>admin/services/<?=$value['id'];?>" class="btn btn-danger">DELETE</a></td>
                                            </tr>
                                            <?php } ?>
   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- #END# Vertical Layout -->


