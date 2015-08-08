<?php   echo $this -> element('inner_title_banner');?>
<div class="container">
  <?php	echo $this -> element('shipping_process');?>

<div class="row">
  <div class="shiiongaddress-page">
    <div class="col-sm-8">
      <h3>When do you want your order delivered?</h3>
      <ul class="clearfix select-delivery-date">
        <li>
          <input type="radio" class="radio" name="dd" id="d1">
          <label for="d1">July 8 (Wednesday)</label>
          <p>+ $0.00 for 5 day production & 1 Day Shipping </p>
        </li>
        <li>
          <input type="radio" class="radio" name="dd" id="d2">
          <label for="d2">July 12 (Wednesday)</label>
          <p>+ $25.00 for 4 day production & 1 Day Shipping </p>
        </li>
        <li>
          <input type="radio" class="radio" name="dd" id="d3">
          <label for="d3">July 8 (Wednesday)</label>
          <p>+ $50.00 for 3 day production & 1 Day Shipping </p>
        </li>
      </ul>
      <br>
      <p class="assumed">Delivery dates assume proof approval within 48 hours. Delayed approvals will affect delivery.</p>
      <br>
			<?php echo $this->Form->input(
							'Continue',
							array(
								'type' => 'button',
								'class' => 'continue small',
								'label' => false,
								'div' => false
							)
						);?>
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