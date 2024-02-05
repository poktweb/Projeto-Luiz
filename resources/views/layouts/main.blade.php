
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a class="navbar-brand" href="/">
            <img src="/img/Logo.png" alt="Linux">
          </a>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Livros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events/create">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Contato</a>
              </li>
            </ul>
          </div>

              {{--CARINHOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO--}}
         {{-- <li class="navbar">
            <a href = "carrinho.php"><img src="/img/cart.png" class="cart" alt="..."></a>
            <a class="carrinho" href="carrinho.php">Carrinho</a>
          </li>--}}


        </div>
      </nav>
</header>

  @yield('content')
  <footer>
    <p style="font-size: 17px">&copy; 2024 - Todos os direitos reservados</p>
    <img src="/img/SITE-SEGURO.png" class="seguro" alt="...">
    <nav>
      <ul>
        <li><a href="#">Termos de uso</a></li>
        <li><a href="#">Política de privacidade</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </nav>
  </footer>
</body>
</html>
