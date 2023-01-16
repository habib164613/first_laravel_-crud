<!DOCTYPE html>
<html lang="en">
    @include('includes.header');
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('includes.nav'); 
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    @include('includes.sidebar');
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('contant');
                </main>
                <footer class="py-4 bg-light mt-auto">
                @include('includes.footer');
                </footer>
            </div>
        </div>
        @include('includes.js');
       
    </body>
</html>
