
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lotus | APP</title>
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">



</head>

<body class="fixed sidebar-mini sidebar-mini-expand-feature skin-red">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Tre</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Treasure</b> int'l</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" style="padding-top: 20px;">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="modal-content" alt="User Image" data-target="#myModal"><br>
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->last_name}}, {{Auth::user()->first_name}}</p>
          <a>{{Auth::user()->role_id}}</a><br><br>
        </div>
      </div>

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-center">MENU</li>
        <!-- Optionally, you can add icons to the links -->

        @can('isAdmin')
        <li><a href="{{route('generate')}}"><i class="fa fa-user"></i> <span>Codes</span></a></li>
        @endcan

        <li class="">

           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
             <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >


    <!-- Main content -->
    <section class="content container-fluid" >
      {{--@include('partials.errors')
      @include('partials.success')
        @yield('content')--}}

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright © 2018 Treasure International.</strong> All rights
    reserved.
  </footer>
</div>

<script src="{{asset('js/app.js')}}"></script>


</body>
</html>
