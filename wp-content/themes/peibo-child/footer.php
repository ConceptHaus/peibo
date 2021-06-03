
          </div>
        </main><!-- end.Main -->

        <!-- footer -->
        <footer class="g-footer" data-blur-content>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-4">
                <ul class="listFooter">
                  <li>
                    <img src="/wp-content/themes/peibo-child/assets/img/logos/LOGO.png" width="35%">
                  </li>
                  <li>
                    <label>
                    Bosques de las Lomas, CDMX
                  </label>
                  </li>
                  <li>
                    <a href="tel:+5212345678">T. 12.34.56.78</a>
                  </li>
                  <li>
                    <ul class="listSociales">
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/ico-ins.png" width="50%">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/ico-fb.png" width="50%">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                            <img src="/wp-content/themes/peibo-child/assets/img/icon-tw.png" width="50%">
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-sm-4">
                  <ul class="listFooter">
                    <li>
                      <a href="#">Personal</a>
                    </li>
                    <li>
                      <a href="#">Empresas</a>
                    </li>
                    <li>
                      <a href="#">Blog</a>
                    </li>
                  </ul>
              </div>
              <div class="col-sm-4">
                <ul class="listFooter">
                    <li>
                      <a href="#">Legales</a>
                    </li>
                    <li>
                      <a href="#">Aviso de Privacidad</a>
                    </li>
                    <li>
                      <a href="#">Términos y Condiciones</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script>
          $('body').show();
          // $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>
