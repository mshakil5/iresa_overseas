@extends('admin.layouts.admin')

@section('content')





    <!-- Main content -->
    <section class="content mt-3" id="addThisFormContainer">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add new Customer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="ermsg"></div>
                <form id="createThisForm">
                  @csrf
                  <input type="hidden" class="form-control" id="codeid" name="codeid">
                  <div class="row">

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>


                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" class="form-control @error('father_name') is-invalid @enderror" id="father_name" name="father_name" value="{{ old('father_name') }}" autofocus>
                        @error('father_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Mother Name</label>
                        <input type="text" class="form-control @error('mother_name') is-invalid @enderror" id="mother_name" name="mother_name" value="{{ old('mother_name') }}" autofocus>
                        @error('mother_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Mobile Number*</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Additional Mobile Number</label>
                        <input type="number" class="form-control @error('additional_phone') is-invalid @enderror" id="additional_phone" name="additional_phone" value="{{ old('additional_phone') }}" autofocus>
                        @error('additional_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Agent Customer Name</label>
                        <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror" required>
                          <option value="">Select</option>
                          @foreach ($agents as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" autofocus>
                        @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Gender</label>
                        <select  class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                          <option value="">Please Select</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>


                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Trade</label>
                        <input type="text" class="form-control @error('trade') is-invalid @enderror" id="trade" name="trade">
                        @error('trade')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>NID</label>
                        <input type="number" class="form-control @error('nid') is-invalid @enderror" id="nid" name="nid" value="{{ old('nid') }}" autofocus>
                        @error('nid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" id="country_id" name="country_id">
                          <option value="">Select</option>
                          @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                          @endforeach
                        </select>
                        @error('country_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Blood Group</label>
                        <input type="text" class="form-control @error('blood_group') is-invalid @enderror" id="blood_group" name="blood_group">
                        @error('blood_group')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Passport Number</label>
                        <input type="text" class="form-control @error('passport_number') is-invalid @enderror" id="passport_number" name="passport_number">
                        @error('passport_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Passport Issue Date</label>
                        <input type="date" class="form-control @error('passport_issue_date') is-invalid @enderror" id="passport_issue_date" name="passport_issue_date">
                        @error('passport_issue_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Passport Expired Date</label>
                        <input type="date" class="form-control @error('passport_exp_date') is-invalid @enderror" id="passport_exp_date" name="passport_exp_date">
                        @error('passport_exp_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Work Permit Date</label>
                        <input type="date" class="form-control @error('work_permit_date') is-invalid @enderror" id="work_permit_date" name="work_permit_date">
                        @error('work_permit_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Present Address</label>
                        <input type="text" class="form-control @error('present_address') is-invalid @enderror" id="present_address" name="present_address">
                        @error('present_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Payable Amount</label>
                        <input type="number" class="form-control @error('payable_amount') is-invalid @enderror" id="payable_amount" name="payable_amount">
                        @error('payable_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                   

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Police Clearance Date</label>
                        <input type="date" class="form-control @error('police_clearance_date') is-invalid @enderror" id="police_clearance_date" name="police_clearance_date">
                        @error('police_clearance_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>


                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Medical Test Date</label>
                        <input type="date" class="form-control @error('medical_test_date') is-invalid @enderror" id="medical_test_date" name="medical_test_date">
                        @error('medical_test_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Medical Test Expired Date</label>
                        <input type="date" class="form-control @error('medical_test_exp_date') is-invalid @enderror" id="medical_test_exp_date" name="medical_test_exp_date">
                        @error('medical_test_exp_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Medical Report Submit Date</label>
                        <input type="date" class="form-control @error('medical_report_submit_date') is-invalid @enderror" id="medical_report_submit_date" name="medical_report_submit_date">
                        @error('medical_report_submit_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-12">
                      <div class="card card-outline card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Permanent Address :</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                          
                          <div class="row">


                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Division</label>
                                <input type="text" class="form-control @error('division') is-invalid @enderror" id="division" name="division">
                                @error('division')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>District</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror" id="district" name="district">
                                @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Upozela</label>
                                <input type="text" class="form-control @error('upozela') is-invalid @enderror" id="upozela" name="upozela">
                                @error('upozela')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label>Post Office</label>
                                <input type="text" class="form-control @error('post_office') is-invalid @enderror" id="post_office" name="post_office">
                                @error('post_office')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          


                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    
                  </div>

                  
                  
                </form>
              </div>

              
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" id="addBtn" class="btn btn-secondary" value="Create">Create</button>
                <button type="submit" id="FormCloseBtn" class="btn btn-default">Cancel</button>
              </div>
              <!-- /.card-footer -->
              <!-- /.card-body -->
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    


@endsection
@section('script')



<script>
  $(document).ready(function () {
      //header for csrf-token is must in laravel
      $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
      //
      var url = "{{URL::to('/admin/business-partner')}}";
      // console.log(url);
      $("#addBtn").click(function(){
      //   alert("#addBtn");
          if($(this).val() == 'Create') {
              var form_data = new FormData();
              form_data.append("name", $("#name").val());
              form_data.append("balance", $("#balance").val());
              form_data.append("phone", $("#phone").val());
              form_data.append("business_name", $("#business_name").val());
              form_data.append("address", $("#address").val());
              
              $.ajax({
                url: url,
                method: "POST",
                contentType: false,
                processData: false,
                data:form_data,
                success: function (d) {
                    if (d.status == 303) {
                        $(".ermsg").html(d.message);
                    }else if(d.status == 300){

                      $(function() {
                          var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                          });
                          Toast.fire({
                            icon: 'success',
                            title: 'Data create successfully.'
                          });
                        });
                      window.setTimeout(function(){location.reload()},2000)
                    }
                },
                error: function (d) {
                    console.log(d);
                }
            });
          }
          //create  end

      });

  });
</script>
@endsection