<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/images/pns.jpeg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->nik}}</p>
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
            {{-- <li>
                <a href="{{ route('profil.profil',Auth::user()->id) }}"> <i class="fa fa-building-o"></i>
                    <span>Profil</span>
                </a>
            </li> --}}
            {{-- <li><a href="{{ route('kelengkapan.index') }}"><i class="fa fa-book"></i> <span>Kelengkapan</span></a> --}}
            </li>
            <li><a href="{{ route('dpt.index') }}"><i class="fa fa-book"></i> <span>Data DPT</span></a>
            </li>
            <li><a href="{{ route('keberatan.index') }}"><i class="fa fa-book"></i> <span>Data Keberatan</span></a>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>