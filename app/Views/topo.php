<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>




<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=URL?>/paginas/home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=URL?>/paginas/sobre">Sobre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/paginas/erro">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/posts">Postagens</a>
            </li>
        </ul>
        <?php    
            if(isset($_SESSION['usuario_id'])):
                echo 'Olá: ' . $_SESSION['usuario_email']; 
            ?>    
            <a class="btn btn-outline-danger" href="<?=URL?>/usuarios/sair">
                    Sair
                </a>
            <?php
                else: 
            ?> 
                <span >
                <a class="btn btn-outline-warning" href="<?=URL?>/usuarios/cadastrar">
                    Cadastrar
                </a>
                <a class="btn btn-outline-warning" href="<?=URL?>/usuarios/login">
                    Login
                </a>            
            </span>    
        <?php  
            endif; 
        ?>        
        </span>
        </div>
    </div>
    </nav>


</header>
 