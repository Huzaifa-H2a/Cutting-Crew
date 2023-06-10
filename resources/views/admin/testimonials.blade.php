@extends('admin/admin-template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
            <div class="col-md-9">
              <h4 class="fw-bold py-3 mb-4 ms-2">Clients Testimonials</h4>
            </div>
            <div class="col-md-3 m-0">
                <a href="{{url('admin/add-testimonial')}}" class="btn btn-primary mt-2">Add Testimonial</a>
            </div>
    </div>
              <div class="row">
                <div class="col-md-12">
                <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Testimonial List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Designation</th>
                        <th>Feedback</th>
                        <th>Image</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($testimonials as $testimonial)
                      <tr>
                        <td>{{$testimonial["id"]}}</td>
                        <td>{{$testimonial["name"]}}</td>
                        <td>{{$testimonial["designation"]}}</td>
                        <td>{{$testimonial["comment"]}}</td>
                        <td>{{$testimonial["image"]}}</td>
                        <td>{{date('d-m-Y', strtotime($testimonial["created_at"]))}}</td>
                        <td><a href="{{url('/admin/edit-testimonial/' . $testimonial['id'])}}" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-edit-alt"></span></a>
                              <a href="{{url('/admin/delete-testimonial/' . $testimonial['id'])}}" class="btn rounded-pill btn-icon btn-danger">
                              <span class="tf-icons bx bx-trash"></span></a>
                            </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
</div>
              </div>
</div>

@endsection