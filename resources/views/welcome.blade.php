<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather API Timor-Leste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/2/26/Flag_of_East_Timor.svg"
        type="image/png">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }

        .header-icon {
            width: 40px;
            margin-left: 10px;
        }

        .weather-icon {
            width: 50px;
            height: 50px;
        }

        footer {
            background-color: #f1f1f1;
            padding: 20px 0;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Weather API Timor-Leste <img
                    src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/timor-leste.png"
                    class="header-icon" alt="tls"></h1>
            <p class="lead">Access real-time and forecasted weather data for all municipalities in Timor-Leste.</p>
        </div>

        <div class="mb-5 text-center">
            <img src="https://simplemaps.com/static/svg/country/tl/admin1/tl.svg" class="img-fluid rounded shadow-sm"
                alt="Timor-Leste Map">
        </div>

        <section>
            <h3>About this API</h3>
            <p>This API collects and provides real-time weather data across all municipalities of Timor-Leste, sourced
                from Himawari Satellite via <a href="https://github.com/open-meteo/open-meteo" target="_blank">Open
                    Meteo</a>. Note: Accuracy may vary due to the single-source satellite imagery and limited on-ground
                monitoring stations.</p>
        </section>

        <section class="mt-5">
            <h3>Weather Parameter Descriptions (Tetun)</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Parameter</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>id</td>
                            <td>Numeru identifier ba dadus</td>
                        </tr>
                        <tr>
                            <td>tempu</td>
                            <td>Oras tempu iha formatu UTC</td>
                        </tr>
                        <tr>
                            <td>temperatura_2m</td>
                            <td>Temperatura average (<i>rata-rata</i>)</td>
                        </tr>
                        <tr>
                            <td>temperatura_2m_min</td>
                            <td>Temperatura minimu</td>
                        </tr>
                        <tr>
                            <td>temperatura_2m_max</td>
                            <td>Temperatura maximu</td>
                        </tr>
                        <tr>
                            <td>umidade_2m</td>
                            <td>Average umidade (<i>rata-rata kelembaban</i>)</td>
                        </tr>
                        <tr>
                            <td>presipitasaun</td>
                            <td>Sasukat ba materia kondensaun monu husi atmosfera</td>
                        </tr>
                        <tr>
                            <td>udan</td>
                            <td>Sasukat ba udan tun</td>
                        </tr>
                        <tr>
                            <td>kodigu_klima</td>
                            <td>Numeru identifika ba kondisaun klima (<a href="#weather">detallu</a>)</td>
                        </tr>
                        <tr>
                            <td>presaun_rai</td>
                            <td>Presaun rai nian (hPa)</td>
                        </tr>
                        <tr>
                            <td>velosidade_anin_10m</td>
                            <td>Velosidade anin per 10m</td>
                        </tr>
                        <tr>
                            <td>uv_index</td>
                            <td>Indexu radiasaun loro-matan</td>
                        </tr>
                        <tr>
                            <td>sunrise / sunset</td>
                            <td>Tempu loro-matan sa'e / tun</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="weather" class="mt-5">
            <h3>Weather Code Descriptions</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Icon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>Lalehan Naroman</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/clearsky.png"
                                    class="weather-icon" alt="clearsky"></td>
                        </tr>
                        <tr>
                            <td>1, 2, 3</td>
                            <td>Naroman Naton, Kalohan</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/fewclouds.png"
                                    class="weather-icon" alt="fewclouds"></td>
                        </tr>
                        <tr>
                            <td>45, 48</td>
                            <td>Abu-Abu taka</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/scatteredclouds.png"
                                    class="weather-icon" alt="scatteredclouds"></td>
                        </tr>
                        <tr>
                            <td>51-55</td>
                            <td>Udan Piska</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/rain.png"
                                    class="weather-icon" alt="rain"></td>
                        </tr>
                        <tr>
                            <td>61-65</td>
                            <td>Udan</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/showerrain.png"
                                    class="weather-icon" alt="showerrain"></td>
                        </tr>
                        <tr>
                            <td>71-77</td>
                            <td>Neve</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/snow.png"
                                    class="weather-icon" alt="snow"></td>
                        </tr>
                        <tr>
                            <td>95-99</td>
                            <td>Railakan</td>
                            <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/thunderstorm.png"
                                    class="weather-icon" alt="thunderstorm"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mt-5">
            <h3>API Endpoints</h3>
            <ul>
                <li><strong class="text-primary">GET</strong> <code>/api/klima</code> – Get current weather for all
                    municipalities [<a href="https://weather-api-timor-leste.vercel.app/api/klima">Try</a>]</li>
                <li><strong class="text-success">GET</strong> <code>/api/klima/{municipality}</code> – Get current
                    weather by municipality. Example: Dili [<a
                        href="https://weather-api-timor-leste.vercel.app/api/klima/dili">Try</a>]</li>
                <li><strong class="text-danger">GET</strong> <code>/api/klima/diariu/{municipality}</code> – Get daily
                    forecast. Example: Baucau [<a href="https://weather-api-timor-leste.vercel.app/api/klima/diariu/baucau">Try</a>]
                </li>
                <li><strong class="text-warning">GET</strong> <code>/api/klima/oras/{municipality}</code> – Get hourly
                    forecast. Example: Ermera [<a href="https://weather-api-timor-leste.vercel.app/api/klima/oras/ermera">Try</a>]
                </li>
            </ul>
        </section>

        <section class="mt-4">
            <h4>Contact</h4>
            <p>Have suggestions or found issues? Contribute on <a
                    href="https://github.com/Frederico27/weather-api-timor-leste" target="_blank">GitHub</a>.</p>
            <p>Connect with me: <a href="https://github.com/frederico27" target="_blank" class="bx bxl-github"></a> | <a
                    href="https://www.linkedin.com/in/frederico-marcal-917377190/" target="_blank"
                    class="bx bxl-linkedin-square"></a></p>
        </section>
    </div>

    <footer class="text-center">
        <div class="container">
            <small>© 2025 Weather API Timor-Leste – Powered by Open Meteo</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
