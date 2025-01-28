<?php
get_header(); ?>
  <!-------------------------------------------------------- Hero Section Start -------------------------------------------------->
  <?php 
     $args = array(
        'post_type' => 'hero_section',
        'post_per_page' => '5' // Max number of items to retrieve
     );
     $custom_query_slide = new WP_Query($args);
     ?>
  <section id="hero">
    <div class="quarterCircle"></div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <?php 
            if($custom_query_slide->have_posts()):
                while($custom_query_slide->have_posts()):
                    $custom_query_slide->the_post();
                    $slide_image = get_field('big_title');
                    $big_title = get_field('big_title');
                    $secondary_title = get_field('secondary_title');
                    $button_title = get_field('button_title');
                    $paragragh = get_field('paragraph');


       ?>

        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-5 col-md-4 ">
              <div class="hero-text-container">

                <div class="hero-big-text-container">
                  <div class="hero-title-container">
                    <h2>
                      <?php echo $secondary_title ?>
                    </h2>
                    <h1>
                      <?php echo $big_title ?>
                    </h1>
                  </div>
                  <h4>
                    <?php echo $paragragh ?>
                  </h4>
                  <div>
                    <a href="#" class="btn faqButton" role="button"><?php echo $button_title ?></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-7 col-md-8">
              <div id="back-hero-image" style="background-image: url('assets/images/shapetwo2.png')">
                <div class="hero-image-container" style="mask: url('assets/images/mask1.svg');-webkit-mask: url('assets/images/mask1.svg')">
                  <img
                    src="<?php echo $slide_image['url'] ?>"
                    alt="<?php echo $slide_image['alt'] ?>">
                </div>
              </div>
            </div>
          </div>
        </div>


          <?php 
                endwhile;
                wp_reset_postdata();
            endif;
          ?>
      </div>
    </div>
  </section>


  <!--------------------------------------------------------- Hero Section End ------------------------------------------------->

  <!---------------------------------Help section start---------------------------------------------->
  <section id="help">
    <div class="heading"><img
        src="assets/images/rectangles.svg" />
      <h2>
        We help you with
      </h2>
    </div>
    <div class="headingShadow">
      <h1>We help you with</h1>
    </div>

    <!-- Bubbles Row Start -->
    <div id="help-row-container">
      <h4>Traverse helps with :</h4>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="help-bubble-container">
            <div class="help-dashed-container">
              <div>
                <img
                  src="assets/images/tax.svg"
                  alt="icon" class="help-images">
              </div>
            </div>
          </div>
          <p>Book your flight & purchace your flight insurrance.</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="help-bubble-container">
            <div class="help-dashed-container">
              <div>
                <img
                  src="assets/images/conflict.svg"
                  alt="icon" class="help-images">
              </div>
            </div>
          </div>
          <p>Estimate your trip expanses & taking care of extras.</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="help-bubble-container">
            <div class="help-dashed-container">
              <div>
                <img
                  src="assets/images/document.svg"
                  alt="icon" class="help-images">
              </div>
            </div>
          </div>
          <p>Plan a custom vacation anywhere in the world.</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="help-bubble-container">
            <div class="help-dashed-container">
              <div>
                <img
                  src="assets/images/next.svg"
                  alt="icon" class="help-images">
              </div>
            </div>
          </div>
          <p>Get personalized advice at any time.</p>
        </div>
      </div>
    </div>
    <div id="help-row-two-container">
      <div class="row">
        <div class="col-lg-6">
          <div class="back-help-image" style="background-image:url('assets/images/shapetwo2.png');">
            <div class="help-image-container" style=" mask:url('assets/images/shape2-mask.svg');-webkit-mask:url('assets/images/shape2-mask.svg')">
              <img
                src="assets/images/destinations.jpg"
                alt="next" style="width:100%;height:100%" />
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <div class="heading"><img
                src="assets/images/rectangles.svg" />
              <h2>
                Destinations to discover
              </h2>
            </div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when
              an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Help section End************************************************************** -->

  <!---------------------------------Steps section start---------------------------------------------->
  <section id="steps">
    <div class="heading"><img
        src="assets/images/rectangles.svg" />
      <h2>
        How it works
      </h2>
    </div>
    <div class="headingShadow">
      <h1>How it works</h1>
    </div>
    <div id="steps-text-container">
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
        going through the cites of the word in classical literature, discovered the undoubtable source.
      </p>
    </div>
    <div id="steps-big-container">
      <div id="steps-circles-container">
        <div class="steps-one-circle-container">
          <div class="steps-numbers-light">
            <span class="step-number-text">01</span>
          </div>
          <img
            src="assets/images/circleArrow.svg"
            style="width: 100%;" />

          <div class="steps-white-circle">
            <img
              src="assets/images/outline.svg"
              class="steps-icons" />
            <div class="step-light-text">
              <h5>Step 1.</h5>
              <p>
                Lorem Ipsum
              </p>
            </div>
          </div>
        </div>
        <div class="steps-one-circle-container">
          <div class="steps-numbers">
            <span class="step-number-text">02</span>
          </div>
          <img
            src="assets/images/circleArrow.svg"
            style="width: 100%;" />
          <div class="steps-white-circle">
            <img
              src="assets/images/attendance.svg"
              class="steps-icons" />
            <div class="step-dark-text">
              <h5>Step 2.</h5>
              <p>
                Lorem Ipsum
              </p>
            </div>
          </div>
        </div>
        <div class="steps-one-circle-container">
          <div class="steps-numbers-light">
            <span class="step-number-text">03</span>
          </div>
          <img
            src="assets/images/circleArrow.svg"
            style="width: 100%;" />

          <div class="steps-white-circle">
            <img
              src="assets/images/question.svg"
              class="steps-icons" />
            <div class="step-light-text">
              <h5>Step 3.</h5>
              <p>
                Lorem Ipsum
              </p>
            </div>
          </div>
        </div>
        <div class="steps-one-circle-container">
          <div class="steps-numbers">
            <span class="step-number-text">04</span>
          </div>
          <img
            src="assets/images/no-arrow-circle.svg"
            style="width: 80%;" />
          <div id="last-step-white-circle">
            <img
              src="assets/images/check.svg"
              class="steps-icons" />
            <div class="step-dark-text">
              <h5>Step 4.</h5>
              <p>
                Lorem Ipsum
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="steps-btn-container">
      <a href="#" class="btn" role="button">Lorem Ipsum</a>
    </div>
  </section>
  <!---------------------------------Steps section End---------------------------------------------->
  <!--FAQ section ************************************************************** -->
  <section id="faq">
    <div class="heading"><img
        src="assets/images/rectangles.svg" />
      <h2>FAQ</h2>
    </div>
    <div class="headingShadow">
      <h1>FAQ</h1>
    </div>
    <div class="halfCircle"></div>
    <div class="quarterCircle"></div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="container">
          <!-- Accordion Starts-->
          <div class="acc">
            <div class="questionContainer">
              <h5>
                Why do I need travel agency ?
              </h5>
              <i class="fas fa-chevron-down fa-lg chevron"></i>
            </div>
            <div class="content">
              <div class="content-inner">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                  and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>
          <div class="acc">
            <div class="questionContainer">
              <h5>
                Why should I book a trip with Traverse ?
              </h5>
              <i class="fas fa-chevron-down fa-lg chevron"></i>
            </div>
            <div class="content">
              <div class="content-inner">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                  and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>
          <div class="acc">
            <div class="questionContainer">
              <h5>
                Does it cost me money to get a quote ?
              </h5>
              <i class="fas fa-chevron-down fa-lg chevron"></i>
            </div>
            <div class="content">
              <div class="content-inner">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                  and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>
          <div class="acc">
            <div class="questionContainer">
              <h5>
                Do I pay extra to use your travel agency ?
              </h5>
              <i class="fas fa-chevron-down fa-lg chevron"></i>
            </div>
            <div class="content">
              <div class="content-inner">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                  and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--FAQ section End************************************************************** -->

  <!--Blog section ************************************************************** -->
  <section id="blog">
    <div class="heading"><img
        src="assets/images/rectangles.svg" />
      <h2>Latest News</h2>
    </div>
    <div class="headingShadow blogHeadingShadow">
      <h1>Latest News</h1>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="postCard">
          <div class="postImage">
            <img
              src="assets/images/best_adventure.jpg" />
          </div>
          <div class="postTitle">
            <h5>Best Adventure</h5>
            <h6>February 20, 2024</h6>
          </div>
          <div class="postExcerpt">
            <p>Lorem ipsum dolor sit amet, consectetur ali adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut
              labore et dolorezeli magna zel aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur ali
              adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut labore et dolorezeli magna zel aliqua. Ut enim ad
              minim veniam...</p>
            <a href="#" class="excerptButton" role="button">Read the article <i
                class="fas fa-caret-right fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="postCard">
          <div class="postImage">
            <img
              src="assets/images/traverse.png" />
          </div>
          <div class="postTitle">
            <h5>Time To Travel</h5>
            <h6>February 25, 2024</h6>
          </div>
          <div class="postExcerpt">
            <p>Lorem ipsum dolor sit amet, consectetur ali adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut
              labore et dolorezeli magna zel aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur ali
              adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut labore et dolorezeli magna zel aliqua. Ut enim ad
              minim veniam...</p>
            <a href="#" class="excerptButton" role="button">Read the article <i
                class="fas fa-caret-right fa-2x"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="postCard">
          <div class="postImage">
            <img
              src="assets/images/summer_destination.jpg" />
          </div>
          <div class="postTitle">
            <h5>Summer Destinations</h5>
            <h6>February 11, 2024</h6>
          </div>
          <div class="postExcerpt">
            <p>Lorem ipsum dolor sit amet, consectetur ali adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut
              labore et dolorezeli magna zel aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur ali
              adipiscing eqlit, sed do eiusmod tezelmpor incididunt ut labore et dolorezeli magna zel aliqua. Ut enim ad
              minim veniam...</p>
            <a href="#" class="excerptButton" role="button">Read the article <i
                class="fas fa-caret-right fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Blog section End************************************************************** -->


  <!--Map section ************************************************************** -->
  <section id="map">
    <div class="heading"><img
        src="assets/images/rectangles.svg" />
      <h2>Contact Us</h2>
    </div>
    <div class="headingShadow">
      <h1>Contact Us</h1>
    </div>
    <div class="row">
      <div class="contactFormMobileContainer col-sm-12 col-xs-12">
        <h3>Please contact us</h3>
        <form action="" method="post" class="form" aria-label="Contact form">
          <label for="first-name-and-last-name">First and last name</label>
          <input placeholder="Lorem Ipsum Delor" size="40" type="text" value="" name="first-name-and-last-name" />
          <label for="your-email">Email</label>
          <input placeholder="lorem.ipsum@doler.com" size="40" type="email" value="" name="your-email"
            aria-required="true" />
          <label for="your-subject">Subject</label>
          <input placeholder="Lorem Ipsum Delor" size="40" type="text" value="" name="your-subject" />
          <label for="your-message">Message</label>
          <textarea placeholder="Write your inquiry here ..." cols="40" rows="4" value=""
            name="your-message"></textarea>
          <div>
            <input class="submit" type="submit" value="Send" />
          </div>
        </form>
      </div>
      <div class="iframeContainer col-xl-12 col-lg-12 col-md-12">
        <div class="contactForm">
          <h3>Please contact us</h3>
          <form action="" method="post" class="form" aria-label="Contact form">
            <label for="first-name-and-last-name">First and last name</label>
            <input placeholder="Lorem Ipsum Delor" size="40" type="text" value="" name="first-name-and-last-name" />
            <label for="your-email">Email</label>
            <input placeholder="lorem.ipsum@doler.com" size="40" type="email" value="" name="your-email"
              aria-required="true" />
            <label for="your-subject">Subject</label>
            <input placeholder="Lorem Ipsum Delor" size="40" type="text" value="" name="your-subject" />
            <label for="your-message">Message</label>
            <textarea placeholder="Write your inquiry here ..." cols="40" rows="4" value=""
              name="your-message"></textarea>
            <div>
              <input class="submit" type="submit" value="Send" />
            </div>
          </form>
        </div>
        <iframe
          src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d357578.6549816691!2d-74.04151249562999!3d45.558708660355066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2zTW9udHLDqWFsLCBRQw!5e0!3m2!1sfr!2sca!4v1709004861276!5m2!1sfr!2sca"
          frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="10" width="100%"
          height="550">
        </iframe>
      </div>
    </div>
  </section>
  <!--Map section End************************************************************** -->

<?php
get_footer(); ?>