<?php 
require_once('navbar.php');
require_once('controller.php');
?>


<div class="container pt-5">
  <h2 class="text-center akronim pt-4">FAQ</h2>

  <div class="row justify-content-md-center">

    <div class="col col-lg-3  d-none d-sm-table-cell">
      <!-- publi -->
    </div>
    <div class="col col-lg-6 my-4">

      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header p-0" id="headingOne">
            <h5 class="mb-0 card-title">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How many chances do I have?
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

              <p>
                Your chances depends on the days you participate. You can get up to 5 chances. <br />
                Also, if you win extra chances, they add to your current chances. <br />
                For example, if you have 4 chances, use one, and win 3, you will have now 6 chances. 
              </p>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header p-0" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Is it possible to win something?
             </button>
           </h5>
         </div>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              Yes. The chances are like mostly lucky games: 5%. <br />
              Remember that can vary depending on the extra chances you win and the daily chances bonus. 
            </p>
            
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header p-0" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What happens if I win?  
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              When you win seeds you will be asked for certain data to make the delivery. 
              <br />
              You can check our <a href="privacy.php"> Privacy policy</a>.
            </p>

          </div>
        </div>
      </div>



      <div class="card">
        <div class="card-header p-0" id="headingThreeb">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeb" aria-expanded="false" aria-controls="collapseThreeb">
              What happens if I win a seed? Can I win others?
            </button>
          </h5>
        </div>
        <div id="collapseThreeb" class="collapse" aria-labelledby="headingThreeb" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              If you win one or more seeds, your chances reset to 0. 
              <br />
              You have to come back next day to get new chances again. 
              <br />
              Your Fidelity chances also will return to be one.
            </p>

          </div>
        </div>
      </div>





      <div class="card">
        <div class="card-header p-0" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Can I make a custom order?
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              No, but you will have a space to tell us any special request. If we can stick to your wish, we will do it ;-). 
            </p>

          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header p-0" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Do you have any warranty on the seeds?
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              We do not check the quality of the seed. In this case you must talk with the bank owner. <br />
              Remember, all the seeds are provided for colleccionists. <br />
              It is illegal to grow in many countries. 
            </p>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header p-0" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              What happens with my data?
            </button>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">

            <p>
              All the data will be erased once the delivery is done. For further details check our <a href="privacy.php">Privacy Policy</a>.
            </p>
            
          </div>
        </div>
      </div>



    </div>
    <div class="text-center my-4">
      <a href="contact.php" class="btn btn-warning btn-block" >Your question is not here? Drop us a line! </a>
    </div>

  </div>
  <div class="col col-lg-3 d-none d-sm-table-cell">
    <!-- publi -->
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


