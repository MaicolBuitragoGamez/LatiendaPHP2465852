<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    <h1>Paises de la región</h1>

    <table border="solid" class="table table-bordered">
        <thead>
            <tr>
                <th class="text-primary">
                    País
                </th>
                <th class="text-secondary">
                    Capital
                </th>
                <th class="text-success">
                    Moneda
                </th>
                <th class="text-danger">
                    Población
                </th>
                <th class="text-info">
                    Ciudades
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>
                <td class="text-primary" rowspan="{{ count($infopais['ciu']) }}">
                    {{ $pais }}
                </td>
                <td class="text-secondary" rowspan="{{ count($infopais['ciu']) }}">
                    {{ $infopais["cap"] }}
                </td>
                <td class="text-success" rowspan="{{ count($infopais['ciu']) }}">
                    {{ $infopais ["mon"] }}
                </td>
                <td class="text-danger" rowspan="{{ count($infopais['ciu']) }}">
                    {{ $infopais ["pob"] }} millones hab.
                </td>
                @foreach($infopais["ciu"] as $ciudad)
                <td class="text-info">
                    {{ $ciudad }}
                </td>
            </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

</body>
</html>