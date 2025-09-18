<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

<body>

    <div class="container">
        {{-- <div class="alert" id="success-alert">
            Success Alert
        </div>--}}

        {{-- <div class="alert alert-error" id="error-alert">
            Error Alert
        </div>--}}
        
        @yield("content")
    
        
    </div>

</body>

</html>