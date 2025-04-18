<h1>Your Tiny House Quote!</h1>

<p>Hello! {{$quote->name}} we will be more than happy to work with you, our sales team is gonna call you soon!</p>
<b>Thank you for believing in us.</b>
<h2>Resume:</h2>
<b>Your phone: </b> {{$quote->cell_phone}} <br>
<b>Your Loction: </b> {{$quote->city}} {{$quote->neighborhood}} <br>
<b>Preferred contact time: </b> <br>
Date: {{$quote->scheduled->format('d-m-y') }} <br>
Time: {{$quote->scheduled->format('H:i') }} <br>
<h2>Your Quote:</h2>
<p> <b>Model: </b> {{$quote->model}} </p>
<pre>{{$quote->description}}<pre>


