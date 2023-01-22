<?php
    $title = "Login";
    require_once "includes/header.php";
?>
    <div class="cards animated ">
        <div class="card-pic wow slideInLeft">
            <img src="images/login.png" class="img-fluid rounded d-block login-photo" alt="">
        </div>
        <div class="login-card login wow slideInRight">
            <div class="card login-b">
                <div class="card-title">
                    <h1 class="text-center">CCCWABCMS</h1>
                </div>
                <div class="card-body">
                    
                    <form action="">
                        <div class="mb-3">
                            <label class="form-label">Student ID</label>
                            <input type="text" placeholder="Student Id" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" placeholder="Password" class="form-control" >
                        </div>
                        <div class="mb-3 d-flex btn-flex">
                            <a href="#" class="btn btn-lg btn-primary btn-login " onclick="this.blur();">LOGIN</a>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once "includes/footer.php";
?>