
<div class="jumbotron text-center d-flex flex-column justify-content-center" id="intro">
  <h1 class="display-3 m-5">Hello, world! </h1>
  <p class="h2">I am Adam, and this is the beggining of my journey into <br><strong>Web Development</strong>.
 
  </p>
  <hr class="my-4">
  <button class="btn btn-outline-dark w-25 ml-auto mr-auto " role="button"><a href="about.php"class="text-dark">About Me</a></button>
  <p class="mt-4 text-secondary text-center"><small>This project was started on the <?php echo date("d-m-y") . " " . "at 5.58pm"; ?></small></p>
  <ul class="d-flex justify-content-center" id="intro-social">
    <li class="list-item active"><a href="https://github.com/uxfrontier" target="_blank"><i class="fa fa-github"></i></a></li>
    <li class="list-item"><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li class="list-item"><a href="https://www.freecodecamp.org" target="_blank"><i class="fa fa-free-code-camp"></i></a></li>
    <li class="list-item"><a href="https://www.allthecode.org" target="_blank"><i class="fa fa-code"></i></a></li>
    <li class="list-item"><a href="https://www.codetube.org" target="_blank"><i class="fa fa-tv"></i></a></li>
  </ul>
  <a href="#about-me"><i class="fa fa-arrow-down text-secondary"></i></a>
</div>

<div class="container-fluid" id="about-me">
    <h1 class="text-center p-2 mt-5" id="about-me-h1"> A little about this project</h1>
    <div class="row">
        
    <div class="col-sm-12 col-md-6 text-center" id="about-col-1">
        <p class=" h3 pt-5 mt-4 text-justify d-flex flex-column justify-content-center text-secondary">I am a 34 year old aspiring web developer based in Leicestershire, UK.
        I enjoy learning about all the latest web technologies and trends. My aim by the end of next year is to 
        gain employment as a developer. This portfolio is the start of my learning progress. The above date is the date i have started to document 
        my learning.
        </p>
       <button class="btn btn-outline-dark btn-block my-3"><a href="#progress" class="text-dark">Read More</a></button>
    </div>

    <div class="col-sm-12 col-md-6 text-center" id="about-col-2">
      <img src="images/sphere.png" alt="sphere" id="sphere">
    </div>
</div>

<div class="container" id="progress">

  <h1 class="text-center">My progress so far</h1>
  <h4>HTML</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width:70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h4>CSS</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h4>JS</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width: 2%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h4>REACT</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width: 1%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h4>PHP</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <h4>GIT</h4>
  <div class="progress mb-4">
    <div class="progress-bar bg-dark" role="progressbar" style="width: 10%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>

<div class="container my-5" id="favourites">
  <h1 class="text-center">Programming languages</h1>
  <p class="text-center text-secondary">Here is 4 of my favourite programming languages</p>
  <div class="row my-5">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nums">
      <div class="col-sass  my-5">
        <h4><span class="mr-3" style="padding:17px; background-color:grey; color:#fff" id="sass">1.</span> SASS</h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nums">
      <div class="col-js my-5 ">
        <h4><span class="mr-3" style="padding:15px; background-color:grey; color:#fff">2.</span> JS</h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nums">
      <div class="col-php my-5">
        <h4><span class="mr-3" style="padding:15px; background-color:grey; color:#fff">2.</span> PHP</h2>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nums">
      <div class="col-python my-5">
        <h4><span class="mr-3" style="padding:15px; background-color:grey; color:#fff">4.</span> PYTHON</h2>
      </div>
    </div>
  </div>
</div>
<div class="container text-center">
  <button class="btn btn-outline-dark"><a href="timeline.php" style="text-decoration:none;" class="text-dark">Daily Progress Update</a></button>
</div>
