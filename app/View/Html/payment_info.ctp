
<div class="inner-banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="banner-area">
          <h1>Shipping Info</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <ul class="clearfix step">
        <li><span>1</span> Shipping Details</li>
        <li><span>2</span> Delivery Date</li>
        <li><span class="active">3</span> Payment Info</li>
        <li><span>4</span>Place Order</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="shiiongaddress-page payment-page">
      <div class="col-sm-8">
        <h2>Payment Info</h2>
        <div class="form-area  clearifx">
          <div class="row">
            <div class="col-xs-12">
              <input type="radio" class="radio" name="gateway" id="cc">
              <label for="cc">Credit Card <img src="<?php echo Configure::read('SiteSettings.siteUrl');?>img/front/cc.png"> </label>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="radio" class="radio" name="gateway" id="pp">
              <label for="pp">PayPal <img src="<?php echo Configure::read('SiteSettings.siteUrl');?>img/front/paypal.png"> </label>
            </div>
          </div>
          <div class="cc-details">
            <div class="row">
              <div class="col-xs-12">
                <input type="text" class="input" placeholder="Name (as it appears on your card):">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" class="input cc-number" placeholder="Card number:">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <label>Expires</label>
                <div class="row">
                  <div class="col-xs-6 col-sm-6">
                    <div class="selectdiv">
                      <select class="selectboxdiv">
                        <option>MM</option>
                        <option>05</option>
                        <option>06</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6">
                    <div class="selectdiv">
                      <select class="selectboxdiv">
                        <option>YYYY</option>
                        <option>2015</option>
                        <option>2016</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <label>Security code</label>
                    <input type="text" class="input scode">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <input type="button" class="continue" value="Continue">
        <br>
        <br>
      </div>
      <div class="col-sm-4 right">
        <h3>order summary</h3>
        <div class="form-area order-sum clearfix">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <td>Die Cut Stickers<span>Qty: 50<br>
                  2" x 2"</span> </td>
                <td class="text-right">$200.00</td>
              </tr>
              <tr>
                <td>Die Cut Stickers<span>Qty: 50<br>
                  2" x 2"</span> </td>
                <td class="text-right">$300.00</td>
              </tr>
            </table>
          </div>
          <div class="table-responsive ">
            <table class="table subtot">
              <tr>
                <td>Subtotal: <span class="qtydis">Quantity discount:</span> <span class="qtydis active">Shipping:</span> </td>
                <td class="text-right">$500.00<span class="qtydis">-$100.00</span> <span class="qtydis active">$50</span> </td>
              </tr>
              <tr>
                <td class=" no-bdr-btm">Total: </td>
                <td class="blue no-bdr-btm text-right">$450.00</td>
              </tr>
            </table>
          </div>
        </div>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
</div>
</div>
