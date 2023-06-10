@extends('admin/admin-template')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Add Service</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-7">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Select Service Items</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{url('admin/add-service')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Service Name</label>
                          <input type="text" class="form-control" value="{{old('name')}}" name="name" id="basic-default-fullname" required autofocus/>
                          @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Service Description</label>
                          <input type="text" class="form-control" value="{{old('description')}}" name="description" id="basic-default-fullname" required/>
                          @error('description')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Service Price</label>
                          <input type="number" class="form-control" value="{{old('price')}}" name="price" id="basic-default-fullname" required/>
                          @error('price')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Select Logo</label>
                          <input type="file" class="form-control" value="{{old('logo')}}" name="logo" id="basic-default-fullname" required/>
                          @error('logo')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection