@extends('admin/admin-template')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Basic Settings</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-md-7">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Template</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{url('admin/settings')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Website Name</label>
                          <input type="text" class="form-control" value="{{isset($settings->name)}}" name="website_name" id="basic-default-fullname" required autofocus/>
                          @error('website_name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Website Title</label>
                          <input type="text" class="form-control" value="{{old('website_title')}}" name="website_title" id="basic-default-fullname" required/>
                          @error('website_title')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Address</label>
                          <input type="text" class="form-control" value="{{old('website_address')}}" name="website_address" id="basic-default-fullname" required/>
                          @error('website_address')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Phone</label>
                          <input type="number" class="form-control" value="{{old('website_phone')}}" name="website_phone" id="basic-default-fullname" required/>
                          @error('website_phone')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Email</label>
                          <input type="email" class="form-control" value="{{old('website_email')}}" name="website_email" id="basic-default-fullname" required/>
                          @error('website_email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Twitter Link</label>
                          <input type="text" class="form-control" value="{{old('twitter_link')}}" name="twitter_link" id="basic-default-fullname" required/>
                          @error('twitter_link')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Facebook Link</label>
                          <input type="text" class="form-control" value="{{old('facebook_link')}}" name="facebook_link" id="basic-default-fullname" required/>
                          @error('facebook_link')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Youtube Link</label>
                          <input type="text" class="form-control" value="{{old('youtube_link')}}" name="youtube_link" id="basic-default-fullname" required/>
                          @error('youtube_link')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Linkedin Link</label>
                          <input type="text" class="form-control" value="{{old('linkedin_link')}}" name="linkedin_link" id="basic-default-fullname" required/>
                          @error('linkedin_link')<span class="text-danger">{{$message}}</span>@enderror
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