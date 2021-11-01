@extends('admin.layouts.layout')
<body oncontextmenu="return false;">
  <div class="container-scroller">
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      @include('admin.layouts.sidemenu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">            
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="offset-md-3 col-md-6 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      @if(Auth::user()->bool_2fa_status)
                       <p class="fs-30">Disable 2FA</p>
                        <p class="mb-2">Click Disable and input the key generated in your 2FA mobile app </p>
                        <div class="offset-md-4">
                          <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#enable2fa">Disable</button>
                        </div>
                        @else
                        <p class="fs-30">Enable 2FA</p>
                        <p class="mb-2">Open up your 2FA mobile app and scan the following QR barcode:</p>
                        <br />
                        <div class="offset-md-3 col-md-9">
                          <img alt="Image of QR barcode" src="{{ $image }}" />
                        </div>
                      <br />
                      If your 2FA mobile app does not support QR barcodes, 
                      enter in the following number: <code>{{ $secret }}</code>
                      <br><br>
                        <div class="offset-md-4">
                          <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#enable2fa">Enable</button>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>                
              </div>              
            </div>
          </div> 
          
        </div>
        <!-- content-wrapper ends -->

        <div class="modal fade" id="enable2fa" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Verify 2FA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="verify_mfa">
              <div class="modal-body">                                 
                
                <div class="form-group">
                  <label>Enter OTP</label>
                  <input type="text" class="form-control bsConIpt" name="otp" id="otp" placeholder="000000">
                </div>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" >submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- container-scroller -->

@include('admin.layouts.footer')
<script src="{{ asset('admin/validate.js') }}"></script>
<script type="text/javascript">
  
  function verify_2fa(){
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'{{route("admin.verify_2fa")}}',
        data:{
          tfa_sec:"{{$secret}}",
          password:$('#otp').val(),
          disable:"{{Auth::user()->bool_2fa_status == true ? 'true' : 'false'}}",
        },
        success:(res)=>{
          console.log(res)
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
      });
  }

      $('#verify_mfa').validate({
        ignore:"",
        rules:{         
          otp : {
            required : true
          },
        },
        submitHandler:(form,e)=>{
          e.preventDefault();
          verify_2fa();
        }
      })  

</script>

</body>

</html>

