<style>
    .LogoContainer{
        background-color: #0D324D;
        padding: 10px;
    }
    .logo{
        width: 280px;
        height: 80px;
    }
    nav{
        margin-left: 100px;
    }
    a{
        color: inherit;
        text-decoration: none;
    }
    li{
        padding-left: 5px;
        padding-right: 5px;
    }
</style>

<div>

    <div class="container-fluid LogoContainer " >
        <div class="container-xxl" >
        <div class="row" >
            <div class="logo col" >
                <a href="/">
                    <img src="logo.webp" class="img-fluid logo" alt="logo">
                </a>
            </div>
            <div class="col" >
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                      <button class="navbar-toggler bg-light mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-dark"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2">
                          <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light" href="#">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-light" href="#">Why</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-light" href="#">Screenshots</a>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contacts</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    </div>

</div>