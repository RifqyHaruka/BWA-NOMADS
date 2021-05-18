<div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-light ">
            <!-- <div class="container"> -->
            <a href="#" class="navbar-brand ml-3">
                <img src="FrontEnd/frontend/images/logo.png" alt="Logo Nomad" />
            </a>
            <button class="navbar-toggler navbar-toggler-right mr-3" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-sm-4  bg-light" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-1">
                        <a href="" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-1">
                        <a href="" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item mx-md-1 dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Link</a></li>
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                        </ul>
                    </li>
                    <li class="nav-item mx-md-1">
                        <a href="" class="nav-link">Testimonial</a>
                    </li>
                </ul>

                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-lg-none mt-2 mb-3">
                    <button class="btn btn-login my-1 my-sm-0 px-4" type="submit">
                        Masuk
                    </button>
                </form>

                <!-- Dekstop Button -->
                <form class="form-inline my-2 my-lg-0 d-lg-block d-none" type="submit">
                    <a href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-4 my-lg-0 px-4">
                        Masuk
                    </a>
                </form>
            </div>
            <!-- </div> -->
        </nav>
    </div>
