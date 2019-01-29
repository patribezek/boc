<?php 
require_once('navbar.php');
require_once('controller.php');
?>


<div class="container pt-5">
  <h2 class="text-center akronim pt-4">Rewards</h2>
  <h4 class="text-center mb-4">All chances are accumulative with extra chances you can win!</h4>
  <div class="row justify-content-md-center">

    <div class="col col-lg-3  d-none d-sm-table-cell">
    </div>
    <div class="col col-lg-6">

      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header p-0" id="headingOne">
            <h5 class="mb-0 card-title">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Seeds Rewards
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

              <p>You can win differents packs of seeds:</p>
              <ul>
                <li>1 seed</li>
                <li>2 seeds</li>
                <li>3 seeds</li>
                <li>5 seeds</li>
                <li>10 seeds</li>
              </ul> 

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header p-0" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Chances Rewards
             </button>
           </h5>
         </div>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">

            <p>Also, you can win extra chances!</p>
            <ul>
              <li>1 chance</li>
              <li>3 chances</li>
              <li>5 chances</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header p-0" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Fidelity chances
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">

            <p>You will earn one extra chance per day if you play everyday </p>
            <ul>
              <li>Day 1: 1 chance</li>
              <li>Day 2: 2 chances</li>
              <li>Day 3: 3 chances</li>
              <li>Day 4: 4 chances</li>
              <li>Day 5: 5 chances!</li>
            </ul>
            <b>Up to 5 chances per day!</b>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col col-lg-3 d-none d-sm-table-cell">
  </div>
</div> <!-- row end -->




<div class="row justify-content-md-center">
  <div class="col col-10 ">

    <!-- publi -->
  </div>

  <?php 
  require_once('banks.php');
  ?>
</div> <!-- row end -->

</div> <!-- container end -->


<!-- footer -->
<?php 
require_once('footer.php');
?>


