    <div class="info scrollspy" id="contact">
      <div class="container">
        <div class="row">
          <div class="col s12 l3">
            <div class="newsletter" data-aos="fade-up">
              <h6 class="center-align"> <strong>Sign up to our Newsletter</strong></h6>
              <p>Receive our latest offers and news</p>
              <form action="" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="email" name="email" class="validate">
                    <label>Email address*</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" name="name" class="validate">
                    <label>Name*</label>
                  </div>
                </div>
                <div class="row">
                  <button type="submit" name="action" class="btn waves-effect waves-light center-align">Send<i class="material-icons right">send</i></button>
                </div>
              </form>
            </div>
          </div>

          <?php include('includes/infoBox.php'); ?>

        </div>
      </div> <!-- CONTAINER END -->
    </div> <!-- INFO DIV END -->

  <footer>

    <div class="row">
      <div class="col s6 m2"><img src="img/travel-style-logo.png" alt="Woopa! Travels Logo" class="responsive-img"></div>
      <div class="col s6 m1 offset-m9"><img src="img/ABTA.png" alt="ABTA Logo" class="responsive-img"><img src="img/ATOL.png" alt="ATOL Logo" class="responsive-img"><img src="img/TRAVELAWARE.png" alt="Travel Aware Logo" class="responsive-img"><img src="img/TTA.png" alt="Travel Trust Associacion Logo" class="responsive-img"></div>
    </div>

    <div class="row">
      <div class="col s12">
        <h6 class="center-align grey-text">&copy; WW Project Studio 2018</h6>
      </div>
    </div>
  </footer>

</body>

<!-- JAVASCRIPTS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js" charset="utf-8"></script>

<script src="js/aos.js" charset="utf-8"></script>

<script type="text/javascript">

  var btn = document.querySelector('.title');
  var land = document.querySelector('.landing');
  if((typeof(btn) != 'undefined' && btn != null) && (typeof(land) != 'undefined' && land != null)) {
    btn.addEventListener('click', function() {
      land.classList.add('hidden');
    });
  };

  var sideNav = document.querySelector('.sidenav');
  M.Sidenav.init(sideNav, {});

  var scrollSpy = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scrollSpy, {
    scrollOffset: 0
  });

  var slider = document.querySelector('.slider');
  M.Slider.init(slider, {
    indicators: false,
    duration: 1000,
    interval: 4000
  });

  AOS.init({
				easing: 'ease-out-back',
				duration: 900
			});

</script>
