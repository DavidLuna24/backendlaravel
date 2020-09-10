
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/css/style_registro.css" />
    <!-- Titulo de pagina-->
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  </head>
  <body>
    <header>
      <nav class="var">
        <div class="logo">
          <a href="index.html" class="botonInicio">Pozeydon</a>
        </div>
        <ul class="nav-links">
          <li class="tr">
            <a class="subrayado" href="index.html">Home</a>
          </li>
          <li class="tr">
            <a class="subrayado" href="información.html">Acerca de Nosotros</a>
          </li>
          <li class="tr">
            <a class="subrayado" href="Contactanos.html">Contáctanos</a>
          </li>
          <li class="tr">
            <a class="subrayado" href="Registro.html">Regístrate</a>
          </li>
          <li class="tr">
            <a href="Login.html" class="button-primary sb-login" style="font-size: 17px;">Iniciar Sesión</a>
          </li>
        </ul>
        <div class="mas-opciones">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>

    <main>
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100">
        <div class="wrapper wrapper--w680">
          <div class="card card-4 card-body">
            <div class="card-body">
              <h2 class="title">Inicio de Sesión</h2>
              <form action="" class="formulario" id="formulario">
                <!-- Grupo: Correo Electronico -->
                <div class="formulario__grupo formulario__grupo-terminos" id="grupo__correo">
                  <label for="correo" class="formulario__label">Correo Electrónico</label>
                  <div class="formulario__grupo-input">
                    <input
                      type="email"
                      class="formulario__input input--style-4"
                      name="correo"
                      id="correo"
                      placeholder="dylan.dajs@gmail.com"
                      id="lleno"
                    />
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario__input-error">
                    El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.
                  </p>
                </div>

                <!-- Grupo: Contraseña -->
                <div class="formulario__grupo formulario__grupo-terminos" id="grupo__password">
                  <label for="password" class="formulario__label">Contraseña</label>
                  <div class="formulario__grupo-input">
                    <input
                      type="password"
                      class="formulario__input input--style-4"
                      name="password"
                      id="password"
                      placeholder="Ingrese su contraseña"
                      id="lleno"
                    />
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  </div>
                  <p class="formulario__input-error">
                    La contraseña tiene que ser de 4 a 12 dígitos.
                  </p>
                </div>

                <div class="formulario__mensaje" id="formulario__mensaje">
                  <p>
                    <i class="fas fa-exclamation-triangle"></i>
                    <b>Error:</b> Correo electronico o contraseña incorrecta.
                  </p>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                  <button type="submit" class="formulario__btn" id="boton">
                    Ingresar
                  </button>
                  <a class="btn_second" href="Registro.html">
                    Crear Cuenta
                  </a>
                  <!---<a class="btn_second" href="index.html">
                    Home
                  </a>-->
                  <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
                    Inicio de sesión exitoso!
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="assets/js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  </body>
</html>


