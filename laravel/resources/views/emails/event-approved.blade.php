<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Je evenementvoorstel is goedgekeurd</title>
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
            <h1>Je evenementvoorstel is goedgekeurd!</h1>
        </div>
        <div class="content">
            <p>Beste {{ $event->contact_naam }},</p>
            
            <p>Goed nieuws! Je evenementvoorstel "{{ $event->titel }}" is goedgekeurd en is nu gepubliceerd op onze website.</p>
            
            <div class="details">
                <p><span class="label">Titel:</span> {{ $event->titel }}</p>
                <p><span class="label">Type:</span> {{ $event->type }}</p>
                <p><span class="label">Datum:</span> {{ $event->datum->format('d-m-Y') }}</p>
                <p><span class="label">Tijd:</span> {{ $event->start_tijd }} - {{ $event->eind_tijd }}</p>
                <p><span class="label">Locatie:</span> {{ $event->locatie }}</p>
            </div>
            
            <p>Vrijwilligers kunnen zich nu inschrijven voor je evenement. Je kunt de inschrijvingen volgen via je persoonlijke account.</p>
            
            <a href="{{ route('evenementen.show', $event->id) }}" class="button">Bekijk je evenement</a>
            
            <p>Heb je vragen over je evenement? Neem dan contact op met ons via <a href="mailto:info@detectum.be">info@detectum.be</a>.</p>
            
            <p>Met vriendelijke groet,<br>
            Het Detectum team</p>
        </div>
        <div class="footer">
            <p>Dit is een automatisch gegenereerde e-mail. Gelieve niet te antwoorden op dit bericht.</p>
            <p>&copy; {{ date('Y') }} Detectum. Alle rechten voorbehouden.</p>
        </div>
    </div>
</body>
</html>
