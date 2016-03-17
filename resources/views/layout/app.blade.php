@extends('layouts.profile')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/addpermission') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Permission Name</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('disp_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Display Name</label>

                        <div class="col-md-6">
                            <input type="categ" class="form-control" name="disp_name"
                                   value="{{ old('disp_name') }}">

                            @if ($errors->has('disp_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('disp_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">

                            <input type="text" class="form-control" name="description"
                                   value="{{ old('description') }}">

                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                            div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add Permission
                                </button>
                            </div>
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection


