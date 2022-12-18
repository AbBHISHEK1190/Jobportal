@extends('layouts.admintemplate')
@section('content')  
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <p style="color:red">@if($errors->any())
    {{ implode('', $errors->all()) }}
@endif
  </p>
        <form action="{{url('iuser/jobprofile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ strtoupper(Request::segment(2)) }}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              <div class="form-group">
              @foreach($employeedetail as $empdata)
              @endforeach

                  <label>Date of Birth</label>
                  <input type="date" class="form-control select2" name="dob"  value="{{$empdata->dob}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" name="address" value="{{$empdata->address}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input class="form-control" name="city" value="{{$empdata->city}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input class="form-control" name="state" value="{{$empdata->state}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Pincode</label>
                  <input class="form-control" name="pincode" value="{{$empdata->pincode}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="number" class="form-control" name="mobile" value="{{$empdata->mobile}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="mail" class="form-control" name="email" value="{{$empdata->email}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Job Type</label>
                  <select class="form-control select2" name="job_type" style="width: 100%;">
                  <option>Select</option>
                    <option value="fulltime" {{$empdata->job_type == 'fulltime'  ? 'selected' : ''}}>Fulltime</option>
                    <option value="parttime" {{$empdata->job_type == 'parttime'  ? 'selected' : ''}}>Part Time</option>
                    <option value="freelancer" {{$empdata->job_type == 'freelancer'  ? 'selected' : ''}}>Freelancer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Employment Type</label>
                  <select class="form-control select2" name="employment_type" style="width: 100%;">
                  <option>Select</option>
                  @foreach($industry as $item)

                  <option value="{{$item->id}}" {{$empdata->employment_type == $item->id  ? 'selected' : ''}}>{{$item->industry_type}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Current Company</label>
                  <input type="text" class="form-control select2" name="current_company" value="{{$empdata->current_company}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Job Responsibility</label>
                  <input type="text" class="form-control select2" name="job_responsibility" value="{{$empdata->job_responsibility}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Highest Education</label>
                  <select class="form-control select2" name="highest_degree" style="width: 100%;">
                  <option>select</option>
                    <option value="X" {{$empdata->highest_degree == 'X'  ? 'selected' : ''}}>X</option>
                    <option value="XII" {{$empdata->highest_degree == 'XII'  ? 'selected' : ''}}>XII</option>
                    <option value="graduation" {{$empdata->highest_degree == 'graduation'  ? 'selected' : ''}}>Graduation</option>
                    <option value="postgraduation" {{$empdata->highest_degree == 'postgraduation'  ? 'selected' : ''}}>Post Graduation</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>University Name</label>
                  <input type="text" class="form-control select2" name="university_name" value="{{$empdata->university_name}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Number Of Experience</label>
                  <input type="number" class="form-control select2" name="number_of_experience" value="{{$empdata->number_of_experience}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Current Salary</label>
                  <input type="number" class="form-control select2" name="current_salary" value="{{$empdata->current_salary}}" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Upload  Cv</label>
                  <input type="file" class="form-control select2" name="cv_name" style="width: 100%;">
                </div>
                
              
                <!-- /.form-group -->
              
              </div>
            
            </div>
          
          </div>
        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
     


      </div>
    
    </section>
    @endsection