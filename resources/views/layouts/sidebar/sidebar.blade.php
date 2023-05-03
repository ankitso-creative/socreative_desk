<style>.home-logo {width: 80%;}
.menu-sidebar {
    width: 270px;
}
.account-dropdown {
    min-width: 231px;
    top: 46px;
	}
.account-dropdown__body {
    padding: 0px 0;
}
.account-dropdown__item a:hover {
    background: #2b4675 !important;
    color: #fff;
}
.account-dropdown__footer a:hover {
    background: #2b4675 !important;
    color: #fff;
}
.navbar-sidebar .navbar__list li a {
    color: #484848;
    font-size: 14px;
    padding: 11px 0;
    border-bottom: 1px solid #cbcaca;
}
.header-desktop {
    left: 268px;
}
.ticket_new {
    background: #1cab3c;
    color: #fff;
    padding: 1px 4px;
    font-size: 12px;
    border-radius: 3px;
}

</style>

 <!-- BEGIN CONTAINER -->
   <!-- MENU SIDEBAR-->
	<!-- 
		//$ticket_new = $this->common_model->GetTotalCount(TICKETS_TABLE,array('admin_read' => 0));
	 -->
   <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href=""><img src="{{ asset('assets/admin/images/logo.png') }}"class="home-logo img-fluid"></a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="">
                            <a href=""><i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
						<li class="">
							<a href=""><i class="fa fa-users"></i>Manage Roles</a>
						</li> 
						<li class="">
                            <a href=""><i class="fa fa-file"></i>Manage Projects <span class="ticket_new">0</span></a>
						</li> 
						<li class="">
							<a href=""><i class="fas fa-user"></i>Manage Clients</a>
						</li>
						
						<li class="">
                            <a href=""><i class="fa fa-rocket"></i>Manage Tickets <span class="ticket_new">0</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
		
    <!-- END MENU SIDEBAR-->