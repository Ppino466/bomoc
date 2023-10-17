<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
                <div class="text-center border-top border-bottom border-2 row row-cols-3 row-cols-lg-3 g-2 g-lg-3">
                    {{-- Imagen Diesel --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#diesel"><img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/diesel.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Motor a diesel</h3>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- Imagen Gasolina --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#gasolina"><img
                                    src="{{ asset('imagenes/bombas/barmesa/tragasolidos/gasolina.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Motor a gasolina</h3>
                            </figcaption>
                        </figure>
                        </figure>
                    </div>
           
                    {{-- Imagen Transmision Universal --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#universal"><img
                                    src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universal.jpg') }}"
                                    height="25%" class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h3 style="color: blue">Transmisión Universal</h3>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div id="diesel" class="mb-3">
            <h1> Diesel</h1>
            <div class="card">
                {{-- Contenido YANMAR/JOHN DEERE --}}
                <div class="card-body">
                    <h5 class="card-title">Yanmar / John Deere</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-diesel-yanmar-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <livewire:tragasolidos-diesel-john-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div id="gasolina" class="mb-3">
            <h1> Gasolina</h1>
            <div class="card">
                {{-- Contenido BRIGGS & STRATTON/TEK-PRO/KOHLER/HONDA --}}
                <div class="card-body">
                    <h5 class="card-title">Briggs & Stratton / Tek-Pro / Kohler / Honda</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-btk-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-honda-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido MOTORES --}}
                <div class="card-body">
                    <h5 class="card-title">Motores</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-gasolina-barmesa-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/gasolina.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="universal" class="mb-3">
            <h1>Transmisión Universal</h1>    
            <div class="card">
                {{-- Contenido SERIE ET6-U --}}
                <div class="card-body">
                    <h5 class="card-title">Serie ET6-U (sin motor)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-universal-et6-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universalGeneral.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido SERIE SH-U --}}
                <div class="card-body">
                    <h5 class="card-title">Serie SH-U (sin motor)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-6">
                            <livewire:tragasolidos-universal-s-h-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('imagenes/bombas/barmesa/tragasolidos/universalGeneral2.jpg') }}"
                                style="vertical-align: middle" class="figure-img img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                {{-- Contenido COPLE FLEXIBLE --}}
                <div class="card-body">
                    <h5 class="card-title">Cople flexible (motor TCCVE)</h5>
                    {{-- lh-base --}}
                    <div class="row">
                        <div class="col-md-12">
                            <livewire:tragasolidos-universal-cople-table />
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-success">Nota</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <a class='flotante' href='#' style="text-decoration: aliceblue"><img src="{{ asset('imagenes/icons/up.svg') }}">Arriba</a>
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