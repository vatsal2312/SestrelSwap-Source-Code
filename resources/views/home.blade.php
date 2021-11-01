<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Sestrel - Swap </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Favicons -->
		<link href="{{ asset('front/images/favicon.png') }}" rel="icon">
	
		<!-- Google Font -->
		<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->

		<!-- Css Links -->
		<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}"> 
		
		<!-- Js Links -->		

		<script src="{{ asset('front/js/jquery.min.js') }}"></script>
		<script src="{{ asset('front/js/popper.min.js') }}"></script>
		<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('front/js/custom.js') }}"></script>
	</head>	
	
	<body class="inPgBg" oncontextmenu="return false;">
		
		<header class="headerInr">
			<div class="container">			
				<nav class="navbar navbar-expand-lg px-0 hdrNav">
					<a class="navbar-brand py-1" href="#">
						<span class="logoWtx">
							<img src="{{ asset('front/images/logo.png') }} " alt="logo" />
						</span>
						<span class="logoObr">
							<img src="{{ asset('front/images/logo-brand.png') }}" alt="logo-brand" />
						</span>
					</a>					
					
					<div class="d-none d-lg-none mobileMenuToggle ml-3">
						<span class="mobNav">
							<i class="fas fa-bars"></i>
						</span>	
					</div>

					<div class="menuBar ml-auto">						
						<button type="button" class="btn btn-15738 btn-yellow wl_con" data-toggle="modal" data-target="#walCon">
							<span class="btnIc">
								<img src="{{ asset('front/images/icons/wallet.png') }}" alt="wallet" />
							</span>
							<span class="btnTx">
								Connect Wallet
							</span>
						</button>

						<button type="button" class="btn btn-15738 btn-yellow wl_logout">
								Logout
						</button>	

					</div>
				</nav>
			</div>
		</header>		
		
		<div class="inrPgCon">
			<div class="container">
				<div class="d-flex flex-column justify-content-center pgFlInr">
				
					<div class="spCont">
						<ul class="nav nav-pills swapTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link swapBuy active" data-toggle="pill" href="#buySwap" role="tab">
									<span class="navBtnIc">										 
										<img src="{{ asset('front/images/icons/buyIc.png') }}" alt="buyIc" />
									</span>
									<span class="navBtnTx">
										Buy
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link swapSell" data-toggle="pill" href="#sellSwap" role="tab">
									<span class="navBtnIc">
										<img src="{{ asset('front/images/icons/sellIc.png') }} " alt="sellIc" />
									</span>
									<span class="navBtnTx">
										Sell
									</span>
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="buySwap" role="tabpanel">
								<div class="swapBsCon">
									<form>
										<div class="d-flex align-items-center justify-content-between bsConHd">
											<div class="bsConHdLt">
												<h5>Buy</h5>
												<p>Trade tokens in an instant</p>
											</div>
											<!-- <div class="bsConHdRt">
												<span class="btnHst" role="button" data-toggle="modal" data-target="#hisTrans">
													<img src="{{ asset('front/images/icons/clock.png') }}" alt="clock" />
												</span>
											</div> -->
										</div>
										<div class="bsConBd">
											
											
											<div class="bsConFt bsConFtTo">
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol">
														<div class="bsConFtWh">
															From
														</div>
													</div>											
													<div class="bsConFtCol">
														<div class="bsConFtTkn">
															<span class="bsConCnIg">
																<img src="{{ asset('front/images/coins/usdt.png') }}" alt="usdt" />
															</span>
															<span class="bsConCnTx">
																USDT
															</span>
														</div>
													</div>
												</div>
												
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol bsConFtColIpt">
														<input type="number" min="0" id="buy_usdt" class="form-control bsConIpt" placeholder="0.0" autocomplete="off">
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtAmt">
															<span>Balance : </span>
															<span class="usdt_bal">0</span>
														</div>
													</div>
												</div>
											</div>
											

											<div class="bsConFt bsConFtFm">
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol">
														<div class="bsConFtWh">
															To
														</div>
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtTkn">
															<span class="bsConCnIg">
																<img src="{{ asset('front/images/coins/sestrel.png') }}" alt="sestrel" />
															</span>
															<span class="bsConCnTx">
																Sestrel
															</span>
														</div>
													</div>
												</div>
												
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol bsConFtColIpt">
														<input type="number" min="0" id="buy_sdt" class="form-control bsConIpt" placeholder="0.0" autocomplete="off">
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtAmt">
															<span>Balance : </span>
															<span class="sdtBal">0</span>
														</div>
													</div>
												</div>
											</div>
											
											<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
												<div class="bsConFtCol">
													<div class="bsConFtBal">
														<span>Gas Price :</span>
														<span>1.94 GWEI</span>
													</div>
												</div>
												<div class="bsConFtCol">
													<div class="bsConFtBal">
														<span>1 USDT =</span>
														<span class="sdt_val">0 Sestrel</span>
													</div>
												</div>
											</div>
											
											<div class="bsFrmSbm text-center">
												<button type="button" id="buy_button" class="btn btn-18042 btn-violet">
													Unlock Wallet
												</button>
											</div>										
										</div>
									</form>
								</div>
							</div>

							<div class="tab-pane fade" id="sellSwap" role="tabpanel">
								<div class="swapBsCon">
									<form>
										<div class="d-flex align-items-center justify-content-between bsConHd">
											<div class="bsConHdLt">
												<h5>Sell</h5>
												<p>Trade tokens in an instant</p>
											</div>
											<!-- <div class="bsConHdRt">
												<span class="btnHst" role="button" data-toggle="modal" data-target="#hisTrans">
													<img src="{{ asset('front/images/icons/clock.png') }}" alt="clock" />
												</span>
											</div> -->
										</div>
										<div class="bsConBd">										
											
											<div class="bsConFt bsConFtTo">
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol">
														<div class="bsConFtWh">
															From
														</div>
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtTkn">
															<span class="bsConCnIg">
																<img src="{{ asset('front/images/coins/sestrel.png') }}" alt="sestrel" />			
															</span>
															<span class="bsConCnTx">
																Sestrel
															</span>
														</div>
													</div>
												</div>
												
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol bsConFtColIpt">
														<input type="number" min="0" id="sell_sdt" class="form-control bsConIpt" placeholder="0.0" autocomplete="off">
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtAmt">
															<span>Balance : </span>
															<span class="sdtBal">0</span>
														</div>
													</div>
												</div>
											</div>
											
											<div class="bsConFt bsConFtFm">
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol">
														<div class="bsConFtWh">
															To
														</div>
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtTkn">
															<span class="bsConCnIg">
																<img src="{{ asset('front/images/coins/usdt.png') }}" alt="usdt" />
															</span>
															<span class="bsConCnTx">
																USDT
															</span>
														</div>
													</div>
												</div>
												
												<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
													<div class="bsConFtCol bsConFtColIpt">
														<input type="number" min="0" id="sell_usdt" class="form-control bsConIpt" placeholder="0.0" autocomplete="off">
													</div>
													<div class="bsConFtCol">
														<div class="bsConFtAmt">
															<span>Balance : </span>
															<span class="usdt_bal">0</span>
														</div>
													</div>
												</div>
											</div>
											
											<div class="d-flex flex-wrap align-items-center justify-content-between bsConFtRow">
												<div class="bsConFtCol">
													<div class="bsConFtBal">
														<span>Gas Price :</span>
														<span>1.94 GWEI</span>
													</div>
												</div>
												<div class="bsConFtCol">
													<div class="bsConFtBal">														
														<span> 1 Sestrel =</span>
														<span class="usdt_val">0 USDT</span>
													</div>
												</div>
											</div>
											
											<div class="bsFrmSbm text-center">
												<button type="button" id="sell_button" class="btn btn-18042 btn-violet">
													Unlock Wallet
												</button>
											</div>										
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<footer class="inrFt">
			<div class="container">
				<div class="inrFtCn">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 my-3">
							<div class="cpyRt text-center">Powered by Sestrel.</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		
		<div class="modal fade modalPrimary modalWal" id="walCon" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<h5 class="modal-title">Connect Wallet</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">x</span>
						</button>
					</div>
					<div class="modal-body pt-0">
						<div class="walCont">
							<div class="d-flex flex-wrap align-items-center justify-content-center walConBtnRow">							
								<button class="btn walConBtn connect_wallet_metamask">							
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/metaMask.png') }}" alt="metaMask" />
									</div>
									<div class="walConTx">
										Meta Mask
									</div>
								</button>
								
								<button class="btn walConBtn connect_wallet_walletconnect">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/walletConnect.png') }}" alt="walletConnect" />
									</div>
									<div class="walConTx">
										Wallet Connect
									</div>
								</button>
								
								<button class="btn walConBtn connect_wallet_trustwallet">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/trustWallet.png') }}" alt="trustWallet" />
									</div>
									<div class="walConTx">
										Trust Wallet
									</div>
								</button>								
								<button class="btn walConBtn connect_wallet_mathwallet">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/MathWallet.png') }}" alt="MathWallet" />
									</div>
									<div class="walConTx">
										MathWallet
									</div>
								</button>
								
								<button class="btn walConBtn connect_wallet_tokenpocket">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/TokenPocket.png') }}" alt="TokenPocket" />
									</div>
									<div class="walConTx">
										Token Pocket
									</div>
								</button>
								
								<!-- <button class="btn walConBtn connect_wallet_binancechain">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/BinanceChain.png') }}" alt="BinanceChain" />
									</div>
									<div class="walConTx">
										Binance Chain
									</div>
								</button> -->
								
								<button class="btn walConBtn connect_wallet_savepal">
									<div class="walConIg">
										<img src="{{ asset('front/images/wallets/SafePal.png') }}" alt="SafePal" />
									</div>
									<div class="walConTx">
										Safe Pal
									</div>
								</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="modal fade modalPrimary modalRecHis" id="hisTrans" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Recent History</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							x
						</button>
					</div>
					<div class="modal-body">
						<div class="hisCont">
							<p>Buy 23476283479348 Sestrel for 09.31 USDT</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="base_url" id="base_url" value="{{url('')}}">
        <input type="hidden" name="currentwalletAddress" id="currentwalletAddress" value="">
        <input type="hidden" name="sdtd_balance" id="sdtd_balance" value="">
        <input type="hidden" name="usdtd_balance" id="usdtd_balance" value="">
        <input type="hidden" name="sdtd_trade" id="sdtd_trade" value="">
        <input type="hidden" name="usdtd_trade" id="usdtd_trade" value="">

        <?php $urltab = Request::segment(1); ?>

<script src="{{ asset('front/js/contract.js') }}"></script>
<script src="{{ asset('front/js/web3.min.js') }}"></script>

<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>

<script src="{{ asset('front/js/blockui.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('front/js/tokencontract.js?v='.time()) }}"></script>


<style>
.swal2-popup {
  font-size: 0.75rem;
}

 /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>

<script type="text/javascript">
	var path = "{{ asset('front/images/loader.gif') }}";
// alert(path)
  function block_ui(){
	  $('body.inPgBg').block({ 
	      message: '<img src="'+path+'" style="width:75px;height:75px;" alt="Processing..">',
	      css: { border: '1px solid #a00'}
	  });
	}

	function unblock_ui(){
	  $('body.inPgBg').unblock();
	}


  function show_msg(status,msg){
    Swal.fire({
        position: 'center', //top-end
        icon: status,
        title: msg,
        showConfirmButton: true,
        timer: 2500
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



</body>	
	
</html>