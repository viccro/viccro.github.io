<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="jumbotron jumbotron-fluid" id="HomeSection">
  <h1 class="display-3 jumbotronTextOnImages text-center" id="JumbotronHeading">Heading</h1>

  <img id="JumbotronImage" src="https://purewows3.imgix.net/images/articles/2017_12/best-books-2017-header.jpg" />
</div>

<div class="container-fluid" id="TeamSection">
  <div class="row">
    <div class="col-12 text-center">
      <h1>Our Awesome Team</h1>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-lg-3 col-sm-6 col-xs-12 teamMemberContainer">
      <img src="Images/Team/Thumbnails/Thumbnail.png" class="img-fluid img-thumbnail teamMemberImage" />

      <h4>John</h4>

      <p class="text-muted">Protagonist</p>

      <p>John is the most awesome person in the world.</p>

      <div class="col-12">
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>

        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12 teamMemberContainer">
      <img src="Images/Team/Thumbnails/Thumbnail.png" class="img-fluid img-thumbnail teamMemberImage" />

      <h4>John</h4>

      <p class="text-muted">Protagonist</p>

      <p>John is the most awesome person in the world.</p>

      <div class="col-12">
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>

        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12 teamMemberContainer">
      <img src="Images/Team/Thumbnails/Thumbnail.png" class="img-fluid img-thumbnail teamMemberImage" />

      <h4>John</h4>

      <p class="text-muted">Protagonist</p>

      <p>John is the most awesome person in the world.</p>

      <div class="col-12">
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>

        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 col-xs-12 teamMemberContainer">
      <img src="Images/Team/Thumbnails/Thumbnail.png" class="img-fluid img-thumbnail teamMemberImage" />

      <h4>John</h4>

      <p class="text-muted">Protagonist</p>

      <p>John is the most awesome person in the world.</p>

      <div class="col-12">
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>

        <a href="" target="_blank">
            <img class="socialImages" src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="ContactSection">
  <div class="row">
    <div class="col-12 text-center">
      <h1>Contact Us</h1>
    </div>
  </div>

  <form>
    <div class="row">
      <div class="col-md-6">
        <label for="contactEmail">Email address</label>
        <input type="email" class="form-control" id="contactEmail" placeholder="Enter email address">
      </div>

      <div class="col-md-6">
        <label for="contactName">Name</label>
        <input type="text" class="form-control" id="contactName" placeholder="Name">
      </div>

      <div class="col-md-6">
        <label for="contactSSN">Social Security Number</label>
        <input type="text" class="form-control" id="contactSSN" placeholder="Enter SSN in the form XXX-XX-XXXX">
      </div>

      <div class="col-md-6">
        <label for="contactMotherMaiden">Mother's maiden name</label>
        <input type="text" class="form-control" id="contactMotherMaiden" placeholder="Enter your mother's maiden name">
      </div>

      <div class="col-md-6">
        <label for="contactBirthplace">City of birth</label>
        <input type="text" class="form-control" id="contactBirthplace" placeholder="Enter the city where you were born">
      </div>

      <div class="col-md-6">
        <label for="contactStreet">Street you grew up on</label>
        <input type="text" class="form-control" id="contactStreet" placeholder="Enter the name of the street you grew up on">
      </div>

      <div class="col-12">
        <label for="contactMessage">Message</label>
        <textarea class="form-control" id="contactMessage" rows="5"></textarea>
      </div>

      <div class="col-12" id="ContactButtonContainer">
        <button type="submit" class="btn btn-primary col-12">Send Message</button>
      </div>
    </div>
  </form>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>