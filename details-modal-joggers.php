<div class="modal fade details-5" id="details-5" tabindex="-1"
    role="dialog" aria-labelledby="details-5" aria-hidden="true">

    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal"
              aria-label="close"> <span aria-hidden="true">&times;</span></button>

              <h4 class="modal-title text-center">Joggers</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="center-block">
                    <img src="images/joggers.jpg" alt="Joggers" class="details img-responsive">

                  </div>
                </div>

                <div class="col-sm-6">
                  <h4>Details</h4>
                  <p>Swaggy Joggers</p>
                  <hr>
                  <p>Price: $54.99</p>

                  <form class="" action="addToCart.php" method="post">
                    <div class="form-group">
                      <div class="col-xs-3">
                        <label for="quantity" id="quantity-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="">
                      </div><br><br><br><br>

                      <div class="form-group">
                        <label for="size">Size</label>
                        <select class="form-control" name="size" id="size">
                          <option value=""></option>
                          <option value="Small">Small</option>
                          <option value="Medium">M</option>
                          <option value="Large">L</option>
                        </select>
                      </div>

                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-warning" type="submit" name="button">
                <span class="glyphicon glyphicon-shopping-cart">Add to Cart</span>
            </button>
          </div>

      </div>
    </div>

</div>
