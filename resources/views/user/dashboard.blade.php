	<!--**********************************
            Content body start
        ***********************************-->
	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
<style>
    /* Beautiful green gradient background (top -> bottom) */
.tryal-gradient {
  background: linear-gradient(180deg, #34D399 0%, #0F8A43 45%, #0B5A2D 100%);
  border-radius: 18px;               /* keep your radius-15 feel */
  position: relative;
  overflow: hidden;
}

/* Soft highlight sheen across the top */
.tryal-gradient::before {
  content: "";
  position: absolute;
  inset: -20% -20% auto -20%;
  height: 50%;
  background: radial-gradient(90% 60% at 50% 0%, rgba(255,255,255,.22) 0%, rgba(255,255,255,0) 70%);
  pointer-events: none;
}

/* Avatar ring + glow */
.avatar-img {
    display: block;
    border-radius: 50%;
    background: #202020;
    border: 6px solid rgb(32 32 32);
    box-shadow: 0 10px 30px rgba(0, 0, 0, .25), 0 0 0 10px rgb(32 32 32) inset;
}

/* Subtle ring shadow wrapper */
.avatar-wrap { filter: drop-shadow(0 10px 20px rgba(0,0,0,.25)); }

/* Button glow + micro-interaction */
.btn-glow {
  box-shadow: 0 10px 20px rgba(255,255,255,.15), 0 2px 6px rgba(0,0,0,.25);
  transition: transform .15s ease, box-shadow .2s ease;
}
.btn-glow:hover {
  /*transform: translateY(-1px);*/
  background:#202020;
}

/* Tight letter spacing helper */
.letter-2 { letter-spacing: .12em; }

/* Tweak card spacing on small screens */
@media (max-width: 576px) {
  .profile-card { padding: 2rem !important; }
  .avatar-img { width: 120px; height: 120px; }
}

.btn-light {
    background: #202020;
    border-color: #c8c8c8;
    color: #fff;
}
.text-dark {
    color: #ffffff !important;
}
.bg-light {
    background-color: #202020 !important;
}
/* Card container (dark, rounded, elegant) */
.income-card {
  background: #111;                 /* deep charcoal */
  border-radius: 18px;
}

/* Table base */
.income-table {
  color: #e5e7eb;                   /* light gray on dark bg */
}
.income-table thead th {
  font-weight: 600;
  color: #cbd5e1;
  border: 0;
  padding: 0.75rem 1.25rem;
  text-transform: none;
}
.income-table tbody td,
.income-table tfoot td {
  padding: 1rem 1.25rem;
  border-color: rgba(255,255,255,.06) !important;
}

/* Hover and zebra effect */
.income-table tbody tr:hover {
  background: rgba(255,255,255,.035);
}

/* Title text in first column */
.row-title {
  vertical-align: middle;
  font-weight: 500;
  color: #f3f4f6;
}

/* Small circle avatars */
.avatar-32 {
  width: 34px; height: 34px;
  border-radius: 50%;
  object-fit: cover;
  box-shadow: 0 2px 8px rgba(0,0,0,.35);
  background: #e5e7eb;
  display: inline-block;
  vertical-align: middle;
}

/* Numeric column: tabular digits for perfect alignment */
.money, .total-amount {
  font-variant-numeric: tabular-nums;
  -webkit-font-smoothing: antialiased;
}

/* TOTAL row */
.total-row td {
  border-top-width: 2px;
  border-color: rgba(255,255,255,.08) !important;
  background: linear-gradient(180deg, rgba(34,197,94,.12), rgba(34,197,94,.05));
}
.total-amount {
  font-size: 1.15rem;
  font-weight: 800;
  color: #eafff4;                 /* gentle mint */
  text-shadow: 0 0 12px rgba(34,197,94,.35);
}

/* Rounded table corners */
.income-table > :not(caption) > * > * {
  background-clip: padding-box;
}
.income-table thead tr:first-child th:first-child { border-top-left-radius: 14px; }
.income-table thead tr:first-child th:last-child  { border-top-right-radius: 14px; }
.income-table tfoot tr:last-child td:first-child  { border-bottom-left-radius: 14px; }
.income-table tfoot tr:last-child td:last-child   { border-bottom-right-radius: 14px; }

/* Responsive: tighten spacing on small screens */
@media (max-width: 576px) {
  .income-table tbody td, .income-table tfoot td { padding: .85rem 1rem; }
  .total-amount { font-size: 1.05rem; }
}
.progress-bar {
    background: linear-gradient(to bottom, #4CAF50, #C8E6C9);
}
.pb-0 {
    padding-bottom: 0 !important;
    border: 1px solid;
    border-radius: 17px;
}
.fs-18 {
    font-size: 1.325rem !important;
    line-height: 1.5;
    background: linear-gradient(to bottom, #4CAF50, #C8E6C9);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent;
}
[data-theme-version="dark"] .tryal-gradient {
    background: linear-gradient(to right, #d8a554, #349337, #629d5b, #63b463, #7fc682, #4fc84c, #ff8620);
}
</style>
			<div class="row">
			       <div class="flex-between mb-32 gap-3">

                       
                        
                    </div>
                   
        
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-6">
							<div class="row">
								<div class="col-xl-12">
									<div class="card tryal-gradient">
										<div class="card-body tryal row">
											<div class="col-xl-7 col-sm-6">
												<h2>Balanced Nutrition for Healthy Poultry Growth</h2>
												<span>Providing protein-rich feed, vitamins, and minerals ensures healthy birds. </span>
												
												 @if(Auth::user()->event==0)
                   
                                        	<a href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#exampleModalLong" class="btn btn-rounded font-w500">Became A Distributor</a>
                                 
                                        @endif
                        
											
											</div>
											<div class="col-xl-5 col-sm-6">
												<img src="{{asset('')}}assets/images/white-farmer.png" alt="" class="sd-shape">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Available Balance</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>Todays Include</span> -->
														<h4 class="mb-0"></h4>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Team Deposit</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format($team_business,2) }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>





										<!-- <div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">892</h2>
															<span class="fs-18 font-w500 d-block">New Projects</span>
															<span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers1"></div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">562</h2>
															<span class="fs-18 font-w500 d-block">Total Clients</span>
															<span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers"></div>
												</div>
											</div>
										</div> -->
									</div>

								</div>
								<div class="col-md-12">
									<div class="card radius-15 card radius-10 " style="background: transparent;">
									<div class="card profile-card text-center text-white border-0 rounded-4 shadow-lg p-5"  style="background: linear-gradient(to bottom, #4CAF50, #ffcf5b);" >
                                      <div class="avatar-wrap mx-auto mb-4">
                                        <img
                                          src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                                          width="160" height="160"
                                          class="avatar-img" alt="{{ Auth::user()->name }} avatar"
                                        >
                                      </div>
                                    
                                      <h2 class="mb-2 fw-bold display-6" style="color:#000 !important" >{{ Auth::user()->name }}</h2>
                                    
                                      <div class="mb-3" style="font-size: unset;">
                                        <span class="badge bg-light text-dark fw-semibold px-3 py-2 rounded-pill">
                                          ID: {{ Auth::user()->username }}
                                        </span>
                                      </div>
                                    
                                      <div class="text-white-50 fs-6 mb-4" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                        <span class="me-2 text-uppercase small letter-2" >DOJ :</span>
                                        <span class="fw-semibold text-white" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                          {{  date("m/d/Y h:i:s a", strtotime(Auth::user()->created_at))}}
                                        </span>
                                      </div>
                                     <div class="text-white-50 fs-6 mb-4" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                        <span class="me-2 text-uppercase small letter-2" >Self Investments :</span>
                                        <span class="fw-semibold text-white" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                         {{currency()}} {{ number_format(Auth::user()->investments->sum('amount'),2)}}
                                        </span>
                                      </div>
                                      
                                      <div class="text-white-50 fs-6 mb-4" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                        <span class="me-2 text-uppercase small letter-2" >Total Withdrawal :</span>
                                        <span class="fw-semibold text-white" style="color: #000 !important; font-size: large !important;font-weight: 600;">
                                         {{currency()}} {{ number_format(Auth::user()->withdraw(),2)}}
                                        </span>
                                      </div>
                                    
                                      <a href="#" class="btn btn-light text-dark fw-semibold px-4 py-2 rounded-pill btn-glow">
                                        Open Level: {{ $openlevel }}
                                      </a>
                                    </div>
									</div>
								</div>
								<!-- <div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0 flex-wrap">
											<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
											<div class="d-flex align-items-center project-tab mb-2">
												<div class="card-tabs mt-3 mt-sm-0 mb-3 ">
													<ul class="nav nav-tabs" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
														</li>
													</ul>
												</div>
												<div class="dropdown ms-2">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-center flex-wrap">
												<div class="d-flex">
													<div class="d-inline-block position-relative donut-chart-sale mb-3">
														<span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-24 font-w700 ">246</h4>
														<span class="fs-16 font-w400 d-block">Total Projects</span>
													</div>
												</div>
												<div class="d-flex">
													<div class="d-flex me-5">
														<div class="mt-2">
															<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
															</svg>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">On Going</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="mt-2">
															<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
															</svg>

														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">28</h4>
															<span class="fs-16 font-w400 d-block">Unfinished</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade active show" id="monthly">
													<div id="chartBar" class="chartBar"></div>
												</div>
												<div class="tab-pane fade" id="Weekly">
													<div id="chartBar1" class="chartBar"></div>
												</div>
												<div class="tab-pane fade" id="Today">
													<div id="chartBar2" class="chartBar"></div>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
												<div class="form-check form-switch toggle-switch">
													<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">

												</div>
												<label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>
												<div class="form-check form-switch toggle-switch">
													<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<div class="col-xl-12 col-lg-12">
								<div class="card income-card border-0 rounded-4 shadow-lg overflow-hidden">
                                         
                                          <div class="table-responsive">
                                            <table class="table income-table mb-0 align-middle">
                                              <thead>
                                                <tr>
                                                  <th>Income</th>
                                                  <th class="text-end">Totals</th>
                                                </tr>
                                              </thead>
                                        
                                              <tbody>
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=DI&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="DI">
                                                    <span class="row-title">Farming Income</span>
                                                  </td>
                                                  <td class="text-end money" id="col1">{{ currency() }}{{ number_format(Auth::user()->level_bonus->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=SI&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="SI">
                                                    <span class="row-title">Referral Income</span>
                                                  </td>
                                                  <td class="text-end money" id="col2">{{ currency() }}{{ number_format(Auth::user()->refer_bonus->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=PI&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="PI">
                                                    <span class="row-title">Recurring Income</span>
                                                  </td>
                                                  <td class="text-end money">{{ currency() }}{{ number_format(Auth::user()->dailyIncentive->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=RC&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="RC">
                                                    <span class="row-title">Same Rank Profit Sharing</span>
                                                  </td>
                                                  <td class="text-end money" id="col3">{{ currency() }}{{ number_format(Auth::user()->samerankBonus->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=RD&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="RD">
                                                    <span class="row-title">Contract Profit Bonus</span>
                                                  </td>
                                                  <td class="text-end money" id="col4">{{ currency() }}{{ number_format(Auth::user()->contractpBonus->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=RI&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="RI">
                                                    <span class="row-title">Reward Income</span>
                                                  </td>
                                                  <td class="text-end money" id="col5">{{ currency() }}{{ number_format(Auth::user()->reward_bonusk->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                        
                                                <tr>
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=SI&background=E5E7EB&color=111827" class="avatar-32 me-3" alt="SI">
                                                    <span class="row-title">Salary Income</span>
                                                  </td>
                                                  <td class="text-end money" id="col6">{{ currency() }}{{ number_format(Auth::user()->salaryBonus->where('ttime',date('Y-m-d'))->sum('comm'), 2) }}</td>
                                                </tr>
                                                
                                                
                                                
                                             
                                              </tbody>
                                        
                                              <tfoot>
                                                <tr class="total-row">
                                                  <td>
                                                    <img src="https://ui-avatars.com/api/?name=TO&background=111827&color=FFFFFF" class="avatar-32 me-3" alt="Total">
                                                    <span class="row-title fw-bold">Total</span>
                                                  </td>
                                                  <td class="text-end total-amount">{{ currency() }}{{ number_format(Auth::user()->totalIncome->where('ttime',date("Y-m-d"))->sum('comm'), 2) }}</td>
                                                </tr>
                                              </tfoot>
                                            </table>
                                          </div>
                                        </div>
								</div>



								<!-- <div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0 pb-0">
											<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
											<div class="dropdown ">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<div class="card-body pb-0">
											<div id="revenueMap" class="revenueMap"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0">
											<div>
												<h4 class="fs-20 font-w700">Recent Emails</h4>
												<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
											</div>
											<div>
												<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
											</div>
										</div>
										<div class="card-body px-0">
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<span class="bg-success">K</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">How to improve project management flows</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<img src="images/profile/small/pic6.jpg" alt="">
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
														<div class="final-badge">
															<span class="badge text-black border"><i class="far fa-file-alt me-3"></i>Master_file.fig</span>
															<span class="badge text-black border"><i class="fas fa-image me-2"></i>CoverPreview.jpg</span>
															<span class="badge border bgl-primary font-w700">4 files more</span>
														</div>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<span class="bg-warning">G</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">Weekly Design Inspirations by Envato</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<img src="images/profile/small/pic8.jpg" alt="">
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">How to improve project management flows</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>

						</div>
						<div class="col-xl-6">
							<div class="row">
								<div class="col-xl-12">
									<div class="row">
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Farming Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 30%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Refferal Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}
																{{ number_format(Auth::user()->refer_bonus->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 20%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Reccuring Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Reward Bonus</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}
																{{ number_format(Auth::user()->reward_bonusk->sum('comm'), 2) }}
															</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>




									</div>

								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Contract Profit Sharing</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->contractpBonus->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}{{ number_format(Auth::user()->daily_bonus()->sum('comm'), 2) }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>



									
									</div>

								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Salary Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->salaryBonus->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>
																				<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Top Up Balance</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->FundBalance(), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>
										
																														<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Direct Team</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ $user_direct }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Level Team</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{$totalTeam}} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<!-- <span>76 left from target</span>
														<h4 class="mb-0">42</h4> -->
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>

								<div class=" col-xl-12 col-lg-12">
									<div class="card radius-10 tryal-gradien">
										<div class="card-body">
											<label class="form--label">Referral Link</label>
											<div class="input-group style-left" id="myLink">
												<input type="text" name="text"
													class="form-control form--control md-style referralURL"
													value="{{ url('/register') }}?ref={{ auth()->user()->username }}"
													readonly>
												<button class="input-group-text copytext copyBoard" onclick="copyLink()"> <i
														class="fa fa-copy"></i> </button>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="col-xl-12 col-lg-12">
									<div class="card">
										<div class="card-header border-0">
											<div>
												<h4 class="fs-20 font-w700">Messages</h4>
												<span>Lorem ipsum dolor sit amet</span>
											</div>
											<div>
												<a href="javascript:void(0);" class="btn btn-primary btn-rounded">+New Messages</a>
											</div>
										</div>
										<div class="card-body px-0">
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box">
														<img src="{{asset('')}}users/images/profile/small/pic6.jpg" alt="">
													</div>
													<div class="ms-3 w-100 ">
														<h4 class="fs-18 font-w600">Maren Rosser</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">Hei, dont forget to clear server cache!</span>
															<span class="me-4 fs-12">25min ago</span>
														</div>
													</div>

												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box">
														<img src="{{asset('')}}users/images/profile/small/pic7.jpg" alt="">
													</div>
													<div class="ms-3 w-100">
														<h4 class="fs-18 font-w600">Kaiya Bergson</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">I remember that project due is tomorrow.</span>
															<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
														</div>
													</div>
												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box ">
														<img src="{{asset('')}}users/images/profile/small/pic4.jpg" alt="">
													</div>
													<div class="ms-3 w-100">
														<h4 class="fs-18 font-w600">Ruben Press</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">Ok sir. I will fix it as soon as possible</span>
															<span class="me-4 fs-12">December 12th, 2020 10:24 AM</span>
														</div>
													</div>
												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> -->

								<div class=" col-xl-12 col-lg-12">
									<div class="card radius-10 tryal-gradien">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div>
													<h6 class="mb-0">Latest News</h6>
												</div>
												<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
												</div>
											</div>
											<div class="">
												<div class="card mb-4">

													<div class="card-body">

														<marquee direction="up" onmouseout="this.start();" onmouseover="this.stop();" style="height:281px;">
															<center>

																@foreach($contents as $c)
																<h5>{{ $c->title }}</h5>
																<p style="color:#fff">{{ $c->content1 }}</</p>



																<!-- <h5>GENERATION OF FARMING SUPPORT NO. 83600-91530</h5>
																<p>97797-17726</p>



																<h5>INFORMATION ABOUT WITHDRAWAL</h5>
																<p>DUE TO COMPANY ANNOUNCEMENT GOF MINIMUM WITHDRAWAL PAYOUT AMOUNT IS RS.💷1000💷</p> -->



																<h5>IMPORTANT ANNOUNCEMENT</h5>
																<p style="color:#fff">{{ $c->content2 }}</p>

                                                        @endforeach
															</center>
														</marquee>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>


     <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Dear {{ Auth::user()->name }},</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Welcome to EcoVillage! We’re delighted to have you join our growing community committed to
                                                            sustainable living and chemical-free farming.</p></br>
                                        
                                                        <p>Your decision to be a part of EcoVillage reflects a powerful commitment to organic agriculture,
                                                            environmental wellness, and the empowerment of local farming communities. Together, we are
                                                            cultivating a future that thrives on harmony with nature and responsible land stewardship.</p></br>
                                        
                                                        <p>At EcoVillage, we’re dedicated to providing outstanding support to ensure your journey with us is
                                                            smooth, rewarding, and inspiring. If you have any questions, feedback, or need assistance at any
                                                            point, please feel free to call us at +91 7508640347 or email us at info@ecovillages.co.in. Our team
                                                            is always here to help.</p></br>
                                                        <p>Thank you once again for being part of this movement. With your support, we’re one step closer to
                                                            creating a truly sustainable and thriving future.</p></br>
                                        
                                                        <p>Warm regards,</p></br>
                                                        <p>EcoVillage</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                         <form action="{{ route('user.event') }}" method="POST">
                                                          @csrf
                                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                                       </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
			<!-- 
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-sm-6">
											<div class=" ">
												<div class="items">
													<h4 class="fs-20 font-w700 mb-4">Boost Status</h4>
												</div>

											</div>
										</div>
										<div class="card-body">
											<div id="redial"></div>
											<span class="text-center d-block fs-18 font-w600">Current ROI </span>
										</div>
										<div class="msg-bx d-flex justify-content-between align-items-center">
											<div class="msg d-flex align-items-center w-100">

												<div class="ms-3 w-100">
													<h4 class="fs-18 font-w600">Total Sponsor</h4>
													<div class="d-flex justify-content-between">
														<span class="me-auto">0</span>
														<span class="me-4 fs-12">Equal & Above of First Pack</span>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!--**********************************
            Content body end
        ***********************************-->




	<!-- लिंक जिसे कॉपी करना है -->
	<!-- <a id="myLink" href="https://example.com">https://example.com</a> -->

	<!-- कॉपी के लिए बटन -->
	<!-- <button onclick="copyLink()">Copy Link</button> -->

	<script>
		function copyLink() {
			const inputElement = document.querySelector('input[name="text"]');
			inputElement.select();
			document.execCommand('copy');
			console.log('Link copied to clipboard!');
		}
	</script>

	<script>
		function calculateTotal() {
			let total = 0;
			let i = 1;

			while (true) {
				const el = document.getElementById('col' + i);
				if (!el) break;

				const val = parseFloat(el.innerText) || 0;
				console.log
				total += val;
				i++;
			}

			document.getElementById('total').innerText = `Total ${total}`;
		}

		window.addEventListener('DOMContentLoaded', calculateTotal);
	</script>

	