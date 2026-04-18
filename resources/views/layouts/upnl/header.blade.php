<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/img/logo/eco.png">


	<!-- PAGE TITLE HERE -->
	<title>User Dashboard</title>

	<!-- FAVICONS ICON -->
	<!--<link rel="shortcut icon" type="image/png" href="https://starcodekh.github.io/Admin-Dashboard-Template-Bootstrap-5/images/favicon.png">-->
	<link href="{{asset('')}}users/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="{{asset('')}}users/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('')}}users/vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
	<link href="{{asset('')}}users/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" data-typography="poppins" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="" data-headerbg="" data-sidebar-style="full" data-sibebarbg="" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_15">

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">
		<style>
			/* === Default: Mobile First === */
			.logo-img {
				display: inline-block;
				/* Show logo on mobile */
			}

			.brand-title {
				display: none;
				/* Hide text on mobile */
			}

			/* === For Desktop (≥769px) === */
			@media (min-width: 769px) {
				.logo-img {
					display: none;
					/* Hide logo on desktop */
				}

				.brand-title {
					display: inline-block;
					/* Show text on desktop */
				}
			}
			.header-profile .nav-link {
    position: relative;
    background: #202020;
    border-radius: 3rem;
    padding: 0.1875rem;
}
@media only screen and (max-width: 87.5rem) {
    .side-bar-profile {
        display: block;
    }
}
.dlabnav .metismenu {
    display: flex
;
    flex-direction: column;
    padding-top: 0px;
}
.side-bar-profile .side-bar-profile-img:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    margin: -0.1875rem;
    border-radius: inherit;
    background: none;
    height: 56px;
    width: 56px;
    border-radius: 50px;
    border: 2px solid #5bb55f;
}
.header-profile .nav-link:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    margin: -0.1875rem;
    border-radius: inherit;
    background: linear-gradient(to right, #5b8445, #396a1b);
}
		</style>
		<!--**********************************
            Nav header start	
        ***********************************-->
		<div class="nav-header">
			<a href="{{route('user.dashboard')}}" class="brand-logo">
				<h2 class="logo-img">
					<img src="{{asset('')}}assets/img/logo/eco.png" width="60" height="60" style="margin-bottom: -10px" alt="">
				</h2>
				<div class="brand-title">
					<img src="{{asset('')}}assets/img/logo/ecovillage.png" width="150" height="60" style="margin-bottom: 10px" alt="">
				</div>
			</a>
			<div class="nav-control">
				<div class="hamburger" id="hamburgerToggle">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<!--**********************************
            Nav header end
        ***********************************-->



		<!--**********************************
            Header start
        ***********************************-->
		<div class="header border-bottom">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('assets/img/logo/eco.png')}}" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="{{route('user.profile')}}" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="{{route('user.ChangePass')}}" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Security </span>
									</a>
									<a href="{{route('logout')}}" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
			    <div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-3" >
						<div class="side-bar-profile-img">
							<img src="{{asset('assets/img/logo/eco.png')}}" alt="">
						</div>
						<div class="profile-info1">
							<h4 class="fs-18 font-w500">{{Auth::user()->name}}</h4>
							<span>ID : {{Auth::user()->username}}</span>
						</div>
						<div class="profile-button">
							<!--<i class="fas fa-caret-down scale5 text-light"></i>-->
						</div>
					</div>	
				
				</div>
				
				<ul class="metismenu" id="menu">
					<li><a class=" " href="{{route('user.dashboard')}}" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>


					</li>
				
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-wallet"></i>

							<span class="nav-text">Add Money</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.invest')}}">Deposit</a></li>
							<li><a href="{{route('user.DepositHistory')}}">Deposit History</a></li>


						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Activate Id</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.topup')}}">Topup</a></li>
							<li><a href="{{route('user.topupHistory')}}">Topup History</a></li>

						</ul>
					</li>


					@php
					$user = Auth::user();
					@endphp
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Profit Summary</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.farming-income')}}">Farming Income</a></li>
							@if($user->event == 1)

							<li><a href="{{route('user.referral-bonus')}}">Referral Bonus</a></li>
							<li><a href="{{route('user.reccuring-bonus')}}">Recurring Bonus</a></li>
							<li><a href="{{route('user.reward-bonus')}}">Reward Bonus</a></li>
							<li><a href="{{route('user.contract-bonus')}}">Contract Profit Bonus</a></li>
							<li><a href="{{route('user.samerankprofit-bonus')}}">Same Rank Profit Sharing</a></li> 
							<li><a href="{{route('user.salary-bonus')}}">Salary Bonus</a></li>
							@endif

						</ul>
					</li>
					@if($user->event == 1)

					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">My Networks</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.referral-team')}}">Direct Team</a></li>
							<li><a href="{{route('user.level-team')}}">Level Team</a></li>
							<li><a href="{{ route('user.tree-view', ['id' => Crypt::encrypt(Auth::user()->username)]) }}">Tree Team</a></li>

						</ul>
					</li>

					@endif

					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Support Ticket</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.ticket')}}">Create New</a></li>
							<li><a href="{{route('user.ticket-status')}}">My Ticket</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-coins"></i>
							<span class="nav-text">Withdraw</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.paymentledger')}}">Withdraw Ledger</a></li>
							<li><a href="{{route('user.Withdraw-History')}}">Withdraw History</a></li>
                            <!--<li><a href="{{route('user.ecopay')}}">Transfer Ecopay</a></li>-->
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-cog"></i>
							<span class="nav-text">Setting</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{route('user.profile')}}">Profile</a></li>
							<li><a href="{{route('user.BankDetail')}}">Bank Detail</a></li>

							<li><a href="{{route('user.ChangePass')}}">Security</a></li>
							<li><a href="{{route('user.addkyc')}}">Add Kyc</a></li>
						</ul>
					</li>
					<li><a class=" " href="{{route('logout')}}" aria-expanded="false">
							<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
								<polyline points="16 17 21 12 16 7"></polyline>
								<line x1="21" y1="12" x2="9" y2="12"></line>
							</svg>
							<span class="nav-text">Logout</span>
						</a>


					</li>
				</ul>

				<div class="copyright">
					<p><strong>Ecovillages</strong> © 2025 All Rights Reserved</p>
					<p class="fs-12">Made with by<span class="heart"></span></p>
				</div>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const hamburger = document.getElementById("hamburgerToggle");
				const logoImg = document.querySelector(".logo-img");
				const brandTitle = document.querySelector(".brand-title");

				hamburger.addEventListener("click", function() {
					this.classList.toggle("active");

					const isMobile = window.innerWidth <= 768;
					const isActive = this.classList.contains("active");

					// Mobile: keep default (text already hidden, logo already visible)
					if (isMobile) {
						return; // Do nothing — mobile handled by CSS
					}

					// Desktop: toggle manually
					if (isActive) {
						logoImg.style.display = "block";
						brandTitle.style.display = "none";
					} else {
						logoImg.style.display = "none";
						brandTitle.style.display = "block";
					}
				});
			});
		</script>