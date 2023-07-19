<center>
    <img style="border-radius: 10px;" src="https://i.imgur.com/ElG3RsT.png" alt="Imagen del encabezado" width="50%"
        class="header-image">
</center>

<section>
    <center>
        <h2>Hermes</h2>
        <h3>{{ __('Lang') }}</h3>
    </center>
    
    <p style='text-align: justify;'>Gracias por usar mi proyecto en Github para enviar correos electrónicos.Este
        correo fue generado a través de un proyecto creado en el lenguaje de programación PHP, el cual tiene
        como UNICO propósito <b>enseñar</b> cómo enviar correos reales desde el código.</p>
    <p style='text-align: justify;'>El correo fue enviado por <b><i>{{ $name }}</i></b>.
    <br>El asunto del mensaje es: <b><i>{{ $subject }}</i></b>.
    <br>A continuación se muestra el contenido del mensaje:
    </p>
    <p style='text-align: justify;'><i>{{ $messageEmail }}</i></p>

    <p style='text-align: justify;'>Si recibes mensajes indiscriminados, ofensivos o demasiados correos
        electrónicos de este servicio, no dudes en escribirme a jcomte23@outlook.com y con mucho gusto te daré
        una solución.</p>
    <p style='text-align: justify;'>Si eres un programador y te gusto el proyecto visita <a
            href="https://github.com/jcomte23/HERMES" style="text-decoration: none;
            color: black;"><strong>El repositorio</strong></a> y regalame un click en 'Star'</p>

    <p style='text-align: justify;'>Atentamente:
        <br>
        <b>Javier Cómbita Téllez</b>
        <br>
        <a href="https://javiercombita.com">https://javiercombita.com</a>
    </p>
</section>
