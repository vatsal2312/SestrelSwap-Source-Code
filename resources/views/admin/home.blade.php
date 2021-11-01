@extends('admin.layouts.layout')
<body oncontextmenu="return false;">
  <div class="container-scroller">
    @include('admin.layouts.navbar')
    <div class="container-fluid page-body-wrapper">
      
      @include('admin.layouts.sidemenu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">            
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Sestrel Balance(STL)</p>
                      <p class="fs-30 mb-2 sdtBal">0</p>
                      <p class="sdtVal"></p>
                      <button type="button" id="deposit_stl" class="btn btn-success btn-sm" data-toggle="modal" data-target="#deposit_token">Deposit</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Tether Balance(USDT)</p>
                      <p class="fs-30 mb-2 usdt_bal">0</p>                      
                      <p class="usdtVal"></p>
                      <button type="button" id="deposit_usdt" class="btn btn-success btn-sm" data-toggle="modal" data-target="#deposit_token">Deposit</button>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>     


          <div class="row">

              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.NO</th>
                          <th>Pair</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>                        
                        <tr>
                          <td>1</td>
                          <td>STL/USDT</td>
                          <td class="sdt_usdt">0</td>
                          <td>                            
                              <button type="button" class="btn btn-success btn-rounded btn-fw" data-toggle="modal" data-target="#update_token">Change Price </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>  
          
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
           
          </div>
        </footer>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Modal -->
<div class="modal fade" id="deposit_token" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deposit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <div class="form-group">
          <label>select Token</label>
          <select class="form-control form-control-sm" id="token" disabled="">
            <option value="" selected="">Select Token</option>
            <option value="stl">STL</option>
            <option value="usdt">USDT</option>
          </select>
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control bsConIpt" id="price" placeholder="0.0">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="adm_deposit" data-dismiss="modal">submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update_token" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Sestral Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">             

        <div class="form-group">
          <label>Price(USDT)</label>
          <input type="text" class="form-control bsConIpt" id="new_price" placeholder="0.0">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update_sestral">submit</button>
      </div>
    </div>
  </div>
</div>

@include('admin.layouts.footer')
<script>
  
    $(document).on('click',"#deposit_usdt",function(e) {
      $('#token').val('usdt');
    });

    $(document).on('click',"#deposit_stl",function(e) {
      $('#token').val('stl');
    });

</script>

</body>

</html>

