<?php

session_start();
if (array_key_exists("id",$_COOKIE)){
    $_SESSION["id"]=$_COOKIE["id"];
}

if (array_key_exists("id",$_SESSION)){
    echo "<p>Logged in! <a href='index.php?logout=1'>Log out</a></p> ";

}else{
    header("Location: index.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Employee page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="http://www.asia.ccb.com/hongkong/personal/"><p class="text-primary">Home</p> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><p class="text-primary">Features</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><p class="text-primary">Pricing</p></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p class="text-primary">Dropdown Link</p>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li id="title">
              <p>Employee lunch check-in system</p>
              </li>
              <li class="title-img">
                  <img src="bank.jpg" height="80px" alt="">
                </li>
          </ul>
        </div>
      </nav>
      <div class="row">
          <div class="col-4">
              <p id='meal-title'>Meal of The Day</p>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="steak.jpg" alt="First slide" height="300px" width="500px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="lobster.jpg" alt="Second slide" height="300px" width="500px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="broccoli.jpg" alt="Third slide" height="300px" width="500px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <p id='name'>Name: </p>

                <div class="row">
                    <div class="col-4">
                      <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Meal Plan</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Special of the day</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Email us</a>
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lunch-only, 300 credit</div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">We offer Boston imported lobster, Australia steak with medium cooked, broccoli salad and rice as our main dish</div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">If you love our food and want to buy more credit or switch to all day dining with 3 meals, please do not hesitate and email us on food@constructbank.com</div>
                      </div>
                    </div>
                  </div>
          
          
          </div>


          <div class="col-8"> 
            <p id="main-content"> Would you like to have today's meal? </p> 

          <div class="bttom">
            <button id='yes' onclick="myFunction()" type="button" class="btn btn-success">Yes</button>
            <button id='no' onclick="myFunction2()" type="button" class="btn btn-danger">No</button>
          </div>
          <p class="note">Please be noticed that anyone who does not show up in the canteen once clicked Yes will be penalized !</p> 




          </div>
      </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type='text/javascript'>
    function myFunction() {
    alert("We have added you in!");
    }

    function myFunction2() {
    alert("you can eat wherever you want now~");
    }

     </script>

        
  </body>
</html>