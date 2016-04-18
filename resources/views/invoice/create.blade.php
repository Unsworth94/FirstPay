@extends('layouts.master')

@section('content')

<style>
	.paymentSelected {
		border: 2px solid; border-radius: 6px;
	}
</style>
	
	<script>
		$(document).ready(function(){
			$("#gatewayChooser > a").click(function(e) {
				e.stopPropagation();
				if( !$(this).find('img').hasClass("paymentSelected") ){
					$(this).find('img').attr("class", "paymentSelected");
					$('#gateways').val($('#gateways').val() + $(this).attr("data-attr") + "," );
				} else {
					$(this).find('img').removeAttr("class");
					$('#gateways').val($('#gateways').val().replace($(this).attr("data-attr") + ",", "" ));
				}
			});
		});
		
		
		function addItemRow() {
			var item_number = ( document.getElementById("item_table").rows.length - 1 );
			document.getElementById("item_table").insertRow(document.getElementById("item_table").rows.length - 1).innerHTML = '<tr> <td>'+item_number+'</td> <td><input type="text" name="items['+item_number+'][title]" class="form-control" placeholder="items Title" required /></td> <td><input type="text" name="items['+item_number+'][description]" class="form-control" placeholder="items Descripion" required /></td> <td><input type="number" name="items['+item_number+'][quantity]" value="1" class="form-control" required /></td> <td><input type="text" name="items['+item_number+'][price]" value="0.00" class="form-control" required /></td> </tr>';
		}
		
	</script>

<div class="container bcontainer">
	<div class="row">
		<h1>Create an Invoice</h1>
		<div class="panel panel-default">
		  <div class="panel-body">
		  
			<form method="post">
			{!! Form::token() !!}
			<div class="col-md-8 ">
				<fieldset class="form-group">
					<label for="recipientChooser"  >Choose Recipient:</label>
					<select name="recipientChooser" required style="font-family:'FontAwesome', Arial;" class="form-control">
						<option value="">Choose a Recipient</option>
						<option value="John Doe">John Doe (Business Name)</option>
						<option value="John Doe">John Doe (Business Name)</option>
						<option value="John Doe">John Doe (Business Name)</option>
						<option value="new"> &#xf055; Add new recipient</option>
					</select>
					
					<input type="hidden" name="recipientId" required />
				</fieldset>
				
				<fieldset class="form-group">
					<p>Add items:</p>
					<table class="table table-bordered table-hover table-responsive" id="item_table">
						<thead>
						  <tr>
							<th>#</th>
							<th style="width:25%;">Item Title</th>
							<th>Item Descripion</th>
							<th  style="width:10%;">Quantity</th>
							<th style="width:15%;">Price</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>1</td>
							<td><input type="text" name="items[1][title]" class="form-control" placeholder="Item Title" required /></td>
							<td><input type="text" name="items[1][description]" class="form-control" placeholder="Item Descripion" required /></td>
							<td><input type="number" name="items[1][quantity]" value="1" class="form-control" required /></td>
							<td><input type="text" name="items[1][price]" value="0.00" class="form-control" required /></td>
						  </tr>
						  <tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="Javascript: addItemRow();" class="btn btn-primary"><i class="fa fa-plus-circle fa-2" aria-hidden="true"></i> Add New Item</a></td>
						  </tr>
						</tbody>
				  </table>
				</fieldset>
				
				<fieldset class="form-group">
					<label for="notes">Invoice Notes:</label>
					<textarea class="form-control" rows='6'></textarea>
				</fieldset>
			</div>
			<div class="col-md-4">
				<fieldset class="form-group">
					<label for="invoiceId">Invoice ID:</label><input style="" required type="text" class="form-control" placeholder="#12345" name="invoiceId" />
				</fieldset>
				<div class="clearfix"></div>
				<fieldset class="form-group ">
					<label for="currency">Currency:</label>
					<select name="currency" style="font-family:'FontAwesome', Arial; " class="form-control" required >
						<option value="">Choose Currency</option>
						<option>GBP</option>
						<option>GBP</option>
					</select>
				</fieldset>
				
				<div class="clearfix" ></div>
				
				<fieldset class="form-group">
					<label for="gatewayChooser">Choose Gateways:</label>
					<div id="gatewayChooser">
					
						<a href="Javascript:;" style="margin-right:1%;" data-attr="paypal"><img src="http://localhost:8080/firstpay/resources/assets/images/paypal.png" width="60" style="" /></a>
						<a href="Javascript:;" style="margin-right:1%;" data-attr="moneybookers"><img src="http://localhost:8080/firstpay/resources/assets/images/moneybookers.png" width="60"  /></a>
						<a href="Javascript:;" style="margin-right:1%;" data-attr="visa"><img src="http://localhost:8080/firstpay/resources/assets/images/visa.png" width="60"  /></a>
						<a href="Javascript:;" style="margin-right:1%;" data-attr="mastercard"><img src="http://localhost:8080/firstpay/resources/assets/images/mastercard.png" width="60" /></a>
						
					</div>
					<input type="hidden" name="gateways" id="gateways" value="" />
				</fieldset>
				<hr/>
				<div class="panel panel-default" style="vertical-align: bottom;">
				  <div class="panel-heading">
					<h3 class="panel-title">Total</h3>
				  </div>
				  <div class="panel-body">
					<table class="table table-bordered table-hover table-responsive">
						<thead>
						  <tr>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Subtotal:</td>
							<td>&pound; 3,000.00</td>
						  </tr>
						  <tr>
							<td>Tax:</td>
							<td>&pound; 600.00</td>
						  </tr>
						  <tr>
							<td>Total Due:</td>
							<td>&pound; 2,400.00</td>
						  </tr>
						</tbody>
				  </table>
				  <input type="submit" value="Save & Send" class="btn btn-primary" class="form-control" style="width:100%;"/>
				  </div>
				</div>
			</div>
			</form>
		  </div>
		</div>
	</div>
</div>


@endsection