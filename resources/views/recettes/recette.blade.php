<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recettes</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />

     <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons/tabler-icons/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons/tabler-icons/tabler-icons.css') }}" />



</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo.png" width="180" alt="" />
         </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/acceuil/index" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">MENU</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/recettes/recette" aria-expanded="false">
                  <span>
                    <i class="ti ti-cash"></i>
                  </span>
                  <span class="hide-menu">Recettes</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/depense/depense" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Depense</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/vehicule/vehicule" aria-expanded="false">
                  <span>
                    <i class="ti ti-car"></i>
                  </span>
                  <span class="hide-menu">Véhicule</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/conducteur/conducteur" aria-expanded="false">
                  <span>
                    <i class="ti ti-user"></i>
                  </span>
                  <span class="hide-menu">Conducteur</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/trajet/trajet" aria-expanded="false">
                  <span>
                    <i class="ti ti-road"></i>
                  </span>
                  <span class="hide-menu">Trajet</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/voyage/voyage" aria-expanded="false">
                  <span>
                    <i class="ti ti-mountain"></i>
                  </span>
                  <span class="hide-menu">Voyage</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/voyageur/voyageur" aria-expanded="false">
                  <span>
                    <i class="ti ti-user"></i>
                  </span>
                  <span class="hide-menu">Voyageur</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/billet/billet" aria-expanded="false">
                  <span>
                    <i class="ti ti-ticket"></i>
                  </span>
                  <span class="hide-menu">Billets</span>
                </a>
              </li>
            </ul>

          </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card w-100">
                    <div class="card-body p-4">
                      <a href="/recettes/ajout_recette"><button type="button" class="btn btn-primary m-1">Ajouter</button></a>

                        <h5 class="card-title fw-semibold mb-4">Liste de recettes</h5>
                        <div class="table-responsive">

                                <!-- Le contenu de votre tableau ici -->

                                    <table class="table text-nowrap mb-0 align-middle">
                                      <thead class="text-dark fs-4">
                                        <tr>
                                          <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date de recette</h6>
                                          </th>
                                          <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Conducteur</h6>
                                          </th>
                                          <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Véhicule</h6>
                                          </th>
                                          <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Montant</h6>
                                          </th>
                                          <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                          </th>
                                        </tr>
                                      </thead>
                                        @foreach($recettes as $recettes)
                                            <tbody>
                                                <tr>
                                                <td>{{$recettes->date_recette}}</td>
                                                <td>{{$recettes->nom_conducteur}}</td>
                                                <td>{{$recettes->immatricule}}</td>
                                                <td>{{$recettes->montant_recette}}</td>
                                                <td>
                                                    <button class="btn btn-success">
                                                    <a href="/recettes/modifier_recette/{{$recettes->id}}" target="_blank" rel="noopener noreferrer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                        <path d="M13.5 6.5l4 4" />
                                                    </svg>
                                                    </a>
                                                </button>
                                                <form id="deleteForm" action="{{route('supRecettes',$recettes->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icons-tabler-outline icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 6h14l-1.5 13a2 2 0 0 1 -2 1.5h-7a2 2 0 0 1 -2 -1.5z" />
                                                        <line x1="10" y1="10" x2="10" y2="16" />
                                                        <line x1="14" y1="10" x2="14" y2="16" />
                                                    </svg>
                                                    </button>
                                                    <style>
                                                        /* Place le formulaire et le bouton sur une même ligne */
                                                                form {
                                                                 display: inline-block;
                                                                margin-right: 10px; /* Ajoute une marge entre le formulaire et le bouton */
                                                                }

                                                                /* Style du bouton */
                                                                button {
                                                                 display: inline-block;
                                                                }

                                                      </style>
                                                </form>


                                                </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                  </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>

</body>

</html>
