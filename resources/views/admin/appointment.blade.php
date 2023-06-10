@extends('admin/admin-template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
            <div class="col-md-9">
              <h4 class="fw-bold py-3 mb-4 ms-2">Appointments</h4>
            </div>
    </div>
              <div class="row">
                <div class="col-md-12">
                <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Appointments List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($appointments as $appointment)
                      <tr>
                        <td>{{$appointment["id"]}}</td>
                        <td>{{$appointment["name"]}}</td>
                        <td>{{$appointment["phone"]}}</td>
                        <td>{{$appointment["email"]}}</td>
                        <td>{{$appointment["service"]}}</td>
                        <td>{{$appointment["date"]}}</td>
                        <td>{{$appointment["time"]}}</td>
                        <td>{{date('d-m-Y', strtotime($appointment["created_at"]))}}</td>
                        <td><a href="{{url('/admin/approve-appointment/' . $appointment['id'])}}" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-check"></span></a>
                              <a href="{{url('/admin/reject-appointment/' . $appointment['id'])}}" class="btn rounded-pill btn-icon btn-danger">
                              <span class="tf-icons bx bx-x"></span></a>
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