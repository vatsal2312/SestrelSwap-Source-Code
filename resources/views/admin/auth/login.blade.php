<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sestral Swap Admin</title>
  
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
   
  <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">

  <link rel="stylesheet" type="text/css" href="{{asset('admin/patternlock.min.css')}}">
 
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
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" id="login_form">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">              

                    <svg class="patternlock" id="lock" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="background-color: #62aedb;">
                      <g class="lock-actives"></g>
                      <g class="lock-lines"></g>
                      <g class="lock-dots">
                          <circle cx="20" cy="20" r="2"/>
                          <circle cx="50" cy="20" r="2"/>
                          <circle cx="80" cy="20" r="2"/>

                          <circle cx="20" cy="50" r="2"/>
                          <circle cx="50" cy="50" r="2"/>
                          <circle cx="80" cy="50" r="2"/>

                          <circle cx="20" cy="80" r="2"/>
                          <circle cx="50" cy="80" r="2"/>
                          <circle cx="80" cy="80" r="2"/>
                      </g>
                  </svg>
                    <input type="hidden"  name="pattern_code" id="patterncode">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button> 
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>  --> 
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
  <script src="{{ asset('front/js/blockui.js') }}"></script>
  <script src="{{ asset('template/js/off-canvas.js') }}"></script>
  <script src="{{ asset('template/js/template.js') }}"></script>
  <script src="{{ asset('admin/patternlock.min.js') }}"></script>
  <script src="{{ asset('admin/validate.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- endinject -->

  <script>

    var lock = new PatternLock("#lock", {
    onPattern: function(pattern) {
    // Context is the pattern lock instance
    console.log(pattern)
    $('#patterncode').val(pattern);
   }
});

      $('#login_form').validate({
        ignore:"",
        rules:{
          email : {
            required : true,
            email:true
          },
          password : {
            required : true
          },
        },
        submitHandler:(form,e)=>{
          e.preventDefault();
          block_ui();
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'{{route("admin.login")}}',
            data:$(form).serialize(),
            success:(res)=>{
              try {

                var obj = $.parseJSON(res);
                unblock_ui()
                  if(obj.status == true && obj.message == 'tfa'){      
                    location.href='dashboard';
                  }
                  else if(obj.status == false){
                    show_msg('error',obj.message)
                  }
                }catch (error) {
                  location.reload();
                }
              },
              error: function () { 
                window.location.reload();
              }
            })
        }
      })

function show_msg(status,msg){
  Swal.fire({
      position: 'top', //top-end
      icon: status,
      title: msg,
      showConfirmButton: true,
      // timer: 1500
    })
  }
var path = "{{ asset('front/images/loader.gif') }}";
  function block_ui(){
  $('div.container-scroller').block({ 
      message: '<h3><img src="'+path+'" style="width:75px;height:75px;">Processing</h3>',
      css: { border: '1px solid #a00'}
  });
}

function unblock_ui(){
  $('div.container-scroller').unblock();
}

  </script>
</body>

</html>
