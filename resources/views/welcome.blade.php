<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>

    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">


<div>
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">New Show Rooms</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">services centers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="#" >investor</a>

    </li><li class="nav-item">
        <a class="nav-link "  href="#">contact us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link "  href="#">Guides</a>
    </li>
</ul></div>
    <div class="title-2">  <a class="navbar-brand" href="#">Call us an 7894561230(sales open untill 9PM)</a></div>
    </div>
</div>
</nav>

    <div class="header-2">
        <img src="{{asset('image/menu.png')}}" class="image-1">
        <img src="{{asset('image/cars.jfif')}}" class="image-2">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
           New Cars
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">View all cars</a></li>
              <li><a class="dropdown-item" href="#">Today avaliable</a></li>
              <li><a class="dropdown-item" href="#">Life Style Search</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Old Cars
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Buy online</a></li>
              <li><a class="dropdown-item" href="#">Research Onli</a></li>
              <li><a class="dropdown-item" href="#">Sale my cars</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vans
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All vans</a></li>
              <li><a class="dropdown-item" href="#">New Vans</a></li>
              <li><a class="dropdown-item" href="#">Electric Van</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Serives&Repairs</a></li>
              <li><a class="dropdown-item" href="#">Book Servies</a></li>
              <li><a class="dropdown-item" href="#">Tyres</a></li>
            </ul>
          </div>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="text" placeholder="Search.." class="search">
          </form>

    </div>
    {{-- body1 start --}}
<div><div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('image/bens.webp')}}" class="cars1">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="h23">BENZ</h1>
            <p class="btn1">Benz, is a German luxury and commercial vehicle automotive brand established in 1926.</p>
            <p class="btn2"><a class="btn btn-lg btn-primary" href="#">know more click here</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/volvo.jfif')}}" class="cars1">

        <div class="container">
          <div class="carousel-caption">
            <h1 class="h23">Volvo</h1>
            <p class="btn1">What is Volvo known for?
                Solid and staid, Volvo has been traditionally known for safety. The models are typically quiet, have comfortable seats, and provide secure handling. The ride however is typically stiff, and the infotainment systems are not intuitive..</p>
            <p class="btn2"><a class="btn btn-lg btn-primary" href="#">know more click here</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/bmw.jfif')}}" alt="" class="cars1">

        <div class="container">
          <div class="carousel-caption text-end">
              <h1 class="h23">BMW</h1>
            <p class="btn1">The BMW Group is the world's leading provider of premium cars and motorcycles and the home of the BMW, MINI, Rolls-Royce and BMW Motorrad brands.l.</p> <br>
            <p  class="btn2"><a class="btn btn-lg btn-primary" href="#">know more click here</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div></div>


  {{-- body-2 --}}
  <div>
  <div class="cards-1">
    <div class="card" >
        <img src="{{asset('image/tata.jfif')}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">TATA</h5>
          <p class="card-text">Younger than ever.Bolder than ever.Drive around city watch heads turn towards you.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 25 kmpl </li>
          <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Mannual </li>
          <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 13.Lac </li>

        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Buy now</a>
          <a href="#" class="card-link">Book now</a>
        </div>
      </div><div class="card" >
        <img src="{{asset('image/innovo.jpeg')}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">INNOVA</h5>
          <p class="card-text">We built a legacy on the joy of families.
            Became a household name by conquering hearts.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 26 kmpl </li>
            <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
            <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 16.5 </li>

          </ul>
        <div class="card-body">
          <a href="#" class="card-link">Buy now</a>
          <a href="#" class="card-link">Book now</a>
        </div>
      </div><div class="card" >
        <img src="{{asset('image/kia.jfif')}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">KIA</h5>
          <p class="card-text">Chiseled to perfection, raw in power, and loaded with tech. </p><br>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 20kmpl </li>
            <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Mannual </li>
            <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 18.Lac </li>

          </ul>
        <div class="card-body">
          <a href="#" class="card-link">Buy Now</a>
          <a href="#" class="card-link">Book now</a>
        </div>
      </div><div class="card" >
        <img src="{{asset('image/fortuner.jfif')}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">FORTUNER</h5>
        <p class="card-text">Toyota Fortuner price for the base model starts at Rs. 33.43  </p> <br>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 21kmpl </li>
            <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
            <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 36.Lac </li>

          </ul>
        <div class="card-body">
          <a href="#" class="card-link">Buy Now</a>
          <a href="#" class="card-link">Book now</a>
        </div>
      </div><div class="card" >
        <img src="{{asset('image/AUDI.jpg')}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">AUDI</h5>
          <p class="card-text">Standing tall with a history of over 100 years, SUV and EV models in the country..</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 18kmpl </li>
            <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
            <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 40.Lac </li>

          </ul>
        <div class="card-body">
          <a href="#" class="card-link">Buy Now</a>
          <a href="#" class="card-link">Book now</a>
        </div>
  </div>

</div>
  </div>
  <div>
    <div class="cards-1">
      <div class="card" >
          <img src="{{asset('image/Aston.jfif')}}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-title">ASTON MARTIN</h5>
            <p class="card-text">Younger than ever.Bolder than ever.Drive around city watch heads turn towards you.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 12 kmpl </li>
            <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
            <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 1.5CR </li>

          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Buy now</a>
            <a href="#" class="card-link">Book now</a>
          </div>
        </div><div class="card" >
          <img src="{{asset('image/beetal.jfif')}}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-title">BEETLE</h5>
            <p class="card-text">We built a legacy on the joy of families.
              Became a household name by conquering hearts.</p>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 15kmpl </li>
              <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
              <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 16.5CR </li>

            </ul>
          <div class="card-body">
            <a href="#" class="card-link">Buy now</a>
            <a href="#" class="card-link">Book now</a>
          </div>
        </div><div class="card" >
          <img src="{{asset('image/lambo.jfif')}}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-title">LOMBGIHINI</h5>
            <p class="card-text">Chiseled to perfection, raw in power, and loaded with tech. </p><br>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 8kmpl </li>
              <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
              <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 3.5CR </li>

            </ul>
          <div class="card-body">
            <a href="#" class="card-link">Buy Now</a>
            <a href="#" class="card-link">Book now</a>
          </div>
        </div><div class="card" >
          <img src="{{asset('image/minicoper.jfif')}}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-title">MINI COOPER</h5>
          <p class="card-text">Toyota Fortuner price for the base model starts at Rs. 33.43  </p> <br>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 15kmpl </li>
              <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
              <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 3CR </li>

            </ul>
          <div class="card-body">
            <a href="#" class="card-link">Buy Now</a>
            <a href="#" class="card-link">Book now</a>
          </div>
        </div><div class="card" >
          <img src="{{asset('image/FERARI.jfif')}}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-title">FERARI</h5>
            <p class="card-text">Standing tall with a history of over 100 years, SUV and EV models in the country..</p>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"> <img src="{{asset('image/pet.jpg')}}" class="card-img-top1" >Milege: 18kmpl </li>
              <li class="list-group-item"> <img src="{{asset('image/trns.png')}}" class="card-img-top1" >Tranmission: Auto </li>
              <li class="list-group-item"> <img src="{{asset('image/pric.png')}}" class="card-img-top1" > Price: 2.3CR</li>

            </ul>
          <div class="card-body">
            <a href="#" class="card-link">Buy Now</a>
            <a href="#" class="card-link">Book now</a>
          </div>
    </div>

  </div>
    </div>
    <div>
      <div class="b-example-divider"></div>


  <div class="container1">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2023 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>



<script src="{{asset('jss/scrpt.js')}}"></script>


</body>
</html>
