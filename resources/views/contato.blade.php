<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Bebas+Neue&family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Contato - CoffeeShop Smokey</title>
</head>
<body>
<header class="container-fluid p-3 bg-light">
    <div id="cabecalho">
        <img id="logo" src="img/logo.png" alt="Logo da CoffeeShop Smokey" class="img-fluid">
    </div>
</header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul id="menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/historia">História</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeria">Galeria</a></li>
                <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
            </ul>
        </div>
    </nav>

    <main class="container my-5">
        <h1 class="text-center mb-4">Contato</h1>

        <form action="enviar-mensagem.php" method="POST" class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="col-12">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </main>

    <div class="mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64574821.56666757!2d-70.45146207334253!3d8.94130790420833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60995697795d7%3A0x5a02cf51751f8238!2sSmokey%20Coffeeshop!5e0!3m2!1sen!2sbr!4v1726754033541!5m2!1sen!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer id="rodape" class="text-center p-4 bg-light">
        <p>CoffeeShop Smokey<br> Rembrandtplein 24, 1017 CV Amsterdam, Netherlands</p>
        <p>Telefone: +31 20 623 7244 | E-mail: contato@smokeycoffeeeshop.com.br</p>
        <div>
            <a href="https://youtube.com" aria-label="Youtube"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/youtube-play-icone.png" alt="YouTube" style="width: 40px;"></a>
            <a href="https://facebook.com" aria-label="Facebook"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/facebook-icone-icon.png" alt="Facebook" style="width: 40px;"></a>
            <a href="https://instagram.com" aria-label="Instagram"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon-1.png" alt="Instagram" style="width: 40px;"></a>
        </div>
    </footer>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>