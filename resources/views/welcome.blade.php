<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation Weather Timor-Leste</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_East_Timor.svg/1280px-Flag_of_East_Timor.svg.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_East_Timor.svg/1280px-Flag_of_East_Timor.svg.png" sizes="16x16"/>
</head>
<body>
    <div class="container mt-3">
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

          <h2>About this API:</h2>
          <p class="text-justify">This API is provided to collect all the real-time weather data of all municipalities across Timor-Leste. All the resource data is filtered, wrapped together and collected from Himawari Satelitte with the help by Open Source Weather Data: <a href="https://github.com/open-meteo/open-meteo">Open Meteo</a>. This API is created in objective to provided easy access and free of real-time weather data for purpose of development an app, website, ChatBot and many more related with weather in Timor-Leste.
            This API data is not 100% accurate because there is only one type of source that retrieve from satellite, so all the weather data only based by the image of the clouds cover the island, because there is still lack of Weather Monitoring System that established in Timor-Leste land across all municipalities.
        </p>
         
       
        <h2>The Swagger documentation of API <img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/timor-leste.png" style="width: 40px" alt="tls"></h2>
       

        <h2>Weather Parameter Descriptions in Tetun</h2>
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
                    <td>Sasukat ba materia kondensaun ne'ebe produz no monu husi atmosfera</td>
                </tr>

                <tr>
                    <td>presipitasaun_sum</td>
                    <td>Sasukat somatoriu kada loron/oras ba materia kondensaun ne'ebe produz no monu husi atmosfera</td>
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
                    <td>numeru identifika ba kondisaun klima. Informasaun klaru liu <a href="#weather">iha okos</a></td>
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
            <h2>Weather Code Descriptions in Tetun</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Weather Code (Kodigu Klima)</th>
                        <th>Description</th>
                        <th>Weather Logo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>Lalehan Naroman</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/clearsky.png" style="width: 60px; height: 60px" alt="clearsky"></td>
                    </tr>
                    <tr>
                        <td>1, 2, 3</td>
                        <td>Naroman Naton, Kalohan, Kalohan nakukun uitoan</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/fewclouds.png" style="width: 60px; height: 60px" alt="fewclouds"></td>
                    </tr>
                    <tr>
                        <td>45, 48</td>
                        <td>Abu-Abu taka</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/scatteredclouds.png" style="width: 60px; height: 60px;" alt="scatteredclouds"></td>
                    </tr>
    
                    <tr>
                        <td>51, 53, 55</td>
                        <td>Udan Piska: Kamaan, Moderada, Intensidade aas</td>
                        <td><img src=" https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/rain.png" style="width: 60px; height: 60px" alt="rain"></td>
                    </tr>
    
                    <tr>
                        <td>56, 57</td>
                        <td>Udan Piska Malirin: Kamaan, Moderada, Intensidade aas</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/rain.png" style="width: 60px; height: 60px" alt="rain"></td>
                    </tr>
    
                    <tr>
                        <td>61, 63, 65</td>
                        <td>Udan: Kamaan, Moderada, Intensidade aas</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/showerrain.png" style="width: 60px; height: 60px" alt="showerrain"></td>
                    </tr>
    
                    <tr>
                        <td>66, 67</td>
                        <td>Udan Malirin: Kamaan, Moderada, Intensidade aas</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/showerrain.png" style="width: 60px; height: 60px" alt="showerrain"></td>
                    </tr>
    
                    <tr>
                        <td>71, 73, 75</td>
                        <td>Neve: Kamaan, Moderada, Intensidade aas</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/snow.png" style="width: 60px; height: 60px" alt="snow"></td>
                    </tr>
    
    
                    <tr>
                        <td>77</td>
                        <td>Neve: Piska</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/snow.png" style="width: 60px; height: 60px" alt="snow"></td>
                    </tr>
    
                    <tr>
                        <td>80, 81, 82</td>
                        <td>Udan maka'as: Kamaan, Moderada, Maka'as</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/showerrain.png" style="width: 60px; height: 60px" alt="showerrain"></td>
                    </tr>
    
                   
                    <tr>
                        <td>85, 86</td>
                        <td>Udan Neve: Kamaan, Maka'as</td>
                        <td><img src=" https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/snow.png" style="width: 60px; height: 60px" alt="snow"></td>
                    </tr>
    
                    <tr>
                        <td>95</td>
                        <td>Railakan: kamaan, maka'as</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/thunderstorm.png" style="width: 60px; height: 60px" alt="thunderstorm"></td>
                    </tr>
    
                    <tr>
                        <td>96, 99</td>
                        <td>Railakan ho Udan, ka Udan Es: Kama'an no Maka'as</td>
                        <td><img src="https://cdn.jsdelivr.net/gh/Frederico27/weather-api-timor-leste/public/image/weathercode/thunderstorm.png" style="width: 60px; height: 60px" alt="thunderstorm"></td>
                    </tr>
    
    
                    
                    <!-- Add more rows for other weather codes -->
                </tbody>
            </table>
        </section>

        <h2>How to Use:</h2>
        <u><h5>Current Data</h5></u> 
        <h6 style="color: rgb(52, 52, 255)">GET: api/klima</h6>
        <p>This endpoint retrieves all current weather data information from all municipalities.   <a href="https://weather-api-timor-leste.vercel.app/api/klima">Result Link</a></p>
       

        <h6 style="color: rgb(43, 166, 34)">GET: api/klima/{municipality}</h6>
        <p>This endpoint retrieves current weather information for a specific municipality. Examples we specify on Dili data  like this <b><i>api/klima/dili</i></b>. <a href="https://weather-api-timor-leste.vercel.app/api/klima/dili">Result Link</a> </p>


        <u><h5>Daily Data</h5></u>
        <h6 style="color: rgb(236, 0, 0)">GET: api/klima/diariu/{municipality}</h6>
        <p>This endpoint retrieves daily weather of next 7 days from specific municipality. Examples we specify on Baucau data  like this <b><i>api/klima/diariu/baucau</i></b>.  <a href="https://weather-api-timor-leste.vercel.app/api/klima/diariu/baucau">Result Link</a></p>


        <u><h5>Hourly Data</h5></u>
        <h6 style="color: rgb(247, 0, 144)">GET: api/klima/oras/{municipality}</h6>
        <p>This endpoint retrieves hourly weather of next 10 hours from specific municipality. Examples we specify on Ermera data like this <b><i>api/klima/oras/ermera</i></b>. <a href="https://weather-api-timor-leste.vercel.app/api/klima/oras/ermera">Result Link</a></p>

              <h4>Find this Repo:</h4>
              <p>If you have a critics or an issue about this project please tell me by issued on this repository  <a class="bx bxl-github" href="https://github.com/Frederico27/weather-api-timor-leste" target="_blank">GitHub</a>
              </p>
              <br>      
              <h4>Find me on:</h4>
                <a class="bx bxl-github" href="https://github.com/frederico27" target="_blank">GitHub</a> | 
                <a class="bx bxl-linkedin-square" href="https://www.linkedin.com/in/frederico-marcal-917377190/" target="_blank">LinkedIn</a>
             
    </div>

    <footer class="footer mt-3" style="background-color: rgb(237, 237, 237)">
       <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://weather-api-timor-leste.vercel.app/">Weather API</a>
  </div>
      </footer>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
