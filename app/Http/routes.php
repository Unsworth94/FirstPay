<?php
	
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
		return view('welcome');
	});
		
	Route::get("/invoice/create", function () {
		return view('invoice.create');
	});
	
	Route::get("/invoice/view/{id}", function ($id) {
		$invoice = App\Invoices::where('invoiceReference', $id)->first();
		$invoiceItems = App\InvoiceItem::where('invoiceReference', $id)->get();
		return view('invoice.view', ['invoice' => $invoice, 'invoice_items' => $invoiceItems ]);
	});
	
	Route::post("/invoice/create", function(){
		$invoice = new App\Invoices;
		$invoice->gateways = Input::get('gateways');
		$invoice->invoiceReference = Input::get('invoiceId');
		$invoice->recipient_email = 'jd@mail.com';
		$invoice->user_id = 1;
		$invoice->subtotal = 100.00;
		$invoice->tax = 20.00;
		$invoice->total = 80.00;
		$invoice->currency = Input::get('currency');
		$invoice->save();
		
		foreach(Input::get('items') as $item) {
			$invoiceItem = new App\InvoiceItem;
			$invoiceItem->invoiceReference = Input::get('invoiceId');
			$invoiceItem->title = $item['title'];
			$invoiceItem->description = $item['description'];
			$invoiceItem->quantity = $item['quantity'];
			$invoiceItem->price = $item['price'];
			$invoiceItem->save();
		}
		
		return 'hi';
	});
	
//});