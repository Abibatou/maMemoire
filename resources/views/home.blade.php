<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Hôpital</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      <img src="assets/H1.png" width="170" height="144" class="d-inline-block align-text-top" style="margin-left:120px">  
                    </a>
                    
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    
                        <li class="nav-item dropdown">
                            <button class="btn btn-secondary dropdown-toggle btn-lg" href="#" style="border-radius:15px; background-color:#004899" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Patient/Visiteur
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">S'inscrire</a></li>
                                <li><a class="dropdown-item" href="#">Prendre rendez-vous</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <button class="btn btn-secondary  dropdown-toggle btn-lg" href="#" style="border-radius:15px; background-color:#004899"" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Professionnel de santé
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Se connecter</a></li>
                                <li><a class="dropdown-item" href="#">Etudes médicales</a></li>
                            </ul>
                            <button class="btn btn-secondary dropdown-toggle btn-lg" href="#" style="border-radius:15px; background-color:#004899"" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Horaires
                            </button>
                            
                        </li>
                        
                    </div>   
                </div> 
            </nav>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active"  >
                    <img src="assets/DO3.jpg" class="d-block w-100" height="400" alt="logo1">
                    <div class="carousel-caption d-none d-md-block" style="color:black; font-size:20px; text-align:right; margin-bottom:60px; margin-left:600px">
                        <h5>NE REPORTEZ PAS VOS SOINS</h5>
                        <p>Malgré le contexte sanitaire lié au Covid-19, notre centre continue de vous accueillir.</p>
                        <p>Les consultations et hospitalisations sont donc maintenues.<br/>(sauf message contraire de la part du service qui doit vous recevoir)</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/D1.png" class="d-block w-100" height="400" alt="logo2">
                    <div class="carousel-caption d-none d-md-block" style="color:white; font-size:30px; text-align:right; margin-bottom:200px; margin-left:600px">
                        <p>Nous construisons </p>
                        <h5>L'HÔPITAL DE DEMAIN</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="assets/H8.jpg" class="d-block w-100" height="400" alt="logo3">
                    <div class="carousel-caption d-none d-md-block" style="color:#023f7f; font-size:30px; text-align:right; margin-bottom:200px; margin-left:500px">
                        <p>Nous prenons soin de vous </p>
                        <h5 style="font-weight:bold; font-size:50px">7J/7 et 24/24</h5>
                    </div>
                    </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:100px">
                    <div class="row justify-content-around">
                        <div class="col-4" style="background-image:url('assets/V3.jpg');height:500px;width:40%;background-size:700px; background-repeat:no-repeat">
                            <div style="margin-top:130px; text-align:center; color:#004899; background-color:transparent" >
                                <h3>VACCINATION</h3>
                                <h3 style="margin-left:40px">PRELEVEMENT<h3>
                                <h3 style="margin-left:70px">INFORMATION</h3>
                            </div>
                        </div>
                        <div class="col-4" style="background-image:url('assets/V4.jpg');height:500px; width:40%;background-size:700px;  background-repeat:no-repeat">
                       
                        </div>
                    </div>
                </div>   
            </div>
            <div>
                <h4 style="text-align:center; color:#004899; font-size:40px">DERNIERES ACTUALITES</h4>
                <div class="progress" style=" margin-top:30px; margin-bottom:60px">
  <div class="progress-bar" role="progressbar" style="width: 15%; background-color:white" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar " role="progressbar" style="width: 30%; background-color:white" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar " role="progressbar" style="width: 10%; height:5px; background-color:#004899" aria-valuenow="5" aria-valuemin="" aria-valuemax="100"></div>
  <div class="progress-bar " role="progressbar" style="width: 50%; background-color:white" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="text-align:center; margin-bottom:250px;font-family:bold; color:#004899; font-size:30px">
                        <div class="col"  ><img src= "assets/S1.jpg"  class="img-thumbnail" style="height:100%" />L'Astrazeneca</div>
                        <div class="col" ><img src= "assets/S2.jpg"  class="img-thumbnail" style="height:100%"/>Nous recrutons des cardioperfusionnistes</div>
                        <div class="col" ><img src= "assets/S5.jpg"  class="img-thumbnail" style="height:100%" />Replay-Webinaire<br/>Maladies rares</div>
                        <div class="col" ><img src= "assets/S8.jpg"  class="img-thumbnail" style="height:100%"/>Découvrez le site Singderm</div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row justify-content-center"style="background-color:#00244d;color:white">
                    
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col">
                                <img src="assets/H1.png" width="200" height="150"/>
                            </div>
                            <div class="col">
                                <p style="font-family:bold; font-size:20px; padding-top:60px"><span style="background-color:#0046a5; color:white; border: 2px solid #0046a5;
  border-radius: 15px;">Centre Hospitalier Universitaire</span><br/>
                                <span style="background-color: white; color:#0046a5; border: 2px solid white;
                                 border-radius: 7px"> Nos progrés, c'est pour la vie</span>
                                </p>
                                <div>
                                    <i class="fa fa-facebook-official fa-2x" style="margin-right:10px"></i>
                                    <i class="fa fa-instagram fa-2x"  style="margin-right:10px" aria-hidden="true"></i>
                                    <i class="fa fa-twitter fa-2x"  style="margin-right:10px" aria-hidden="true"></i>
                                    <i class="fa fa-youtube fa-2x"  style="margin-right:10px" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:75px">
                            <p >
                            Avec une communauté de près de 16 000 professionnels, le CHU de Lille est l’un des plus grands campus santé du Nord de l’Europe. Hôpital universitaire de recours et de référence, d’enseignement, d’innovation et de recherche, il prend en charge des pathologies lourdes nécessitant un plateau médico-technique de pointe et une expertise médicale spécialisée. Près de 1.4 millions de patients y sont pris en charge chaque année, permettant au CHU de Lille de développer une expertise à la fois pour ses activités de recours et pour celles de proximité.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top:45px">
                        <div class="row">
                            <h4>ACCES RAPIDE</h4>
                            <div class="progress" style="height: 5px;margin-top:5px; background-color:#00244d">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:25px;  color:white">
                            <div class="col-md-2" style="color:#a4d1ca">
                                <button class="btn btn-secondary btn-lg" style="border-radius:15px"  type="button">Patient/Visiteur</button>
                                <i class="fa fa-play " style="margin-top:20px;margin-bottom:30px" aria-hidden="true"><span style="margin-left:10px">Prenez rendez-vous</span></i>
                                <i class="fa fa-play"style="margin-bottom:30px" aria-hidden="true"><span style="margin-left:10px">Plan d'accés</span></i>
                                <i class="fa fa-play" style="margin-bottom:30px" aria-hidden="true"><span style="margin-left:10px">Venez aux urgences</span></i>
                            </div>
                            <div class="col-md-4" style="color:#a4d1ca; margin-left:80px">
                                <button class="btn btn-secondary btn-lg" style="border-radius:15px" type="button">Professionnel santé</button><br/>
                                <i class="fa fa-play" style="margin-top:20px;margin-bottom:30px" aria-hidden="true"><span style="margin-left:10px">Etudes médicales</span></i><br/>
                                <i class="fa fa-play" style="margin-bottom:30px" aria-hidden="true"><span style="margin-left:10px">Nos essais cliniques</span></i>
                            
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </body>
    </html>