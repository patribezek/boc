<?php 
require_once('navbar.php');
require_once('controller.php');
?>


<!-- Modal cookies / Adult -->
<!-- 
<div class="modal fade" id="cookiesModal" tabindex="-1" role="document" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-plain text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Wait...</h5>
      </div>
      <div class="modal-body">
        <div><img src="img/adults.png" alt="" class="adults"></div>
        <br />
        Exclusive access for adults only.
        <br />
        This website is INTENDED for adults (+18 years) and provides content related to cannabis seeds. We refuse to give cannabis seeds to anyone who we have reason to believe is going to use them to cultivate in countries where it is illegal.
        <br /><br />
        <i class="fas fa-cookie-bite"></i>
         By using this website you agree with our <a href="termsConditions.php">Terms and Conditions</a> and accept our cookies.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Enter under my own Responsability</button>

      </div>
    </div>
  </div>
</div> -->

<!-- end Modal -->


<div class="container text-center pt-5">
  <h1 class="akronim pt-4 ">Bit of chance</h1>

  <p class="disappear">Buy Chances and Click everywere in the grid. You can win up to 100 BITS!</p>
  <button id="signIn" class="btn btn-warning px-5 mb-3 disappear" data-toggle="modal" data-target="#modalLogin">Buy chances!</button>

  <div id="signedIn" class="d-none">      
    <p>Loged as: <span><?php echo $usr_email; ?></span>
     <br>
     Total Chances left: <?php echo $chances; ?></p>
   </div>

   <div class="row justify-content-md-center">
    <div class="col-lg-2 d-none d-sm-table-cell">

   </div>

   <!-- GRID -->
   <div class="col col-lg-8 text-center">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">So...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $result; 

            if ($random == 5 ||
              $random == 6 ||
              $random == 7) { ?>
                <div class="text-left">
                  <p>Please fill the following form to send your prize:</p>

                  <form>
                   <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Use my current nickname</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nickname to display</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="mjuann">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput2">Your full name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Marie Juann">
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCountry">Country</label>
                      <input type="text" class="form-control" id="inputCountry">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <input type="text" class="form-control" id="inputState">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>

                  </div>

                  <p>Do you prefer..?</p>

                  <div class="form-group form-check mb-0">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Regular seeds</label>
                  </div>

                  <div class="form-group form-check mb-0">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Feminized seeds</label>
                  </div>

                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Auto seeds</label>
                  </div>


                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Your Comments</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <button type="submit" class="btn btn-success px-5">Submit</button>
                </form>

              </div>
            <?php  } ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->


    <!-- GRID -->
    <?php

    for ($i=0; $i < 60; $i++) {
      $box = "<a href='' id='box_".$i."' class='bg' data-toggle='modal' data-target='#exampleModal'></a>";

      echo $box;
    }

    ?>

  </div>

  <div class="col col-lg-2 d-none d-sm-table-cell">

  </div>

</div> <!-- row end -->

<div class="row justify-content-md-center">
  <div class="col col-10 ">
    <!-- publi -->
  </div>
</div> <!-- row end -->



<div class="row justify-content-md-center ">
  <div class="col col-lg-3 d-none d-sm-table-cell">
    <!-- publi -->
  </div>
  <div class="col col-lg-6 my-4 ">
    <h2 class="text-center">Last winners</h2>

    <table class="table table-striped ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Won</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>1 bit</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>3 satoshi</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>60 satoshi</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Ann</td>
          <td>800 satoshi</td>
        </tr>
      </tbody>
    </table>

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

