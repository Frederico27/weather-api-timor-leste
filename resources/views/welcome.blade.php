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
    <div class="container mt-5">
        <h1>API Documentation Weather Timor-Leste</h1>

        <div class="container mb-3">
            <div class="row">
              <div class="col-md-12">
                <div class="center-container">
                  <img src="https://simplemaps.com/static/svg/country/tl/admin1/tl.svg" class="img-fluid" alt="Timor-Leste Map">
                </div>
              </div>
            </div>
          </div>

       <u><h2>Current Data</h2></u> 
        <h3 style="color: rgb(52, 52, 255)">GET: api/klima</h3>
        <p>This endpoint retrieves all current weather data information from all municipalities.   <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima">Result Link</a></p>
       

        <h3 style="color: rgb(43, 166, 34)">GET: api/klima/{municipality}</h3>
        <p>This endpoint retrieves current weather information for a specific municipality. Examples we specify on Dili data  like this <b><i>api/klima/dili</i></b>. <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima/dili">Result Link</a> </p>


        <u><h2>Daily Data</h2></u>
        <h3 style="color: rgb(236, 0, 0)">GET: api/klima/diariu/{municipality}</h3>
        <p>This endpoint retrieves daily weather of next 7 days from specific municipality. Examples we specify on Baucau data  like this <b><i>api/klima/diariu/baucau</i></b>.  <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima/diariu/baucau">Result Link</a></p>


        <u><h2>Hourly Data</h2></u>
        <h3 style="color: rgb(247, 0, 144)">GET: api/klima/oras/{municipality}</h3>
        <p>This endpoint retrieves hourly weather of next 10 hours from specific municipality. Examples we specify on Ermera data like this <b><i>api/klima/oras/ermera</i></b>. <a href="https://weather-api-timor-leste-production.up.railway.app/api/klima/oras/ermera">Result Link</a></p>


        <h3>For More Information about this Swagger API Docs </h3>
        <p>You can visit this <a href="https://weather-api-timor-leste-production.up.railway.app/api/documentation">link</a></p>
       

        <h2>Weather Parameter Descriptions</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>numeru identifier ba dadus</td>
                </tr>

                <tr>
                    <td>tempu</td>
                    <td>Oras tempu iha formatu UTC</td>
                </tr>

                <tr>
                    <td>temperatura_2m</td>
                    <td>Temperatura average  (<i>rata-rata</i>)</td>
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
                    <td>Sasukat posibilidade udan tun</td>
                </tr>

                <tr>
                    <td>presipitasaun_sum</td>
                    <td>Sasukat somatoriu kada loron/oras ba posibilidade udan tun</td>
                </tr>

                <tr>
                    <td>udan</td>
                    <td>Sasukat ba udan tun</td>
                </tr>

                <tr>
                    <td>udan_sum</td>
                    <td>Sasukat somatoriu kada loron/oras ba udan tun</td>
                </tr>


                <tr>
                    <td>kodigu_klima</td>
                    <td>numeru identifika ba kondisaun klima. Informasaun klaru liu iha <a href="#weather">iha okos</a></td>
                </tr>

                <tr>
                    <td>presaun_rai</td>
                    <td>Kondisaun presaun ba rai nian ne'ebe ho formatu hPA</a></td>
                </tr>

                <tr>
                    <td>presaun_tasi</td>
                    <td>Kondisaun presaun ba tasi nian ne'ebe ho formatu hPA</a></td>
                </tr>

                <tr>
                    <td>velosidade_anin_10m</td>
                    <td>numeru husi velosidade anin per 10m</a></td>
                </tr>

                <tr>
                    <td>uv_index</td>
                    <td>numeru indexu husi radiasaun loro-matan</a></td>
                </tr>

                <tr>
                    <td>sunrise</td>
                    <td>tempu loro-matan sa'e husi horizon</a></td>
                </tr>

                <tr>
                    <td>sunset</td>
                    <td>tempu loro-matan tun husi horizon</a></td>
                </tr>
             

                
                <!-- Add more rows for other weather codes -->
            </tbody>
        </table>

        <section id="weather">
            <h2>Weather Code Descriptions</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Weather Code (Kodigu Klima)</th>
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
                    <tr>
                        <td>45, 48</td>
                        <td>Abu-Abu taka</td>
                    </tr>
    
                    <tr>
                        <td>51, 53, 55</td>
                        <td>Udan Piska: Kamaan, Moderada, Intensidade aas</td>
                    </tr>
    
                    <tr>
                        <td>56, 57</td>
                        <td>Udan Piska Malirin: Kamaan, Moderada, Intensidade aas</td>
                    </tr>
    
                    <tr>
                        <td>61, 63, 65</td>
                        <td>Udan: Kamaan, Moderada, Intensidade aas</td>
                    </tr>
    
                    <tr>
                        <td>66, 67</td>
                        <td>Udan Malirin: Kamaan, Moderada, Intensidade aas</td>
                    </tr>
    
    
                    <tr>
                        <td>71, 73, 75</td>
                        <td>Neve: Kamaan, Moderada, Intensidade aas</td>
                    </tr>
    
    
                    <tr>
                        <td>77</td>
                        <td>Neve: Piska</td>
                    </tr>
    
                    <tr>
                        <td>80, 81, 82</td>
                        <td>Udan maka'as: Kamaan, Moderada, Maka'as</td>
                    </tr>
    
                    <tr>
                        <td>85, 86</td>
                        <td>Udan Neve: Kamaan, Maka'as</td>
                    </tr>
    
                    <tr>
                        <td>95</td>
                        <td>Railakan: kamaan, maka'as</td>
                    </tr>
    
                    <tr>
                        <td>96, 99</td>
                        <td>Railakan ho Udan Es: Kama'an no Maka'as</td>
                    </tr>
    
    
                    
                    <!-- Add more rows for other weather codes -->
                </tbody>
            </table>
        </section>

        <footer class="footer mb-3">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                <h5>Find this Repo:</h5>
                <p>If you have a critics or an issue about this project please tell me by issued on this repository  <a href="https://github.com/Frederico27/weather-api-timor-leste" target="_blank">GitHub</a>
                </p>
                <br>      
                <h5>Find me on:</h5>
                  <a href="https://github.com/frederico27" target="_blank">GitHub</a> | 
                  <a href="https://www.linkedin.com/in/frederico-marcal-917377190/" target="_blank">LinkedIn</a>
                </div>
              </div>
            </div>
          </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
