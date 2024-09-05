<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/layouts.head')
</head>

<body>
    @extends('admin/layouts.app')
    <div class="wrapper">
        @include('admin/layouts.sidebar')
        <div id="body" class="active">
            <!-- navbar navigation component -->
            @include('admin/layouts.navbar')
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                  
                    
                    
                </div>
            </div>
        </div>

    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
