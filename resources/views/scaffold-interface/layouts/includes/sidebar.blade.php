<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('scaffold-dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>
            <li class="header">ADMINISTRATOR</li>
            <li class="treeview"><a href="{{url('/scaffold-users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li class="header">Game Settings</li>
            <li class="treeview"><a href="{{url('/game')}}"><i class="fa fa-gamepad"></i> <span>Games</span></a></li>
            <li class="treeview"><a href="{{url('/availablegame')}}"><i class="fa fa-gamepad"></i> <span>Available Games</span></a></li>
            {{--<li class="treeview"><a href="{{url('/scaffold-roles')}}"><i class="fa fa-user-plus"></i> <span>Role</span></a></li>--}}
            {{--<li class="treeview"><a href="{{url('/scaffold-permissions')}}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>--}}
            <li class="header">Match Settings</li>
            <li class="treeview"><a href="{{url('/match')}}"><i class="fa fa-gamepad"></i> <span>Matches</span></a></li>
            <li class="header">Scaffold Interface</li>
            <li class="treeview"><a href="{{url('/scaffold')}}"><i class="fa fa-desktop"></i> <span>Scaffold Interface</span></a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>