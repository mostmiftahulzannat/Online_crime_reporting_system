
@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Add New Role</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                {{-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/home">Home</a></li>
                  <li class="breadcrumb-item active">Roles</li>
                  <li class="breadcrumb-item active">Add Role</li>
                </ol> --}}
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm float-right" href="{{ route('roles.index') }}"> Back</a>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="content-form">

                          @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                  <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                                  </ul>
                              </div>
                          @endif


                          {{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!} --}}
<form action="{{ route('roles.store') }}" method="POST">
@csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
            {{-- {!! Form::text('name', null, array('placeholder' => 'Name','value'=>old('name'),'class' => 'form-control')) !!} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
            <label for="">
              <input type="checkbox" name="permission[]" value="{{ $value->id }}">{{ $value->name }}
            </label>
                {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label> --}}
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
      <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
    </div>
</div>
</form>
                          {{-- {!! Form::close() !!} --}}
                    </div>
                  </div>
                </div>
              </div>
        </div>
</div>

@endsection