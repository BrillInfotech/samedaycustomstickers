<?php   echo $this -> element('inner_title_banner');?>
<div class="container">
  <?php	echo $this -> element('shipping_process');?>
  <div class="row">
    <div class="shiiongaddress-page">
      <div class="col-sm-8">
        <h2>Shipping Address</h2>
        <div class="form-area clearifx">
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.name',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Your Name:',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.company',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Company Name (optional):',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.email',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Email Address:',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.phone',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Contact Phone Number',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.street_add1',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Street Address:  (line 1)',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.street_add2',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Street Address:  (line 2)',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.city',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'City',
								'label' => false,
								'div' => false
							)
						);?> </div>
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.state',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Province/State',
								'label' => false,
								'div' => false
							)
						);?> </div>
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.Country',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Country',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
        </div>
        <br>
        <h2>Billing Address</h2>
         <?php echo $this->Form->input(
							'Shipping.Check',
							array(
								'type' => 'checkbox',
								'class' => 'checkbox',
								'id' => 'billing',
								'label' => false,
								'div' => false
							)
						);?>  
        <label class="label" for="billing">Same as shipping address</label>
        <hr>
        <br>
        <div class="form-area clearifx">
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.name',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Your Name:',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.company',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Company Name (optional):',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.email',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Email Address:',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.phone',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Contact Phone Number',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.street_add1',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Street Address:  (line 1)',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12"> <?php echo $this->Form->input(
							'Shipping.street_add2',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Street Address:  (line 2)',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.city',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'City',
								'label' => false,
								'div' => false
							)
						);?> </div>
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.state',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Province/State',
								'label' => false,
								'div' => false
							)
						);?> </div>
            <div class="col-xs-12 col-sm-4"> <?php echo $this->Form->input(
							'Shipping.country',
							array(
								'type' => 'text',
								'class' => 'input',
								'placeholder' => 'Country',
								'label' => false,
								'div' => false
							)
						);?> </div>
          </div>
        </div>
        <br>
        <br>
        <?php echo $this->Form->input(
							'Continue',
							array(
								'type' => 'button',
								'class' => 'continue',
								'value' => 'Continue',
								'label' => false,
								'div' => false
							)
						);?> <br>
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
                <td>Subtotal: <span class="qtydis active">Quantity discount:</span> </td>
                <td class="text-right">$500.00<span class="qtydis active">-$100.00</span> </td>
              </tr>
              <tr>
                <td class=" no-bdr-btm">Total: </td>
                <td class="blue no-bdr-btm text-right">$400.00</td>
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
