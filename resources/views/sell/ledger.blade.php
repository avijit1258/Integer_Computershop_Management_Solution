@extends('layouts.app')


@section('content')

	<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Report
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
		<thead>
			<tr>
				<td>Serial</td>
				<td>Voucher</td>
				<td>Product</td>
				<td>Sale Price</td>
				<td>Purchase Price</td>
				<td>Balance</td>
				<td>Customer</td>
			</tr>
		</thead>
		<tbody>
		@foreach($sells as $sell)
			<tr>
				<td>{{$sell->id}}</td>
				<td>INV-{{$sell->voucher_id}}</td>
				<td>{{\App\Product::find($sell->product_id)->model}}</td>
				<td>{{$sell->total_sell_price}}</td>
				<td>{{\App\Purchase::find($sell->product_id)->purchase_price * $sell->quantity}}</td>
				<td>{{$sell->total_sell_price - \App\Purchase::find($sell->product_id)->purchase_price * $sell->quantity}}  </td>
				<td>{{\App\Customer::where('contact_no',$sell->contact_no)->first()->name}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
			</div>
		</div>
	</div>
	
		
	</div>
	<div class="pagination">
                {!! $sells->links() !!}        
     </div>


@endsection