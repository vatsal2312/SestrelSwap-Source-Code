
  <!-- plugins:js --> 

<link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">  
  <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">

  <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <!-- <script src="{{ asset('template/js/off-canvas.js') }}"></script> -->
  <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('template/js/template.js') }}"></script>
  <!-- <script src="{{ asset('template/js/settings.js') }}"></script> -->
  <!-- endinject -->
 
 
 <script src="{{ asset('front/js/contract.js') }}"></script>
<script src="{{ asset('front/js/web3.min.js') }}"></script>
<script src="{{ asset('front/js/blockui.js') }}"></script>

<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>

<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('front/js/admin_tokencontract.js?v='.time()) }}"></script>

<style>
  .swal2-popup{
    font-size: 0.75rem;
  }
</style>

<script>

var path = "{{ asset('front/images/loader.gif') }}";
var url_pair = "{{ route('log_pair') }}";
var url_price = "{{ route('log_price') }}";

function block_ui(){
  $('div.container-scroller').block({ 
      message: '<h3><img src="'+path+'" style="width:75px;height:75px;">Processing</h3>',
      css: { border: '1px solid #a00'}
  });
}

function unblock_ui(){
  $('div.container-scroller').unblock();
}

function show_msg(status,msg,reload = false){
  Swal.fire({
      position: 'top', //top-end
      icon: status,
      title: msg,
      showConfirmButton: true,
      // timer: 1500
    }).then(function(isConfirm) {
          if (reload) {
            location.reload();
          }
        })
     
    if(status == 'error'){
      unblock_ui()
    }
  }

document.onkeydown = function(e) {

  if(event.keyCode == 123) {
    return false;
  }

  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
    return false;
  }

  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
    return false;
  }

  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
    return false;
  }

  if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
    return false;
  }

}

</script>