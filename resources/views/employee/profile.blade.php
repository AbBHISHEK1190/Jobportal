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
                  <label>Date of Birth</label>
                  <input type="date" class="form-control select2" name="dob" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" name="address" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input class="form-control" name="city" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input class="form-control" name="state" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Pincode</label>
                  <input class="form-control" name="pincode" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="number" class="form-control" name="mobile" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="mail" class="form-control" name="email" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Job Type</label>
                  <select class="form-control select2" name="job_type" style="width: 100%;">
                  <option>Select</option>
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Part Time</option>
                    <option value="freelancer">Freelancer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Current Company</label>
                  <input type="text" class="form-control select2" name="current_company" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Job Responsibility</label>
                  <input type="text" class="form-control select2" name="job_responsibility" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Highest Education</label>
                  <select class="form-control select2" name="highest_degree" style="width: 100%;">
                  <option>select</option>
                    <option value="X">X</option>
                    <option value="XII">XII</option>
                    <option value="graduation">Graduation</option>
                    <option value="postgraduation">Post Graduation</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>University Name</label>
                  <input type="text" class="form-control select2" name="university_name" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Number Of Experience</label>
                  <input type="number" class="form-control select2" name="number_of_experience" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Current Salary</label>
                  <input type="number" class="form-control select2" name="current_salary" style="width: 100%;">
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