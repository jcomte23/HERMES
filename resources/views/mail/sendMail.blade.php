<center>
    <img style="border-radius: 10px;" src="https://i.imgur.com/ElG3RsT.png" alt="Imagen del encabezado" width="50%"
        class="header-image">
</center>

<section>
    <center>
        <h2>Hermes</h2>
    </center>
    
    <p style='text-align: justify;'>{{ __('paragraphEmailOne') }}</p>
    <p style='text-align: justify;'>{{ __('nameEmail') }}<b><i>{{ $name }}</i></b>.
    <br>{{ __('subjectEmail') }}: <b><i>{{ $subject }}</i></b>.
    <br>{{ __('spanEmailOne') }}:
    </p>
    <p style='text-align: justify;'><i>{{ $messageEmail }}</i></p>

    <p style='text-align: justify;'>{{ __('paragraphEmailTwo') }}</p>
    <p style='text-align: justify;'>{{ __('spanEmailTwo') }} <a
            href="https://github.com/jcomte23/HERMES" style="text-decoration: none;
            color: black;"><strong>{{ __('The repository') }}</strong></a> {{ __('spanEmailThree') }}</p>

    <p style='text-align: justify;'>{{ __('Sincerely') }}:
        <br>
        <b>Javier Cómbita Téllez</b>
        <br>
        <a href="https://javiercombita.com">https://javiercombita.com</a>
    </p>
</section>
