<?php
include_once '../includes/session.php';
if (isset($_SESSION['user_type']) === "admin") {
    require_once '../includes/main.php';
    $title = "Dashboard";
   
    ?>
    
    <div class="panel p-3">
        <h1 class="panel-title">Dashboard</h1>
        <div class="panel-dashboard">
            <div>
                <div class="dashboard-card shadow-drop-br">
                    <div class="d-card-body">
                        <div class="d-flex parent-d align-content-center justify-content-center">
                            <div class="d-flex align-items-center">
                                <div class="dcontent">
                                    <div class="dcontent-top text-center">
                                        <span>Total No. of Student(s)</span>
                                    </div>
                                    <div class="dcontent-left">
                                        <img class="dashboard-img" src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"/>
                                    </div>
                                    <div class="dcontent-right text-center">
                                        <span class="dcontent-text">2000</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="badges">
                                <div class="d-flex flex-column text-center dbadge">
                                    <span>College</span>
                                    <span>20</span>
                                </div>
                                <div class="d-flex flex-column text-center dbadge">
                                    <span>SHS</span>
                                    <span>20</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div>
                <div class="card dashboard-card shadow-drop-br">
                    <div class="card-body d-card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="dcontent justify-content-center">
                                <div class="dcontent-top text-center">
                                    <span>Signatories</span>
                                </div>
                                <div class="dcontent-left">
                                    <img class="dashboard-img" src="https://cdn-icons-png.flaticon.com/512/3188/3188004.png"/>
                                </div>
                                <div class="dcontent-right text-center p-2">
                                    <span class="dcontent-text">20</span> 
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div>
                <div class="card dashboard-card shadow-drop-br">
                    <div class="card-body d-card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="dcontent justify-content-center">
                                <div class="dcontent-top text-center">
                                    <span>Cleared Student(s)</span>
                                </div>
                                <div class="dcontent-left">
                                    <img class="dashboard-img" src="https://cdn-icons-png.flaticon.com/512/190/190411.png"/>
                                </div>
                                <div class="dcontent-right text-center p-2">
                                    <span class="dcontent-text">800</span> 
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div>
                <div class="card dashboard-card shadow-drop-br">
                    <div class="card-body d-card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="dcontent justify-content-center">
                                <div class="dcontent-top text-center">
                                    <span>No. of Incomplete</span>
                                </div>
                                <div class="dcontent-left">
                                    <img class="dashboard-img" src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png"/>
                                </div>
                                <div class="dcontent-right text-center p-2">
                                    <span class="dcontent-text">20</span> 
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>


<?php
    
    require_once '../includes/main.footer.php';
    }else {
    echo "You cannot access this page !";
    }
?>