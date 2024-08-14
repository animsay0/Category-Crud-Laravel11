<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('title', 'My Laravel App')</title> -->
    <!-- Include CSS and other assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <header>
        <!-- Navigation bar or header content -->

    </header>


    <div class="my-5">
        @yield('content')

    </div>

    <footer>
        <!-- Footer content -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">  </script>
</body>

</html>