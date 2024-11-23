<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe Offerte Aanvraag</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h1 {
            color: #333;
        }
        p {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
<h1>Nieuwe Offerte Aanvraag</h1>
<p><strong>Naam:</strong> {{ $quote_data['name'] }}</p>
<p><strong>E-mailadres:</strong> {{ $quote_data['email'] }}</p>
<p><strong>Dienst:</strong> {{ $quote_data['service'] }}</p>
<p><strong>Aantal pagina's:</strong> {{ $quote_data['pages'] }}</p>
<p><strong>Extra's:</strong> {{ $quote_data['extra_features'] }}</p>
<h2>Totaalprijs: €{{ number_format($quote_data['total_price'], 2, ',', '.') }}</h2>
</body>
</html>
