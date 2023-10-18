@extends('layout.app')
@section('content')
    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">AddCompany Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddCompany Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.card -->

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
              <!-- form start -->
                <form action="{{route('company.update',[$edit->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Name </label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}"placeholder="Enter Name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>

                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Email </label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$edit->email}}"placeholder="Enter Email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>

                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Logo </label>
                        <input type="file" class="form-control" name="logo" id="logo" value="{{$edit->logo}}" >
                    </div>
                    @error('logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img src="{{ asset('images/' . $edit->logo) }}" width="100" height="100">
                  
                </div>
                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Website </label>
                        <input type="url" class="form-control" name="website" id="website" value="{{$edit->website}}" placeholder="Enter Website Url">
                    </div>
                    @error('website')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>





                        </div>


                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    
                </form>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
