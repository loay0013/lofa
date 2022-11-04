<nav class="navbar navbar-expand-lg  navbar-light " style="background-color:#FAFAFA">
    <div class="container-fluid col-12">
        <ul class="col-4 d-md-none p-0 m-0">
            <li class="nav-item list-unstyled">
                <a class="nav-link active p-2" href="index.php">
                    <img class="img-fluid  w-100" src="images/LoFa-logo_overunder-black.svg">
                </a>
            </li>
        </ul>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="col-2">
            <li class="nav-item list-unstyled d-md-block d-none">
                <a class="nav-link active" href="index.php">
                    <img class="img-fluid w-100" src="images/LoFa-logo_overunder-black.svg">
                </a>
            </li>
            </ul>

            <div class="col-md-8 d-flex justify-content-center align-items-center">
            <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-center">

                <li class="nav-item pb-3 pb-md-0">
                    <a class="nav-link active text-dark text-center pe-md-5" aria-current="page" href="index.php">Forside</a>
                </li>
                <li class="nav-item pb-3 pb-md-0">
                    <a class="nav-link active text-dark text-center pe-md-5" aria-current="page" href="index.php#omos">Om os</a>
                </li>
                <li class="nav-item pb-3 pb-md-0">
                    <a class="nav-link text-dark text-center pe-md-5" href="index.php#Tilbyder">Hvad tilbyder vi?</a>
                </li>
                <li class="nav-item pb-3 pb-md-0">
                    <a class="nav-link text-dark text-center pe-md-5" href="index.php#team">Vores team</a>
                </li>
            </ul>
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center">
            <!-- Button trigger modal -->
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
                                  <p class="m-0 pt-3 pt-md-0">
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
</nav>