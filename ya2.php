<!DOCTYPE html>
<html>
	<head>
		<title>Enviar Correo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body>
        <div id="wrapper">
            <h2> Envie su formulario</h2>
		    <form action="https://formsubmit.co/arvizu.adriana80@gmail.com" method="POST">
                <label for="Nombre">Nombre</label>
                <input type="text" name="name">

                <label for="email">Correo Electonico</label>
                <input type="email" name="email">

                <label for="subject">Queja</label>
                <input type="text" name="subject">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" cols="15" rows="5"> </textarea>

                <button type="submit" value="Enviar">Enviar</button>
            </form>
        </div>
    </body>
</html>