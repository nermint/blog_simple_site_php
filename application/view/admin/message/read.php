
<section class="content">
<div class="container-fluid">
 <div class="row clearfix">
  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
    <div class="card">
        <div class="header bg-cyan">
            <h2>
            <?php echo $data['msginfo']['first_name']." ".$data['msginfo']['last_name'];?>
            <small><?=$data['msginfo']['email']?></small>
            </h2>
            <ul class="header-dropdown m-r--5">
                <span><?=$data['msginfo']['time'];?></span>
            </ul>
        </div>
        <div class="body">
            <div>
                <b><?=$data['msginfo']['subject']?></b>
            </div>
            <?=$data['msginfo']['message']?>
        </div>
    </div>
    </div>
    
  </div>
  <a href="http://localhost/sinama/admin/message" class="btn btn-success  waves-effect read-btn">BACK TO MESSAGES</a>
</div>
</section>