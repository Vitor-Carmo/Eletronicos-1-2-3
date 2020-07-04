<?php

function header_adm(){
    echo('
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
    <!--organizar os elementos em um container-->
    <div class="container">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarSite">


            <ul class="navbar-nav mr-auto">


                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="#">Clientes </span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Produtos </span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Vendas </span></a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <div class="adm-complements">
                    <img class= "adm-profile" src="../../public/img/adm.png" alt="perfil" >
                    <p>Olá, Administrador!</p>
                </div>
                
            </ul>
            

            <!--Logout-->
            <a href="../logout.php">
                <img class="logout" src="../../public/img/logout.svg" alt="">
            </a>
    </nav>');
}


?>