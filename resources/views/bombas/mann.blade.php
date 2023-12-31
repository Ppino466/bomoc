<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/logo/cropped-logitoBO02-32x32.png') }}">
    <title>Bombas y Motores de Occidente</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    
    @include('navbar')
   <div style="  background: url(../imagenes/bombas/mann/portada.png) center center no-repeat;
    background-size: cover;
    padding: 250px 70px 70px;
    margin: auto;
    font-size: 2.5rem;
    font-weight: 800;">
   </div>
        
   <div class="container-fluid">
        {{-- Menu --}}
        <div>
            {{-- Logo --}}
            <div class="text-center">

                <figure class="figure">
                    <img src="{{ asset('imagenes/bombas/mann/logo.png') }}" width="100%"
                        class="figure-img img-fluid rounded" alt="...">
                </figure>
            </div>

            {{-- Imagenes al seleccionar --}}
            <div>
                {{-- Esto es la Fila --}}
                <div class="text-center border-top border-bottom border-2 row row-cols-2 row-cols-lg-4 g-2 g-lg-3">

                    {{-- Imagen de Series 911S --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911s"><img src="{{ asset('imagenes/bombas/mann/911s.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Serie 911S</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series 911M --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911m"><img src="{{ asset('imagenes/bombas/mann/911m.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series 911M</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series 911L --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911l"><img src="{{ asset('imagenes/bombas/mann/911l.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series 911L</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Imagen de Series 911LX --}}
                    <div class="col">
                        <figure class="figure">
                            <a href="#911lx"><img src="{{ asset('imagenes/bombas/mann/911lx.png') }}" width="100%"
                                    class="figure-img img-fluid rounded" alt=""></a>
                            <figcaption class="figure-caption ">
                                <h6 class="h6">Series 911LX</h6>
                            </figcaption>
                        </figure>
                    </div>

                    {{-- Cierre de Fila --}}
                </div>

                {{-- Cierre de imagenes --}}
            </div>
            {{-- Fin de Menu --}}
        </div>

        {{-- Inicio de Contenidos --}}

        {{-- Contenido Series 911S --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="911s" class="h4">Bomba Centrífugas de Proceso ANSI de la Serie 911S</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-4 ">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/mann/911s.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series 911S</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1wnf8CYC6SA0atuzutmoOCTrW5GqWG8no/view?usp=drive_link"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Texto -->
                    <p>
                        La serie 911S es la línea más pequeña de las bombas ANSI de Mann. Los tamaños son desde 1” x
                        1.5” hasta 1.5” x 3.
                        Cargas de hasta 300 pies, capacidad de hasta 350 GPM.
                        Temperaturas de bombeo de hasta 177°C. Motores de 1750 y 3500 RPM y la bomba esta maquinada para
                        ensamblar motores con brida “C”.

                    </p>
                    <p>
                        Existen distintos materiales de fabricación como hierro dúctil, acero inoxidable, alloy 20,
                        CD4Mcu,Monel y Hastelloy B & C etc . El impulsor es totalmente abierto y disponible en varios
                        materiales de fabricación, su diseño es reconocido como el mejor en la industria petroquímica;
                        ya sea para manejo de sólidos, materiales fibrosos, y fluidos corrosivos y abrasivos. .
                        Disponibles varios tipos de sello mecánico de acuerdo a la aplicación. Además todos sus
                        componentes son intercambiables con otras bombas ANSI existentes en el mercado.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-lg-5 ">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Automotriz</li>
                        <li>Industria alimentaria</li>
                        <li>Textil</li>
                        <li>Petroquímica</li>
                        <li>Farmaceutica</li>
                        <li>Química</li>
                        <li>Papelera</li>
                        <li>Industria en general</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-lg-7" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911s- 3500 RPM </h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">1 x 1.5-6</td>
                                <td scope="col">1.5 a 7.5</td>
                                <td scope="col">130 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1.5 x 3-6</td>
                                <td scope="col">3 a 10</td>
                                <td scope="col">250 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-6</td>
                                <td scope="col">5 a 15</td>
                                <td scope="col">420 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 1.5-8</td>
                                <td scope="col">5 a 20</td>
                                <td scope="col">185 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">1.5 x 3-8</td>
                                <td scope="col">5 a 25</td>
                                <td scope="col">280 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>

                    <h4>Especificaciones Técnicas de la Serie 911S – 1750 RPM </h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">1 x 1.5-6</td>
                                <td scope="col">0.5 a 1</td>
                                <td scope="col">70 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1.5 x 3-6</td>
                                <td scope="col">0.75 a 1.5</td>
                                <td scope="col">120 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-6</td>
                                <td scope="col">0.75 a 2</td>
                                <td scope="col">210 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 1.5-8</td>
                                <td scope="col">0.75 a 3</td>
                                <td scope="col">110 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">1.5 x 3-8</td>
                                <td scope="col">0.75 a 3</td>
                                <td scope="col">145 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series 911M --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="911m" >Bombas Centrífugas de Proceso ANSI de la Serie 911M</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-4">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/mann/911m.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6>Series 911M</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1wnf8CYC6SA0atuzutmoOCTrW5GqWG8no/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Texto -->
                    <p>
                        La serie 911M es una bomba mediana que cuenta 15 modelos disponibles. Tamaños desde 1” x 2”
                        hasta 4” x 6” Cargas de hasta 700 pies, capacidad de hasta 1400 GPM. Presiones de hasta 285
                        PSIG. Temperaturas máximas de bombeo de hasta 177º C. Motores de 1150, 1750 y 3500 RPM. Máximo
                        BHP de 122 HP .
                        Impulsor totalmente abierto y altamente eficiente ya que elimina recirculaciones sus venas
                        posteriores reducen las perdidas hidráulicas y la presión en la cámara de sello.

                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-md-6">
                    <!-- Aplicaciones -->
                    <h4>Aplicaciones</h4>
                    <ul>
                        <li>Industria automotriz</li>
                        <li>Industria alimenticia</li>
                        <li>Torres de enfriamiento</li>
                        <li>Pulpa y papel</li>
                        <li>Industria petroquímica</li>
                        <li>Industria farmacéutica</li>

                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-md-6 " style="overflow-x:auto;">
                    <h4 >Especificaciones Técnicas de la Serie 911M y 911L – 3500 RPM</h4>
                    <table class="table table-striped ">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-7</td>
                                <td scope="col">10 a 30</td>
                                <td scope="col">550 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-8</td>
                                <td scope="col">10 a 30</td>
                                <td scope="col">330 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8G</td>
                                <td scope="col">10 a 60</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 2-10</td>
                                <td scope="col">5 a 30</td>
                                <td scope="col">150 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-10</td>
                                <td scope="col">10 a 50</td>
                                <td scope="col">350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-10</td>
                                <td scope="col">15 a 75</td>
                                <td scope="col">560 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10</td>
                                <td scope="col">20 a 100</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-13</td>
                                <td scope="col">40 a 150</td>
                                <td scope="col">640 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3 -13</td>
                                <td scope="col">50 a 200</td>
                                <td scope="col">950 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">3 x 4-13</td>
                                <td scope="col">50 a 150</td>
                                <td scope="col">1250 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>

                            </tr>
                        </tbody>
                    </table>
                    

                </div>
                <div class="col-md-6">
                    <h4 >Especificaciones Técnicas de la Serie 911M y 911L – 1750 RPM</h4>
                    <table class="table table-striped ">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-7</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">280 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-8</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">200 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8</td>
                                <td scope="col">3 a 10</td>
                                <td scope="col">620 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8G</td>
                                <td scope="col">2 a 7.5</td>
                                <td scope="col">450 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 2-10</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">90 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-10</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">180 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-10</td>
                                <td scope="col">3 a 10</td>
                                <td scope="col">280 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10</td>
                                <td scope="col">2 a 10</td>
                                <td scope="col">420 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10H</td>
                                <td scope="col">3 a 20</td>
                                <td scope="col">750 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10</td>
                                <td scope="col">15 a 30</td>
                                <td scope="col">1300 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10H</td>
                                <td scope="col">15 a 30</td>
                                <td scope="col">1350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-13</td>
                                <td scope="col">5 a 20</td>
                                <td scope="col">350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3 -13</td>
                                <td scope="col">7.5 a 20</td>
                                <td scope="col">450 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-13</td>
                                <td scope="col">15 a 40</td>
                                <td scope="col">800 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">4 x 6-13</td>
                                <td scope="col">20 a 50</td>
                                <td scope="col">1400 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="col-md-6">
                    <h4 >Especificaciones Técnicas de la Serie 911M y 911L – 1150 RPM:</h4>
                    <table class="table table-striped ">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-8</td>
                                <td scope="col">1.5 a 3</td>
                                <td scope="col">420 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10H</td>
                                <td scope="col">2 a 5</td>
                                <td scope="col">500 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10</td>
                                <td scope="col">5 a 10</td>
                                <td scope="col">750 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10H</td>
                                <td scope="col">5 a 10</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td scope="col">4 x 6-13</td>
                                <td scope="col">5 a 15</td>
                                <td scope="col">950 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
            </div>
        </div>

        {{-- Contenido Series 911L --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="911l" class="h4">Bombas Centrífugas de Proceso ANSI de la Serie 911L</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-lg-5 ">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/mann/911l.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series 911L</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1wnf8CYC6SA0atuzutmoOCTrW5GqWG8no/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mb-3">
                    <!-- Texto -->
                    <p>
                        La serie 911l es una bomba grande, esta cuenta con 11 modelos disponibles. Tamaños desde 1” x 2”
                        hasta 4” x 6” Cargas de hasta 700 pies, capacidad de hasta 1400 GPM. Presiones de hasta 285
                        PSIG. Temperaturas máximas de bombeo de hasta 177º C. Motores de 1150, 1750 y 3500 RPM. Máximo
                        BHP de 200 HP .

                    </p>
                    <p>
                        Todas las partes de la Serie 911L de proceso ANSI son 100% intercambiables con otras bombas ANSI
                        existentes en el mercado.
                    </p>
                    <p>
                        Impulsor totalmente abierto y altamente eficiente ya que elimina recirculaciones sus venas
                        posteriores reducen las perdidas hidráulicas y la presión en la cámara de sello.
                    </p>
                    <p>
                        Las bombas básicas se suministran sin recorte de impulsor. El recorte solo aplica a las bombas
                        completas (bomba, base, cople, sello y motor).
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-lg-5 mt-3 mb-3">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones</h4>
                    <ul>
                        <li>Industria automotriz</li>
                        <li>Industria alimenticia</li>
                        <li>Torres de enfriamiento</li>
                        <li>Pulpa y papel</li>
                        <li>Industria petroquímica</li>
                        <li>Industria farmacéutica</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911M y 911L – 3500 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-7</td>
                                <td scope="col">10 a 30</td>
                                <td scope="col">550 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-8</td>
                                <td scope="col">10 a 30</td>
                                <td scope="col">330 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8G</td>
                                <td scope="col">10 a 60</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 2-10</td>
                                <td scope="col">5 a 30</td>
                                <td scope="col">150 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-10</td>
                                <td scope="col">10 a 50</td>
                                <td scope="col">350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-10</td>
                                <td scope="col">15 a 75</td>
                                <td scope="col">560 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10</td>
                                <td scope="col">20 a 100</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-13</td>
                                <td scope="col">40 a 150</td>
                                <td scope="col">640 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3 -13</td>
                                <td scope="col">50 a 200</td>
                                <td scope="col">950 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">3 x 4-13</td>
                                <td scope="col">50 a 150</td>
                                <td scope="col">1250 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>

                            </tr>
                        </tbody>
                    </table>
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911M y 911L – 1750 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-7</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">280 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-8</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">200 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8</td>
                                <td scope="col">3 a 10</td>
                                <td scope="col">620 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-8G</td>
                                <td scope="col">2 a 7.5</td>
                                <td scope="col">450 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1 x 2-10</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">90 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-10</td>
                                <td scope="col">1.5 a 5</td>
                                <td scope="col">180 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3-10</td>
                                <td scope="col">3 a 10</td>
                                <td scope="col">280 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10</td>
                                <td scope="col">2 a 10</td>
                                <td scope="col">420 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10H</td>
                                <td scope="col">3 a 20</td>
                                <td scope="col">750 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10</td>
                                <td scope="col">15 a 30</td>
                                <td scope="col">1300 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10H</td>
                                <td scope="col">15 a 30</td>
                                <td scope="col">1350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">1½ x 3-13</td>
                                <td scope="col">5 a 20</td>
                                <td scope="col">350 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">2 x 3 -13</td>
                                <td scope="col">7.5 a 20</td>
                                <td scope="col">450 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-13</td>
                                <td scope="col">15 a 40</td>
                                <td scope="col">800 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">4 x 6-13</td>
                                <td scope="col">20 a 50</td>
                                <td scope="col">1400 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>

                            </tr>
                        </tbody>
                    </table>
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911M y 911L – 1150 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">3 x 4-8</td>
                                <td scope="col">1.5 a 3</td>
                                <td scope="col">420 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">3 x 4-10H</td>
                                <td scope="col">2 a 5</td>
                                <td scope="col">500 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10</td>
                                <td scope="col">5 a 10</td>
                                <td scope="col">750 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">4 x 6-10H</td>
                                <td scope="col">5 a 10</td>
                                <td scope="col">850 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">4 x 6-13</td>
                                <td scope="col">5 a 15</td>
                                <td scope="col">950 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Contenido Series 911LX --}}
        <div>
            <div class="row">
                <div class="col m-2 mt-3 pb-3">
                    <h4 id="911lx" class="h4">Bombas Centrífugas de Proceso ANSI Modelo 911LX</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-lg-5 ">
                    <figure class="figure"><img src="{{ asset('imagenes/bombas/mann/911lx.png') }}" width="100%"
                            class="figure-img img-fluid rounded" alt=""></figure>
                    <figcaption class="d-flex justify-content-center">
                        <h6 class="h6">Series 911LX</h6>
                    </figcaption>
                    {{-- direccion de catalogo --}}
                    <div class="d-flex justify-content-center">
                        <a href="https://drive.google.com/file/d/1wnf8CYC6SA0atuzutmoOCTrW5GqWG8no/view?usp=sharing"
                            class="btn btn-primary">Ficha Técnica</a>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mb-3">
                    <!-- Texto -->
                    <p>
                        Esta bomba de Mann Pumps es la más robusta de los 4 modelo. Las dimensiones van desde 6” 8” y de
                        8” x 10. Cargas de hasta 67 metros Temperaturas de hasta 177°C. Motores de 880, 1180 y 1780 RPM.
                        Máximo BHP de 250 HP.
                        La voluta y el impulsor se pueden ordenar en distintos materiales de fabricación como hierro
                        dúctil, acero inoxidable, Alloy 20, CD4MCu, Monel, Hastelloy B y Hastelloy C.

                    </p>
                    <p>
                        Las bombas básicas se suministran sin recorte de impulsor. El recorte solo aplica a las bombas
                        completas (bomba, base, cople, sello y motor).
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 p-2">
                <div class="col-lg-5 mt-3 mb-3">
                    <!-- Aplicaciones -->
                    <h4 class="h4">Aplicaciones del Modelo 911LX:</h4>
                    <ul>
                        <li>Industria automotriz</li>
                        <li>Industria alimenticia</li>
                        <li>Torres de enfriamiento</li>
                        <li>Pulpa y papel</li>
                        <li>Industria petroquímica</li>
                        <li>Industria farmacéutica</li>
                    </ul>
                </div>
                <!-- Tabla -->
                <div class="col-lg-7 mt-3 mb-5 pb-5" style="overflow-x:auto;">
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911LX – 1780 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">6 x 8-13</td>
                                <td scope="col">40 a 75</td>
                                <td scope="col">2300 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">8 x 10-13</td>
                                <td scope="col">60 a 150</td>
                                <td scope="col">4200 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">6 x 8-15</td>
                                <td scope="col">60 a 150</td>
                                <td scope="col">3000 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">8 x 10-15G</td>
                                <td scope="col">100 a 200</td>
                                <td scope="col">3800 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911LX – 1180 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">6 x 8-13</td>
                                <td scope="col">15 a 25</td>
                                <td scope="col">1600 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">8 x 10-13</td>
                                <td scope="col">15 a 40</td>
                                <td scope="col">2800 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">6 x 8-15</td>
                                <td scope="col">20 a 40</td>
                                <td scope="col">1900 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                            <tr>
                                <td scope="col">8 x 10-15</td>
                                <td scope="col">40 a 100</td>
                                <td scope="col">3700 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">8 x 10-15G</td>
                                <td scope="col">30 a 60</td>
                                <td scope="col">2700 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="h4">Especificaciones Técnicas de la Serie 911LX – 880 RPM</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr class="border-top border-danger">
                                <th scope="col" class="border-bottom border-dark">Tamaño</th>
                                <th scope="col" class="border-bottom border-dark">HP</th>
                                <th scope="col" class="border-bottom border-dark">Flujo Máximo</th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 150
                                </th>
                                <th scope="col" class="border-bottom border-dark">Presión Máx. Trabajo Clase 300
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">8 x 10-15</td>
                                <td scope="col">20 a 40</td>
                                <td scope="col">2900 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>

                            <tr class="border-bottom border-dark">
                                <td scope="col">8 x 10-15G</td>
                                <td scope="col">15 a 25</td>
                                <td scope="col">2000 GPM</td>
                                <td scope="col">275 PSIG</td>
                                <td scope="col">385 PSIG</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Fin de container --}}
    </div>
    <!-- Boton hacia arriba -->
 <img class='ir-arriba' javascript:void(0) title="Volver arriba" src="{{ asset('imagenes/icons/up2.svg') }}"
 style="width: 48px; height: 48px;">
<style>
 .ir-arriba {
     display: none;
     background-repeat: no-repeat;
     font-size: 20px;
     color: black;
     cursor: pointer;
     position: fixed;
     bottom: 10px;
     right: 10px;
     z-index: 2;
 }
</style>
<script>
 $(document).ready(function() {
     irArriba();
 }); //Hacia arriba
 function irArriba() {
     $('.ir-arriba').click(function() {
         $('body,html').animate({
             scrollTop: '0px'
         }, 1000);
     });
     $(window).scroll(function() {
         if ($(this).scrollTop() > 0) {
             $('.ir-arriba').slideDown(600);
         } else {
             $('.ir-arriba').slideUp(600);
         }
     });
     $('.ir-abajo').click(function() {
         $('body,html').animate({
             scrollTop: '1000px'
         }, 1000);
     });
 }
</script>
      <livewire:footer/>  
</body>

</html>
