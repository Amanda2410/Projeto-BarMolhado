<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>PHP</title>
</head>
<style>
  .formsbox {
    background-color: white;
    border: 2px solid yellow;
    max-width: 300px;
    box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    padding: 20px;
    border-radius: 20px;
  }
  .form-control {
    display: inline-block; /* Permite a mudança dinâmica da largura */
    width: auto; /* Inicializa com largura automática */
  }
</style>
<body>
    <!--container do forms com margin-top-->
    <div class="container mt-5">
<!--classe pra organizar os itens-->
    <div class="formsbox">
    <h2 class="mb-4">Forms</h2>
    <form action="">
    <div class="form-group mb-2 d-flex flex-column flex-md-row"> <!--flex é usado para criar um layout flexível-->
    <label for="nome" class="col-md-2 col-form-label">LALALA</label>
</div>
    <div class="col-md-5">
    <input type="text" class="form-control mb-2 d-flex flex-column flex-md-row" id="campo1" name="campo1" placeholder="belbel">
</div>
    <div class="form-group mb-2 d-flex flex-column flex-md-row"> <!--flex é usado para criar um layout flexível-->
    <label for="nome" class="col-md-2 col-form-label">LALALA</label>
</div>
    <div class="col-md-5">
    <input type="text" class="form-control mb-4 d-flex flex-column flex-md-row" id="campo1" name="campo1" placeholder="belbel">
</div>
    <div class="form-group mb-4 d-flex justify-content-auto">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
</div>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</html>