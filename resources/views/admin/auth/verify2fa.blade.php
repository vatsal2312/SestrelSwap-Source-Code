<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sestral Swap Admin</title>
  <!-- plugins:css -->   
  <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   
  <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" />

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="../../images/logo.svg" alt="logo"> -->
              </div>
              <h4>Verify 2FA</h4>
              <h6 class="font-weight-light">Enter 2FA key to continue.</h6>
              <form class="pt-3" id="login_form">
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="2FA Key">
                </div>
                
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Verify</button> 
                </div>
                 
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js --> 
  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('template/js/template.js') }}"></script>
  <script src="{{ asset('template/js/settings.js') }}"></script>
  <script src="{{ asset('admin/validate.js') }}"></script>
  <!-- endinject -->

<script>
  
        $('#login_form').validate({
        ignore:"",
        rules:{         
          password : {
            required : true
          },
        },
        submitHandler:(form,e)=>{
          e.preventDefault();
          $('.loader').fadeIn();
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'{{route("admin.verify_2fa")}}',
            data:$(form).serialize(),
            success:(res)=>{             
              try {
                var obj = $.parseJSON(res);
                $('.loader').fadeOut('slow');
                  if(obj.status == true && obj.message == 'success'){
                    location.href='dashboard';
                  }else if(obj.status == true && obj.message == 'failed'){
                    alert('incorrect 2fa key');
                  }
                  else if(obj.status == 'expired' && obj.message == 'failed'){
                    location.href='login';
                  }
                }catch (error) {
                  // location.reload();
                }
              } 
            })
        }
      })

</script>

</body>

</html>
