<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="{{ url('backend/index3.html') }}" class="brand-link">
				<img src="{{ url('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
						class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel d-flex mb-3 mt-3 pb-3">
						<div class="image">
								<img src="{{ url('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
								<a href="#" class="d-block">Alexander Pierce</a>
						</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
						<div class="input-group" data-widget="sidebar-search">
								<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
										<button class="btn btn-sidebar">
												<i class="fas fa-search fa-fw"></i>
										</button>
								</div>
						</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
								<!-- Add icons to the links using the .nav-icon class
															with font-awesome or any other icon font library -->

								<li class="nav-item">
										<a href="{{ url('admin') }}" class="nav-link {{ !Request::segment(2) ? 'active' : '' }}">
												<i class="nav-icon fa-solid fa-house-chimney"></i>
												<p>
														Dashboard
												</p>
										</a>
								</li>
								<li class="nav-header">USERS</li>
								<li class="nav-item">
										<a href="{{ '' }}"
												class="nav-link {{ Request::segment(2) === 'teacher' || request()->is('admin/teacher/*/edit') ? 'active' : '' }}">
												<i class="nav-icon fa-solid fa-users-line"></i>
												<p>
														Teachers
												</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="{{ url('backend/pages/gallery.html') }}" class="nav-link">
												<i class="nav-icon fa-solid fa-users"></i>
												<p>
														Student
												</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="{{ url('admin/credits') }}" class="nav-link">
												<i class="nav-icon fa-solid fa-gears"></i>
												<p>
														Credits
												</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="{{ url('backend/pages/kanban.html') }}" class="nav-link">
												<i class="nav-icon fas fa-columns"></i>
												<p>
														Kanban Board
												</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon far fa-envelope"></i>
												<p>
														Mailbox
														<i class="fas fa-angle-left right"></i>
												</p>
										</a>
										<ul class="nav nav-treeview">
												<li class="nav-item">
														<a href="{{ url('backend/pages/mailbox/mailbox.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Inbox</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/mailbox/compose.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Compose</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/mailbox/read-mail.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Read</p>
														</a>
												</li>
										</ul>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon fas fa-book"></i>
												<p>
														Pages
														<i class="fas fa-angle-left right"></i>
												</p>
										</a>
										<ul class="nav nav-treeview">
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/invoice.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Invoice</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/profile.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Profile</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/e-commerce.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>E-commerce</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/projects.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Projects</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/project-add.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Project Add</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/project-edit.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Project Edit</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/project-detail.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Project Detail</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/contacts.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Contacts</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/faq.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>FAQ</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/contact-us.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Contact us</p>
														</a>
												</li>
										</ul>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon far fa-plus-square"></i>
												<p>
														Extras
														<i class="fas fa-angle-left right"></i>
												</p>
										</a>
										<ul class="nav nav-treeview">
												<li class="nav-item">
														<a href="#" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>
																		Login & Register v1
																		<i class="fas fa-angle-left right"></i>
																</p>
														</a>
														<ul class="nav nav-treeview">
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/login.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Login v1</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/register.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Register v1</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/forgot-password.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Forgot Password v1</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/recover-password.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Recover Password v1</p>
																		</a>
																</li>
														</ul>
												</li>
												<li class="nav-item">
														<a href="#" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>
																		Login & Register v2
																		<i class="fas fa-angle-left right"></i>
																</p>
														</a>
														<ul class="nav nav-treeview">
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/login-v2.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Login v2</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/register-v2.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Register v2</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/forgot-password-v2.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Forgot Password v2</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="{{ url('backend/pages/examples/recover-password-v2.html') }}" class="nav-link">
																				<i class="far fa-circle nav-icon"></i>
																				<p>Recover Password v2</p>
																		</a>
																</li>
														</ul>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/lockscreen.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Lockscreen</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/legacy-user-menu.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Legacy User Menu</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/language-menu.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Language Menu</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/404.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Error 404</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/500.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Error 500</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/pace.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Pace</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/examples/blank.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Blank Page</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('starter.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Starter Page</p>
														</a>
												</li>
										</ul>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon fas fa-search"></i>
												<p>
														Search
														<i class="fas fa-angle-left right"></i>
												</p>
										</a>
										<ul class="nav nav-treeview">
												<li class="nav-item">
														<a href="{{ url('backend/pages/search/simple.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Simple Search</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="{{ url('backend/pages/search/enhanced.html') }}" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Enhanced</p>
														</a>
												</li>
										</ul>
								</li>
								<li class="nav-header">MISCELLANEOUS</li>
								<li class="nav-item">
										<a href="{{ url('iframe.html') }}" class="nav-link">
												<i class="nav-icon fas fa-ellipsis-h"></i>
												<p>Tabbed IFrame Plugin</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="https://adminlte.io/docs/3.1/" class="nav-link">
												<i class="nav-icon fas fa-file"></i>
												<p>Documentation</p>
										</a>
								</li>
								<li class="nav-header">MULTI LEVEL EXAMPLE</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="fas fa-circle nav-icon"></i>
												<p>Level 1</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon fas fa-circle"></i>
												<p>
														Level 1
														<i class="right fas fa-angle-left"></i>
												</p>
										</a>
										<ul class="nav nav-treeview">
												<li class="nav-item">
														<a href="#" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Level 2</p>
														</a>
												</li>
												<li class="nav-item">
														<a href="#" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>
																		Level 2
																		<i class="right fas fa-angle-left"></i>
																</p>
														</a>
														<ul class="nav nav-treeview">
																<li class="nav-item">
																		<a href="#" class="nav-link">
																				<i class="far fa-dot-circle nav-icon"></i>
																				<p>Level 3</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="#" class="nav-link">
																				<i class="far fa-dot-circle nav-icon"></i>
																				<p>Level 3</p>
																		</a>
																</li>
																<li class="nav-item">
																		<a href="#" class="nav-link">
																				<i class="far fa-dot-circle nav-icon"></i>
																				<p>Level 3</p>
																		</a>
																</li>
														</ul>
												</li>
												<li class="nav-item">
														<a href="#" class="nav-link">
																<i class="far fa-circle nav-icon"></i>
																<p>Level 2</p>
														</a>
												</li>
										</ul>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="fas fa-circle nav-icon"></i>
												<p>Level 1</p>
										</a>
								</li>
								<li class="nav-header">LABELS</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon far fa-circle text-danger"></i>
												<p class="text">Important</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon far fa-circle text-warning"></i>
												<p>Warning</p>
										</a>
								</li>
								<li class="nav-item">
										<a href="#" class="nav-link">
												<i class="nav-icon far fa-circle text-info"></i>
												<p>Informational</p>
										</a>
								</li>
								<li class="nav-header">SIGN OUT</li>
								<li class="nav-item">
										{{-- @auth                                 --}}
										<a href="" class="nav-link">
												<form action="{{ url('logout') }}" method="POST" class="form-inline">
														@csrf
														<button class="dropdown-item has-icon text-danger submit-logout" type="submit">
																<i class="ml-n3 nav-icon fas fa-sign-out-alt fa-lg text-danger"></i>
																<p>Logout</p>
														</button>
												</form>
												{{-- @endauth --}}
										</a>
								</li>
						</ul>
				</nav>
				<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
</aside>
