<footer class="footerWideScreen">
    <div class="row widgets">
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
        <?php 

          if(is_active_sidebar('footer_1')):
            dynamic_sidebar('footer_1');

          endif;                       

        ?>
      </div>
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
          <?php 

            if(is_active_sidebar('footer_2')):
              dynamic_sidebar('footer_2');

            endif;                       

          ?>
      </div>
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
          <?php 

              if(is_active_sidebar('footer_3')):
                dynamic_sidebar('footer_3');

              endif;                       

          ?>
      </div>
    </div>
    <div class="copyright">
         <?php 

          if(is_active_sidebar('footer_created_by')):
             dynamic_sidebar('footer_created_by');

          endif;                       

        ?>
      <div class="copyrightText">
              <?php 

                  if(is_active_sidebar('footer_copyright')):
                      dynamic_sidebar('footer_copyright');

                  endif;                       

              ?>
      </div>
    </div>
  </footer>

  <footer class="footerMobileScreen">
    <div class="widgets">
      <div class="myWidget">
        <?php 

          if(is_active_sidebar('footer_1')):
            dynamic_sidebar('footer_1');

          endif;                       

      ?>

      </div>
      <div class="myWidget">
          <?php 

              if(is_active_sidebar('footer_2')):
                dynamic_sidebar('footer_2');

              endif;                       

          ?>
      </div>
      <div class="myWidget">
          <?php 

              if(is_active_sidebar('footer_3')):
                dynamic_sidebar('footer_3');

              endif;                       

          ?>
      </div>
    </div>
    <div class="copyright">
      <?php 

        if(is_active_sidebar('footer_created_by')):
          dynamic_sidebar('footer_created_by');

        endif;                       

      ?>
      <div class="copyrightText">
            <?php 

                if(is_active_sidebar('footer_copyright')):
                    dynamic_sidebar('footer_copyright');

                endif;                       

            ?>
      </div>
    </div>
  </footer>
 <?php wp_footer(); ?>
</body>

</html>