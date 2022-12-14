<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Войти</a></li>
      </ul>
    </header>
    <div class="container mt-5">
        <h1>Статьи</h1>
        <div class="d-flex flex-wrap">
            <?php for ($i = 0; $i < 5; $i ++): ?>
                <div class="feature col">
                    <img src="img/<? php echo $i ?>.jpeg", alt="Sorry" class="thumbnail">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
                    </div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
            <?php endfor; ?>
    </div>
    </div>
    <footer>
        <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
            <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
            </div>
        </div>
        </div>
        </div>
    </footer>
</body>
</html>