<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Oxygen&family=Red+Hat+Mono:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/normalize.css">
    <title>Bienes raices</title>
</head>
<body>
    <header class="header">
        <div class="contenedor contenido__header">
            <div class="barra">

                <a href = "inicio.html">
                    <!-- <img src="IMG/logo.svg" alt="Logo de la empresa"> -->
                    <!-- <h1 class="logo">Bienes<span class="logo__bold">Raices</span></h1>
                </a>

                <div class="mobile__menu">
                    <img src="IMG/barras.svg" alt="Icono menu">
                </div>

                <div>
                    <nav class="navegacion">
                        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
                        <a class="navegacion__enlace" href="anuncios.html">Anuncios</a>
                        <a class="navegacion__enlace" href="blog.html">Blog</a>
                        <a class="navegacion__enlace" href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
            <!-- <h1 class="contenido__header--h1">Venta de casas y residencias de lujo</h1> -->
        <!-- </div>
    </header> -->
    <?php include 'includes/templates/header.php'; ?>

    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>
            <img src="IMG/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene los datos a continuación</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">Email</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu teléfono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected> --Seleccione-- </option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" placeholder="Tu presupuesto o precio" id="presupuesto">

            </fieldset>

            <fieldset>
                <legend>Información de contacto</legend>
                <p class="texto--negro">Cómo desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Télefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p class="texto--negro">Si elegió teléfono, elija la fecha y hora </p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton boton--verde">

        </form>

    </main>

    <footer class="footer">
        <div class="contenedor contenido__footer">
            <div class="barra">
                <a href = "inicio.html">
                    <!-- <img src="IMG/logo.svg" alt="Logo de la empresa"> -->
                    <h1 class="logo">Bienes<span class="logo__bold">Raices</span></h1>
                </a>

                <div>
                    <nav class="navegacion--secundaria">
                        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
                        <a class="navegacion__enlace" href="anuncios.html">Anuncios</a>
                        <a class="navegacion__enlace" href="blog.html">Blog</a>
                        <a class="navegacion__enlace" href="contacto.html">Contacto</a>
                    </nav>
                </div>
            </div>
            <p class="footer__copyright centrar-texto">Todos los derechos resevados 2021&copy;</p>
    </footer>
    <script src="JS/scripts.js"></script>
</body>
</html>