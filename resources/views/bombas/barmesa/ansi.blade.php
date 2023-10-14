<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bomoc</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @include('navbar')
    <div
        style=" background: #3789C8 url(../imagenes/bombas/barmesa/backgroundCard.jpeg) center center no-repeat;
   background-size: cover;
   padding: 150px 70px 70px;
   font-size: 2.5rem;
   font-weight: 800;">
    </div>

    <div class="container-fluid">
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/barmesa/logo.png') }}" class="figure-img img-fluid rounded"
                        alt="...">
                </figure>
            </div>


            <div>
                <div class="text-center border-top border-bottom border-2 row row-cols-4 row-cols-lg-4 g-4 g-lg-4">
                    {{-- Imagen 911S --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911s"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911s.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">911 S</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen 911M --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911m.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">911 M</h3>
                            </figcaption>
                        </figure>
                    </div>
                   {{-- Imagen 911L --}}
                   <div class="col">
                    <figure class="figure">
                        <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911l.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h3 style="color: blue">911 L</h3>
                        </figcaption>
                    </figure>
                </div>
                {{-- Imagen 911LX --}}
                <div class="col">
                    <figure class="figure">
                        <a href="#911m"><img src="{{ asset('imagenes/bombas/barmesa/ansi/911lx.jpg') }}"
                                height="25%" class="figure-img img-fluid rounded" alt=""></a>
                        <figcaption class="figure-caption ">
                            <h3 style="color: blue">911 LX</h3>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top: 10px">
            <h1>Bombas Centrífugas de Proceso ANSI</h1>
        </div>
        <div class="mb-3">
            <div class="card">
                {{-- Contenido Modelo 911s --}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911S</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6" style="   display: flex;
                        align-items: center;
                        justify-content: center;
                        height: auto;">
                            <img src="{{ asset('imagenes/bombas/barmesa/ansi/logo.png') }}"
                            style="vertical-align: middle " class="figure-img img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <livewire:ansi911s-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Modelo 911m | 911l--}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911M | Modelo 911L</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:ansi911m-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <livewire:ansi911l-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido Modelo 911lx--}}
                <div class="card-body">
                    <h5 class="card-title">Modelo 911LX</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:ansi911lx-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1>Rellenar con algo XD</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <a class='flotante' href='#' style="text-decoration: aliceblue"><img
                src="{{ asset('imagenes/icons/up.svg') }}">Arriba</a>
        <style>
            .flotante {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 20px;
            }
        </style>
        <script>
            window.addEventListener('scroll', function() {
                var enlaceFlotante = document.querySelector('.flotante');

                if (window.scrollY > 200) {
                    enlaceFlotante.style.display = 'block';
                } else {
                    enlaceFlotante.style.display = 'none';
                }
            });
        </script>

</body>

</html>
