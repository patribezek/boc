<?php 
require_once('navbar.php');
require_once('controller.php');
?>


<div class="container pt-5">
  <h2 class="text-center akronim pt-4">Contact us</h2>

  <div class="row justify-content-md-center">

    <div class="col col-lg-3  d-none d-sm-table-cell">
    </div>
    <div class="col col-lg-6 col-12 mb-5">



      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput2">Your name</label>
          <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Marie Juann">
        </div>
        
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Your Comments</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Submit</button>
      </form>

    </div>
    <div class="col col-lg-3 col-12 mb-5">

      <p class="">
        Before you contact us please be aware that we have limited resources for email support therefore. <br />
        <br />
        Please read through our <a href="termsConditions.php">terms</a> and <a href="faq.php">FAQ</a> before sending us an email. We will not reply to emails asking questions that have already been answered there. <br /> <br />
        We can only reply to emails written clearly in English or Spanish. <br /><br />
        We will NOT reply to emails that are abusive or threatening. <br />
        We will endeavour to reply to emails within 72 hours. <br />
        <br />
        If your enquiry meets the conditions above then please drop us a line :-)

      </p>
    </div>
   
  </div> <!-- row end -->


  <div class="row justify-content-md-center">
    <div class="col col-10 ">

      <!-- publi -->
    </div>


  </div> <!-- row end -->

</div> <!-- container end -->


<!-- footer -->
<?php 
require_once('footer.php');
?>


