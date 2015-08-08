<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div class="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
    <div class="col-sm-9 right">
      <div class="asummery"> 
		<?php echo $this->Html->image('front/user.png', array('class' => 'img-left userimg'));?>
		<h2><?php echo $accountDetail['Customer']['name'];?></h2>
        <span class="email">sarathomsan@gmail.com</span><br>
        <a href="#" class="edit" data-toggle="modal" data-target="#profile">Edit Profile</a>
        <h3>Account details </h3>
        <div class="table-responsive">
		<?php echo $this->element('edit_profile');?>
          <table class="table">
            <tr>
              <td>Display name:</td>
              <td class="text-right">Sara Thomsan</td>
            </tr>
            <tr>
              <td>Store credit:</td>
              <td class="text-right">$500.00</td>
            </tr>
            <tr>
              <td>Order history:</td>
              <td class="text-right">No past orders</td>
            </tr>
            <tr>
              <td>Default shipping address : <a href="#" class="edit" data-toggle="modal" data-target="#shipping">Edit</a>
			  <?php echo $this->element('shipping_address');?>
			  </td>
              <td class="text-right">G-57, Street no. 10 Vishwas Park, Brokholow, NY</td>
            </tr>
            <tr>
              <td>Measurement system: <a href="" class="edit">Edit</a></td>
              <td class="text-right">Imperial (i.e. inches)</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
