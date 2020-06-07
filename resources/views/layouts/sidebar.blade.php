<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dashboard')}}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            <span class="brand-text font-weight-light" style="color: white"></span>
        </div>
        <div class="info">

        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--            @role('admin')--}}
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ Request::is('users*') || Request::is('role*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Access Control
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('users.index')}}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User Lists</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('role.index')}}" class="nav-link {{ Request::is('role*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('permission.index')}}" class="nav-link {{ Request::is('graphs*') ? 'active' : '' }}">

                            <i class="far fa-circle nav-icon"></i>
                            <p>Permission</p>
                        </a>
                    </li>
                </ul>
            </li>
{{--            @endrole--}}
            <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link {{ Request::is('/*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                        Welcome
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/create-test')}}" class="nav-link {{ Request::is('create-test*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-plus"></i>
                    <p>
                        Create Test
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/previous-test')}}" class="nav-link {{ Request::is('previous-test*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Previous Test
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ Request::is('reports*') || Request::is('graphs*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Performance
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('/reports')}}" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/graphs')}}" class="nav-link {{ Request::is('graphs*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Graphs</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{url('/search')}}" class="nav-link {{ Request::is('search*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-search"></i>
                    <p>
                        Search
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/notes')}}" class="nav-link {{ Request::is('notes*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-notes-medical"></i>
                    <p>
                        Notes
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/flash-cards')}}" class="nav-link {{ Request::is('flash-cards*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-flask"></i>
                    <p>
                        Flash Cards
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/reset')}}" class="nav-link {{ Request::is('reset*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-circle"></i>
                    <p>
                        Reset
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/help')}}" class="nav-link {{ Request::is('help*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Help</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/list-how-to-use')}}" class="nav-link {{ Request::is('list-how-to-use*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>How to Use List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/faq-list')}}" class="nav-link {{ Request::is('faq-list*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>FAQ List</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
