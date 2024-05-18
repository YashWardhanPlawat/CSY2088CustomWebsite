<header>
    <div class="logo">
        <img src="../images/logo.png" alt="" />
    </div>
    <div class="headDark">
        <ul class="iconWords">
            <li class="iconWords">
                <a class="iconWords" href="">Help │</a>
                <a class="iconWords" href="../CustomerLogin.php"> Sign in │</a>
                <a class="iconWords" href="../CustomerSignup.php"> Sign up │</a>
                <?php if(isset($_SESSION["currentAccountFreeLancer"])){ ?>
                    <a class="iconWords" href=""> hello <?=$_SESSION["currentAccountFreeLancer"]?> |</a>
                <?php }else{ ?>
                    <a class="iconWords" href="../FreeLancerLogin.php"> Sign in as freelancer |</a>
                    <a class="iconWords" href="../FreeLancerSignup.php"> Become a freelancer |</a>
                <?php } ?>
                <a class="iconWords" href="../AdminLogin.php"> emplory Sign in </a>
            </li>
        </ul>
    </div>
    <div class="headlight">
        <ul>
            <li>
                <a href="../Index.php">Home Page |</a>
                <a href="../searchpage.php?ProductORFree=products"> Product search |</a>
                <a href="../searchpage.php?ProductORFree=freelancer_accounts"> Freelancer search </a>                  
            <?php
            if (session_status() == 2){
                if (isset($_SESSION['currentAccountAdmin'])){
                    if(checkForAdminAcc($_SESSION['currentAccountAdmin'], 'csy2088', 'csy2088')){ ?>
                        <a href="../AdminInPage.php">hello Admin <?=$_SESSION['currentAccountAdmin']?></a>
                <?php }
                }
            } ?>
            </li>
        </ul>
    </div>
</header>