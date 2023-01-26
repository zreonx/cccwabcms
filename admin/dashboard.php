<?php
    $title = "Dashboard";
    require_once '../includes/main.php'
?>
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
        <div class="row">
            <div class="col">
                <div class="card" style="width: 200px">
                    <div class="card-body">No. of Student</div>    
                 </div>
            </div>
        </div>
    <d/iv>


<?php
    require_once '../includes/main.footer.php'
?>