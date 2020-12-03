@include('admin.layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- @include('admin.layouts.alert') --}}
        @include('admin.layouts.navbar')
        @include('admin.layouts.sidebar')    
        <main>
                        
            <!-- Site wrapper -->
            <div class="wrapper">

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        @yield('header.content')
                    </div><!-- /.container-fluid -->
                </section>
            
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        @yield('main.content')
                    </div>
                </section>
                <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            
                @include('admin.layouts.footer')
            </div>
            <!-- ./wrapper -->
        </main>

        @include('admin.layouts.script')
    </div>
</body>
</html>
