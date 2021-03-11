<?php

$videos=array(
    array(
        "nombre"=>"lorem ipsum",
        "canal"=>"lorem ipsum",
        "visitas"=>12325,
        "fechaSubida"=>"03/03/2021",
        "duracionVideo"=>138,
        "imagenVideo"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj",
        "imagenCanal"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj"
    ),
    array(
        "nombre"=>"lorem ipsum 2",
        "canal"=>"lorem ipsum",
        "visitas"=>12325,
        "fechaSubida"=>"03/03/2021",
        "duracionVideo"=>120,
        "imagenVideo"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj",
        "imagenCanal"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj"
    ),
    array(
        "nombre"=>"lorem ipsum berty",
        "canal"=>"lorem ipsum",
        "visitas"=>12325,
        "fechaSubida"=>"03/03/2021",
        "duracionVideo"=>120,
        "imagenVideo"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj",
        "imagenCanal"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj"
    ),
    array(
        "nombre"=>"lorem ipsum andy",
        "canal"=>"lorem ipsum",
        "visitas"=>12325,
        "fechaSubida"=>"03/03/2021",
        "duracionVideo"=>120,
        "imagenVideo"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj",
        "imagenCanal"=>"https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj"
    ),
);


?>



<div class="container" id="paginaPrincipal">
    <div class="categoriaPrueba">
        <div class="row">

            <?php
            
                foreach($videos as $key=>$video){

                    $nombre = $video['nombre'];
                    $canal= $video['canal'];
                    $vistas = $video['visitas'];
                    $fechaSubida = $video['fechaSubida'];
                    $duracionVideo = $video['duracionVideo'];
                    $imagenVideo = $video['imagenVideo'];

                    $_fechaSubida = date ($fechaSubida);
                    $txtFecha = strftime("%A %d de %B",strtotime($_fechaSubida));

                    $minutos = floor((($duracionVideo)/60));
                    $segundos = $duracionVideo - ($minutos*60);

                    $txtDuracion = $minutos.':'.$segundos;

                    echo 

                    '
                    <div class="class col-3 text center cardPrueba">
                        <center>
                            <div class="textoEncima">'.$txtDuracion.'</div>
                            <a href="https://www.youtube.com/watch?v=Wo_esTX4TDo&ab_channel=AuronPlay"><img  src="https://i.ytimg.com/vi/Wo_esTX4TDo/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&amp;rs=AOn4CLDIh4e6z_Wjv5aDK7qQlDCnDqzpPA" class="img-fluid imgPrueba"></a>
                        </center>
                        <img src="https://yt3.ggpht.com/ytc/AAUvwnh-y4qNQlevNi_Rt1bJJUQDgPukd4EHZzNt2zc1jA=s68-c-k-c0x00ffffff-no-rj" class="img-fluid imgCanal" >
                        <a href="https://www.youtube.com/watch?v=Wo_esTX4TDo&ab_channel=AuronPlay" class="tituloVideo">'.$nombre.'</a>
                        <h1 class="subtituloVideo">'.$canal.'</h1>
                        <h2 class="visitasCanal">'.number_format($vistas,0).'</h2>
                        <h3 class="tiempoCanal">'.$txtFecha.'</h3>
                    </div>
                    ';
                }

            ?>
            

            <!--<div class="class col-3 text center cardPrueba">
                <center>
                    <div class="textoEncima">03:30</div>
                    <a href="https://www.youtube.com/watch?v=8UVNT4wvIGY&ab_channel=gotyemusic"><img src="https://i.ytimg.com/vi/8UVNT4wvIGY/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&amp;rs=AOn4CLDxX6JS8x_9zU8hI_zHsbNAkkCagw" class="img-fluid imgPrueba"></a>
                </center>
                <img src="https://yt3.ggpht.com/ytc/AAUvwnisMiMaQsHqZKwFilvXsNupjxFvMUjr4fbdABa8=s88-c-k-c0x00ffffff-no-rj" class="img-fluid imgCanal" >
                <a href="https://www.youtube.com/watch?v=8UVNT4wvIGY&ab_channel=gotyemusic" class="tituloVideo">Gotye - Somebody That I Used To Know - Kimbra</a>
            
                <h1 class="subtituloVideo">gotyemusic</h1>
                <h2 class="visitasCanal">26 M vistas</h2>
                <h3 class="tiempoCanal">hace 9 años</h3>
            </div>

            <div class="class col-3 text center cardPrueba">
            <center>
            <div class="textoEncima">40:20</div>
            <a href="https://www.youtube.com/watch?v=DIHiBH69wsM&ab_channel=MILENIO"><img src="https://i.ytimg.com/vi/DIHiBH69wsM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&amp;rs=AOn4CLD5IT3ws9zC0nevszbolZ4SFp0sMQ" class="img-fluid imgPrueba"></a>
            </center>
            <img src="https://yt3.ggpht.com/ytc/AAUvwngPO53Ea8a1PDAV3NHpv5OZXjx7v4PtT9sM_pjTxA=s68-c-k-c0x00ffffff-no-rj" class="img-fluid imgCanal" >
            <a href="https://www.youtube.com/watch?v=DIHiBH69wsM&ab_channel=MILENIO" class="tituloVideo">Informe diario por coranovirus México</a>
            <h1 class="subtituloVideo">MILENIO</h1>
            <h2 class="visitasCanal">84,792 vistas</h2>
            <h3 class="tiempoCanal">Hace 2 días</h3>
            
            </div>
            <div class="class col-3 text center cardPrueba">
            <center>
            <div class="textoEncima">04:15</div>
            <a href="https://www.youtube.com/watch?v=BokdSWC2R68&ab_channel=LosAngelesAzulesVEVO"><img src="https://i.ytimg.com/vi/BokdSWC2R68/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAoB5TGHlYxQUL5jjQZiAjnBnhpZg" class="img-fluid imgPrueba"></a>
            </center>
            <img src="https://yt3.ggpht.com/ytc/AAUvwnjOGl7ugDSVw4hV8Pj3jvdPN5rg2r0oDeqvpZdfKg=s88-c-k-c0x00ffffff-no-rj" class="img-fluid imgCanal" >
            <a href="https://www.youtube.com/watch?v=BokdSWC2R68&ab_channel=LosAngelesAzulesVEVO" class="tituloVideo">Los Ángeles Azules - Mis Sentimientos</a>
            <h1 class="subtituloVideo">Los Ángeles Azules</h1>
            <h2 class="visitasCanal">1027 M vistas</h2>
            <h3 class="tiempoCanal">Hace 6 años</h3>
            </div>-->
        </div>
    </div>
</div>