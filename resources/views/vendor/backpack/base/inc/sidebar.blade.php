@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image"> <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image"> </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('backpack::base.administration') }}</li>
            <!-- ================================================ -->
            <!-- ==== Recommended place for admin menu items ==== -->
            <!-- ================================================ -->
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

            <li class="header">{{ trans('GESTION') }}</li>
            <li><a href="{{ url('admin/person') }}"><i class="fa fa-id-card"></i> <span>Personne</span></a></li>
            <li><a href="{{ url('admin/type_person') }}"><i class="fa fa-tag"></i> <span>Type de personne</span></a></li>
            <li><a href="{{ url('admin/activity') }}"><i class="fa fa-tag"></i> <span>Activités</span></a></li>
            <li><a href="{{ url('admin/types_activity') }}"><i class="fa fa-tag"></i> <span>Type d'activités</span></a></li>
            <li><a href="{{ url('admin/formula') }}"><i class="fa fa-tag"></i> <span>Formule</span></a></li>
            <li><a href="{{ url('admin/instrument') }}"><i class="fa fa-tag"></i> <span>Instrument</span></a></li>
            <li><a href="{{ url('admin/city') }}"><i class="fa fa-industry"></i> <span>Ville</span></a></li>
            <li><a href="{{ url('admin/district') }}"><i class="fa fa-building"></i> <span>Quartier</span></a></li>
            <li><a href="{{ url('admin/location') }}"><i class="fa fa-map"></i> <span>Lieu</span></a></li>
            <li class="header">{{ trans('GESTION PAIEMENT') }}</li>
            <li><a href="{{ url('admin/membership') }}"><i class="fa fa-user-plus"></i> <span>Adhésion</span></a></li>
            <li><a href="{{ url('admin/payment') }}"><i class="fa fa-money"></i> <span>Paiement</span></a></li>
            <li><a href="{{ url('admin/type_payment') }}"><i class="fa fa-credit-card"></i> <span>Type de paiement</span></a></li>
            <li class="header">{{ trans('GESTION SITE') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>NEWS</span></a></li>
            <!-- ======================================= -->
            <li class="header">{{ trans('backpack::base.user') }}</li>
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside> @endif