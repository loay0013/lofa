<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>LoFa Media</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body style="background-color:#FAFAFA">
<?php include "includes/nav.php"; ?>

<header class="container-fluid hero justify-content-center flex-md-row-reverse row m-0">
	<div class="col-md-6 p-0">
		<div class="flex-sm-column d-flex hero-image img-fluid align-items-center justify-content-center ">
			<img class="img" src="images/forsidebillede.svg" alt="">
		</div>
	</div>
	<div class="col-md-6 d-flex justify-content-center p-0">
		<div class="container justify-content-center d-flex flex-column align-items-center align-items-md-start mx-0 w-100 p-0 ps-md-5">
			<h1>LoFa Media</h1>
			<div class="mt-3 d-flex flex-column flex-md-row w-100">
                <a class="knap-1 btn-primary bg-textFarve text-minFarve border-0 ps-md-5 pe-md-5 text-decoration-none" href="#" > <p class="text-center m-0 text-decoration-none">Om os</p></a>
                <a class="knap-2 btn-primary text-minFarve border-0 mt-3 mt-md-0 ps-md-5 ms-md-2 pe-md-5 text-decoration-none" href="#"> <p class="text-center m-0 text-decoration-none">Hvad tilbyder vi?</p></a>
			</div>
		</div>
	</div>
</header>

<section>
    <div class="col-12 row m-0">

        <div class="col-md-6 col-12 d-flex justify-content-center order-md-1 order-2">
            <img class="img2" src="images/BE5A5919.JPG">

        </div>

        <div class="col-md-6 col-12 d-flex flex-column order-md-2 order-1">
            <h2 class="text-center text-md-start">
               Om Os
            </h2>

            <p class="pt-4 text-1 ps-4  ps-md-0">
                Vi er et nyetableret multimedie bureau, som er til for at hjælpe dig med at fremme dit navn på markedet!
                Vi er specialiseret i SoMe marketing, front-end web development og innovativt design. Så uanset om du synes du mangler at optimere din SoMe strategi, din UX, eller lige har startet din egen virksomhed, så er det os der kan hjælpe dig.
                Vi har alle en passion for at give dig, og dine kunder, den bedste digitale oplevelse. Derfor kan vi slet ikke vente med hjælpe lige netop dig med dit næste projekt.
                <br><br>
                <strong>Så tøv endeligt ikke med at kontakte os!</strong>

            </p>

            <div class="pt-4 ps-4 ps-md-0">
                <form class="d-flex  pb-3 pb-md-0 ">
                    <a href="#" class="text-decoration-none">
                        <button class="btn btn-primary text-light" type="submit">Kontakt os</button>
                    </a>
                </form>
            </div>


        </div>


    </div>


</section>


<section class="pt-5">
    <div class="col-12 col-md-12 row m-0">
        <div class="col-md-6 col-12 ">

            <h3 class="ps-5 text-md-start text-center">
                Hvad tilbyder vi?
            </h3>

                <div class="d-flex ps-5 pt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                        <p>
                            UI & UX
                        </p>
                    </svg>


                </div>

                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Skræddersyet websites
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Content creation
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Grafisk design
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        SoMe management
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3" >

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Brand indenity & design
                    </p>

                </div>






        </div>

        <div class="col-md-6 row p-0 col-12 pt-5 m-0">
            <div class="p-3 col-md-6 col-6">
            <img class="img3  p-0  " src="images/billede1.jpg">
            </div>
            <div class="p-3 col-md-6 col-6">
            <img class="img3  p-0" src="images/billede2.jpg">
            </div>
        </div>

    </div>
</section>
<section class="container pt-5">
    <h2 class="text-center pb-3">
        Vores team
    </h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h5>Web Developer</h5>
                </div>

                <div>
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/L.JPG">
                <div>
                    <p>Loay Hajjo</p>
                    <p>Louy.hajjo21@gmail.com</p>
                    <h5>Web Developer</h5>
                </div>

                <div>
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/A.JPG">
                <div>
                    <p>Amanda Keis</p>
                    <p>amandakeis@outlook.dk</p>
                    <h5>Grafisk design, kommunikation & SoMe</h5>
                </div>

                <div>
                    <a href="https://www.linkedin.com/in/amanda-keis-steensbjerre/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/SI.JPG">
                <div>
                    <p>Sidney Goojvin</p>
                    <p>sidgoo99@gmail.com</p>
                    <h5>Projektleder, Grafisk designer</h5>
                </div>

                <div>
                    <a href="www.linkedin.com/in/sidiculous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Nikita Wulff-Høyer</p>
                    <p></p>
                    <h2>SoMe, Grafisk designer</h2>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h2>Web Developer</h2>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h2>Web Developer</h2>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h2>Web Developer</h2>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>     <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p>Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h2>Web Developer</h2>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 d-flex flex-column align-items-center  ">
                <img class="img-card" src="images/M.JPG">
                <div>
                    <p class="pt-3">Mikkel Johnsen</p>
                    <p>mikkel.lebedev@gmail.dk</p>
                    <h3 class="pt-3">Web Developer</h3>
                </div>

                <div class="pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.446" height="32.446" viewBox="0 0 32.446 32.446">
                        <g id="Group_25" data-name="Group 25" transform="translate(-5 -0.999)">
                            <g id="Group_41" data-name="Group 41" transform="translate(5 -1)">
                                <circle id="Ellipse_8" data-name="Ellipse 8" cx="16.223" cy="16.223" r="16.223" transform="translate(0 1.999)" fill="#007ab9"/>
                                <g id="Group_40" data-name="Group 40" transform="translate(-0.649 2.649)">
                                    <g id="Group_39" data-name="Group 39">
                                        <path id="Path_18" data-name="Path 18" d="M45.156,34.566v6.688H41.279v-6.24c0-1.567-.56-2.637-1.964-2.637a2.121,2.121,0,0,0-1.989,1.418,2.654,2.654,0,0,0-.128.945v6.514H33.319s.052-10.569,0-11.663H37.2v1.653c-.008.013-.019.026-.026.038H37.2v-.038a3.85,3.85,0,0,1,3.495-1.927C43.244,29.317,45.156,30.984,45.156,34.566Zm-15.894-10.6A2.021,2.021,0,1,0,29.211,28h.025a2.022,2.022,0,1,0,.026-4.03ZM27.3,41.254h3.877V29.591H27.3Z" transform="translate(-19.24 -17.038)" fill="#f1f2f2"/>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>









    </div>






</section>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<?php include "includes/footer.php"; ?>

</body>
</html>
