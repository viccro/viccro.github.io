<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div id="AwesomeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#AwesomeCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#AwesomeCarousel" data-slide-to="1"></li>
          <li data-target="#AwesomeCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="First slide">

            <div class="carousel-caption d-none d-md-block">
              <h3>Slide 1</h3>
              <p>This is a picture of a little peninsula or something.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="Second slide">
            
            <div class="carousel-caption d-none d-md-block">
              <h3>Slide 2</h3>
              <p>This is that same picture, but it's actually on slide two.</p>
            </div>

          </div>
 
          <div class="carousel-item">
            <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="Third slide">
            
            <div class="carousel-caption d-none d-md-block">
              <h3>Slide 3</h3>
              <p>Shockingly, slide three is exactly the same image.</p>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#AwesomeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#AwesomeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <?php include( "fn.php" ); ?>
    <?php $args = array( 'imageUrl' => "http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg", 'title' => "Title Text", 'text' => "WOW! Did you know that"); ?>
    <?php print template("SNIPPETS/BLOGTEASE.php", $args); ?>
    <?php $args = array( 'imageUrl' => "http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg", 'title' => "Title Text", 'text' => "these blocks are generated"); ?>
    <?php print template("SNIPPETS/BLOGTEASE.php", $args); ?>
    <?php $args = array( 'imageUrl' => "http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg", 'title' => "Title Text", 'text' => "with a php function? This saves"); ?>
    <?php print template("SNIPPETS/BLOGTEASE.php", $args); ?>
    <?php $args = array( 'imageUrl' => "http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg", 'title' => "Title Text", 'text' => "a whole lotta effort"); ?>
    <?php print template("SNIPPETS/BLOGTEASE.php", $args); ?>
    <?php $args = array( 'imageUrl' => "http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg", 'title' => "Title Text", 'text' => "in duplicating code."); ?>
    <?php print template("SNIPPETS/BLOGTEASE.php", $args); ?>

  </div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>