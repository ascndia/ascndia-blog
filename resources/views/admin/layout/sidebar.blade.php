<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href=""><i class="fa fa-circle-o"></i>Dashboard</a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tb"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i>Manage Blog</a>
                    </li>
                    <li>
                        <a href="../charts/morris.html"><i class="fa fa-circle-o"></i>Write Blog</a>
                    </li>
                    <li>
                        <a href="../charts/flot.html"><i class="fa fa-circle-o"></i>Edit Blog</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    {{-- Super Categories --}}

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Super Category
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Manage Super Categoies</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Add Super Category</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Super Category Setting</a>
                            </li>
                        </ul>
                    </li>

                    {{-- Subcategories --}}

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Sub Category
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Manage Sub Categoies</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Add Sub Category</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i>Sub Category Setting</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="header">SETTINGS</li>
            <li>
                <a href="#"><i class="fa fa-circle-o text-red"></i>
                    <span>Settings</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-circle-o text-yellow"></i>
                    <span>Configuration</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-circle-o text-aqua"></i>
                    <span>Information</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
