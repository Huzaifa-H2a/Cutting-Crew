@extends('admin/admin-template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
            <div class="col-md-10">
              <h4 class="fw-bold py-3 mb-4 ms-2">Our Barbers</h4>
            </div>
            <div class="col-md-2">
                <a href="{{url('admin/add-barber')}}" class="btn btn-primary mt-2">Add Barber</a>
            </div>
    </div>
              <div class="row">
                <div class="col-md-12">
                <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Active Barbers</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Barber Name</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($barbers as $barber)
                      <tr>
                        <td>{{$barber["id"]}}</td>
                        <td>{{$barber["name"]}}</td>
                        <td>{{$barber["designation"]}}</td>
                        <td>{{$barber["image"]}}</td>
                        <td>{{date('d-m-Y', strtotime($barber["created_at"]))}}</td>
                        <td><a href="{{url('/admin/edit-barber/' . $barber['id'])}}" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-edit-alt"></span></a>
                              <a href="{{url('/admin/delete-barber/' . $barber['id'])}}" class="btn rounded-pill btn-icon btn-danger">
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