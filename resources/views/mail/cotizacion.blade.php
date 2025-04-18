<h1>¡Tu Cotización de Tiny House!</h1>

<p>¡Hola! {{$quote->name}}, estaremos más que felices de trabajar contigo. ¡Nuestro equipo de ventas te llamará pronto!</p>
<b>Gracias por confiar en nosotros.</b>

<h2>Resumen:</h2> <br>
<b>Tu teléfono: </b> {{$quote->cell_phone}} <br>
<b>Tu ubicación: </b> {{$quote->city}} {{$quote->neighborhood}} <br>
<b>Hora preferida de contacto: </b> Fecha: {{$quote->scheduled->format('d-m-y') }} Hora: {{$quote->scheduled->format('H:i') }} <br>
<h2>Tu Cotización:</h2> <br>
<b>Modelo: </b> {{$quote->model}} <br>
<pre>{{htmlspecialchars($quote->description)}}<pre>