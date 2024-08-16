<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />


        <title>gestion_recettes</title>

        @vite('resources/css/app.css')
    </head>
    <body>

    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
    <div class="-m-6 max-h-[768px] w-[calc(100%+48px)] overflow-scroll">
        <nav class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 text-zinc-700 bg-white border rounded-none shadow-md h-max border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
      <div class="flex items-center justify-between text-grey">
        <a href="#"
          class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased">

        </a>
        <div class="flex items-center gap-4">
          <div class="hidden mr-4 lg:block">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
              <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-zinc-700">
                <a href="#" class="flex items-center">
                  Acceuil
                </a>
              </li>
              <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                <a href="#" class="flex items-center">
                  Voyage
                </a>
              </li>
              <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                <a href="#" class="flex items-center">
                  Information
                </a>
              </li>

            </ul>
          </div>
          <div class="flex items-center gap-x-1">
          <button class="hidden select-none rounded-lg bg-green-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block" type="button">
             <a href="/auth/login"><span>Log In</span></a>
        </button>

        <button class="hidden select-none rounded-lg bg-blue-500 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block" type="button">
             <a href="/auth/register"><span>Sign in</span></a>
        </button>


          </div>
          <button
            class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </span>
          </button>
        </div>
      </div>
    </nav>
    <div class="bg-cover bg-center h-screen" style="background-image: url('../../images/acceuil.jpg');">
         <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
    <div class="flex h-full items-center justify-center">
    <div class="text-white text-center"> <!-- Ajout de la classe text-center pour centrer le contenu horizontalement -->

    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl p-6">
    <span class="block">
        ANDAO
        <span class="text-transparent bg-clip-text bg-gradient-to-tr to-cyan-500 from-blue-600">
            HIARAKA HANDROSO
        </span>
         AMPILAMINANA
    </span>
</h1>
        <a href="/auth/login" class="inline-flex items-center w-full px-5 py-3 mb-3 mr-1 text-base font-semibold text-white no-underline align-middle bg-blue-600 border border-transparent border-solid rounded-md cursor-pointer select-none sm:mb-0 sm:w-auto hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700">
            Réserver
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </a>
    </div>
</div>

</div>
</div>

  </div>
</div>



<!-- information sur le tarif -->

<!-- https://gist.github.com/goodreds/3579ddfffe439457b5ef9902b5336124 -->
<section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6">
<div class="flex flex-wrap items-center justify-between mb-8">
    <h2 class="text-center font-bold leading-none md:text-5xl flex items-center"> <!-- Ajout de la classe flex items-center -->
        Votre confort, notre priorité
    </h2>
</div>


    <div class="flex flex-wrap -mx-4">
        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            <img src="../../images/premium.jpg" alt="Card img" class="object-cover object-center w-full h-48" />
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>

                    <h1 class="flex items-center text-5xl font-extrabold"><span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded ms-2">PREMIUM</span></h1>

                        <p class="mb-4">
                        sur notre tarif vip on vous offre les services suivants: <br>
                        Mercedes Sprinter 4 ou 5. <br>
                        Sièges premium avec accoudoir et tablette. <br>
                        Wi-Fi illimité
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            <img src="../../images/vip.jpeg" alt="Card img" class="object-cover object-center w-full h-48" />
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>

                    <h1 class="flex items-center text-5xl font-extrabold">
                        <span class="bg-orange-500 text-white text-2xl font-semibold me-2 px-2.5 py-0.5 rounded ms-2">VIP</span> <!-- Changement de bg-orange-100 à bg-orange-500 et de text-blue-800 à text-white -->
                    </h1>

                        <p class="mb-4"> Sur notre tarif vip on vous offre les services suivants:  <br>
                        Mercedes Sprinter 4. <br>
                        Sièges haut de gamme. <br>
                        Prises de 220 volts, climatisation.
                        Wi-Fi illimité.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            <img src="../../images/lite.jpeg" alt="Card img" class="object-cover object-center w-full h-48" />
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>

                    <h1 class="flex items-center text-5xl font-extrabold">
                        <span class="bg-red-500 text-white text-2xl font-semibold me-2 px-2.5 py-0.5 rounded ms-2">LITE</span> <!-- Changement de bg-orange-100 à bg-orange-500 et de text-blue-800 à text-white -->
                    </h1>

                        <p class="mb-4"> Sur notre tarif vip on vous offre les services suivants:  <br>
                        Mercedes Sprinter 2 ou 3. <br>
                        Un bon rapport Qualité / Prix. <br>
                        Wi-Fi illimité.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- tarif  et trajet-->
<section class="text-gray-700 body-font overflow-hidden border-t border-gray-200">
<h2 class="text-center font-bold leading-none md:text-5xl">
  Taris et Horaire
</h2>

<section class="py-1 bg-blueGray-50">
<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">

    </div>

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
        Trajet                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Voyage VIP
                        </th>
           <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Prémium
                        </th>
          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Lite
                        </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
              IVA <br>
              Ivandy
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            Aller <br>
              retour <br>
              prix
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              10h <br>
              11h <br>
               100.000 Ar
            </td>
          </tr>




<!-- 2 -->
<tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            AMB <br>
            AMBILOBE
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            Aller <br>
              retour <br>
              prix
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              10h <br>
              11h <br>
               100.000 Ar
            </td>
          </tr>





          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            DIE <br>
            ANTSIRANANA
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            Aller <br>
              retour <br>
              prix
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            12h <br>
              8h <br>
               190.000 Ar
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              10h <br>
              11h <br>
               120.000 Ar
            </td>
          </tr>




          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            MJN <br>
            MAHAJANGA
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            Aller (DIE) <br>
              retour (DIE) <br>
              prix
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
             <br>
              <br>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              16h <br>
              8h <br>
               90.000 Ar
            </td>
          </tr>



          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            MJN <br>
            MAHAJANGA
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            Aller   : 7h<br>
              retour : 7h<br>
              prix  : 110.000AR
            </td>
            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            18h 30 <br>
              18h <br>
               80.000 Ar
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              16h <br>
              8h <br>
               65.000 Ar
            </td>
          </tr>

        </tbody>

      </table>
    </div>
  </div>
</div>
</section>

</section>



<!-- contacte -->
<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Restez en contact</h2>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d-122.42107853750231!3d37.7730507907087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858070cc2fbd55%3A0xa71491d736f62d5c!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1619524992238!5m2!1sen!2sus"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Adresse</h3>
                            <p class="mt-1 text-gray-600">Lot IVM 12 Ter Ambodivona,
                                    ANTANANARIVO 101</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Heurs</h3>
                            <p class="mt-1 text-gray-600">Lundi - Vendredi: 9h - 17h</p>
                            <p class="mt-1 text-gray-600">Saturday: 10am - 4pm</p>
                            <p class="mt-1 text-gray-600">Sunday: Closed</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                            <p class="mt-1 text-gray-600">Facebook:  COTISSE Transport </p>
                            <p class="mt-1 text-gray-600">E-mail:   cotisse.transport@gmail.com  </p>
                            <p class="mt-1 text-gray-600">Whatsapp:   +261 38 46 003 85   </p>

                            <p class="mt-1 text-gray-600">Phone:+261 32 11 027 10 <br>
                                        +261 32 11 027 33 <br>
                                        +261 20 97 266 74 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    </body>
</html>
