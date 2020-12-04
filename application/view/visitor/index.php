 <!-- Masthead -->
 <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Bootstrap Themes</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <!-- <pre>
      <?php
        print_r($data['infoservices']);
      ?>
  </pre> -->
  
  <section class="page-section" id="services">
    <div class="container">
     
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">

      <?php
        foreach ($data['infoservices'] as $key => $value) {
            ?>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="<?=$value['icon'];?> text-primary mb-4"></i>
            <h3 class="h4 mb-2"><?=$value['heading'];?></h3>
            <p class="text-muted mb-0"><?=$value['description'];?></p>
          </div>
        </div>

       <?php } 
      ?>

       
        
      </div>
    </div>
  </section>


<!-- <pre>
<?php print_r($data['project']); ?>
</pre> -->

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <?php 
          foreach ($data['project'] as $key => $value) {
            ?>

        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= SOURCE;?>img/portfolio/fullsize/1.jpg">
            <img class="img-fluid project" src="<?= SOURCE;?>img/portfolio/thumbnails/<?=$value['img'];?>"  alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                <?=$value['heading'];?>
              </div>
              <div class="project-name">
                <?=$value['project_name'];?>
              </div>
            </div>
          </a>
        </div>

        <?php  }
        ?>
        
        
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5 pb-5">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row display-flex align-items-center">

        <div class="col-lg-6  text-center mb-5 mb-lg-0 ">
           <div class="p-3">
              <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
              <div><?=$data['info']['phone'];?></div>
           </div>
            <div class="p-3">
              <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
              <a class="d-block" href="mailto:<?=$data['info']['email'];?>"><?=$data['info']['email'];?></a>
            </div>
            <div class="p-3">
              <i class="fas fa-map-marker-alt fa-3x mb-3 text-muted"></i>
              <div><?=$data['info']['address'];?></div>
            </div>
        </div>

        <div class="col-lg-6 mr-auto text-center">
              <h2>Send Us a Message</h2>
                    <form class="contact_box" id="messages" action="index.php" onclick="return false;">
                        <input type="text" name="first_name" class="form-control input_box" placeholder="First Name *">
                        <input type="text" name="last_name" class="form-control input_box" placeholder="Last Name *">
                        <input type="text" name="email" class="form-control input_box" placeholder="Your Email *">
                        <input type="text" name="subject" class="form-control input_box" placeholder="Subject">
                        <input type="text" name="website" class="form-control input_box" placeholder="Your Website">
                        <textarea name="message" class="form-control input_box" placeholder="Message"></textarea>
                        <button type="submit" id="sendmsj" class="btn btn-default">Send Message</button>
                  </form>
        </div>

        


      </div>
    </div>

    
  </section>