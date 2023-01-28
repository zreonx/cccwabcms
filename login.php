<?php
    $title = "Login";
    require_once "includes/header.php";
    require_once "config/connection.php";
?>
    <div class="cards animated ">
        <div class="card-pic wow slideInLeft">
            <img src="images/login.png" class="img-fluid rounded d-block login-photo" alt="">
        </div>
        <div class="login-card login wow slideInRight">
            <div class="card login-b">
                <div class="card-title ">
                    <h1 class="text-center">CCCWABCMS</h1>
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                    
                            $result = $account->checkUserType($email);
                    
                            if(!$result){
                                echo '<div class=" alert alert-danger error"> Your account is not recognized by the system. </div>';
                            }else {
                                if($result['user_type'] === "admin"){
                                    $user_type = $result['user_type'];
                                    $account_details = $account->adminLogin($user_type, $email, $password);
                                    if(!$account_details) {
                                        echo '<div class="alert  alert-danger error"> Invalid Username or Password. </div>';
                                    }else {
                                        $_SESSION['username'] = "Admin";
                                        $_SESSION['user_type'] = $account_details['user_type'];
                                        $_SESSION['user_id'] = $account_details['user_id'];
                                        header("location: admin/dashboard.php");
                                    }
                                }else {
                                    echo "youre not an admin";
                                }
                            }
                        }
                    ?>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Student ID</label>
                            <input type="text" name="email" placeholder="Student Id" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control" >
                        </div>
                        <div class="mb-5 d-flex btn-flex">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary btn-login " onclick="this.blur();">LOGIN</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once "includes/footer.php";
?>