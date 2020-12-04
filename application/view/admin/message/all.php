

 <!-- Vertical Layout -->
 <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
            <!-- <pre>
                <?php print_r($data['msginfo']);?>
            </pre> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="p-t-15 header-side">MESSAGES SIDE</h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Website</th>
                                        <th>Message</th>
                                        <th>Look</th>
                                        <th>Read</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($data['msginfo'] as $key => $value) {
                                            ?>
                                           <tr>
                                            <td><?=$value['first_name'];?></td>
                                            <td><?=$value['last_name'];?></td>
                                            <td><?=$value['email'];?></td>
                                            <td><?=$value['subject'];?></td>
                                            <td><?=$value['website'];?></td>
                                            <td><?=substr($value['message'],0,10);?>...</td>
                                            <?php
                                                if($value['seen']==0){
                                            ?>
                                            <td><i class="fa fa-eye eye-side-msg text-primary" ></i></td>
                                            <td><a href="<?=HOME;?>admin/message/<?=$value['id'];?>" class="btn btn-success waves-effect" id="readbtn">READ</a></td>
                                                <?php 
                                                }else{
                                                    ?>
                                            <td><i class="fa fa-eye eye-side-msg" ></i></td>
                                            <td><a href="<?=HOME;?>admin/message/<?=$value['id'];?>" class="btn btn-dark  waves-effect read-btn">LOOK</a></td>
                                                <?php } ?>
                                                
                                                <td><a href="<?=HOME;?>admin/delete/<?=$value['id'];?>" class="btn btn-danger waves-effect">DELETE</a></td>
                                           </tr>
                                        <?php
                                        }
                                        ?>
                                            <!-- <pre>
                                               <?=$data['msgcount'];?>
                                            </pre> -->
                            
                                    
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- #END# Vertical Layout -->


