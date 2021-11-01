@extends('admin.layouts.layout')
<body oncontextmenu="return false;">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial -->
      @include('admin.layouts.sidemenu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">

              <div class="offset-md-1 col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>   
                        <th colspan="2"></th>                       
                          <th>
                            <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#add_whitelist">Add IP</button>
                          </th>                  
                        </tr>
                      </thead>
                        <tr>
                          <th>S.NO</th>
                          <th>IP</th>
                          <th>Action</th>                  
                        </tr>
                      </thead>
                      <tbody>
                      @if($whitelist->count() == 0)  
                      <tr>
                        <td colspan="3"><h5 class="text-center">No whitlisted ip found..</h2></td>
                      </tr>   
                      @endif
                        @foreach($whitelist as $row)                   
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->ip}}</td>
                            <td>                            
                              <button type="button" class="btn btn-inverse-danger btn-icon" onclick="remove_ip({{$row->id}})"><i class="icon-trash"></i>
                              </button>
                            </td>
                          </tr>                        
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
          
        </div>
        <!-- content-wrapper ends -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

<!-- Modal -->
<div class="modal fade" id="add_whitelist" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">             

        <div class="form-group">
          <label>IP</label>
          <input type="text" class="form-control bsConIpt" id="ip" placeholder="127.0.0.1">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick='add_wlist()'>submit</button>
      </div>
    </div>
  </div>
</div>

  <!-- container-scroller -->
@include('admin.layouts.footer')

<script type="text/javascript">

  var add_url = "{{route('admin.add_ip')}}";
  var del_url = "{{route('admin.delete_ip')}}";

  function add_wlist(){

    $.ajax({
      headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: add_url,
      type: "POST",             
      data: {
          ip:$('#ip').val(),    
        },
        success: function(data) {
          show_msg('success','Ip added to whitelist..',true);
        }
      
    });
  }

  function remove_ip(id){
     
    $.ajax({
      headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: del_url,
      type: "POST",             
      data: {
          id:id,    
        },
      success: function(data) {
        show_msg('success','Ip removed from whitelist..',true);
      }
    });    
  }
 

</script>
</body>

</html>

