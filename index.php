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

  <p class="gray-text">Buy Chances and Click everywere in the grid. All chances have prize! You can win up to 100 000 BITS!</p>

  <div class="row justify-content-md-center">
    <div class="col-lg-2 d-none d-sm-table-cell">

    </div>

    <!-- GRID start -->
    <div class="col col-lg-8 text-center grid ">

      <!-- user data -->
      <div class="row my-2">
        <div class="col col-md-6">  
          <b class="h3 ">Total Chances left: <?php echo $chances; ?></b>
        </div>
        <div class="col col-md-6">
          <div id="signedIn" class="h4 my-2">      
            <button id="signIn" class="btn btn-warning px-5 mb-3 disappear" data-toggle="modal" data-target="#modalLogin">Buy chances!</button>
          </div>
        </div>
      </div>
      <!-- end user data -->

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
              <?php echo $result; ?>
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
            <td>1 Bit</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>3 Satoshi</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>60 Satoshi</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Ann</td>
            <td>20 Bits</td>
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

