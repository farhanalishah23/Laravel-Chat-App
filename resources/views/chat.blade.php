<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChatApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">

    <!-- ✅ Vite compiled CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/echo.js'])
  

    <!-- ✅ Livewire Styles -->
    @livewireStyles
</head>
<body>

    <!-- ✅ Your Livewire Chat Component -->
    @livewire('chat-component', ['id' => $id])

    <!-- ✅ Livewire Scripts -->
    @livewireScripts

    <!-- ✅ Bootstrap JS + jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
