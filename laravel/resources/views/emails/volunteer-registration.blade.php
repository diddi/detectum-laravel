<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bedankt voor je registratie als vrijwilliger</title>
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
            <h1>Bedankt voor je registratie!</h1>
        </div>
        <div class="content">
            <p>Beste {{ $volunteer->voornaam }},</p>
            
            <p>Bedankt voor je registratie als vrijwilliger bij Detectum. We zijn blij dat je deel wilt uitmaken van onze gemeenschap!</p>
            
            <div class="details">
                <p><span class="label">Naam:</span> {{ $volunteer->voornaam }} {{ $volunteer->naam }}</p>
                <p><span class="label">E-mail:</span> {{ $volunteer->email }}</p>
                <p><span class="label">Stad:</span> {{ $volunteer->stad }}</p>
                <p><span class="label">Actieradius:</span> {{ $volunteer->actieradius }} km</p>
            </div>
            
            <p>Je kunt nu inloggen op je account om je profiel te beheren en je in te schrijven voor evenementen. We houden je op de hoogte van activiteiten in jouw regio die binnen je actieradius vallen.</p>
            
            <a href="{{ route('login') }}" class="button">Inloggen op je account</a>
            
            <p>Heb je vragen over je registratie? Neem dan contact op met ons via <a href="mailto:info@detectum.be">info@detectum.be</a>.</p>
            
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
