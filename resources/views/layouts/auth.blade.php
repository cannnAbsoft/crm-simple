<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/css/coreui.min.css" rel="stylesheet"  crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    @yield('content')
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/js/coreui.bundle.min.js" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and CoreUI for Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.1.4/dist/js/coreui.min.js" integrity="sha384-dGvJOX3jCDS34Y1pvugvoTyKfv0/evHukD3WKQnQklWozNmo5RpGLiHFaXxhgKAl" crossorigin="anonymous"></script>
-->
</body>
</html>
