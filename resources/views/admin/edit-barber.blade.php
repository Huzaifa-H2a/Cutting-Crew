@extends('admin/admin-template')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Edit Barber</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-7">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Select Barber Items</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{url('/admin/edit-barber/'.$barber['id'])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Barber Name</label>
                          <input type="text" class="form-control" value="{{$barber['name']}}" name="name" id="basic-default-fullname" required autofocus/>
                          @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Barber Designation</label>
                          <input type="text" class="form-control" value="{{$barber['designation']}}" name="designation" id="basic-default-fullname" required/>
                          @error('designation')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Select Image</label>
                          <input type="file" class="form-control" value="{{$barber['image']}}" name="image" id="basic-default-fullname" required/>
                          @error('image')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Barber</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection