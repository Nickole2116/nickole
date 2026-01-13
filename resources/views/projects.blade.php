<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nickole Tan Yin Yin</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon2.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mdi.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="{{ asset('css/masonry/masonry.pkgd.min.js') }}"></script>
    </head>
    <body>
        <div class="main-screen-list">
            <div class="nav">
                <a href="#">
                    <i class="mdi mdi-chevron-left-circle"></i>
                    <span class="label">Back to Nickole Tan</span>
                </a>
                <div class="title">Archieved Projects</div>
            </div>

            <div class="grid pro-listing">
                <div class="grid-item pro">
                    <div class="year">2023</div>
                    <div class="thumb">
                        <img src="{{ asset('default.png') }}" alt="thumbnail" class="thumbnail"/>
                    </div>
                    <div class="builds">
                        <div>NextJs</div>
                        <div>Laravel</div>
                        <div>Sass</div>
                        <div>Typescript</div>
                    </div>
                    <div class="name">CondoMart</div>
                    <div class="desc">Harvard Business School Next.js Site</div>
                </div>
                <div class="grid-item pro grid-item--width2">...</div>
                <div class="grid-item pro">...</div>
                <div class="grid-item pro grid-item--width2">...</div>
                <div class="grid-item pro grid-item--width2">...</div>
                <div class="grid-item pro grid-item--width2">...</div>
            </div>
        </div>

        <div id="followMouse"></div>
        <script>
            const followDiv = document.getElementById('followMouse');

            document.addEventListener('mousemove', (e) => {
            // e.clientX 和 e.clientY 是鼠标坐标
            followDiv.style.transform = `translate(${e.clientX - 150}px, ${e.clientY - 150}px)`;
            });


            var elem = document.querySelector('.grid');
            var msnry = new Masonry( elem, {
                // options
                itemSelector: '.grid-item',
                percentPosition: true
            });
        </script>
    </body>
</html>