@extends('admin.layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card pr-3 pl-3 pt-3">
                    <div class="header">
                    	<button class="btn btn-primary" data-toggle="modal" data-target="#createSystem"><i class="now-ui-icons ui-1_simple-add"></i>&ensp;System</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            	<th width="25%">Name</th>
                            	<th width="25%">Description</th>
                                <th width="25%">Modules</th>
                            	<th width="25%">Actions</th>
                            </thead>
                            <tbody>
                                @foreach($systems as $system)
                                <tr>
                                    <td>{{$system->name}}</td>
                                    <td>{{$system->description}}</td>
                                    <td>@foreach($system->modules as $module)
                                        @if($loop->last)
                                        {{$module->name}}
                                        @else
                                        {{$module->name}},
                                        @endif
                                        @endforeach
                                    </td>
                                    <td><button class="btn btn-info btn-icon" title="Update" data-toggle="modal" data-target="#updateSystem{{$system->id}}"><i class="now-ui-icons design-2_ruler-pencil"></i></button> &ensp; <button class="btn btn-danger btn-icon" title="Remove" data-toggle="modal" data-target="#deleteSystem{{$system->id}}"><i class="now-ui-icons ui-1_simple-remove"></i></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createSystem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/system/update" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description..."></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Select Module</label>
                            <select name="module_id[]" class="selectpicker" data-style="btn btn-primary btn-round" multiple title="Select Module" data-size="7">
                                @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update System -->
@foreach($systems as $system)
<div class="modal fade" id="updateSystem{{$system->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/system/update" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$system->id}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$system->name}}" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description...">{{$system->description}}</textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Select Module</label>
                            <select name="module_id[]" class="selectpicker" data-style="btn btn-primary btn-round" multiple title="Select Module" data-size="7">
                                @foreach($modules as $module)
                                    @if($system->modules->contains('id',$module->id))
                                        <option selected value="{{$module->id}}">{{$module->name}}</option>
                                    @else
                                        <option value="{{$module->id}}">{{$module->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Delete Modal -->
@foreach($systems as $system)
<div class="modal fade" id="deleteSystem{{$system->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/delete" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$system->id}}">
                <input type="hidden" name="model" value="App\System">
                <input type="hidden" name="route_name" value="/backend/systems">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete <b><em>{{$system->name}}</em></b></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script type="text/javascript">
	$('#systems').addClass(' active ');
	$('#topText').text('Systems');
</script>
@endsection