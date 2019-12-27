<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flyer</title>

    <link rel="stylesheet" href="assets/css/index.min.css">
</head>
<body>

    <div id="descargar">

        <header>
            <h1>
                ¡Tenemos una <br> <span>novedad</span> para vos!
            </h1>
            <div class="barraVerde"></div>
            <p>
                Ahora, con tu Seguro de Hogar podés <br> asegurar tu monopatín eléctrico.
            </p>
            <img src="assets/images/header.png" alt="Monopatin">
        </header>

        <section class="bajada">
            <h2>
                ANDÁ TRANQUILO. ANDÁ SEGURO.
            </h2>
            <p>
                Conocé más ingresando en la web de <strong>San Cristóbal</strong>.
            </p>
        </section>

        <section class="footer">
            <h4>
                Cualquier consulta, no dudes en contactarme:
            </h4>
            <div class="datos">
                <p id="nombre">Juan Perez</p>
                <p>Mail: <span id="email">juabp@gmail.com</span></p>
                <p>Tel.: <span id="tel">(351) 152012333</span></p>
                <img src="assets/images/ic-tel.png" alt="Telefono">
            </div>
        </section>
        
        <footer>
            <img src="assets/images/logo.png" alt="San Cristobal">
        </footer>

    </div>
    
    <div class="editInfo">

        <div class="title">
            <h2>
                Editar campos
            </h2>
        </div>

        <div id="nombrePersona" class="input-group">
            <label for="nombre">Nombre y Apellido</label>
            <input type="text" id="nombreEdit" onclick="this.select()">
        </div>

        <div id="emailPersona" class="input-group">
            <label for="email">Mail</label>
            <input type="email" id="emailEdit" onclick="this.select()">
        </div>

        <div id="telPersona" class="input-group">
            <label for="tel">Teléfono</label>
            <input type="tel" id="telEdit" onclick="this.select()">
        </div>
        

        <div class="botoncito">
            <button id="descargarBoton">Descargar Flyer</button>
        </div>
        
    </div>

    <div id="mostrar"></div>
    <div class="overlay"></div>
    <a id="bajar"></a>

    <script src="assets/scripts/jquery-3.4.1.min.js"></script>
    <script src="assets/scripts/html2canvas.min.js"></script>
    <script src="assets/scripts/index.js"></script>
</body>
</html>