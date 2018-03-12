@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    	<button class="btn btn-primary btn-fill"><i class="ti-plus"></i> Module</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            	<th width="25%">Name</th>
                            	<th width="35%">Description</th>
                            	<th class="text-right" width="15%">Price</th>
                            	<th width="25%">Actions</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	$('#modules').addClass(' active ');
	$('#topText').text('Modules');
</script>
@endsection