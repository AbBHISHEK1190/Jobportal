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
                  <th>Job Title</th>
                  <th>Job Location</th>
                  <th>Job Type</th>
                  <th>Total Hire</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alljoblst as $data)
                <tr>
                  <td>{{$data->job_title}}</td>
                  <td>{{$data->job_location}}
                  </td>
                  <td>{{$data->job_type}}
                  </td>
                  <td>{{$data->no_of_hire}}</td>
                  <td>
                 
               
               <form action="{{ url('recruiter/candiates_response',[$data->id])}}" method="POST">
                  @csrf
                  <button >See Candidate
               </button>
              
               
    </form>

                                 
                               
                  </td>
                </tr>
                @endforeach
            
                
                </tbody>
                <tfoot>
                <tr>
                <th>Job Title</th>
                  <th>Job Location</th>
                  <th>Job Type</th>
                  <th>Total Hire</th>
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