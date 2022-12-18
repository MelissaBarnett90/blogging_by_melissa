
<?php 
    $title = 'Index';
    require_once 'includes/header.php';

     
?> 

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
  

    <!-- Body -->

   
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          

        

          <div class="item">
            <img src="uploads/ackee.jpeg" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span><b>Recipe of the month</b></span>
                </div>

                <a href="food.php"><h4><b>Food for the soul!</b></h4></a>

             
              </div>            
            </div>
          </div>
          
          <div class="item">
            <img src="uploads/event.jpeg" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span><b>Places to visit of the month</b></span>
                </div>

                <a href="events.php"><h4><b>Wonderlust consumed!</b></h4></a>

            
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="uploads/story.jpeg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><b>Interesting News</b></span>
                </div>

                <a href="news.php"><h4><b>Cheers to life!</b></h4></a>

               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Body -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Every End Of The Month Our Authors Will Post New Blogs:)</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="col-md-4 col-sm-6">
                  <img src="uploads/nail.jpeg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Longest marriage nails</h4></a>
                  
                  <p>Diana Armstrong, the lady whose fingernails are 1,306.58 cm (42 ft 10.4 in) in length, has spoken up about her life and the challenges she endures, revealing that she hasn't gone to a salon in 22 years.

The Guinness Book of World Records officially recognized her fingernails as the longest recorded. According to Diana Armstrong, she has not been to a salon in the last 25 years, and
 Diana Armstrong has been growing her nails for the past 22 years.</p>

               
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="col-md-4 col-sm-6">
                  <img src="uploads/marriage.jpeg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Longest marriage for a living couple</h4></a>
                  
                  <p>Eugene Gladu and Dolores Gladu have been husband and wife longer than any other couple alive today.

Married on 25 May 1940 in Woonsocket, Rhode Island, the couple were awarded their Guinness World Records titles in July 2021 after 81 years 57 days of marriage.

They have a total of five generations in their family!

Eugene and Dolores currently live together in an assisted living facility, still enjoying each other's company after all these years.

The pair have lived an active lifestyle and spent their prime years dancing, canoeing, snowmobiling, hiking and travelling together.</p>

               
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="col-md-4 col-sm-6">
                  <img src="uploads/river.jpeg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.php"><h4>Longest river in the world</h4></a>
                  
                  <p>The two longest rivers in the world are the Nile, flowing into the Mediterranean, and the Amazon, flowing into the South Atlantic. Which is the longer is more a matter of definition than simple measurement.

Not until 1971 was the true source of the Amazon discovered, by Loren McIntyre (USA) in the snow-covered Andes of southern Peru.

The Amazon begins with snowbound lakes and brooks-the actual source has been named Laguna McIntyre-which converge to form the Apurimac.

This joins other streams to become the Ene, the Tambo and then the Ucayali. From the confluence of the Ucayali and the Marañón the river is called the Amazon for the final 
3,700 km (2,300 miles) as it flows through Brazil into the Atlantic Ocean.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-14">
                <h2 class="text-center">Become a verified Friend,</h2>
                  <span>
                  by registering to be able to post your own blogs on our BLOGS page.</span>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="register.php">Register Here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require_once 'includes/footer.php'; ?>

 

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>