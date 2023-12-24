<template>

    <div class="container body">
        <div style="display: none;" id="contenedor_loader">
            <div class="loader" id="loader">
                <div>
                    <div class="lds-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"> <span>VIN</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div class="main_menu_side hidden-print main_menu" >

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <router-link :to="{ name: 'IndexVin'}"><i class="fa fa-cab"></i> Vin list </router-link>
                                </li>
                                <li>
                                    <router-link :to="{ name: 'create_vin'}"><i class="fa fa-code"></i> Generate VIN </router-link>
                                </li>
                                <!-- <li><router-link :to='{ name: "add_vin"}'><i class="fa fa-plus-circle"></i> New VIN </router-link></li>  -->
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small pull-right">

                        <a  href="#" data-toggle="tooltip" data-placement="top" title=" Salva Base Datos">
                            <span class="fa fa-database" aria-hidden="true"></span>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Configuraci&oacute;n General">
                            <span class="fa fa-gears" aria-hidden="true"></span>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Trazas">
                            <span class="fa fa-list-ol" aria-hidden="true"></span>
                        </a>
                        
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li role="presentation" class="dropdown">
                                 
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="right_col" role="main" id="contenido">
            
                <div class="">
                    <div class="row">
                        <router-view></router-view>
                    </div>
                </div>
            
                <!-- footer content -->

                <footer>
                    <div class="copyright-info">
                        <p class="pull-right">VIN - Vehicle Identification Number</p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
    </div>
    
</template>



