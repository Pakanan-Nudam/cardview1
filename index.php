<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .card {
      background-color :rgb(215, 223, 252);
      box-shadow: 10px 6px 4px 0 gray;
    
      margin: auto;
      margin-top: 20px;
      border: 3px; 
      width: 500px;

    }
    .card:hover {
      box-shadow: 10px 6px 4px 0 rgba(174, 176, 247, 0.925);
    }
    .container {
      padding: 2px 16px;
    }
    .dataweather{
      padding-left: 23px;
      padding-bottom: 5px;
    }
    .searchdataweather{
      padding-left: 23px;
    }
    h3{
      padding-left: 20px;
      padding-top: 15px;
    }
    .row{
      margin-left: 15px;
      border-radius: 0px; 
      width: 92%;
    }

    </style>

<body>
   
  <div class="container">  
         <div class="card">
           <div class="header">
              <h2><b><center>Card</center></b></h2>
           </div>
         
          
          <img src="https://ae01.alicdn.com/kf/HTB1rw18QpXXXXbQXXXXq6xXFXXXy/HD.jpg" alt="map" style="width:100%  "><p></p>

            <div class="row">
              <input type="text" id="la" placeholder="Latitude" class="form-control" style="text-align: center;" >
              <input type="text" id="lo" placeholder="Longitude" class="form-control" style="text-align: center;"><p></p>
              <button id="search" class="btn btn-primary" style="margin-bottom: 5px;">Search</button>
            </div>
        
          <h3><center>Weather</center></h3>
            <div class="dataweather">      
              <h4><span id="name">&#128681;  </span><br>	</h4>
              <span id="sys_country">&#127758; Country : </span><br>
              <span id="main_temp">&#127777 Temp : </span> Celsius<br>
              <span id="main_temp_max">&#127777;&#128293; Temp max : </span> Celsius<br>
              <span id="main_temp_min">&#127777;&#9924; Temp min : </span> Celsius<br>
              <span id="humidity">&#128167; Humidity : </span> %<br>
              <span id="sys_sunrise">&#127748; Sunrise : </span> unix<br>
              <span id="sys_sunset">&#127749; Sunset : </span> unix<br>
              <span id="wind_deg">&#127744; Wind deg : </span> degree<br>
              <span id="wind_speed">&#127744; Wind speed : </span> m/s<br>
              <span id="clouds">&#9925; Cloud : </span> %<br>
            </div>
            <div class="searchdataweather">
              <h4>&#128681;<span id="name1"></span><br>	</h4>
              &#127758;  Country :<span id="sys_country1"></span><br>
              &#127777 Temp :<span id="main_temp1"> </span> Celsius<br>
              &#127777&#128293; Temp max : <span id="main_temp_max1"></span> Celsius<br>
              &#127777;&#9924; Temp min : <span id="main_temp_min1"></span> Celsius<br>
              &#128167; Humidity :<span id="humidity1"> </span> %<br>
              &#127748; Sunrise :<span id="sys_sunrise1"> </span> unix<br>
              &#127749; Sunset :<span id="sys_sunset1"> </span> unix<br>
              &#127744; Wind deg : <span id="wind_deg1"></span> degree<br>
              &#127744; Wind speed :<span id="wind_speed1"> </span> m/s<br>
              &#9925; Cloud : <span id="clouds1"></span> %<br>
            </div>
          </div>
         </div>     
 <script> 
   function loadweather(){ 
     $(".searchdataweather").hide();
     var url ="https://api.openweathermap.org/data/2.5/weather?lat=8.415553&lon=99.925030&appid=7313a050146ec01fe5bd3507a7752d0f&units=metric";
     
           $.getJSON(url)
            .done((data)=>{
              console.log(data)
                $("#name").append(data.name);
                $("#main_temp").append(data.main.temp);
                $("#main_temp_max").append(data.main.temp_max);
                $("#main_temp_min").append(data.main.temp_min);
                $("#humidity").append(data.main.humidity);
                $("#sys_country").append(data.sys.country);
                $("#sys_sunrise").append(data.sys.sunrise);
                $("#sys_sunset").append(data.sys.sunset);
                $("#wind_deg").append(data.wind.deg);
                $("#wind_speed").append(data.wind.speed);
                $("#clouds").append(data.clouds.all);
                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
                 
          }
   
   function searchweather1(){ 
           $(".dataweather").hide();
           $(".searchdataweather").show();
           var url ="http://api.openweathermap.org";
           var a = $("#la").val();
           var b = $("#lo").val();

           url = url + "/data/2.5/weather?lat=" + a + "&lon=" + b +"&appid=7313a050146ec01fe5bd3507a7752d0f&units=metric"; 
           
            $.getJSON(url)
            .done((data)=>{
              console.log(data)
                $("#name1").append(data.name);
                $("#main_temp1").append(data.main.temp);
                $("#main_temp_max1").append(data.main.temp_max);
                $("#main_temp_min1").append(data.main.temp_min);
                $("#humidity1").append(data.main.humidity);
                $("#sys_country1").append(data.sys.country);
                $("#sys_sunrise1").append(data.sys.sunrise);
                $("#sys_sunset1").append(data.sys.sunset);
                $("#wind_deg1").append(data.wind.deg);
                $("#wind_speed1").append(data.wind.speed);
                $("#clouds1").append(data.clouds.all);
                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
          }
   
    function reset(){
      $("#name1").empty();
         $("#main_temp1").empty();
         $("#main_temp_max1").empty();
         $("#main_temp_min1").empty();
         $("#humidity1").empty();
         $("#sys_country1").empty();
         $("#sys_sunrise1").empty();
         $("#sys_sunset1").empty();
         $("#wind_deg1").empty();
         $("#wind_speed1").empty();
         $("#clouds1").empty();

    }
  
    $(()=>{
            
            loadweather();
            $("#search").click(()=>{ 
               searchweather1();
            })
  
            $("#search").click(()=>{ 
               reset();
            })
          
     });

   </script>        
  </body>
</html>