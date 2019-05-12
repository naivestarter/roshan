<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/c.css') }}">
</head>
<body>

<div class="container-fluid">
  <div class="hearde">
    <div class="row">
  <div class="col-sm-1">
  <img src="{{ asset('images/logo.png') }}" width="100px"></div>
  <div class="col-sm-11">
  <h2>नेपाल सरकार<br>
स्थानीय तहको वस्तुगत विवरण सूचना व्यवस्थापन प्रणाली</h2>
</div></div></div>
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Goverment Resours Intergrated</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i> ड्यास बोर्ड</a></li>
      {{-- population.php --}}
<li><a href="#"><i class="fas fa-users"> </i> जनसंख्या</a></li>
{{-- health.php --}}
<li><a href="#"><i class="fas fa-heartbeat"> </i> स्वास्थ्य</a></li>
{{-- women.php --}}
<li><a href="#"><i class="fas fa-female"> </i> महिला</a></li>
{{-- child.php --}}
<li><a href="#"><i class="fas  fa-child"> </i> बालबालिका</a></li>
{{-- disabled.php --}}
<li><a href="#"><i class="fab fa-accessible-icon "> </i> फरक क्षमता</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  <div class="body">
    <div class="row">
  <div class="col-sm-6">
<img src="{{ asset('images/Screenshot_2019-04-29%20LG-PROFILE%20MoFALD.png') }}" width="100%"><br><br>
<img src="{{ asset('images/Screenshot_2019-04-29%20LG-PROFILE%20MoFALD(2).png') }}" width="100%">
</div>
  <div class="col-sm-6">
<img src="{{ asset('images/Screenshot_2019-04-29%20LG-PROFILE%20MoFALD(1).png') }}" width="100%"><br><br>
<img src="{{ asset('images/Screenshot_2019-04-29%20LG-PROFILE%20MoFALD(3).png') }}" width="100%">
  </div>
</div> 
  </div>
  <!-- <div class="foots">
        <div class="container">
            <div class="row">
                <div class="span12">
                    © 2019  
                    <a href="http://shangrilagroup.com.np/">Shangrila Microsystem P. Ltd.</a>
            </div>
                
        </div>
            
        </div>
        

  </div> -->
  </div> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
