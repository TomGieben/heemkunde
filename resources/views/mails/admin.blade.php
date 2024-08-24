<h1>Er is een nieuwe contactverzoek</h1>
<b>Naam:</b><br>
{{ $data['name'] }}<br>
<b>Email:</b><br>
<a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a><br>
<b>Bericht:</b><br>
<p>{{ $data['message'] }}</p><br>