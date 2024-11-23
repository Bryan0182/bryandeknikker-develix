<!DOCTYPE html>
<html>
<head>
    <title>Nieuw contactformulier</title>
</head>
<body>
<h1>Nieuw bericht van {{ $details['first_name'] }} {{ $details['last_name'] }}</h1>
<p><strong>E-mailadres:</strong> {{ $details['email'] }}</p>
<p><strong>Telefoon:</strong> {{ $details['phone'] ?? 'Niet opgegeven' }}</p>
<p><strong>Bericht:</strong></p>
<p>{{ $details['message'] }}</p>
</body>
</html>
