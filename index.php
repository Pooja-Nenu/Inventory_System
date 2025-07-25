<?php include("header.php"); ?>
		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<!-- Logo -->
			<div class="sidebar-logo active">
				<a href="index-2.html" class="logo logo-normal">
					<img src="assets/img/logo.svg" alt="Img">
				</a>
				<a href="index-2.html" class="logo logo-white">
					<img src="assets/img/logo-white.svg" alt="Img">
				</a>
				<a href="index-2.html" class="logo-small">
					<img src="assets/img/logo-small.png" alt="Img">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
					<i data-feather="chevrons-left" class="feather-16"></i>
				</a>
			</div>
			<!-- /Logo -->
			<div class="modern-profile p-3 pb-0">
				<div class="text-center rounded bg-light p-3 mb-4 user-profile">
					<div class="avatar avatar-lg online mb-3">
						<img src="assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
					<p class="fs-12 mb-0">System Admin</p>
				</div>
				<div class="sidebar-nav mb-3">
					<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
						<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
						<li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
					</ul>
				</div>
			</div>
			<div class="sidebar-header p-3 pb-0 pt-2">
				<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
					<div class="avatar avatar-md onlin">
						<img src="assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
					</div>
					<div class="text-start sidebar-profile-info ms-2">
						<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
						<p class="fs-12">System Admin</p>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-between menu-item mb-3">
					<div>
						<a href="index-2.html" class="btn btn-sm btn-icon bg-light">
							<i class="ti ti-layout-grid-remove"></i>
						</a>
					</div>
					<div>
						<a href="chat.html" class="btn btn-sm btn-icon bg-light">
							<i class="ti ti-brand-hipchat"></i>
						</a>
					</div>
					<div>
						<a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
							<i class="ti ti-message"></i>
						</a>
					</div>
					<div class="notification-item">
						<a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
							<i class="ti ti-bell"></i>
							<span class="notification-status-dot"></span>
						</a>
					</div>
					<div class="me-0">
						<a href="general-settings.html" class="btn btn-sm btn-icon bg-light">
							<i class="ti ti-settings"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Main</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop active"><i class="ti ti-layout-grid fs-16 me-2"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index-2.html" class="active">Admin Dashboard</a></li>
										<li><a href="admin-dashboard.html">Admin Dashboard 2</a></li>
										<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-user-edit fs-16 me-2"></i><span>Super Admin</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-brand-apple-arcade fs-16 me-2"></i><span>Application</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="audio-call.html">Audio Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="email.html">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="projects.html">Projects</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Ecommerce<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="products.html">Products</a></li>
												<li><a href="orders.html">Orders</a></li>
												<li><a href="customers.html">Customers</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="reviews.html">Reviews</a></li>
											</ul>
										</li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="search-list.html">Search List</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-layout-sidebar-right-collapse fs-16 me-2"></i><span>Layouts</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="layout-horizontal.html">Horizontal</a></li>
										<li><a href="layout-detached.html">Detached</a></li>
										<li><a href="layout-two-column.html">Two Column</a></li>
										<li><a href="layout-hovered.html">Hovered</a></li>
										<li><a href="layout-boxed.html">Boxed</a></li>
										<li><a href="layout-rtl.html">RTL</a></li>
										<li><a href="layout-dark.html">Dark</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Inventory</h6>
							<ul>
								<li><a href="product-list.html"><i data-feather="box"></i><span>Products</span></a></li>
								<li><a href="add-product.html"><i class="ti ti-table-plus fs-16 me-2"></i><span>Create Product</span></a></li>
								<li><a href="expired-products.html"><i class="ti ti-progress-alert fs-16 me-2"></i><span>Expired Products</span></a></li>
								<li><a href="low-stocks.html"><i class="ti ti-trending-up-2 fs-16 me-2"></i><span>Low Stocks</span></a></li>
								<li><a href="category-list.html"><i class="ti ti-list-details fs-16 me-2"></i><span>Category</span></a></li>
								<li><a href="sub-categories.html"><i class="ti ti-carousel-vertical fs-16 me-2"></i><span>Sub Category</span></a></li>
								<li><a href="brand-list.html"><i class="ti ti-triangles fs-16 me-2"></i><span>Brands</span></a></li>
								<li><a href="units.html"><i class="ti ti-brand-unity fs-16 me-2"></i><span>Units</span></a></li>
								<li><a href="varriant-attributes.html"><i class="ti ti-checklist fs-16 me-2"></i><span>Variant Attributes</span></a></li>
								<li><a href="warranty.html"><i class="ti ti-certificate fs-16 me-2"></i><span>Warranties</span></a></li>
								<li><a href="barcode.html"><i class="ti ti-barcode fs-16 me-2"></i><span>Print Barcode</span></a></li>
								<li><a href="qrcode.html"><i class="ti ti-qrcode fs-16 me-2"></i><span>Print QR Code</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Stock</h6>
							<ul>
								<li><a href="manage-stocks.html"><i class="ti ti-stack-3 fs-16 me-2"></i><span>Manage Stock</span></a></li>
								<li><a href="stock-adjustment.html"><i class="ti ti-stairs-up fs-16 me-2"></i><span>Stock Adjustment</span></a></li>
								<li><a href="stock-transfer.html"><i class="ti ti-stack-pop fs-16 me-2"></i><span>Stock Transfer</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Sales</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-layout-grid fs-16 me-2"></i><span>Sales</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="online-orders.html">Online Orders</a></li>
										<li><a href="pos-orders.html">POS Orders</a></li>
									</ul>
								</li>
								<li><a href="invoice.html"><i class="ti ti-file-invoice fs-16 me-2"></i><span>Invoices</span></a></li>
								<li><a href="sales-returns.html"><i class="ti ti-receipt-refund fs-16 me-2"></i><span>Sales Return</span></a></li>
								<li><a href="quotation-list.html"><i class="ti ti-files fs-16 me-2"></i><span>Quotation</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-device-laptop fs-16 me-2"></i><span>POS</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="pos.html">POS 1</a></li>
										<li><a href="pos-2.html">POS 2</a></li>
										<li><a href="pos-3.html">POS 3</a></li>
										<li><a href="pos-4.html">POS 4</a></li>
										<li><a href="pos-5.html">POS 5</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Promo</h6>
							<ul>
								<li><a href="coupons.html"><i class="ti ti-ticket fs-16 me-2"></i><span>Coupons</span></a></li>
								<li><a href="gift-cards.html"><i class="ti ti-cards fs-16 me-2"></i><span>Gift Cards</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-file-percent fs-16 me-2"></i><span>Discount</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="discount-plan.html">Discount Plan</a></li>
										<li><a href="discount.html">Discount</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Purchases</h6>
							<ul>
								<li><a href="purchase-list.html"><i class="ti ti-shopping-bag fs-16 me-2"></i><span>Purchases</span></a></li>
								<li><a href="purchase-order-report.html"><i class="ti ti-file-unknown fs-16 me-2"></i><span>Purchase Order</span></a></li>
								<li><a href="purchase-returns.html"><i class="ti ti-file-upload fs-16 me-2"></i><span>Purchase Return</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Finance & Accounts</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-file-stack fs-16 me-2"></i><span>Expenses</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.html">Expenses</a></li>
										<li><a href="expense-category.html">Expense Category</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-file-pencil fs-16 me-2"></i><span>Income</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="income.html">Income</a></li>
										<li><a href="income-category.html">Income Category</a></li>
									</ul>
								</li>
								<li><a href="account-list.html"><i class="ti ti-building-bank fs-16 me-2"></i><span>Bank Accounts</span></a></li>
								<li><a href="money-transfer.html"><i class="ti ti-moneybag fs-16 me-2"></i><span>Money Transfer</span></a></li>
								<li><a href="balance-sheet.html"><i class="ti ti-report-money fs-16 me-2"></i><span>Balance Sheet</span></a></li>
								<li><a href="trial-balance.html"><i class="ti ti-alert-circle fs-16 me-2"></i><span>Trial Balance</span></a></li>
								<li><a href="cash-flow.html"><i class="ti ti-zoom-money fs-16 me-2"></i><span>Cash Flow</span></a></li>
								<li><a href="account-statement.html"><i class="ti ti-file-infinity fs-16 me-2"></i><span>Account Statement</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Peoples</h6>
							<ul>
								<li><a href="customers.html"><i class="ti ti-users-group fs-16 me-2"></i><span>Customers</span></a></li>
								<li><a href="billers.html"><i class="ti ti-user-up fs-16 me-2"></i><span>Billers</span></a></li>
								<li><a href="suppliers.html"><i class="ti ti-user-dollar fs-16 me-2"></i><span>Suppliers</span></a></li>
								<li><a href="store-list.html"><i class="ti ti-home-bolt fs-16 me-2"></i><span>Stores</span></a></li>
								<li><a href="warehouse.html"><i class="ti ti-archive fs-16 me-2"></i><span>Warehouses</span></a>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">HRM</h6>
							<ul>
								<li><a href="employees-grid.html"><i class="ti ti-user fs-16 me-2"></i><span>Employees</span></a></li>
								<li><a href="department-grid.html"><i class="ti ti-compass fs-16 me-2"></i><span>Departments</span></a></li>
								<li><a href="designation.html"><i class="ti ti-git-merge fs-16 me-2"></i><span>Designation</span></a></li>
								<li><a href="shift.html"><i class="ti ti-arrows-shuffle fs-16 me-2"></i><span>Shifts</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-user-cog fs-16 me-2"></i><span>Attendence</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="attendance-employee.html">Employee</a></li>
										<li><a href="attendance-admin.html">Admin</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-calendar fs-16 me-2"></i><span>Leaves</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="leaves-admin.html">Admin Leaves</a></li>
										<li><a href="leaves-employee.html">Employee Leaves</a></li>
										<li><a href="leave-types.html">Leave Types</a></li>
									</ul>
								</li>
								<li><a href="holidays.html"><i class="ti ti-calendar-share fs-16 me-2"></i><span>Holidays</span></a>
								</li>
								<li class="submenu">
									<a href="employee-salary.html"><i class="ti ti-file-dollar fs-16 me-2"></i><span>Payroll</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employee-salary.html">Employee Salary</a></li>
										<li><a href="payslip.html">Payslip</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Reports</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-chart-bar fs-16 me-2"></i><span>Sales Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="sales-report.html">Sales Report</a></li>
										<li><a href="best-seller.html">Best Seller</a></li>
									</ul>
								</li>
								<li><a href="purchase-report.html"><i class="ti ti-chart-pie-2 fs-16 me-2"></i><span>Purchase report</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-triangle-inverted fs-16 me-2"></i><span>Inventory Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="inventory-report.html">Inventory Report</a></li>
										<li><a href="stock-history.html">Stock History</a></li>
										<li><a href="sold-stock.html">Sold Stock</a></li>
									</ul>
								</li>
								<li><a href="invoice-report.html"><i class="ti ti-businessplan fs-16 me-2"></i><span>Invoice Report</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-user-star fs-16 me-2"></i><span>Supplier Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="supplier-report.html">Supplier Report</a></li>
										<li><a href="supplier-due-report.html">Supplier Due Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-report fs-16 me-2"></i><span>Customer Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="customer-report.html">Customer Report</a></li>
										<li><a href="customer-due-report.html">Customer Due Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-report-analytics fs-16 me-2"></i><span>Product Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="product-report.html">Product Report</a></li>
										<li><a href="product-expiry-report.html">Product Expiry Report</a></li>
										<li><a href="product-quantity-alert.html">Product Quantity Alert</a></li>
									</ul>
								</li>
								<li><a href="expense-report.html"><i class="ti ti-file-vector fs-16 me-2"></i><span>Expense Report</span></a></li>
								<li><a href="income-report.html"><i class="ti ti-chart-ppf fs-16 me-2"></i><span>Income Report</span></a></li>
								<li><a href="tax-reports.html"><i class="ti ti-chart-dots-2 fs-16 me-2"></i><span>Tax Report</span></a></li>
								<li><a href="profit-and-loss.html"><i class="ti ti-chart-donut fs-16 me-2"></i><span>Profit & Loss</span></a></li>
								<li><a href="annual-report.html"><i class="ti ti-report-search fs-16 me-2"></i><span>Annual Report</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Content (CMS)</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-page-break fs-16 me-2"></i><span>Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="pages.html">Pages</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-wallpaper fs-16 me-2"></i><span>Blog</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="all-blog.html">All Blog</a></li>
										<li><a href="blog-tag.html">Blog Tags</a></li>
										<li><a href="blog-categories.html">Categories</a></li>
										<li><a href="blog-comments.html">Blog Comments</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-map-pin fs-16 me-2"></i><span>Location</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="countries.html">Countries</a></li>
										<li><a href="states.html">States</a></li>
										<li><a href="cities.html">Cities</a></li>
									</ul>
								</li>
								<li><a href="testimonials.html"><i class="ti ti-star fs-16 me-2"></i><span>Testimonials</span></a></li>
								<li><a href="faq.html"><i class="ti ti-help-circle fs-16 me-2"></i><span>FAQ</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">User Management</h6>
							<ul>
								<li><a href="users.html"><i class="ti ti-shield-up fs-16 me-2"></i><span>Users</span></a></li>
								<li><a href="roles-permissions.html"><i class="ti ti-jump-rope fs-16 me-2"></i><span>Roles & Permissions</span></a></li>
								<li><a href="delete-account.html"><i class="ti ti-trash-x fs-16 me-2"></i><span>Delete Account Request</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Pages</h6>
							<ul>
								<li><a href="profile.html"><i class="ti ti-user-circle fs-16 me-2"></i><span>Profile</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-shield fs-16 me-2"></i><span>Authentication</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="signin.html">Cover</a></li>
												<li><a href="signin-2.html">Illustration</a></li>
												<li><a href="signin-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="forgot-password.html">Cover</a></li>
												<li><a href="forgot-password-2.html">Illustration</a></li>
												<li><a href="forgot-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-file-x fs-16 me-2"></i><span>Error Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.html">404 Error </a></li>
										<li><a href="error-500.html">500 Error </a></li>
									</ul>
								</li>
								<li>
									<a href="blank-page.html"><i class="ti ti-file fs-16 me-2"></i><span>Blank Page</span> </a>
								</li>
								<li>
									<a href="pricing.html"><i class="ti ti-currency-dollar fs-16 me-2"></i><span>Pricing</span> </a>
								</li>
								<li>
									<a href="coming-soon.html"><i class="ti ti-send fs-16 me-2"></i><span>Coming Soon</span> </a>
								</li>
								<li>
									<a href="under-maintenance.html"><i class="ti ti-alert-triangle fs-16 me-2"></i><span>Under Maintenance</span> </a>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Settings</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-settings fs-16 me-2"></i><span>General Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="general-settings.html">Profile</a></li>
										<li><a href="security-settings.html">Security</a></li>
										<li><a href="notification.html">Notifications</a></li>
										<li><a href="connected-apps.html">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-world fs-16 me-2"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="system-settings.html">System Settings</a></li>
										<li><a href="company-settings.html">Company Settings </a></li>
										<li><a href="localization-settings.html">Localization</a></li>
										<li><a href="prefixes.html">Prefixes</a></li>
										<li><a href="preference.html">Preference</a></li>
										<li><a href="appearance.html">Appearance</a></li>
										<li><a href="social-authentication.html">Social Authentication</a></li>
										<li><a href="language-settings.html">Language</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-device-mobile fs-16 me-2"></i>
										<span>App Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Invoice<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="invoice-template.html">Invoice Template</a></li>
											</ul>
										</li>
										<li><a href="printer-settings.html">Printer</a></li>
										<li><a href="pos-settings.html">POS</a></li>
										<li><a href="custom-fields.html">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-device-desktop fs-16 me-2"></i>
										<span>System Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Template</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Template</a></li>
											</ul>
										</li>
										<li><a href="otp-settings.html">OTP</a></li>
										<li><a href="gdpr-settings.html">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-settings-dollar fs-16 me-2"></i>
										<span>Financial Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
										<li><a href="bank-settings-grid.html">Bank Accounts</a></li>
										<li><a href="tax-rates.html">Tax Rates</a></li>
										<li><a href="currency-settings.html">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-settings-2 fs-16 me-2"></i>
										<span>Other Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="storage-settings.html">Storage</a></li>
										<li><a href="ban-ip-address.html">Ban IP Address</a></li>
									</ul>
								</li>
								<li>
									<a href="signin.html"><i class="ti ti-logout fs-16 me-2"></i><span>Logout</span> </a>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">UI Interface</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-vector-bezier fs-16 me-2"></i><span>Base UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-alerts.html">Alerts</a></li>
										<li><a href="ui-accordion.html">Accordion</a></li>
										<li><a href="ui-avatar.html">Avatar</a></li>
										<li><a href="ui-badges.html">Badges</a></li>
										<li><a href="ui-borders.html">Border</a></li>
										<li><a href="ui-buttons.html">Buttons</a></li>
										<li><a href="ui-buttons-group.html">Button Group</a></li>
										<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
										<li><a href="ui-cards.html">Card</a></li>
										<li><a href="ui-carousel.html">Carousel</a></li>
										<li><a href="ui-colors.html">Colors</a></li>
										<li><a href="ui-dropdowns.html">Dropdowns</a></li>
										<li><a href="ui-grid.html">Grid</a></li>
										<li><a href="ui-images.html">Images</a></li>
										<li><a href="ui-lightbox.html">Lightbox</a></li>
										<li><a href="ui-media.html">Media</a></li>
										<li><a href="ui-modals.html">Modals</a></li>
										<li><a href="ui-offcanvas.html">Offcanvas</a></li>
										<li><a href="ui-pagination.html">Pagination</a></li>
										<li><a href="ui-popovers.html">Popovers</a></li>
										<li><a href="ui-progress.html">Progress</a></li>
										<li><a href="ui-placeholders.html">Placeholders</a></li>
										<li><a href="ui-rangeslider.html">Range Slider</a></li>
										<li><a href="ui-spinner.html">Spinner</a></li>
										<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="ui-nav-tabs.html">Tabs</a></li>
										<li><a href="ui-toasts.html">Toasts</a></li>
										<li><a href="ui-tooltips.html">Tooltips</a></li>
										<li><a href="ui-typography.html">Typography</a></li>
										<li><a href="ui-video.html">Video</a></li>
										<li><a href="ui-sortable.html">Sortable</a></li>
										<li><a href="ui-swiperjs.html">Swiperjs</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i data-feather="layers"></i><span>Advanced UI</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-ribbon.html">Ribbon</a></li>
										<li><a href="ui-clipboard.html">Clipboard</a></li>
										<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
										<li><a href="ui-rangeslider.html">Range Slider</a></li>
										<li><a href="ui-rating.html">Rating</a></li>
										<li><a href="ui-text-editor.html">Text Editor</a></li>
										<li><a href="ui-counter.html">Counter</a></li>
										<li><a href="ui-scrollbar.html">Scrollbar</a></li>
										<li><a href="ui-stickynote.html">Sticky Note</a></li>
										<li><a href="ui-timeline.html">Timeline</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-chart-infographic fs-16 me-2"></i>
										<span>Charts</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="chart-apex.html">Apex Charts</a></li>
										<li><a href="chart-c3.html">Chart C3</a></li>
										<li><a href="chart-js.html">Chart Js</a></li>
										<li><a href="chart-morris.html">Morris Charts</a></li>
										<li><a href="chart-flot.html">Flot Charts</a></li>
										<li><a href="chart-peity.html">Peity Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-icons fs-16 me-2"></i>
										<span>Icons</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
										<li><a href="icon-tabler.html">Tabler Icons</a></li>
										<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
										<li><a href="icon-remix.html">Remix Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-input-search fs-16 me-2"></i><span>Forms</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
												<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
												<li><a href="form-input-groups.html">Input Groups</a></li>
												<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
												<li><a href="form-select.html">Form Select</a></li>
												<li><a href="form-mask.html">Input Masks</a></li>
												<li><a href="form-fileupload.html">File Uploads</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-horizontal.html">Horizontal Form</a></li>
												<li><a href="form-vertical.html">Vertical Form</a></li>
												<li><a href="form-floating-labels.html">Floating Labels</a></li>
											</ul>
										</li>
										<li><a href="form-validation.html">Form Validation</a></li>
										<li><a href="form-select2.html">Select2</a></li>
										<li><a href="form-wizard.html">Form Wizard</a></li>
										<li><a href="form-pickers.html">Form Picker</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-table fs-16 me-2"></i><span>Tables</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.html">Basic Tables </a></li>
										<li><a href="data-tables.html">Data Table </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-map-pin-pin fs-16 me-2"></i><span>Maps</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="maps-vector.html">Vector</a></li>
										<li><a href="maps-leaflet.html">Leaflet</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Help</h6>
							<ul>
								<li><a href="javascript:void(0);"><i class="ti ti-file-text fs-16 me-2"></i><span>Documentation</span></a></li>
								<li><a href="javascript:void(0);"><i class="ti ti-exchange fs-16 me-2"></i><span>Changelog </span><span class="badge bg-primary badge-xs text-white fs-10 ms-2">v2.0.9</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="ti ti-menu-2 fs-16 me-2"></i><span>Multi Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Level 1.1</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2.1</a></li>
												<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3.1</a></li>
														<li><a href="javascript:void(0);">Level 3.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Horizontal Sidebar -->
		<div class="sidebar sidebar-horizontal" id="horizontal-menu">
			<div id="sidebar-menu-3" class="sidebar-menu">
				<div class="main-menu">
					<ul class="nav-menu">
						<li class="submenu">
							<a href="index-2.html"><i class="ti ti-layout-grid fs-16 me-2"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index-2.html" class="active">Admin Dashboard</a></li>
										<li><a href="admin-dashboard.html">Admin Dashboard 2</a></li>
										<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Super Admin</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="audio-call.html">Audio Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="email.html">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="projects.html">Projects</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Ecommerce<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="products.html">Products</a></li>
												<li><a href="orders.html">Orders</a></li>
												<li><a href="customers.html">Customers</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="reviews.html">Reviews</a></li>
											</ul>
										</li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="search-list.html">Search List</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Layouts</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="layout-horizontal.html">Horizontal</a></li>
										<li><a href="layout-detached.html">Detached</a></li>
										<li><a href="layout-two-column.html">Two Column</a></li>
										<li><a href="layout-hovered.html">Hovered</a></li>
										<li><a href="layout-boxed.html">Boxed</a></li>
										<li><a href="layout-rtl.html">RTL</a></li>
										<li><a href="layout-dark.html">Dark</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-brand-unity fs-16 me-2"></i><span> Inventory
								</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="product-list.html"><span>Products</span></a></li>
								<li><a href="add-product.html"><span>Create Product</span></a></li>
								<li><a href="expired-products.html"><span>Expired Products</span></a></li>
								<li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
								<li><a href="category-list.html"><span>Category</span></a></li>
								<li><a href="sub-categories.html"><span>Sub Category</span></a></li>
								<li><a href="brand-list.html"><span>Brands</span></a></li>
								<li><a href="units.html"><span>Units</span></a></li>
								<li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
								<li><a href="warranty.html"><span>Warranties</span></a></li>
								<li><a href="barcode.html"><span>Print Barcode</span></a></li>
								<li><a href="qrcode.html"><span>Print QR Code</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-layout-grid fs-16 me-2"></i><span>Sales &amp; Purchase</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Stock</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
										<li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
										<li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="online-orders.html">Online Orders</a></li>
												<li><a href="pos-orders.html">POS Orders</a></li>
											</ul>
										</li>
										<li><a href="invoice.html"><span>Invoices</span></a></li>
										<li><a href="sales-returns.html"><span>Sales Return</span></a></li>
										<li><a href="quotation-list.html"><span>Quotation</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>POS</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="pos.html">POS 1</a></li>
												<li><a href="pos-2.html">POS 2</a></li>
												<li><a href="pos-3.html">POS 3</a></li>
												<li><a href="pos-4.html">POS 4</a></li>
												<li><a href="pos-5.html">POS 5</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Promo</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="coupons.html"><span>Coupons</span></a></li>
										<li><a href="gift-cards.html"><span>Gift Cards</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Discount</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="discount-plan.html">Discount Plan</a></li>
												<li><a href="discount.html">Discount</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="purchase-list.html"><span>Purchases</span></a></li>
										<li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
										<li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.html">Expenses</a></li>
										<li><a href="expense-category.html">Expense Category</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Income</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="income.html">Income</a></li>
										<li><a href="income-category.html">Income Category</a></li>
									</ul>
								</li>
								<li><a href="account-list.html"><span>Bank Accounts</span></a></li>
								<li><a href="money-transfer.html"><span>Money Transfer</span></a></li>
								<li><a href="balance-sheet.html"><span>Balance Sheet</span></a></li>
								<li><a href="trial-balance.html"><span>Trial Balance</span></a></li>
								<li><a href="cash-flow.html"><span>Cash Flow</span></a></li>
								<li><a href="account-statement.html"><span>Account Statement</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-users-group fs-16 me-2"></i><span>UI Interface</span> <span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="ui-alerts.html">Alerts</a></li>
										<li><a href="ui-accordion.html">Accordion</a></li>
										<li><a href="ui-avatar.html">Avatar</a></li>
										<li><a href="ui-badges.html">Badges</a></li>
										<li><a href="ui-borders.html">Border</a></li>
										<li><a href="ui-buttons.html">Buttons</a></li>
										<li><a href="ui-buttons-group.html">Button Group</a></li>
										<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
										<li><a href="ui-cards.html">Card</a></li>
										<li><a href="ui-carousel.html">Carousel</a></li>
										<li><a href="ui-colors.html">Colors</a></li>
										<li><a href="ui-dropdowns.html">Dropdowns</a></li>
										<li><a href="ui-grid.html">Grid</a></li>
										<li><a href="ui-images.html">Images</a></li>
										<li><a href="ui-lightbox.html">Lightbox</a></li>
										<li><a href="ui-media.html">Media</a></li>
										<li><a href="ui-modals.html">Modals</a></li>
										<li><a href="ui-offcanvas.html">Offcanvas</a></li>
										<li><a href="ui-pagination.html">Pagination</a></li>
										<li><a href="ui-popovers.html">Popovers</a></li>
										<li><a href="ui-progress.html">Progress</a></li>
										<li><a href="ui-placeholders.html">Placeholders</a></li>
										<li><a href="ui-rangeslider.html">Range Slider</a></li>
										<li><a href="ui-spinner.html">Spinner</a></li>
										<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="ui-nav-tabs.html">Tabs</a></li>
										<li><a href="ui-toasts.html">Toasts</a></li>
										<li><a href="ui-tooltips.html">Tooltips</a></li>
										<li><a href="ui-typography.html">Typography</a></li>
										<li><a href="ui-video.html">Video</a></li>
										<li><a href="ui-sortable.html">Sortable</a></li>
										<li><a href="ui-swiperjs.html">Swiperjs</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Advanced UI</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="ui-ribbon.html">Ribbon</a></li>
										<li><a href="ui-clipboard.html">Clipboard</a></li>
										<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
										<li><a href="ui-rangeslider.html">Range Slider</a></li>
										<li><a href="ui-rating.html">Rating</a></li>
										<li><a href="ui-text-editor.html">Text Editor</a></li>
										<li><a href="ui-counter.html">Counter</a></li>
										<li><a href="ui-scrollbar.html">Scrollbar</a></li>
										<li><a href="ui-stickynote.html">Sticky Note</a></li>
										<li><a href="ui-timeline.html">Timeline</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.html">Apex Charts</a></li>
										<li><a href="chart-c3.html">Chart C3</a></li>
										<li><a href="chart-js.html">Chart Js</a></li>
										<li><a href="chart-morris.html">Morris Charts</a></li>
										<li><a href="chart-flot.html">Flot Charts</a></li>
										<li><a href="chart-peity.html">Peity Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
										<li><a href="icon-tabler.html">Tabler Icons</a></li>
										<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
										<li><a href="icon-remix.html">Remix Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"><span>Form Elements</span><span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
												<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
												<li><a href="form-input-groups.html">Input Groups</a></li>
												<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
												<li><a href="form-select.html">Form Select</a></li>
												<li><a href="form-mask.html">Input Masks</a></li>
												<li><a href="form-fileupload.html">File Uploads</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);"><span> Layouts</span><span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-horizontal.html">Horizontal Form</a></li>
												<li><a href="form-vertical.html">Vertical Form</a></li>
												<li><a href="form-floating-labels.html">Floating Labels</a></li>
											</ul>
										</li>
										<li><a href="form-validation.html">Form Validation</a></li>
										<li><a href="form-select2.html">Select2</a></li>
										<li><a href="form-wizard.html">Form Wizard</a></li>
										<li><a href="form-pickers.html">Form Picker</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.html">Basic Tables </a></li>
										<li><a href="data-tables.html">Data Table </a></li>
									</ul>
								</li>
								<li  class="submenu">
									<a href="javascript:void(0);"><span>Maps</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="maps-vector.html">Vector</a></li>
										<li><a href="maps-leaflet.html">Leaflet</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-page-break fs-16 me-2"></i><span>Pages</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="profile.html"><span>Profile</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="signin.html">Cover</a></li>
												<li><a href="signin-2.html">Illustration</a></li>
												<li><a href="signin-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="register.html">Cover</a></li>
												<li><a href="register-2.html">Illustration</a></li>
												<li><a href="register-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="forgot-password.html">Cover</a></li>
												<li><a href="forgot-password-2.html">Illustration</a></li>
												<li><a href="forgot-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="reset-password.html">Cover</a></li>
												<li><a href="reset-password-2.html">Illustration</a></li>
												<li><a href="reset-password-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-verification.html">Cover</a></li>
												<li><a href="email-verification-2.html">Illustration</a></li>
												<li><a href="email-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="two-step-verification.html">Cover</a></li>
												<li><a href="two-step-verification-2.html">Illustration</a></li>
												<li><a href="two-step-verification-3.html">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.html">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Error</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.html">404 Error </a></li>
										<li><a href="error-500.html">500 Error </a></li>
									</ul>
								</li>
								<li><a href="blank-page.html"><span>Blank Page</span> </a></li>
								<li><a href="pricing.html"><span>Pricing</span> </a></li>
								<li><a href="coming-soon.html"><span>Coming Soon</span> </a></li>
								<li><a href="under-maintenance.html"><span>Under Maintenance</span> </a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Content</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="pages.html">Pages</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Blog</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="all-blog.html">All Blog</a></li>
												<li><a href="blog-tag.html">Blog Tags</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Blog Comments</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Location</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html"><span>Testimonials</span></a></li>
										<li><a href="faq.html"><span>FAQ</span></a></li>
		
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employees-grid.html"><span>Employees</span></a></li>
										<li><a href="department-grid.html"><span>Departments</span></a></li>
										<li><a href="designation.html"><span>Designation</span></a></li>
										<li><a href="shift.html"><span>Shifts</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="attendance-employee.html">Employee Attendence</a></li>
										<li><a href="attendance-admin.html">Admin Attendence</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="leaves-admin.html">Admin Leaves</a></li>
										<li><a href="leaves-employee.html">Employee Leaves</a></li>
										<li><a href="leave-types.html">Leave Types</a></li>
										<li><a href="holidays.html"><span>Holidays</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="employee-salary.html"><span>Payroll</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employee-salary.html">Employee Salary</a></li>
										<li><a href="payslip.html">Payslip</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-chart-bar fs-16 me-2"></i><span>Reports</span><span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Sales Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="sales-report.html">Sales Report</a></li>
										<li><a href="best-seller.html">Best Seller</a></li>
									</ul>
								</li>
								<li><a href="purchase-report.html"><span>Purchase report</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Inventory Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="inventory-report.html">Inventory Report</a></li>
										<li><a href="stock-history.html">Stock History</a></li>
										<li><a href="sold-stock.html">Sold Stock</a></li>
									</ul>
								</li>
								<li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Supplier Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="supplier-report.html">Supplier Report</a></li>
										<li><a href="supplier-due-report.html">Supplier Due Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Customer Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="customer-report.html">Customer Report</a></li>
										<li><a href="customer-due-report.html">Customer Due Report</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Product Report</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="product-report.html">Product Report</a></li>
										<li><a href="product-expiry-report.html">Product Expiry Report</a></li>
										<li><a href="product-quantity-alert.html">Product Quantity Alert</a></li>
									</ul>
								</li>
								<li><a href="expense-report.html"><span>Expense Report</span></a></li>
								<li><a href="income-report.html"><span>Income Report</span></a></li>
								<li><a href="tax-reports.html"><span>Tax Report</span></a></li>
								<li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
								<li><a href="annual-report.html"><span>Annual Report</span></a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-settings fs-16 me-2"></i><span>Settings</span><span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="general-settings.html">Profile</a></li>
										<li><a href="security-settings.html">Security</a></li>
										<li><a href="notification.html">Notifications</a></li>
										<li><a href="connected-apps.html">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="system-settings.html">System Settings</a></li>
										<li><a href="company-settings.html">Company Settings </a></li>
										<li><a href="localization-settings.html">Localization</a></li>
										<li><a href="prefixes.html">Prefixes</a></li>
										<li><a href="preference.html">Preference</a></li>
										<li><a href="appearance.html">Appearance</a></li>
										<li><a href="social-authentication.html">Social Authentication</a></li>
										<li><a href="language-settings.html">Language</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Invoice<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="invoice-settings.html">Invoice Settings</a></li>
												<li><a href="invoice-template.html">Invoice Template</a></li>
											</ul>
										</li>
										<li><a href="printer-settings.html">Printer</a></li>
										<li><a href="pos-settings.html">POS</a></li>
										<li><a href="custom-fields.html">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-settings.html">Email Settings</a></li>
												<li><a href="email-template.html">Email Template</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="sms-settings.html">SMS Settings</a></li>
												<li><a href="sms-template.html">SMS Template</a></li>
											</ul>
										</li>
										<li><a href="otp-settings.html">OTP</a></li>
										<li><a href="gdpr-settings.html">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
										<li><a href="bank-settings-grid.html">Bank Accounts</a></li>
										<li><a href="tax-rates.html">Tax Rates</a></li>
										<li><a href="currency-settings.html">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="storage-settings.html">Storage</a></li>
										<li><a href="ban-ip-address.html">Ban IP Address</a></li>
									</ul>
								</li>
								<li>
									<a href="signin.html"><span>Logout</span> </a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="ti ti-circle-plus fs-16 me-2"></i><span>More</span><span class="menu-arrow"></span></a>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="customers.html"><span>Customers</span></a></li>
										<li><a href="billers.html"><span>Billers</span></a></li>
										<li><a href="suppliers.html"><span>Suppliers</span></a></li>
										<li><a href="store-list.html"><span>Stores</span></a></li>
										<li><a href="warehouse.html"><span>Warehouses</span></a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>User Management</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="users.html"><span>Users</span></a></li>
										<li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
										<li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><span>Help</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
										<li><a href="javascript:void(0);"><span>Changelog v2.0.9</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 1.1</a></li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 2.1</a></li>
														<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
															<ul>
																<li><a href="javascript:void(0);">Level 3.1</a></li>
																<li><a href="javascript:void(0);">Level 3.2</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Horizontal Sidebar -->

		<!-- Two Col Sidebar -->
		<div class="two-col-sidebar" id="two-col-sidebar">
			<div class="sidebar sidebar-twocol">
				<div class="twocol-mini">
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist"
							aria-orientation="vertical">
							<a href="#" class="nav-link active" title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link " title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link" title="Inventory" data-bs-toggle="tab" data-bs-target="#inventory">
								<i class="ti ti-table-plus"></i>
							</a>
							<a href="#" class="nav-link" title="Stock" data-bs-toggle="tab" data-bs-target="#stock">
								<i class="ti ti-stack-3"></i>
							</a>
							<a href="#" class="nav-link" title="Sales" data-bs-toggle="tab" data-bs-target="#sales">
								<i class="ti ti-device-laptop"></i>
							</a>
							<a href="#" class="nav-link" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
								<i class="ti ti-shopping-cart-dollar"></i>
							</a>
							<a href="#" class="nav-link" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
								<i class="ti ti-cash"></i>
							</a>
							<a href="#" class="nav-link" title="Reports" data-bs-toggle="tab" data-bs-target="#reports">
								<i class="ti ti-license"></i>
							</a>
							<a href="#" class="nav-link" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
								<i class="ti ti-page-break"></i>
							</a>
							<a href="#" class="nav-link" title="Settings" data-bs-toggle="tab" data-bs-target="#settings">
								<i class="ti ti-lock-check"></i>
							</a>
							<a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab" data-bs-target="#ui-elements">
								<i class="ti ti-ux-circle"></i>
							</a>
							<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
								<i class="ti ti-vector-triangle"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="sidebar-right">
					<!-- Logo -->
					<div class="sidebar-logo">
						<a href="index-2.html" class="logo logo-normal">
							<img src="assets/img/logo.svg" alt="Img">
						</a>
						<a href="index-2.html" class="logo logo-white">
							<img src="assets/img/logo-white.svg" alt="Img">
						</a>
						<a href="index-2.html" class="logo-small">
							<img src="assets/img/logo-small.png" alt="Img">
						</a>
					</div>
					<!-- /Logo -->
					<div class="sidebar-scroll">
						<div class="text-center rounded bg-light p-3 mb-3 border">
							<div class="avatar avatar-lg online mb-3">
								<img src="assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
							</div>
							<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
							<p class="fs-12 mb-0">System Admin</p>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="dashboard">
								<ul>
									<li class="menu-title"><span>MAIN</span></li>
									<li><a href="index-2.html" class="active">Admin Dashboard</a></li>
									<li><a href="admin-dashboard.html">Admin Dashboard 2</a></li>
									<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="super-admin">
								<ul>
									<li class="menu-title"><span>SUPER ADMIN</span></li>
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="companies.html">Companies</a></li>
									<li><a href="subscription.html">Subscriptions</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="domain.html">Domain</a></li>
									<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="application">
								<ul>
									<li><a href="chat.html">Chat</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="video-call.html">Video Call</a></li>
											<li><a href="audio-call.html">Audio Call</a></li>
											<li><a href="call-history.html">Call History</a></li>
										</ul>
									</li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="email.html">Email</a></li>
									<li><a href="todo.html">To Do</a></li>
									<li><a href="notes.html">Notes</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
									<li><a href="projects.html">Projects</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Ecommerce<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="products.html">Products</a></li>
											<li><a href="orders.html">Orders</a></li>
											<li><a href="customers.html">Customers</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Checkout</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="reviews.html">Reviews</a></li>
										</ul>
									</li>
									<li><a href="social-feed.html">Social Feed</a></li>
									<li><a href="search-list.html">Search List</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="layout">
								<ul>
									<li class="menu-title"><span>LAYOUT</span></li>
									<li><a href="layout-horizontal.html">Horizontal</a></li>
									<li><a href="layout-detached.html">Detached</a></li>
									<li><a href="layout-two-column.html">Two Column</a></li>
									<li><a href="layout-hovered.html">Hovered</a></li>
									<li><a href="layout-boxed.html">Boxed</a></li>
									<li><a href="layout-rtl.html">RTL</a></li>
									<li><a href="layout-dark.html">Dark</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="inventory">
								<ul>
									<li class="menu-title"><span>Inventory</span></li>
									<li><a href="product-list.html"><span>Products</span></a></li>
									<li><a href="add-product.html"><span>Create Product</span></a></li>
									<li><a href="expired-products.html"><span>Expired Products</span></a></li>
									<li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
									<li><a href="category-list.html"><span>Category</span></a></li>
									<li><a href="sub-categories.html"><span>Sub Category</span></a></li>
									<li><a href="brand-list.html"><span>Brands</span></a></li>
									<li><a href="units.html"><span>Units</span></a></li>
									<li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
									<li><a href="warranty.html"><span>Warranties</span></a></li>
									<li><a href="barcode.html"><span>Print Barcode</span></a></li>
									<li><a href="qrcode.html"><span>Print QR Code</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="stock">
								<ul>
									<li class="menu-title"><span>Stock</span></li>
									<li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
									<li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
									<li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="sales">
								<ul>
									<li class="menu-title"><span>Sales</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="online-orders.html">Online Orders</a></li>
											<li><a href="pos-orders.html">POS Orders</a></li>
										</ul>
									</li>
									<li><a href="invoice.html"><span>Invoices</span></a></li>
									<li><a href="sales-returns.html"><span>Sales Return</span></a></li>
									<li><a href="quotation-list.html"><span>Quotation</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>POS</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="pos.html">POS 1</a></li>
											<li><a href="pos-2.html">POS 2</a></li>
											<li><a href="pos-3.html">POS 3</a></li>
											<li><a href="pos-4.html">POS 4</a></li>
											<li><a href="pos-5.html">POS 5</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="finance">
								<ul>
									<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
									<li><a href="coupons.html"><span>Coupons</span></a></li>
									<li><a href="gift-cards.html"><span>Gift Cards</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Discount</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="discount-plan.html">Discount Plan</a></li>
											<li><a href="discount.html">Discount</a></li>
										</ul>
									</li>
									<li><a href="purchase-list.html"><span>Purchases</span></a></li>
									<li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
									<li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="expense-list.html">Expenses</a></li>
											<li><a href="expense-category.html">Expense Category</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Income</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="income.html">Income</a></li>
											<li><a href="income-category.html">Income Category</a></li>
										</ul>
									</li>
									<li><a href="account-list.html"><span>Bank Accounts</span></a></li>
									<li><a href="money-transfer.html"><span>Money Transfer</span></a></li>
									<li><a href="balance-sheet.html"><span>Balance Sheet</span></a></li>
									<li><a href="trial-balance.html"><span>Trial Balance</span></a></li>
									<li><a href="cash-flow.html"><span>Cash Flow</span></a></li>
									<li><a href="account-statement.html"><span>Account Statement</span></a></li>
									<li><a href="customers.html"><span>Customers</span></a></li>
									<li><a href="billers.html"><span>Billers</span></a></li>
									<li><a href="suppliers.html"><span>Suppliers</span></a></li>
									<li><a href="store-list.html"><span>Stores</span></a></li>
									<li><a href="warehouse.html"><span>Warehouses</span></a></li>							
								</ul>
							</div>
							<div class="tab-pane fade" id="hrm">
								<ul>
									<li class="menu-title"><span>Hrm</span></li>
									<li><a href="employees-grid.html"><span>Employees</span></a></li>
									<li><a href="department-grid.html"><span>Departments</span></a></li>
									<li><a href="designation.html"><span>Designation</span></a></li>
									<li><a href="shift.html"><span>Shifts</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="attendance-employee.html">Employee</a></li>
											<li><a href="attendance-admin.html">Admin</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="leaves-admin.html">Admin Leaves</a></li>
											<li><a href="leaves-employee.html">Employee Leaves</a></li>
											<li><a href="leave-types.html">Leave Types</a></li>
										</ul>
									</li>
									<li><a href="holidays.html"><span>Holidays</span></a>
									</li>
									<li class="submenu">
										<a href="employee-salary.html"><span>Payroll</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="employee-salary.html">Employee Salary</a></li>
											<li><a href="payslip.html">Payslip</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="reports">
								<ul>
									<li class="menu-title"><span>Reports</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="sales-report.html">Sales Report</a></li>
											<li><a href="best-seller.html">Best Seller</a></li>
										</ul>
									</li>
									<li><a href="purchase-report.html"><span>Purchase report</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Inventory Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="inventory-report.html">Inventory Report</a></li>
											<li><a href="stock-history.html">Stock History</a></li>
											<li><a href="sold-stock.html">Sold Stock</a></li>
										</ul>
									</li>
									<li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Supplier Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="supplier-report.html">Supplier Report</a></li>
											<li><a href="supplier-due-report.html">Supplier Due Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Customer Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="customer-report.html">Customer Report</a></li>
											<li><a href="customer-due-report.html">Customer Due Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Product Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="product-report.html">Product Report</a></li>
											<li><a href="product-expiry-report.html">Product Expiry Report</a></li>
											<li><a href="product-quantity-alert.html">Product Quantity Alert</a></li>
										</ul>
									</li>
									<li><a href="expense-report.html"><span>Expense Report</span></a></li>
									<li><a href="income-report.html"><span>Income Report</span></a></li>
									<li><a href="tax-reports.html"><span>Tax Report</span></a></li>
									<li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
									<li><a href="annual-report.html"><span>Annual Report</span></a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="pages">
								<ul>
									<li class="menu-title"><span>Pages</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="pages.html">Pages</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Blog</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="all-blog.html">All Blog</a></li>
											<li><a href="blog-tag.html">Blog Tags</a></li>
											<li><a href="blog-categories.html">Categories</a></li>
											<li><a href="blog-comments.html">Blog Comments</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Location</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="countries.html">Countries</a></li>
											<li><a href="states.html">States</a></li>
											<li><a href="cities.html">Cities</a></li>
										</ul>
									</li>
									<li><a href="testimonials.html"><span>Testimonials</span></a></li>
									<li><a href="faq.html"><span>FAQ</span></a></li>
									<li><a href="users.html"><span>Users</span></a></li>
									<li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
									<li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
									<li><a href="profile.html"><span>Profile</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="signin.html">Cover</a></li>
													<li><a href="signin-2.html">Illustration</a></li>
													<li><a href="signin-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="register.html">Cover</a></li>
													<li><a href="register-2.html">Illustration</a></li>
													<li><a href="register-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="forgot-password.html">Cover</a></li>
													<li><a href="forgot-password-2.html">Illustration</a></li>
													<li><a href="forgot-password-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="reset-password.html">Cover</a></li>
													<li><a href="reset-password-2.html">Illustration</a></li>
													<li><a href="reset-password-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="email-verification.html">Cover</a></li>
													<li><a href="email-verification-2.html">Illustration</a></li>
													<li><a href="email-verification-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="two-step-verification.html">Cover</a></li>
													<li><a href="two-step-verification-2.html">Illustration</a></li>
													<li><a href="two-step-verification-3.html">Basic</a></li>
												</ul>
											</li>
											<li><a href="lock-screen.html">Lock Screen</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="error-404.html">404 Error </a></li>
											<li><a href="error-500.html">500 Error </a></li>
										</ul>
									</li>
									<li>
										<a href="blank-page.html"><span>Blank Page</span> </a>
									</li>
									<li>
										<a href="pricing.html"><span>Pricing</span> </a>
									</li>
									<li>
										<a href="coming-soon.html"><span>Coming Soon</span> </a>
									</li>
									<li>
										<a href="under-maintenance.html"><span>Under Maintenance</span> </a>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="settings">
								<ul>
									<li class="menu-title"><span>Settings</span></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="general-settings.html">Profile</a></li>
											<li><a href="security-settings.html">Security</a></li>
											<li><a href="notification.html">Notifications</a></li>
											<li><a href="connected-apps.html">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="system-settings.html">System Settings</a></li>
											<li><a href="company-settings.html">Company Settings </a></li>
											<li><a href="localization-settings.html">Localization</a></li>
											<li><a href="prefixes.html">Prefixes</a></li>
											<li><a href="preference.html">Preference</a></li>
											<li><a href="appearance.html">Appearance</a></li>
											<li><a href="social-authentication.html">Social Authentication</a></li>
											<li><a href="language-settings.html">Language</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<span>App Settings</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Invoice<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="invoice-settings.html">Invoice Settings</a></li>
													<li><a href="invoice-template.html">Invoice Template</a></li>
												</ul>
											</li>
											<li><a href="printer-settings.html">Printer</a></li>
											<li><a href="pos-settings.html">POS</a></li>
											<li><a href="custom-fields.html">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<span>System Settings</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="email-settings.html">Email Settings</a></li>
													<li><a href="email-template.html">Email Template</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="sms-settings.html">SMS Settings</a></li>
													<li><a href="sms-template.html">SMS Template</a></li>
												</ul>
											</li>
											<li><a href="otp-settings.html">OTP</a></li>
											<li><a href="gdpr-settings.html">GDPR Cookies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<span>Financial Settings</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
											<li><a href="bank-settings-grid.html">Bank Accounts</a></li>
											<li><a href="tax-rates.html">Tax Rates</a></li>
											<li><a href="currency-settings.html">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);">
											<span>Other Settings</span><span class="menu-arrow"></span>
										</a>
										<ul>
											<li><a href="storage-settings.html">Storage</a></li>
											<li><a href="ban-ip-address.html">Ban IP Address</a></li>
										</ul>
									</li>
									<li>
										<a href="signin.html"><span>Logout</span> </a>
									</li>
								</ul>
							</div>
							
							<div class="tab-pane fade" id="extras">
								<ul>
									<li class="menu-title"><span>Help</span></li>
									<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
									<li><a href="javascript:void(0);"><span>Changelog v2.0.9</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Level 1.1</a></li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 2.1</a></li>
													<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Level 3.1</a></li>
															<li><a href="javascript:void(0);">Level 3.2</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Two Col Sidebar -->

		<div class="page-wrapper">
			<div class="content">

				<div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-2">
					<div class="mb-3">
						<h1 class="mb-1">Welcome, Admin</h1>
						<p class="fw-medium">You have <span class="text-primary fw-bold">200+</span> Orders, Today</p>
					</div>
					<div class="input-icon-start position-relative mb-3">
						<span class="input-icon-addon fs-16 text-gray-9">
							<i class="ti ti-calendar"></i>
						</span>
						<input type="text" class="form-control date-range bookingrange" placeholder="Search Product">
					</div>
				</div>

				<div class="alert bg-orange-transparent alert-dismissible fade show mb-4">
					<div>
						<span><i class="ti ti-info-circle fs-14 text-orange me-2"></i>Your Product </span> <span class="text-orange fw-semibold"> Apple Iphone 15 is running Low, </span> already below 5 Pcs., <a href="javascript:void(0);" class="link-orange text-decoration-underline fw-semibold" data-bs-toggle="modal" data-bs-target="#add-stock">Add Stock</a>
					</div>
					<button type="button" class="btn-close text-gray-9 fs-14" data-bs-dismiss="alert" aria-label="Close"><i class="ti ti-x"></i></button>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-primary sale-widget flex-fill">
							<div class="card-body d-flex align-items-center">
								<span class="sale-icon bg-white text-primary">
									<i class="ti ti-file-text fs-24"></i>
								</span>
								<div class="ms-2">
									<p class="text-white mb-1">Total Sales</p>
									<div class="d-inline-flex align-items-center flex-wrap gap-2">
										<h4 class="text-white">$48,988,078</h4>
										<span class="badge badge-soft-primary"><i class="ti ti-arrow-up me-1"></i>+22%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-secondary sale-widget flex-fill">
							<div class="card-body d-flex align-items-center">
								<span class="sale-icon bg-white text-secondary">
									<i class="ti ti-repeat fs-24"></i>
								</span>
								<div class="ms-2">
									<p class="text-white mb-1">Total Sales Return</p>
									<div class="d-inline-flex align-items-center flex-wrap gap-2">
										<h4 class="text-white">$16,478,145</h4>
										<span class="badge badge-soft-danger"><i class="ti ti-arrow-down me-1"></i>-22%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-teal sale-widget flex-fill">
							<div class="card-body d-flex align-items-center">
								<span class="sale-icon bg-white text-teal">
									<i class="ti ti-gift fs-24"></i>
								</span>
								<div class="ms-2">
									<p class="text-white mb-1">Total Purchase</p>
									<div class="d-inline-flex align-items-center flex-wrap gap-2">
										<h4 class="text-white">$24,145,789</h4>
										<span class="badge badge-soft-success"><i class="ti ti-arrow-up me-1"></i>+22%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card bg-info sale-widget flex-fill">
							<div class="card-body d-flex align-items-center">
								<span class="sale-icon bg-white text-info">
									<i class="ti ti-brand-pocket fs-24"></i>
								</span>
								<div class="ms-2">
									<p class="text-white mb-1">Total Purchase Return</p>
									<div class="d-inline-flex align-items-center flex-wrap gap-2">
										<h4 class="text-white">$18,458,747</h4>
										<span class="badge badge-soft-success"><i class="ti ti-arrow-up me-1"></i>+22%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<div class="row">

					<!-- Profit -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card revenue-widget flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
									<div>
										<h4 class="mb-1">$8,458,798</h4>
										<p>Profit</p>
									</div>
									<span class="revenue-icon bg-cyan-transparent text-cyan">
										<i class="fa-solid fa-layer-group fs-16"></i>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<p class="mb-0"><span class="fs-13 fw-bold text-success">+35%</span> vs Last Month</p>
									<a href="profit-and-loss.html" class="text-decoration-underline fs-13 fw-medium">View All</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Profit -->

					<!-- Invoice -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card revenue-widget flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
									<div>
										<h4 class="mb-1">$48,988,78</h4>
										<p>Invoice Due</p>
									</div>
									<span class="revenue-icon bg-teal-transparent text-teal">
										<i class="ti ti-chart-pie fs-16"></i>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<p class="mb-0"><span class="fs-13 fw-bold text-success">+35%</span> vs Last Month</p>
									<a href="invoice-report.html" class="text-decoration-underline fs-13 fw-medium">View All</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Invoice -->

					<!-- Expenses -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card revenue-widget flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
									<div>
										<h4 class="mb-1">$8,980,097</h4>
										<p>Total Expenses</p>
									</div>
									<span class="revenue-icon bg-orange-transparent text-orange">
										<i class="ti ti-lifebuoy fs-16"></i>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<p class="mb-0"><span class="fs-13 fw-bold text-success">+41%</span> vs Last Month</p>
									<a href="expense-list.html" class="text-decoration-underline fs-13 fw-medium">View All</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Expenses -->

					<!-- Returns -->
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card revenue-widget flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
									<div>
										<h4 class="mb-1">$78,458,798</h4>
										<p>Total Payment Returns</p>
									</div>
									<span class="revenue-icon bg-indigo-transparent text-indigo">
										<i class="ti ti-hash fs-16"></i>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<p class="mb-0"><span class="fs-13 fw-bold text-danger">-20%</span> vs Last Month</p>
									<a href="sales-report.html" class="text-decoration-underline fs-13 fw-medium">View All</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Returns -->

				</div>

				<div class="row">

					<!-- Sales & Purchase -->
					<div class="col-xxl-8 col-xl-7 col-sm-12 col-12 d-flex">
						<div class="card flex-fill">
							<div class="card-header d-flex justify-content-between align-items-center">
								<div class="d-inline-flex align-items-center">
									<span class="title-icon bg-soft-primary fs-16 me-2"><i class="ti ti-shopping-cart"></i></span>
									<h5 class="card-title mb-0">Sales & Purchase</h5>
								</div>
								<ul class="nav btn-group custom-btn-group">
									<a class="btn btn-outline-light" href="javascript:void(0);">1D</a>
									<a class="btn btn-outline-light" href="javascript:void(0);">1W</a>
									<a class="btn btn-outline-light" href="javascript:void(0);">1M</a>
									<a class="btn btn-outline-light" href="javascript:void(0);">3M</a>
									<a class="btn btn-outline-light" href="javascript:void(0);">6M</a>
									<a class="btn btn-outline-light active" href="javascript:void(0);">1Y</a>
								</ul>
							</div>
							<div class="card-body pb-0">
								<div>
									<div class="d-flex align-items-center gap-2">
										<div class="border p-2 br-8">
											<p class="d-inline-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-primary-300 me-1"></i>Total Purchase</p>
											<h4>3K</h4>
										</div>
										<div class="border p-2 br-8">
											<p class="d-inline-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-primary me-1"></i>Total Sales</p>
											<h4>1K</h4>
										</div>
									</div>
									<div id="sales-daychart"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Sales & Purchase -->

					<!-- Top Selling Products -->
					<div class="col-xxl-4 col-xl-5 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="d-inline-flex align-items-center">
									<span class="title-icon bg-soft-info fs-16 me-2"><i class="ti ti-info-circle"></i></span>
									<h5 class="card-title mb-0">Overall Information</h5>
								</div>
							</div>
							<div class="card-body">
								<div class="row g-3">
									<div class="col-md-4">
										<div class="info-item border bg-light p-3 text-center">
											<div class="mb-2 text-info fs-24">
												<i class="ti ti-user-check"></i>
											</div>
											<p class="mb-1">Suppliers</p>
											<h5>6987</h5>
										</div>
									</div>
									<div class="col-md-4">
										<div class="info-item border bg-light p-3 text-center">
											<div class="mb-2 text-orange fs-24">
												<i class="ti ti-users"></i>
											</div>
											<p class="mb-1">Customer</p>
											<h5>4896</h5>
										</div>
									</div>
									<div class="col-md-4">
										<div class="info-item border bg-light p-3 text-center">
											<div class="mb-2 text-teal fs-24">
												<i class="ti ti-shopping-cart"></i>
											</div>
											<p class="mb-1">Orders</p>
											<h5>487</h5>
										</div>
									</div>
								</div>
							</div>
<?php include("footer.php"); ?>