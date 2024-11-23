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
            flex: 1; /* Neemt alle ruimte in tussen header en footer */
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

        .company-info h1 {
            margin: 0;
            font-size: 18px;
        }

        .details {
            margin-bottom: 30px;
        }

        .details .client-info p {
            margin: 0;
            font-size: 14px;
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
    <!-- Header -->
    <table class="header-table">
        <tr>
            <!-- Logo -->
            <td class="logo">
                <img src="{{ asset('images/develix.nl/develix.png') }}" alt="Develix Logo" width="150" height="150">
            </td>

            <!-- Company Info -->
            <td class="company-info">
                <h2>Develix</h2>
                <p>Kaagjesland 34, 2811 KN Reeuwijk</p>
                <p>KvK: 12345678 | BTW: NL123456789B01</p>
                <p>Bank: NL80 TEST 0252 7894 66</p>
            </td>
        </tr>
    </table>

    <!-- Client Details -->
    <div class="details">
        <div class="client-info">
            <p><strong>Naam:</strong> {{ $name }}</p>
            <p><strong>E-mailadres:</strong> {{ $email }}</p>
            <p><strong>Datum:</strong> {{ date('d-m-Y') }}</p>
        </div>
    </div>

    <!-- Services Table -->
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
            <td>{{ $service }}</td>
            <td>{{ $pages ?? 1 }}</td>
            <td>€{{ number_format(500, 2, ',', '.') }}</td>
            <td>€{{ number_format($total_price, 2, ',', '.') }}</td>
        </tr>
        </tbody>
    </table>

    <!-- Totals -->
    <div class="totals">
        <p><strong>Subtotaal:</strong> €{{ number_format($total_price, 2, ',', '.') }}</p>
        <p><strong>BTW (21%):</strong> €{{ number_format($total_price * 0.21, 2, ',', '.') }}</p>
        <p class="text-xl font-bold"><strong>Totaal:</strong> €{{ number_format($total_price * 1.21, 2, ',', '.') }}</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    Bedankt voor uw vertrouwen in Develix. Heeft u vragen over deze factuur? Neem gerust contact met ons op via <a href="mailto:info@develix.nl">info@develix.nl</a>.
</div>
</body>
</html>
