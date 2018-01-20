<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light " id="page-top">
  <!-- Navigation-->
  <nav class="navbar-light bg-info fixed-top" id="mainNav">
    <a class="navbar-brand" href="aldhit21"><h1><font face="Bernard MT Condensed" color="#B0C4DE"><a href="aldhit21">21</font><font face="Bernard MT Condensed" color="#FFFFE0">WEB</a></font></font></h1></a>
   
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Galery">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Galery</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="naruto">Naruto</a>
            </li>
            <li>
              <a href="OP">One Piece</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tabel">
          <a class="nav-link" href="hem">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tabel</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paragraf">
          <a class="nav-link" href="paragraf">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">Paragraf</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Social Media">
          <a class="nav-link" href="sosmed">
            <i class="fa fa-fw fa-eye"></i>
            <span class="nav-link-text">Social Media </span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biodata">
          <a class="nav-link" href="biodata">
            <i class="fa fa-fw fa-address-book"></i>
            <span class="nav-link-text">Biodata</span>
          </a>
        </li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        </li>
      

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
     
  </nav>

      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
 
  </div>
</body>

</html>
