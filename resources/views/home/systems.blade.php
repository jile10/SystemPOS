@extends('home.layouts.master')
@section('content')
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					@foreach($systems as $system)
					<div class="col-lg-4">
						<div class="card card-pricing ">
							<h2 class="card-category">{{$system->name}}</h2>
							<div class="card-body">
								<ul>
									<li>{{$system->description}}</li>
									<li>
										<select name="module_id[]" id="module{{$system->id}}" class="select2 form-control" multiple>
			                                @foreach($system->modules as $module)
			                                <option value="{{$module->id}}">{{$module->name}} - PHP {{number_format($module->price)}}</option>
			                                @endforeach
			                            </select>
			                        </li>
								</ul>
							</div>
							<div class="card-footer">
								<button id="button{{$system->id}}" onclick="addtoCart({{$system}})" class="btn btn-round btn-primary">Add to Cart</button>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('.select2').select2({
    	placeholder: 'Select Module',
    });

    @if(session()->has('cart'))
    	@foreach(session('cart') as $cart)
        	$('#button{{$cart["id"]}}').attr('disabled',true);
        	$('#module{{$cart["id"]}}').attr('disabled',true);
    	@endforeach
    @endif
});

function addtoCart(system)
{
	$.ajax({
        type:'get',
        url:'/addtocart',
        data:{'id':system.id,'module_id':$('#module'+system.id).val()},
        success:function(data){
        	$('#button'+system.id).attr('disabled',true);
        	$('#module'+system.id).attr('disabled',true);
        },
        error:function(){
        }
    });
}
</script>
@endsection

