@extends('layouts.master')

@section('content')

<style>
	
</style>
	
	<script>
		$(document).ready(function(){
		
		});
	</script>

<div class="container bcontainer">
	<div class="row">
		<h1>Create an Invoice</h1>
		<div class="panel panel-default">
		  <div class="panel-body">
		  
			<div class="col-md-8 ">
				<fieldset class="form-group">
					<label for=""  >Recipient:</label>
					<h4>John Doe</h4>
				</fieldset>
				
				<fieldset class="form-group">
					<p>Invoice Items:</p>
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
						@foreach ($invoice_items as $item)
						  <tr>
							<td>1</td>
							<td>{{ $item->title }}</td>
							<td>{{ $item->description }}</td>
							<td>{{ $item->quantity }}</td>
							<td>{{ number_format($item->price, 2) }}</td>
						  </tr>
						 @endforeach
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
					<label for="invoiceId">Invoice ID:</label><h4>{{ $invoice->invoiceReference }}</h4>
				</fieldset>
				<div class="clearfix"></div>
				<fieldset class="form-group ">
					<label for="currency">Currency:</label>
					<h4>{{ $invoice->currency }}</h4>
				</fieldset>
				
				<div class="clearfix" ></div>
				
				<fieldset class="form-group">
					<label for="gatewayChooser">Available Gateways:</label>
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
				  <input type="submit" value="Pay &pound;2,400.00 Now" class="btn btn-primary" class="form-control" style="width:100%;"/>
				  </div>
				</div>
			</div>
		  </div>
		</div>
	</div>
</div>


@endsection