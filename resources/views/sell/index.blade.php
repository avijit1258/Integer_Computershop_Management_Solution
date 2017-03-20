@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		
		<div class="panel panel-default">
			
			<div class="panel-heading">
				Sell Product
			</div>

			<div class="panel-body">
			<form>
				<div id="product_select_list">
					<a href="javascript:;" onclick="AddMoreProduct()">ADD</a>
					<div id="product_select">
					<label>1</label>
					<label>Catagory</label>
					<select id="catagory_select1" name="catagory_id">
						@foreach( $catagories as $catagory)
                                {
                                <option value={{$catagory->id}} > {{$catagory->name}}  </option> 
                                }
                                @endforeach
					</select>

					<label>Sub Catagory</label>
					<select id="sub_catagory_select" name="sub_catagory_id">
						
					</select>

					<label>Product</label>
					<select id="product_select" name="product_id[]">
						
					</select>

					<label>Quantity</label>
					<input type="double" name="quantity[]" placeholder="Quantity">
					<br>
					<label>Unit Sale Price</label>
					<input type="double" name="unit_sale_price[]" placeholder="Unit Sale Price">

					</div>
				</div>

				</div>
				<div id="customer_info">
					<label>Customer Name</label>
					<input type="text" name="customer_name" placeholder="Customer Name">
					<label>Contact Number</label>
					<input type="text" name="contant_no" placeholder="Contact Number">
					<br>
					<label>Address</label>
					<input type="text" name="address" placeholder="Address">
				</div>
				<button type="submit" class = "btn btn-default"> <i class="fa fa-btn fa-plus"></i>Save</button>

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
						
					</select>

					<label>Product</label>
					<select id="product_select" name="product_id[]">
						
					</select>

					<label>Quantity</label>
					<input type="double" name="quantity[]" placeholder="Quantity">
					<br>
					<label>Unit Sale Price</label>
					<input type="double" name="unit_sale_price[]" placeholder="Unit Sale Price">


</div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript">
	var serial = 2;
	function AddMoreProduct() {
		var selectProduct = $('#product_sell_load_area').html();

		$('#product_select_list').append("<br><label>"+serial+"</label><br>"+selectProduct);
		serial = serial + 1;
	}		
	
	$('#catagory_select1').change(function()
		{
			var catagory = $(this).val();
			alert('hello i am on');
			$.ajax(
			{
				type : 'post',
				url : '/subcatagories_of_catagory/'+catagory,
				sucess:function(data)
				{
				var Data = " ";

				for(var i = 1; i <= data.length ; i++)
				{
					Data += "<option name='sub_catagory_id' value='"+data[i].id+"'>+'"data[i].name"'+</option>";
				}
				$('#sub_catagory_select').html(data);	
				}
				
			});
	});
</script>
@endsection

