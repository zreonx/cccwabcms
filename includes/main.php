<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css?v=1.1">
</head>
<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <button class="btn close text-light"><i class="text-light close-icon fa-solid fa-circle-xmark"></i></button>
            
            <div class="header-box px-3 pt-0 pb-4">
                <h1 class="fs-4 d-flex align-items-center justify-content-center gap-2"><img src="../images/ccc_logo.png" class="logo" alt=""></h1>
            </div>
            <ul class="list-unstyled px-2">
                <li class="active px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-house space"></i>Dashboard</a></li>
                <li class="px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-users space"></i>Student</a></li>
                <li class="px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-signature space"></i>Signatories</a></li>
                <li class="px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-file-circle-check space"></i></i></i>Clearance</a></li>
                
                
            </ul>
            <hr class="hr-color mx-3">
            <ul class="list-unstyled px-2">
                <li class="px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-gear space"></i>Settings</a></li>
                <li class="px-2"><a class="text-decoration-none py-2 d-block" href="#"><i class="fa-solid fa-right-from-bracket space"></i>Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <a class="navbar-brand fs-4 order-2" href="#">CCCWABCMS</a>
                        <button class="btn open-btn text-dark btn-open"><i class="fa-sharp fa-solid fa-bars-staggered"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="panel p-3">
                <h1>This is some text</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aut illo mollitia sit quo officia praesentium deleniti deserunt! Quibusdam, minima, alias necessitatibus est, incidunt ratione reiciendis in quisquam dicta optio commodi veritatis? Libero quam, ut maiores repellat, corrupti debitis, illo voluptates odit praesentium quos consectetur enim necessitatibus. Ipsum, voluptatibus ipsa.</p>
            </div>
            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });
        
        $(".open-btn").on('click', function(){
            $(".sidebar").addClass('active');
        });

        $(".close").on('click', function(){
            $(".sidebar").removeClass('active');
        });



    </script>
</body>


</html>