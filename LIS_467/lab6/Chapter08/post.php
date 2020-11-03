<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h1>Trekking</h1>

      <img id="PostImageBanner" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511702046/poster_ysydov.jpg" />

      <h3 id="PostSnapshot">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>

      <h6>Sub Heading</h6>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <img class="postArticleImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511708668/subheading_cxcp24.png?w=760&h=427&l=50&t=40" />

      <h4 id="PostLinksHeader">More Useful Links</h4>

      <ul>
        <li><a href="http://www.sonarlearning.co.uk">Sonar Learning</a></li>

        <li><a href="http://www.sonarsystems.co.uk">Sonar Systems</a></li>
      </ul>
    </div>

    <div class="col-lg-3">
      <h2>Popular</h2>

      <hr class="postSidebarLine" />
      <?php include( "fn.php" ); ?>

      <div class="row">
        <?php $args = array( 'imagePath' => "Images/ArticleThumbnail.jpg", 'text' => "WOW! Did you know that"); ?>
        <?php print template("SNIPPETS/POPULARSIDEBAR.php", $args); ?>

        <?php $args = array( 'imagePath' => "Images/ArticleThumbnail.jpg", 'text' => "these are also made"); ?>
        <?php print template("SNIPPETS/POPULARSIDEBAR.php", $args); ?>

        <?php $args = array( 'imagePath' => "Images/ArticleThumbnail.jpg", 'text' => "with a PHP template?"); ?>
        <?php print template("SNIPPETS/POPULARSIDEBAR.php", $args); ?>

        <?php $args = array( 'imagePath' => "Images/ArticleThumbnail.jpg", 'text' => "Don't copy/paste."); ?>
        <?php print template("SNIPPETS/POPULARSIDEBAR.php", $args); ?>

        <?php $args = array( 'imagePath' => "Images/ArticleThumbnail.jpg", 'text' => "Write a function."); ?>
        <?php print template("SNIPPETS/POPULARSIDEBAR.php", $args); ?>
      </div>
    </div>
  </div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>