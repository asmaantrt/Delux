
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <a class="navbar-brand hvr-bounce-in" href="{{route('website-pages.home')}}">
      <img src="image/صورة1.png" width="50" height="50" alt="" loading="lazy">
      &nbsp DELUX<span>.Tr</span>
    </a>
    <!-- <a class="navbar-brand hvr-pulse-grow" href="#">DELUX</a><span>.Teknoloji</span> -->
    <!-- الزر الذي يتواجد في شاشة الهاتف لعرض القائمة -->
    <button class="navbar-toggler v" type="button" data-toggle="collapse" data-target="#our_navbar"
      aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="our_navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('website-pages.home')}}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('website-pages.about')}}">About </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('website-pages.contact')}} ">Company</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('website-pages.mobile')}}">Mobiles</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('website-pages.computer')}} ">Computers</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('website-pages.equipment')}} ">Mobiles & computers maintenance</a>
          </div>
        </li>

      </ul>

      <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->

    </div>
  </nav>
  <!-- End Navbar -->

