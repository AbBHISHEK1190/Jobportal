@extends('layouts.admintemplate')
@section('content')  
<section class="content">

      <div class="container-fluid">
     
        <div class="column">
        @foreach($Joblist as $data)  
          <div class="col-sm">

            <!-- Profile Image -->
           
            <!-- /.card -->

            <!-- About Me Box -->
           
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$data->job_title}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                {{$data->minimum_education}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$data->job_location}}</p>

                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>

<p class="text-muted">{{$data->email}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Education</strong>

<p class="text-muted">{{$data->minimum_education}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Experience</strong>

<p class="text-muted">{{$data->level_of_exprerienc}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> No Of Hire</strong>

<p class="text-muted">{{$data->no_of_hire}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Minimum Budget</strong>

<p class="text-muted">{{$data->min_package}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Maximum Budget</strong>

<p class="text-muted">{{$data->max_package}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Extra Benefits is Available on job</strong>

<p class="text-muted">{{$data->any_benfits}}</p>

<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Contact Number</strong>

<p class="text-muted">{{$data->mobile}}</p>

<hr>

                <!-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p> -->

<!-- </hr> -->

                <strong><i class="far fa-file-alt mr-1"></i> Job Desc{{$data->all_applied}}</strong>

                <p class="text-muted">{{$data->job_responsibility}}</p>
</hr>

@php
$explode=explode(',',$data->all_applied);
@endphp
@if(in_array(Auth::user()->id,$explode))

<hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i></strong>

                <p class="text-muted"><strong>You have already Applied</strong></p>

</hr>
@else
<hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i></strong>

<a href="{{url('iuser/appliedjob',[$data->id])}}"><button  class="btn-sm">Apply</button>  </a>

</hr>
@endif
              </div>
             
              <!-- /.card-body -->
            </div>
           
            <!-- /.card -->
          
          </div>
          @endforeach
          <!-- /.col -->
       
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    @endsection