<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini-CRM</title>
</head>
<body>
    <h1>Bonjour</h1>

    <table>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td>{{ $c['name'] }}</td>
                    <td>{{ $c['email'] }}</td>
                    <td>{{ $c['city'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>