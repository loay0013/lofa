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
<body>
<?php include "includes/nav.php"; ?>

<header class="container-fluid hero justify-content-center flex-md-row-reverse row m-0">
	<div class="col-md-6 p-0">
		<div class=" flex-sm-column d-flex hero-image img-fluid align-items-center">
			<img class="img" src="images/SER%20DU%20MÅNEN,%20DANIEL%20.jpeg" alt="">
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
    <div class="col-12 row">

        <div class="col-md-6 col-12 d-flex justify-content-center order-md-1 order-2">
            <img class="img2" src="images/SER%20DU%20MÅNEN,%20DANIEL%20.jpeg">

        </div>

        <div class="col-md-6 col-12 d-flex flex-column order-md-2 order-1">
            <h2>
               Om Os
            </h2>

            <p class="pt-4 text-1">
                Vi er et nyetableret multimedie bureau, som er til for at hjælpe dig med at fremme dit navn på markedet!
                Vi er specialiseret i SoMe marketing, front-end web development og innovativt design. Så uanset om du synes du mangler at optimere din SoMe strategi, din UX, eller lige har startet din egen virksomhed, så er er det os der kan hjælpe dig.
                Vi har alle en passion for at give dig, og dine kunder, den bedste digitale oplevelse. Derfor kan vi slet ikke vente med hjælpe lige netop dig med dit næste projekt.
                <br><br>
                <strong>Så tøv endeligt ikke med at kontakte os!</strong>

            </p>

            <div class="pt-4">
                <form class="d-flex  pb-3 pb-md-0 ">
                    <a href="#" class="text-decoration-none">
                        <button class="btn btn-primary text-light" type="submit">Kontakt os</button>
                    </a>
                </form>
            </div>


        </div>


    </div>


</section>


<section>
    <div class="col-12 col-md-12 row">
        <div class="col-md-6 col-12 ">

            <h3 class="ps-5">
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

        <div class="col-md-6 row p-0 col-12 pt-5">
            <div class="p-3 col-md-6">
            <img class="img3  p-0  " src="images/SER%20DU%20MÅNEN,%20DANIEL%20.jpeg">
            </div>
            <div class="p-3 col-md-6">
            <img class="img3  p-0" src="images/SER%20DU%20MÅNEN,%20DANIEL%20.jpeg">
            </div>
        </div>

    </div>
</section>



<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active " >
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>






<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/footer.php"; ?>

</body>
</html>
