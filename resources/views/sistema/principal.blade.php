<HTML>
<head>
	<link rel="shortcut icon" href="{!! asset('recursos/images/icono.png') !!}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellen West</title>
<link rel="stylesheet" href="{!! asset('recursos/bootstrap/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('recursos/mas/nuevos.css') !!}">
<link rel="stylesheet" href="{!! asset('recursos/font-awesome/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('recursos/css/local.css') !!}">
<script type="text/javascript" src="{!! asset('recursos/js/jquery-1.10.2.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('recursos/bootstrap/js/bootstrap.min.js') !!}"></script>
</head>
<body>
	 <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::action('principalc@index')}}">Panel de Administracion</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!-- <li class="active"><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li> -->

                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Productos <span class="caret"></span></a>
                    	   <ul class="dropdown-menu">
                           <li><a href="{{URL::action('productosc@altaproducto')}}"> Alta Productos </a></li>
                           <li><a href="{{URL::action('productosc@reporteproducto')}}">Reportes</a></li>
                           <li class="divider"></li>
<!--                            <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
                    <!--  -->
                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Clientes <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="{{URL::action('clientesc@altacliente')}}"> Alta Clientes </a></li>
                        <li><a href="{{URL::action('clientesc@reportecliente')}}">Reportes</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
                     <!--  -->
                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Empleados <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="{{URL::action('empleadosc@altaempleado')}}"> Alta Empleados </a></li>
                        <li><a href="{{URL::action('empleadosc@reporteempleado')}}">Reportes</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
                    <!--  -->
                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Sucursales <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="{{URL::action('sucursalesc@altasucursal')}}"> Alta Sucursales </a></li>
                        <li><a href="{{URL::action('sucursalesc@reportesucursal')}}">Reportes</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
                     <!--  -->
                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Ventas <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="{{URL::action('ventasc@altaventa')}}"> Alta Ventas </a></li>
                        <li><a href="{{URL::action('ventasc@reporteventa')}}">Reportes</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
                     <!--  -->
                    <li class="dropdown">
                    	<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i> Usuarios <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        <li><a href="{{URL::action('usuarios@altausuarios')}}"> Alta Usuarios </a></li>
                        <li><a href="{{URL::action('usuarios@reporteusuario')}}">Reportes</a></li>
                        <li class="divider"></li>
                        <!-- <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li> -->
                       </ul>
                    </li>
<!-- 
                    <li><a href="portfolio.html"><i class="fa fa-tasks"></i> Entradas </a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i > Bootstrap Grid</a></li>  
 -->                  
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">

                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Session::get('sessionname')}}<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                           <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li>
                       </ul>
                   </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
 @yield('contenido')
        </div>
        <!-- /#page-wrapper -->
    </div>

</body>
</html>