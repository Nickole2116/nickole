<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nickole Tan Yin Yin</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon2.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="main-screen">
            <div class="left">

            </div>

            <div class="right">

            </div>
        </div>

        <div id="followMouse"></div>
        <script>
            const followDiv = document.getElementById('followMouse');

            document.addEventListener('mousemove', (e) => {
            // e.clientX 和 e.clientY 是鼠标坐标
            followDiv.style.transform = `translate(${e.clientX - 150}px, ${e.clientY - 150}px)`;
            });
        </script>
    </body>
</html>