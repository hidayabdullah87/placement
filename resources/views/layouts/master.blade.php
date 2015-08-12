<!DOCTYPE html>
<html lang="en">
    <head>
    <title>UOS | Placement Portal</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />

    @include('layouts/header')

    </head>
    <body>

        @include('layouts/navbar')

        <div class="content page1">
            <div class="container_12">
                @yield('content')
            </div>
        </div>

       @include('layouts/footer')
       
     </body>

 </html>