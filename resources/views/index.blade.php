<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sounder - Independent Artists Community</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <header>
        <section>
            <div class="container">
                <nav class="navbar">
                    <a class="navbar-brand" href="#">Sounder</a>
                    <ul>
                        <li class="active"><a href="#">Sounder Community</a></li>
                        <li><a href="#">Artists</a></li>
                        <li><a href="#about-us">How it works</a></li>
                        <li><a href="#">Chat with us</a></li>
                        <li class="btn"><a href="#">Signup for free</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold fs-2 lh-1 mb-3">A platform for independent musicians</h1>
                    <p class="lead fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Listen now</button>
                    <button type="button" class="btn btn-outline-light btn-lg px-4">Signup for free</button>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </header>
    <section id="about-us">
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-5 fw-bold fs-2 lh-1 mb-3">Upload or sell your music, and keep 100% of your royalties</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                  <button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Learn more</button>
                  <button type="button" class="btn btn-outline-dark btn-lg px-4">Start 7-day trial</button>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-1 mb-3 overflow-hidden">
                  <img class="md-3" src="{{asset('assets/images/cover.png')}}" width="250" height="320">
              </div>
            </div>
          </div>
    </section>
</body>
</html>