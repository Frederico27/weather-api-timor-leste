<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h1>API Documentation Weather Timor-Leste</h1>
        <h2 style="color: rgb(52, 52, 255)">GET: api/klima</h2>
        <p>This endpoint retrieves all data climate information froma all municipalities.   <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima">Result Link</a></p>
      
       

        <h2 style="color: rgb(43, 166, 34)">GET: api/klima/{municipality}</h2>
        <p>This endpoint retrieves climate information for a specific municipality. Examples we specify on Dili data  like this <b><i>api/klima/dili</i></b>. <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima/dili">Result Link</a> </p>

        <h2>Weather Code Descriptions</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Weather Code</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>Lalehan Naroman</td>
                </tr>
                <tr>
                    <td>1, 2, 3</td>
                    <td>Naroman Naton, Kalohan, Kalohan nakukun uitoan</td>
                </tr>
                <!-- Add more rows for other weather codes -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
