<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nieuwe vrijwilliger registratie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1b5e20;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #666;
        }
        .button {
            display: inline-block;
            background-color: #1b5e20;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        .details {
            background-color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
            border-left: 4px solid #1b5e20;
        }
        .details p {
            margin: 5px 0;
        }
        .label {
            font-weight: bold;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nieuwe vrijwilliger registratie</h1>
        </div>
        <div class="content">
            <p>Beste beheerder,</p>
            
            <p>Er is een nieuwe vrijwilliger geregistreerd op de Detectum website.</p>
            
            <div class="details">
                <p><span class="label">Naam:</span> {{ $volunteer->voornaam }} {{ $volunteer->naam }}</p>
                <p><span class="label">E-mail:</span> {{ $volunteer->email }}</p>
                <p><span class="label">Telefoon:</span> {{ $volunteer->telefoon }}</p>
                <p><span class="label">Adres:</span> {{ $volunteer->adres }}</p>
                <p><span class="label">Postcode:</span> {{ $volunteer->postcode }}</p>
                <p><span class="label">Stad:</span> {{ $volunteer->stad }}</p>
                <p><span class="label">Actieradius:</span> {{ $volunteer->actieradius }} km</p>
                @if($volunteer->ervaring)
                <p><span class="label">Ervaring:</span> {{ $volunteer->ervaring }}</p>
                @endif
                @if($volunteer->interesses)
                <p><span class="label">Interesses:</span> {{ $volunteer->interesses }}</p>
                @endif
            </div>
            
            <p>Ga naar de backoffice om de gegevens van deze vrijwilliger te bekijken.</p>
            
            <a href="{{ route('admin.vrijwilligers.show', $volunteer->id) }}" class="button">Vrijwilliger bekijken</a>
        </div>
        <div class="footer">
            <p>Dit is een automatisch gegenereerde e-mail. Gelieve niet te antwoorden op dit bericht.</p>
            <p>&copy; {{ date('Y') }} Detectum. Alle rechten voorbehouden.</p>
        </div>
    </div>
</body>
</html>
