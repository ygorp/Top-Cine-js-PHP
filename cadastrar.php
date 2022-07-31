<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Cadastrar</title>
</head>

<body class="grey lighten-1">
  <nav class="nav-extended  indigo lighten-1">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="galeria.php">Galeria</a></li>
      </ul>
    </div>

    <div class="nav-header center">
      <h1>TopCine</h1>
    </div>
  </nav>

  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Cadastrar Filme</span>

          <div class="row">
            <div class="input-field col s12">
              <label for="titulo">Titulo do filme</label>
              <input id="titulo" type="text" class="validate">
            </div>
          </div>

          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="sinopse" class="materialize-textarea"></textarea>
                  <label for="sinopse">Sinopse</label>
                </div>
              </div>
            </form>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
              <label for="nota">Nota</label>
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn indigo lighten-1">
              <span>Imagem</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Adicione sua imagem aqui">
            </div>
          </div>

        </div>
        <div class="card-action">
          <a class="btn waves-effect waves-light indigo lighten-1" href="galeria.php">Cancelar</a>
          <a href="#" class="waves-effect waves-light btn indigo darken-4">Salvar</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>