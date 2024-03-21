<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Proyek Anda</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
    <input type ="checkbox" id ="chk1">
    <div class="main-nav" id="topnav"><h1>IMADIKOM</h1></div>
        <nav>
            <ul class="nav-links">
            <!-- <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div> -->
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Divisi</a>
                    <div class="dropdown-content">
                        <a href="{{ route('divisi.bph') }}">Divisi BPH</a>
                        <a href="{{ route('divisi.psdm') }}">Divisi PSDM</a>
                        <a href="{{ route('divisi.sosma') }}">Divisi Sosma</a>
                        <a href="{{ route('divisi.kwu') }}">Divisi KWU</a>
                        <a href="{{ route('divisi.humas') }}">Divisi Humas</a>
                        <a href="{{ route('divisi.multimedia') }}">Divisi Multimedia</a>
                    </div>
                </li>
                <li><a href="{{ route('kepengurusan') }}">Kepengurusan</a></li>
                <li><a href="{{ route('dokumentasi') }}">Dokumentasi</a></li>
                <li>     
                        <a href="javascript:void(0);" class="menu" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="owl-carousel">

            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide1.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>
            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide2.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>
            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide1.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>
            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide2.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>
            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide1.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>
            <a href="#" class="gallery__photo">
                <img src="{{ asset('images/slide2.jpg') }}" alt="" />
                <div class="gallery__fade">
                    <i class="gallery__icon" data-feather="instagram"></i>
                </div>
            </a>

        </div>
        <div class="footer__redes">
            <ul class="footer__redes-wrapper">
                <li>
                    <a href="#" class="footer__link">
                        <i class="fab fa-facebook-f"></i>
                        facebook
                    </a>
                </li>
                <li>
                    <a href="#" class="footer__link">
                        <i class="fab fa-twitter"></i>
                        twitter
                    </a>
                </li>
                <li>
                    <a href="#" class="footer__link">
                        <i class="fab fa-instagram"></i>
                        instagram
                    </a>
                </li>
                <li>
                    <a href="#" class="footer__link">
                        <i class="fab fa-youtube"></i>
                        youtube
                    </a>
                </li>
            </ul>
        </div>
        <div class="separador"></div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', nav)
    function nav(){
        const menu = document.querySelector('.menu');
        const nav = document.querySelector('.main-nav');
        menu.addEventListener('click', ()=>{
            dropdown.classList.toggle('show')
        })
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>