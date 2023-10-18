@extends('layout.app')
@section('content')
    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">AddEmployee Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AddEmployee Detail</li>
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
                <form action="{{route('employee.update',[$editData->id])}}" method="post" >
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name </label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="{{$editData->first_name}}"placeholder="Enter First Name" required>
                    </div>
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>

                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name </label>
                        <input type="text" class="form-control" name="last_name" id="last_name" value="{{$editData->last_name}}"placeholder="Enter Last Name" required>
                    </div>
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                <label for="company_id">Company:</label>
                <select name="company_id" id="company_id" required>
                <option value="">Select Company</option>

                    @foreach($companies as $company)

                    <option value="{{ $company->id }}" {{ $company->id == $editData->company_id ? 'selected' : '' }}>
                      {{ $company->name }}
                  </option>
                    @endforeach
                </select>

                </div>
                @error('company_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                </div>

                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Email </label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$editData->email}}"placeholder="Enter Email" required>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  
                </div>

              
                <div class="col-md-12">
                                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Phone Number </label>
                        <input type="phone" class="form-control" name="phone" id="phone" value="{{$editData->phone}}" placeholder="Enter Phone Number" required>
                    </div>
                    @error('phone')
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
