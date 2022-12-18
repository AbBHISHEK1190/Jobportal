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
                  <td>{{$data->job_type}}</td>
                  <td>{{$data->no_of_hire}}</td>
                  <td>
                 
                  <form action="{{ url('recruiter/jobstatus') }}" method="POST">
                  @if($data->status=='1')
                  <input type="hidden" name='jobid' value="{{$data->id}}">
                    <input type="hidden" name='status' value="0">
                    @else
                    <input type="hidden" name='jobid' value="{{$data->id}}">
                    <input type="hidden" name='status' value="1">
                    @endif
                  @csrf
                  @if($data->status=='1')
                  <button >Active
               </button>
               @else
               <button >Inactive
               </button>
               @endif
               
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