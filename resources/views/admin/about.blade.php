@extends('admin/admin-template')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">About Settings</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-7">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">About Us</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{url('admin/about')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Add Description</label>
                          <textarea class="form-control" value="" name="description" id="basic-default-fullname" required autofocus>{{$about[0]->description}}</textarea>
                          @error('description')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Add Experience</label>
                          <input type="number" class="form-control" value="{{$about[0]->experience}}" name="experience" id="basic-default-fullname" required/>
                          @error('experience')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Add Since Years</label>
                          <input type="number" class="form-control" value="{{$about[0]->since}}" name="since" id="basic-default-fullname" required/>
                          @error('since')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Add No. of Clients</label>
                          <input type="number" class="form-control" value="{{$about[0]->client}}" name="client" id="basic-default-fullname" required/>
                          @error('client')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Change Settings</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection