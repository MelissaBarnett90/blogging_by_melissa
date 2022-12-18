
<?php 
    $title = 'About';
    require_once 'includes/header.php';
    include_once 'includes/session.php';

    include_once 'db/config.php';

    $sql = mysqli_query($conn, "SELECT t1.title, t2.fname, t1.description, t1.cur_date,
     t1.image FROM `blog` t1 inner join friend t2 on t1.user_id =t2.friend_id WHERE 1");


?>


<!-- Body -->

<br><br><br><br>

    <div class="single-services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <section class='tabs-content'>
              <?php 
                while($rows = mysqli_fetch_array($sql)){
              ?>
              <article id='tabs-1'>
                <img src="team1.jpeg" alt="">
                <h4><a href=""><?php echo $rows['title']; ?></a></h4>
                <div style="margin-bottom:10px;">
                  <span><?php echo $rows['fname']; ?> &nbsp;|&nbsp; <?php echo $rows['cur_date']; ?> &nbsp;</span>
                </div>
                <p><?php echo $rows['description']; ?></p>
                <br>
                <div>
                  <a href="#" class="filled-button">Continue Reading</a>
                </div>
              </article>
              <?php } ?>

              <br>
              <br>
            </section>
          </div>

          <div class="col-md-4"><?php
              if (isset($_SESSION['userid'])){
              ?>
              <a href="create_post.php" class="btn btn-success btn-sm">Create Post</a>
              <?php } ?>
              <h4 class="h4">Search</h4>
              
              <form id="search_form" name="gs" method="GET" action="#">
                <input type="text" name="q" class="form-control form-control-lg" placeholder="type to search..." autocomplete="on">
              </form>

              <br>
              <br>

              <h4 class="h4">Recent posts</h4>

              <ul>
                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.html">Dolorum corporis ullam, reiciendis inventore est repudiandae</a></h5>
                      <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>

                  <li><br></li>

                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.html">Culpa ab quasi in rerum dolorum impedit expedita</a></h5>
                      <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>

                  <li><br></li>

                  <li>
                    <h5 style="margin-bottom:10px;"><a href="blog-details.html">Explicabo soluta corrupti dolor doloribus optio dolorum</a></h5>

                    <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </div>


    <?php require_once 'includes/footer.php'; ?>