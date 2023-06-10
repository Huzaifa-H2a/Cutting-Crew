@extends('admin/admin-template')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Working Hours Settings</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-7">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Working Hours</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{url('admin/working')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Monday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('monday1')}}" name="monday1" id="basic-default-fullname" required autofocus/>
                          @error('monday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('monday2')}}" name="monday2" id="basic-default-fullname" required/>
                          @error('monday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Tuesday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('tuesday1')}}" name="tuesday1" id="basic-default-fullname" required/>
                          @error('tuesday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('tuesday2')}}" name="tuesday2" id="basic-default-fullname" required/>
                          @error('tuesday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Wednesday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('wednesday1')}}" name="wednesday1" id="basic-default-fullname" required/>
                          @error('wednesday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('wednesday2')}}" name="wednesday2" id="basic-default-fullname" required/>
                          @error('wednesday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Thursday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('thursday1')}}" name="thursday1" id="basic-default-fullname" required/>
                          @error('thursday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('thursday2')}}" name="thursday2" id="basic-default-fullname" required/>
                          @error('thursday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Friday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('friday1')}}" name="friday1" id="basic-default-fullname" required/>
                          @error('friday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('friday2')}}" name="friday2" id="basic-default-fullname" required/>
                          @error('friday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Saturday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('saturday1')}}" name="saturday1" id="basic-default-fullname" required/>
                          @error('saturday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('saturday2')}}" name="saturday2" id="basic-default-fullname" required/>
                          @error('saturday2')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Sunday</label>
                          <input type="number" class="form-control mb-2" placeholder=From value="{{old('sunday1')}}" name="sunday1" id="basic-default-fullname" required/>
                          @error('sunday1')<span class="text-danger">{{$message}}</span>@enderror
                          <input type="number" class="form-control" placeholder=To value="{{old('sunday2')}}" name="sunday2" id="basic-default-fullname" required/>
                          @error('sunday2')<span class="text-danger">{{$message}}</span>@enderror
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