<?php
include('includes/arrays.php');
?>
  <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Portfolio | Materialize CSS</title>

  </head>

<body id="home" class="scrollspy">
      <!-- NAVIGATION BAR -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#aboutme" class="brand-logo">WW Project Studio</a>
          <a href="#" data-target="mobile" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <?php foreach ($navItems as $key) { ?>
            <li>
              <a href="<?php echo $key["link"]; ?>">
                <?php echo $key["title"]; ?>
              </a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav sidenav-close" id="mobile">
    <?php foreach ($navItems as $key) { ?>
    <li>
      <a href="<?php echo $key["link"]; ?>">
        <?php echo $key["title"]; ?>
      </a>
    </li>
    <?php } ?>
  </ul>

        <!-- HERO IMAGE HEADER -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="img/slide01.jpg">
        <div class="caption center-align">
          <h2>Responsive Web Design</h2>
          <h5 class="light green-text text-lighten-3">Use of modern front end development technologies</h5>

      </div>
      </li>
      <li>
        <img src="img/slide02.jpg">
        <div class="caption left-align">
          <h2>PDF to HTML</h2>
          <h5 class="light yellow-text text-lighten-3">Your design, our development.</h5>
        </div>
      </li>
      <li>
        <img src="img/slide03.jpg">
        <div class="caption right-align">
          <h2>Affordable Web Design</h2>
          <h5 class="light blue-text text-lighten-4">Micro Web Design, up to 4 pages.</h5>
        </div>
      </li>
      <li>
        <img src="img/slide04.jpg">
        <div class="caption center-align">
          <h2>Ecommerce</h2>
          <h5 class="light lime-text text-lighten-3">Responsive, online shops.</h5>
        </div>
      </li>
    </ul>
  </section>

      <!-- ABOUT ME -->
  <section id="about" class="section scrollspy" data-aos="fade-up">
    <div class="container">
      <div class="title">
        <h4>About Me</h4>
      </div>
      <div class="row">
        <div class="col m12 l4" data-aos="fade-up">
          <div class="card-panel">
            <img src="img/val.jpg" alt="My photo" class="circle">
            <p class="teal-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus voluptatem illo excepturi distinctio, quam expedita, numquam nobis. Illo, quis, aliquid?</p>
          </div>
        </div>
        <div class="col m12 l4" data-aos="fade-up">
          <div class="card-panel">
            <img src="img/wd01.png" alt="">
            <p class="teal-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem saepe magni nobis ratione soluta id ab corrupti in ducimus.</p>
          </div>
        </div>
        <div class="col m12 l4" data-aos="fade-up">
          <div class="card-panel">
            <img src="img/wd02.png" alt="">
            <p class="teal-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque quis, deserunt impedit assumenda adipisci culpa saepe quibusdam quaerat odio architecto!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- PORTFOLIO -->
  <section id="portfolio" class="section scrollspy" data-aos="fade-up">
    <div class="container">
      <div class="title">
        <h4>Portfolio</h4>
      </div>
      <div class="row">
        <?php foreach ($portfolioProjects as $project) : ?>
        <div class="col s12 m6 l4" data-aos="fade-up">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/portfolio/<?php echo $project['image']; ?>">
            </div>
            <div class="card-content">
              <a href="<?php echo $project['link']; ?>" target="_blank">
                <span class="card-title activator teal-text text-darken-4">
                  <?php echo $project['name']; ?>
                  <!-- <i class="material-icons right">more_vert</i></span> -->
              </a>
            </div>
            <div class="card-reveal">
              <span class="card-title teal-text text-darken-4">
                <?php echo $project['name']; ?>
                <i class="material-icons right">close</i></span>
              <p><?php echo $project['info']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

      <!-- CONTACT FORM -->
  <section id="contact" class="section scrollspy" data-aos="fade-up">
    <div class="container">
      <h5>Any questions?</h5>
      <div class="title">
        <h4>Contact Me</h4>
      </div>
      <form action="" method="post">
        <div class="row">
          <div class="input-field col s12 l6 offset-l3">
            <input id="name" type="text" name="name" class="validate">
            <label for="name">Your Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6 offset-l3">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6 offset-l3">
            <input id="title" type="text" name="title" class="validate">
            <label for="title">Title</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l6 offset-l3">
            <textarea id="message" name="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
          </div>
        </div>
        <div class="row">
          <div class="col l12 offset-l5">
            <button class="btn waves-effect waves-light" type="submit" name="submit" data-aos="fade-up">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <div id="modalSuccess" class="modal">
    <div class="modal-content">
      <h4 class="green-text">Thanks for contacting us</h4>
      <p>Please allow 24 hours for a response</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

  <div id="modalFill" class="modal">
    <div class="modal-content">
      <h4 class="red-text">All fields required</h4>
      <p>Please try again</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

      <!-- FOOTER -->
  <footer class="page-footer teal darken-2" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h4 class="white-text">WW Project Studio</h4>
          <p class="grey-text text-lighten-4">
            <a  class="grey-text text-lighten-3" href="http://wwproject.c0.pl" target=_blank>wwproject.c0.pl</a>
          </p>
          <p class="grey-text text-lighten-4">
            <a  class="grey-text text-lighten-3" href="mailto:mru24@yahoo.com?subject=feedback" target=_blank>mru24@yahoo.com</a>
          </p>
          <div class="socialLinks">
            <ul>
              <?php
                foreach ($socialLinks as $key) {
              ?>
              <li>
                <a href="<?php echo $key["link"]; ?>" target="_blank" class="btn-floating btn-large cyan pulse">
                  <img src="img/social/<?php echo $key["icon"]; ?>.png" alt="<?php echo $key["name"]; ?>" class="responsive-img">
                </a>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col m4 offset-m2 s12">
          <ul>
            <?php
              foreach ($navItems as $key) {
            ?>
            <li>
              <a class="grey-text text-lighten-3" href="<?php echo $key["link"]; ?>">
                <?php echo $key["title"]; ?>
              </a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center-align">
      &copy; WW Project Studio <?php echo date("Y"); ?>
      </div>
    </div>
  </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
</script>
<script src="js/aos.js" charset="utf-8"></script>
<script src="js/main.js" charset="utf-8"></script>

  </body>
</html>


  <?php
  require 'includes/connect.php';

  // Check for header injection
  function has_header_injection($str) {
  return preg_match("/[\r\n]/", $str);
  }

  if (isset ($_POST['submit'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $title = trim($_POST['title']);
  $body = $_POST['message'];

  // Check to see if $name or $email have header injection

  if (has_header_injection($name) || has_header_injection($email) || has_header_injection($title) || has_header_injection($body)) {
  die(); // If true, kill the script
  }

  if (!$name || !$email || !$title || !$body) {

  echo '<script>instanceFill.open()</script>';

  exit;
  }

  // PDO QUERY

  $sql = 'INSERT INTO messages (name, email, title, body) VALUES (:name, :email, :title, :body)';
  $stmt = $dbc->prepare($sql);
  $stmt->execute(['name' => $name, 'email' => $email, 'title' => $title, 'body' => $body]);

  echo '<script>instanceSuccess.open()</script>';

}

?>
