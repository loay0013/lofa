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
                <a class="knap-1 btn-primary bg-textFarve text-minFarve border-0 ps-md-5 pe-md-5 text-decoration-none" href="#omos" > <p class="text-center m-0 text-decoration-none">Om os</p></a>
                <a class="knap-2 btn-primary text-minFarve border-0 mt-3 mt-md-0 ps-md-5 ms-md-2 pe-md-5 text-decoration-none" href="#Tilbyder"> <p class="text-center m-0 text-decoration-none">Hvad tilbyder vi?</p></a>
			</div>
		</div>
	</div>
</header>

<section>
    <div class="col-12 row m-0">

        <div class="col-md-6 col-12 d-flex justify-content-center order-md-1 order-2 pt-4 pt-md-0 ps-md-5">
            <img class="img2" src="images/BE5A5919.JPG">
        </div>

        <div id="omos" class="col-md-6 col-12 d-flex flex-column order-md-2 order-1">
            <h2 class="text-center text-md-start">
               Om Os
            </h2>

            <p class="pt-4 text-1 ps-4  ps-md-0 pe-md-5">
                Vi er et nyetableret multimedie-bureau, som er til for at hjælpe dig med at fremme dit navn på markedet!
                Vi er specialiserede i SoMe-marketing, front-end webudvikling og innovativt design. Så uanset om du synes, du mangler at optimere din SoMe-strategi, din UX eller lige har startet din egen virksomhed, så er det os, der kan hjælpe dig.
                Vi har alle en passion for at give dig og dine kunder den bedste digitale oplevelse. Derfor kan vi slet ikke vente med hjælpe lige netop dig med dit næste projekt.
                <br><br>
                <strong>Så tøv endelig ikke med at kontakte os!</strong>

            </p>

            <div class="pt-4 ps-4 ps-md-0">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <p class="m-0 text-light">Kontakt os</p>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Kontakt os</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-12 row justify-content-center d-flex align-items-center pt-3 ">
                                    <div class="col-md-6 col-12 d-flex flex-row align-items-center justify-content-center justify-content-md-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        <p class="m-0">
                                            +45 21 70 91 61
                                        </p>
                                    </div>

                                    <div class="col-md-6 col-12 d-flex flex-row align-items-center justify-content-center justify-content-md-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        <p class="m-0">
                                            sidgoo99@gmail.com
                                        </p>
                                    </div>
                                </div>

                                <section class="pt-5">

                                    <div class="col-12 d-flex justify-content-center flex-column ">
                                        <div class="col-12 d-flex flex-column col-md-6">
                                            <label for="name" class="label-kontakt">navn</label>
                                            <input id="name" class="input-text-kontakt" type="text">

                                        </div>
                                        <div class="d-flex col-12 flex-column col-md-6">

                                            <label for="email" class="label-kontakt">email</label>
                                            <input id="email" class="input-text-kontakt" type="email">


                                        </div>
                                        <div class="col-12 d-flex flex-column col-md-6">

                                            <label for="message" class="label-kontakt">besked</label>
                                            <input id="message" class="input-text-kontakt" type="text">
                                        </div>
                                        <div class="pt-3">
                                            <button class="btn btn-primary" type="submit" value="send" name="Send">
                                                <p class="text-light m-0">Send</p>
                                            </button>
                                        </div>
                                    </div>

                                </section>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>


</section>


<section class="pt-5">
    <div id="Tilbyder" class="col-12 col-md-12 row m-0">
        <div class="col-md-6 col-12 ">

            <h3 class="ps-md-5 text-md-start text-center">
                Hvad tilbyder vi?
            </h3>

                <div class="d-flex ps-5 pt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                        <p>
                            Visuel identitet
                        </p>
                    </svg>


                </div>

                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Grafisk design
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Tryksager
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        SoMe strategi
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        UI & UX
                    </p>

                </div>
                <div class="d-flex ps-5 pt-3" >

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M24.563,12.563a12,12,0,1,1-12-12A12,12,0,0,1,24.563,12.563ZM11.174,18.916l8.9-8.9a.774.774,0,0,0,0-1.095L18.983,7.823a.774.774,0,0,0-1.095,0l-7.261,7.261-3.39-3.39a.774.774,0,0,0-1.095,0L5.047,12.789a.774.774,0,0,0,0,1.095l5.032,5.032a.774.774,0,0,0,1.095,0Z" transform="translate(-0.563 -0.563)" fill="#44c471"/>
                    </svg>
                    <p>
                        Hjemmesider
                    </p>

                </div>






        </div>

        <div class="col-md-6 row p-0 col-12 pt-5 m-0">
            <div class="p-3 col-md-6 col-6">
            <img class="img3  p-0  " src="images/billede1.jpg" alt="">
            </div>
            <div class="p-3 col-md-6 col-6">
            <img class="img3  p-0" src="images/billede2.jpg" alt="">
            </div>
        </div>

    </div>
</section>
<section class="container pt-5 pb-5">
    <h2 id="team" class="text-center pb-3">
        Vores team
    </h2>

<?php include "includes/carousel.php";?>
</section>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/Kontaktos.js"></script>
<?php include "includes/footer.php"; ?>

</body>
</html>
