@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    	<button class="btn btn-primary btn-fill"><i class="ti-plus"></i> System</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            	<th width="25%">Name</th>
                            	<th width="35%">Description</th>
                            	<th width="25%">Actions</th>
                            </thead>
                            <tbody>
                                @foreach($systems as $system)
                                <td>{{$system->name}}</td>
                                <td>{{$system->description}}</td>
                                <td><button class="btn btn-primary btn-fill"><i class="ti-pencil"></i></button> &ensp; <button class="btn btn-danger btn-fill"><i class="ti-trash"></i></button></td>
                                @endforeach
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
	$('#systems').addClass(' active ');
	$('#topText').text('Systems');
</script>
@endsection