<style>
    .logo {
        display: inline-block;
        margin: 0 auto;
    }
</style>

<div class="header">
    <div class="header-left active">
        <a href="index.html" class="logo">

            <h1 class="mi_logo">YQ</h1>
        </a>
        <a href="index.html" class="logo-small">
            <h1>YQ</h1>
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>


    <!--Parte Superior-->
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="<?php echo $URL; ?>ADMIN/assets/img/profiles/avator1.jpg" alt="">
                    <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img"><img src="<?php echo $URL; ?>ADMIN/assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                        <div class="profilesets">
                            <h6>John Doe</h6>
                            <h5>Admin</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Cuenta</a>
                    <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Configuraciones</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="signin.html"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/log-out.svg" class="me-2" alt="img">Salir Seccion</a>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Cuenta</a>
            <a class="dropdown-item" href="generalsettings.html">Configuracion</a>
            <a class="dropdown-item" href="signin.html">Cerrar Seccion</a>
        </div>
    </div>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo $URL; ?>ADMIN/index.php"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/product.svg" alt="img"><span> Productos</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo $URL; ?>ADMIN/src/Productos/index.php">Product List</a></li>
                        <li><a href="<?php echo $URL; ?>ADMIN/src/Productos/nuevo.php">Add Product</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="<?php echo $URL; ?>ADMIN/assets/img/icons/sales1.svg" alt="img"><span> Pedidos</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo $URL; ?>ADMIN/src/Pedidos/index.php">Sales List</a></li>
                        <li><a href="pos.html">POS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>