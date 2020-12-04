

 <!-- Vertical Layout -->
 <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">PROJECTS</h2>                         
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Project name</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($data['project'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><img class="project-img" src="<?=SOURCE;?>img/portfolio/thumbnails/<?=$value['img'];?>" alt=""></td>
                                                <td><?=$value['heading'];?></td>
                                                <td><?=$value['project_name'];?></td>
                                                <td><a href="<?=HOME;?>admin/deleteprj/<?=$value['img'];?>" class="btn btn-danger waves-effect">DELETE</a></td>
                                                <td><a href="<?=HOME;?>admin/project/<?=$value['id'];?>" class="btn btn-info waves-effect">EDIT</a></td>
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


