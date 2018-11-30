@include('encabezado')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5 login rounded">
        <div class="card-body">
          <h2 class="card-title text-center mb-5">Inicio de sesión</h2>
          <form action="/home" class="form-signin">
            <div class="form-group">
              <label for="usuario">Nombre de usuario</label>
              <input type="usuario" id="usuario" class="form-control" required autofocus>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar</button>
            <hr class="my-4">
            <button class="btn btn-outline-danger btn-sm" type="submit">He olvidado mi password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@include('pie')

