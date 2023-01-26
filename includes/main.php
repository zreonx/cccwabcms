<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
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
                <li class="active px-2"><a class="text-decoration-none py-2 d-block" href="../admin/dashboard.php"><i class="fa-solid fa-house space"></i>Dashboard</a></li>
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
            
        