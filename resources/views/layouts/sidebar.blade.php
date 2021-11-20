<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/images/pns.jpeg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->npsn}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('home.dashboard') }}"> <i class="fa fa-building-o"></i>
                    <span>Menu Awal</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profil.index') }}"> <i class="fa fa-building-o"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li><a href="{{ route('kelengkapan.index') }}"><i class="fa fa-book"></i> <span>Kelengkapan</span></a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Pengajuan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('pengajuan.index') }}"><i class="fa fa-circle-o"></i> Daftar Pengajuan</a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Calon Peserta UPK</U></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('upka.index') }}"><i class="fa fa-circle-o"></i> Paket A</a>
                            </li>
                            <li><a href="{{ route('upkbc.index') }}"><i class="fa fa-circle-o"></i> Paket B/C</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('sarana.index') }}"><i class="fa fa-circle-o"></i> Sara Prasarana</a></li>
                    <li><a href="{{ route('jadwal.index') }}"><i class="fa fa-circle-o"></i> Jadwal Pelajaran</a></li>
                    <li><a href="{{ route('tutor.index') }}"><i class="fa fa-circle-o"></i> Data Tutor</a></li>
                    <li><a href="{{ route('rab.index') }}"><i class="fa fa-circle-o"></i> Rencana Anggaran Belanja</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Calon Peserta</U></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('a.index') }}"><i class="fa fa-circle-o"></i> Paket A</a>
                            </li>
                            <li><a href="{{ route('bc.index') }}"><i class="fa fa-circle-o"></i> Paket B/C</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="{{ route('pelaporan.index') }}"><i class="fa fa-book"></i> <span>Pelaporan</span></a>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>