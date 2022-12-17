@extends('layouts.admintemplate')
@section('content')  
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <p style="color:red">@if($errors->any())
    {{ implode('', $errors->all()) }}
@endif
  </p>
        <form action="{{url('recruiter/profile')}}" method="post">
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
                  <label>Company Name</label>
                  <input class="form-control select2" name="company_name" style="width: 100%;">
                </div>
                <div class="form-group">
                  <label>Total Employee</label>
                  <select class="form-control select2" name="total_employee" style="width: 100%;">
                    <option value="0-49">0-49</option>
                    <option value="50-100">50-100</option>
                    <option value="100-200">100-200</option>
                    <option value="200-500">200-500</option>
                    <option value="500-1000">500-1000</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Are You hiring manager</label>
                  <select class="form-control select2" name="hiring_manager" style="width: 100%;">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>How heard about this site</label>
                  <select class="form-control select2" name="heard_source" style="width: 100%;">
                    <option value="newspaper">Newspaper</option>
                    <option value="linkedin">Linkedin</option>
                    <option value="other">other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input class="form-control" name="mobile" style="width: 100%;">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Industry Type</label>
                  <select class="form-control select2" name="industry_type" style="width: 100%;">
                  @foreach($industry as $item)

                  <option value="{{$item->id}}">{{$item->industry_type}}</option>
                    @endforeach
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Company Desc</label>
                  <input class="form-control" name="company_desc" style="width: 100%;">
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