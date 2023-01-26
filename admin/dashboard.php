<?php
    $title = "Dashboard";
    require_once '../includes/main.php';
?>
    
    <div class="panel p-3">
        <h1 class="text-center">Welcome <i><?php echo $_SESSION['username']; ?> !</i></h1>
        <!-- <div class="row">
            <div class="col">
                <div class="card" style="width: 200px">
                    <div class="card-body"></div>    
                 </div>
            </div>
        </div> -->
    </div>


<?php
    require_once '../includes/main.footer.php'
?>