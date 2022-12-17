@extends('layouts.admintemplate')
@section('content')  
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <p style="color:red">@if($errors->any())
    {{ implode('', $errors->all()) }}
@endif
  </p>
        <form action="{{url('recruiter/addjobs')}}" method="post">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

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
                  <label>Job Title</label>
                  <input class="form-control select2" name="job_title" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Job Location</label>
                  <input class="form-control select2" name="job_location" style="width: 100%;">
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
                  <label>No. of hire</label>
                  <input type="number" class="form-control select2" name="no_of_hire" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Minimum budget</label>
                  <input type="number" class="form-control select2" name="min_package" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Maximum budget</label>
                  <input type="number" class="form-control select2" name="max_package" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Extra Beneifts</label>
                  <select class="form-control select2" name="any_benfits" style="width: 100%;">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input class="form-control" name="mobile" style="width: 100%;">
                </div>
                
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" style="width: 100%;">
                </div>

                <div class="form-group">
                  <label>Job Responsibility</label>
                  <input class="form-control" name="job_responsibility" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Minimum Education</label>
                  <select class="form-control select2" name="minimum_education" style="width: 100%;">
                  <option>select</option>
                    <option value="X">X</option>
                    <option value="XII">XII</option>
                    <option value="graduation">Graduation</option>
                    <option value="postgraduation">Post Graduation</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Exprience level Type</label>
                  <select class="form-control select2" name="industry_type" style="width: 100%;">
                  <option>select</option>
                  <option value="fresher">Fresher</option>
                    <option value="midlevel">Mid level</option>
                    <option value="uppermidlevel">upper mid level</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Company Desc</label>
                  <input class="form-control" name="level_of_exprerienc" style="width: 100%;">
                </div>
              </div>
            
            </div>
          
          </div>
        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
     


      </div>
    
    </section>
    @endsection