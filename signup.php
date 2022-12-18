

<?php 
    $title = 'About';
    require_once 'includes/header.php'; 
   
?>


  
    <section class="contact-us">
           <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Sign Up!</h2>
                    </div>
                    <div class="content">


                      <form id="contact" method="post" action="scripts/success.php">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="fname" type="text" id="fname" placeholder="First Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="lname" type="text" id="lname" placeholder="Last Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Enter your email" required="" aria-describedby="emailHelp" >
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="phone" type="text" id="phone" placeholder="Enter your phone number" required=""  aria-describedby="phoneHelp">
                              
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Submit your blog" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          
    
          
        </div>
      </div>
    </section>
</form>


   
<?php require_once 'includes/footer.php'; ?>