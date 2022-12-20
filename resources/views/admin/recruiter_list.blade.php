@extends('layouts.admintemplate')
@section('content')  

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ strtoupper(Request::segment(2)) }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recruiter as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}
                  </td>
                  <td>{{$data->mobile}}</td>
                  <td>{{$data->city}}</td>
                  <td>
                 
                  <form action="{{ url('recruiter/candidadetail',[$data->id])}}" method="POST">
                  @csrf
                  <button >Watch
               </button>
             
               
    </form>

                                 
                               
                  </td>
                </tr>
                @endforeach
            
                
                </tbody>
                <tfoot>
                <tr>
                <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>City</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  @endsection