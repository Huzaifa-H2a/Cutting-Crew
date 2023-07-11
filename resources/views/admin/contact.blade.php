@extends('admin/admin-template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
            <div class="col-md-9">
              <h4 class="fw-bold py-3 mb-4 ms-2">Contacts</h4>
            </div>
    </div>
              <div class="row">
                <div class="col-md-12">
                <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Contacts List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Contact Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($contacts as $contact)
                      <tr>
                        <td>{{$contact["id"]}}</td>
                        <td>{{$contact["name"]}}</td>
                        <td>{{$contact["email"]}}</td>
                        <td>{{$contact["subject"]}}</td>
                        <td>{{$contact["message"]}}</td>
                        <td>{{date('d-m-Y', strtotime($contact["created_at"]))}}</td>
                        <td>{{$contact["status"]}}</td>
                        <td>@if ($contact["status"] == 'Pending')<a href="{{url('/admin/resolve-contact/' . $contact['id'])}}" class="btn rounded-pill btn-icon btn-primary">
                              <span class="tf-icons bx bx-check"></span></a>
                              @endif
                              <a href="{{url('/admin/delete-contact/' . $contact['id'])}}" class="btn rounded-pill btn-icon btn-danger">
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