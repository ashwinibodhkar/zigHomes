<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('title'); ?> - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php echo $__env->make('auth.authLayout.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('customcss'); ?>
  
</head>

<body>
  
<?php echo $__env->make('auth.authLayout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/main.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Explore </span> Real Estate in India                      
                    </h1>
                    <div class="row searchOptions">
                      <div class="col align-self-center">
                      <span class="iconify" data-icon="entypo:location" style="color: #848381;font-size: 28px;"></span>
                        <input type="text" name="location" class="inputSearch" placeholder="Type Location">
                      </div>
                      <div class="col align-self-center">
                      <span class="iconify" data-icon="dashicons:admin-home" style="color: #848381;font-size: 28px;"></span>
                        <select name="cars" id="cars" class="inputSearch" value="Property Type">
                          <option value="volvo">Property type</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                      </div>
                      <div class="col align-self-center">
                      <span class="iconify" data-icon="bx:bx-rupee" style="color: #848381;font-size: 28px;"></span>
                        <select name="cars" id="cars" class="inputSearch" value="Budget">
                          <option value="volvo">Budget</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                      </div>
                      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block " href="blog-grid.html" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" style="color:#000;">
                        <span class="fa fa-search" aria-hidden="true"></span>Search
                      </button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div><!-- End Intro Section -->

  

  <?php echo $__env->yieldContent('content'); ?>

  <!-- <?php echo $__env->make('auth.authLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <?php echo $__env->make('auth.authLayout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('customjs'); ?>
</body>

</html><?php /**PATH D:\wamp64\www\laravel\zighomes\resources\views/auth/authLayout/mainlayout.blade.php ENDPATH**/ ?>