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
    body{
        color: rgba(82, 20, 255, 0.918);
        background-color: rgba(5, 218, 255, 0.308);
    }
    .font {
      background-color: rgba(10, 209, 149, 0.623);
      box-shadow: 0 4px 10px 0 rgb(0, 0, 7);
      width: 100%;
      font-size: 25px;
      margin: auto;
      margin-top: 20px;
      padding-bottom: 10px;
      
    }
    .font:hover {
      box-shadow: 0 8px 16px 0 rgb(0, 0, 0);
    }
    .container {
      padding: 2px 16px;
    }
    .infoweather{
      padding-left: 30px;
      padding-bottom: 5px;
    }
    .Shweather{
      padding-left: 23px;
    }
   h2{
      padding-top: 15px;
   }
   
    </style>

<body>
   
  <div class="container">  
         <div class="font"> <br>
          <h1><b><center>Check Weather</center></b></h1>
          <div class="row">
              <input type="text" id="LATI" placeholder="Latitude" class="form-control" style="width: 580px; margin-left: 50px; margin-top: 20px;" > 
              <input type="text" id="LONG" placeholder="Longitude" class="form-control" style="width: 580px; margin-left: 50px;  margin-top: 20px; "> 
             <button id="discover" class="btn btn-warning btn-sm" style=" width: 170px; color: white; box-shadow: 0 2px 4px 0 rgb(20, 0, 0); margin-left: 580px; margin-top: 20px;"><b>Load</b></button>
             
            </div>
            <br>
             <center><img src="https://couplemustgo.com/wp-content/uploads/2019/06/cover_egpyt-1440x961.jpg" style="width: 96%"></center>  
            <br>
            <div class="infoweather">      
            <h2>Weather<span id="name"> At </span><br> </h2>
                <span id="sys-country">Country: </span><br>
                <span id="main-temp">Temp: </span> Celsius<br>
                <span id="main-temp-max">Temp max: </span> Celsius<br>
                <span id="main-temp-min">Temp min: </span> Celsius<br>
                <span id="humidity">Humidity: </span> %<br>
                <span id="sys-sunrise">Sunrise: </span> unix<br>
                <span id="sys-sunset">Sunset: </span> unix<br>
                <span id="wind-deg">Wind deg: </span> Degree<br>
                <span id="wind-speed">Wind speed: </span> M/s<br>
                <span id="clouds">Cloud is : </span> %<br>
            </div>
            <div class="Shweather">
              <h2>Weather At <span id="name1"> </span><br> </h2>
              Country: <span id="country1"> </span><br>
              Temp: <span id="main-temp1"> </span> Celsius<br>
              Temp max: <span id="main-temp-max1"> </span> Celsius<br>
              Temp min: <span id="main-temp-min1"> </span> Celsius<br>
              Humidity: <span id="humidity1"> </span> %<br>
              Sunrise: <span id="sunrise1"> </span> unix<br>
              Sunset: <span id="sunset1"> </span> unix<br>
              Wind deg: <span id="wind-deg1"></span> Degree<br>
              Wind speed: <span id="wind-speed1"> </span> M/s<br>
              Cloud: <span id="clouds1"> </span> %<br>
            </div>
          </div>
         </div>
    </div>  
          
 <script> 
   function Searthingweather(){ 
     $(".Shweather").hide();
     var url ="https://api.openweathermap.org/data/2.5/weather?lat=7.017592&lon=100.456525&appid=49b018b84ea79d1a0b6c88921ba6c325&units=metric";
     
           $.get(url)
            .done((data)=>{
              console.log(data)
                $("#name").append(data.name);
                $("#main-temp").append(data.main.temp);
                $("#main-temp-max").append(data.main.temp_max);
                $("#main-temp-min").append(data.main.temp_min);
                $("#humidity").append(data.main.humidity);
                $("#country").append(data.sys.country);
                $("#sunrise").append(data.sys.sunrise);
                $("#sunset").append(data.sys.sunset);
                $("#wind-deg").append(data.wind.deg);
                $("#wind-speed").append(data.wind.speed);
                $("#clouds").append(data.clouds.all);
                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
                 
          }    
   
   function findingweather(){ 
           $(".infoweather").hide();
           $(".Shweather").show();
           var url ="https://api.openweathermap.org";
           var a = $("#LATI").val();
           var b = $("#LONG").val();

           url = url + "/data/2.5/weather?lat=" + a + "&lon=" + b +"&appid=49b018b84ea79d1a0b6c88921ba6c325&units=metric"; 
            $.getJSON(url)
            .done((data)=>{
              console.log(data)
              $("#name1").append(data.name);
              $("#main-temp1").append(data.main.temp);
              $("#main-temp-max1").append(data.main.temp_max);
              $("#main-temp-min1").append(data.main.temp_min);
              $("#humidity1").append(data.main.humidity);
              $("#country1").append(data.sys.country);
              $("#sunrise1").append(data.sys.sunrise);
              $("#sunset1").append(data.sys.sunset);
              $("#wind-deg1").append(data.wind.deg);
              $("#wind-speed1").append(data.wind.speed);
              $("#clouds1").append(data.clouds.all);

                      })         
           .fail((xhr, status, err)=>{
                    console.log("error")
                });
          }    
  
    function re(){
         $("#name1").empty();
         $("#main-temp1").empty();
         $("#main-temp-max1").empty();
         $("#main-temp-min1").empty();
         $("#humidity1").empty();
         $("#country1").empty();
         $("#sunrise1").empty();
         $("#sunset1").empty();
         $("#wind-deg1").empty();
         $("#wind-speed1").empty();
         $("#clouds1").empty();
    }
    $(()=>{ 
          Searthingweather();
            $("#discover").click(()=>{ 
                findingweather();
            });
            $("#discover").click(()=>{
                re();
            }); 
            
     });
   </script>        
  </body>
</html>
