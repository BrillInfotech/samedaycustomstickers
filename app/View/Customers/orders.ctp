<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div class="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
    <div class="col-sm-9 right">
      <div class="asummery"> 
		<h2>Order History</h2>

		<br>
          <div class="table-responsive">
            <table class="table table-bordered order-history table-hover">
              <tbody>
                <tr>
                  <th>ORDER NO:</th>
                  <th>Qty</th>
                  <th>Order Date</th>
                  <th>Amount </th>
                  <th>Status</th>
                  <th> </th>
                </tr>
                <tr>
                  <td> sdcs012</td>
                  <td> 200</td>
                  <td>30th April,15</td>
                  <td><span class="WebRupee">Rs.</span> 584</td>
                  <td>Cancelled</td>
                  <td><a class="links" href="order-details.html">Details</a></td>
                </tr>
                <tr>
                  <td> sdcs012</td>
                  <td> 200</td>
                  <td>30th April,15</td>
                  <td><span class="WebRupee">Rs.</span> 584</td>
                  <td>Returned</td>
                  <td><a class="links" href="order-details.html">Details</a></td>
                </tr>
                <tr>
                  <td> sdcs012</td>
                  <td> 200</td>
                  <td>30th April,15</td>
                  <td><span class="WebRupee">Rs.</span> 584</td>
                  <td>Delivered</td>
                  <td><a class="links" href="order-details.html">Details</a></td>
                </tr>
                <tr>
                  <td> sdcs012</td>
                  <td>200</td>
                  <td>30th April,15</td>
                  <td><span class="WebRupee">Rs.</span> 584</td>
                  <td>Shipped</td>
                  <td><a class="links" href="order-details.html">Details</a></td>
                </tr>
              </tbody>
            </table>
            <p class="bg-warning"> You have not made any order. </p>
          
      </div>
    </div>
  </div>
</div>
