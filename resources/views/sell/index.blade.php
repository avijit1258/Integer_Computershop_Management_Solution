@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		
		<div class="panel panel-primary">
			<form action="{{ url('/sells')}}" method="post" class="form-horizontal">
			<div class="panel-heading">
				sell Product
			</div>
			{{csrf_field()}}
			<div class="panel-body">

					<div id="product_select_list">
						<a href="javascript:;" onclick="AddMoreProduct()">ADD</a>
						<div id="product_select">
							<label>1</label>
							<label>Catagory</label>
							<select id="catagory_select" name="catagory_id">
								@foreach( $catagories as $catagory)
								{
								<option value={{$catagory->id}} > {{$catagory->name}}  </option> 
								}
							@endforeach
						</select>

						<label>Sub Catagory</label>
						<select id="sub_catagory_select" name="sub_catagory_id">
							@foreach($sub_catagories as $sub_catagory)
							{
							<option value={{$sub_catagory->id}} > {{$sub_catagory->name}}  </option>
						}
						@endforeach
					</select>

					<label>Product</label>
					<select id="product_select" name="product_id[]">
						@foreach($products as $product)
						{
						<option value={{$product->id}} > {{$product->model}}  </option>
					}
					@endforeach
				</select>

				<label>Quantity</label>
				<input type="double" name="quantity[]" placeholder="Quantity">
				<br>
				<label>Unit Sale Price</label>
				<input type="double" name="unit_sell_price[]" placeholder="Unit Sale Price">

			</div>
		</div>

		<div id="customer_info">
		<label>Customer Name</label>
		<input type="text" name="customer_name" placeholder="Customer Name">
		<label>Contact Number</label>
		<input type="text" name="contact_no" placeholder="Contact Number">
		<br>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address">
	</div>

	</div>
	
				<!-- <button type="submit" class = "btn btn-default"> <i class="fa fa-btn fa-plus"></i>Save</button>
			-->
			<input type="submit" name="submit" value="Add">

			<button onclick="myFunction()">Print Invoice</button>

		</form>

	</div>

</div>

</div>

<div id="product_sell_load_area" style="display: none">
	<br>
	<label>Catagory</label>
	<select id="catagory_select" name="catagory_id">
		@foreach( $catagories as $catagory)
		{
		<option value={{$catagory->id}} > {{$catagory->name}}  </option> 
	}
	@endforeach
</select>

<label>Sub Catagory</label>
<select id="sub_catagory_select" name="sub_catagory_id">
	@foreach($sub_catagories as $sub_catagory)
							{
							<option value={{$sub_catagory->id}} > {{$sub_catagory->name}}  </option>
						}
						@endforeach
</select>

<label>Product</label>
<select id="product_select" name="product_id[]">
	@foreach($products as $product)
						{
						<option value={{$product->id}} > {{$product->model}}  </option>
					}
					@endforeach

</select>

<label>Quantity</label>
<input type="double" name="quantity[]" placeholder="Quantity">
<br>
<label>Unit Sale Price</label>
<input type="double" name="unit_sell_price[]" placeholder="Unit Sale Price">


</div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript">
	var serial = 2;
	function AddMoreProduct() {
		var selectProduct = $('#product_sell_load_area').html();

		$('#product_select_list').append("<br><label>"+serial+"</label><br>"+selectProduct);
		serial = serial + 1;

	}		
	
	
</script>

@endsection

