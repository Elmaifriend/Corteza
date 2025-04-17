<h1>Your Tiny House Quote!</h1>

<p>Hello! {{$quote->name}} we will be more than happy to work with you, our sales team is gonna call you soon!</p>
<b>Thank you for belive in us.</b>

<h2>Resume:</h2>
<b>Your phone: </b> {{$quote->cell_phone}}
<b>Your Loction: </b> {{$quote->city}} {{$quote->neighborhood}}
<b>Preferred contact time: </b> Date: {{$quote->scheduled->format('d-m-y') }} Time: {{$quote->scheduled->format('H:i') }}
<h2>Your Quote:</h2>
<b>Model: </b> {{$quote->model}}
<textarea>
    {{htmlspecialchars($quote->description)}}
</textarea>


