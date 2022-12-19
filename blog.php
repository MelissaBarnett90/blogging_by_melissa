
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
              
              <div class="container">
  <form class="form-inline" method="post" action="search.php">
    <input type="text" name="roll_no" class="form-control" placeholder="Search blog..">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>      <br>
              <br>

              <h4 class="h4">Recent posts</h4>

              <ul>
                  <li>
                      <h5 style="margin-bottom:10px;"><a href="food.php">Food for the soul!</a></h5>
                      <small></i> Green Day &nbsp;</small>
                  </li>

                  <li><br></li>

                  <li>
                      <h5 style="margin-bottom:10px;"><a href="news.php">Cheers to life!</a></h5>
                      <small></i> Henry Jacobs &nbsp;</small>
                  </li>

                  <li><br></li>

                  <li>
                    <h5 style="margin-bottom:10px;"><a href="events.php">Wonderlust consumed!</a></h5>

                    <small></i> Apple Davis &nbsp;</small>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </div>


    <?php require_once 'includes/footer.php'; ?>