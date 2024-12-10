<!DOCTYPE html>
<html>
<head>
    <title>Offerte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        .header-table {
            width: 100%;
            margin-bottom: 30px;
        }

        .header-table td {
            vertical-align: middle;
        }

        .logo {
            width: 150px;
        }

        .company-info {
            text-align: right;
            font-size: 14px;
        }

        .details {
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .totals {
            float: right;
        }

        .totals p {
            margin: 5px 0;
            font-size: 14px;
        }

        .footer {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            font-size: 14px;
            text-align: center;
            color: #555;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="header-table">
        <tr>
            <td class="logo">
                <img src="{{ asset('images/develix.nl/develix.png') }}" alt="Develix Logo" width="150" height="150">
            </td>
            <td class="company-info">
                <h2>Develix</h2>
                <p>Kaagjesland 34, 2811 KN Reeuwijk</p>
                <p>KvK: 95689788 | BTW: NL005169053B87</p>
                <p>Bank: NL23 RABO 0388 1676 45</p>
            </td>
        </tr>
    </table>

    <div class="details">
        <p><strong>Naam:</strong> {{ $name }}</p>
        <p><strong>E-mailadres:</strong> {{ $email }}</p>
        <p><strong>Datum:</strong> {{ date('d-m-Y') }}</p>
    </div>

    <div class="details">
        <h3>Dienstinformatie</h3>
        <p><strong>Geselecteerde Dienst:</strong> {{ $service }}</p>
        <p><strong>Extra Functionaliteiten:</strong> {{ $extra_features }}</p>
    </div>

    <!-- Pricing Table -->
    <table class="table">
        <thead>
        <tr>
            <th>Omschrijving</th>
            <th>Aantal</th>
            <th>Prijs per eenheid</th>
            <th>Totaal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Basisprijs {{ $service }}</td>
            <td>1</td>
            <td>€{{ number_format($base_price, 2, ',', '.') }}</td>
            <td>€{{ number_format($base_price, 2, ',', '.') }}</td>
        </tr>
        @foreach ($page_details as $page)
            <tr>
                <td>Pagina: {{ $page['name'] }}</td>
                <td>1</td>
                <td>€{{ number_format($page['price'], 2, ',', '.') }}</td>
                <td>€{{ number_format($page['price'], 2, ',', '.') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="totals">
        <p><strong>Subtotaal:</strong> €{{ number_format($total_price, 2, ',', '.') }}</p>
        <p><strong>BTW (21%):</strong> €{{ number_format($total_price * 0.21, 2, ',', '.') }}</p>
        <p><strong>Totaal:</strong> €{{ number_format($total_price * 1.21, 2, ',', '.') }}</p>
    </div>
</div>

<div class="footer">
    Bedankt voor uw vertrouwen in Develix. Heeft u vragen over deze factuur? Neem gerust contact met ons op via <a href="mailto:info@develix.nl">info@develix.nl</a>.
</div>
</body>
</html>
