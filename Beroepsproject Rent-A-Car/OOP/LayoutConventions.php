<?php
class LayoutConventions
{
    public function __construct()
    {
        echo '<link rel="stylesheet" href="../Header-Footer/Header-Footer.css" />';
    }

    public function getNavbarHead()
    {
        echo '<nav>
            <div class="navbar">
                <img id="logo-navbar" src="../IMG/Logo-2.png" alt="[LOGO]">
                <div class="navbar-links">
                <a href=' . "../Homepage/Homepage.php" . '>Home</a>
                <a href=' . "../Reserveren/Reserveren.php" . '>Reserveer hier</a>
                <a href=' . "../Contact/Contact.php" . '>Contact</a>
                <a href=' . "../Login/Login.php" . '>Inloggen</a>
                <div>' . $_SESSION['user'] . '</div>
                <div>
                    <form action="#" method="post">
                        <input type="submit" name="logout" value="Log Out" />
                    </form>
                </div>
            </div>
        </nav>';
        if(isset($_POST['logout']))
        {
            unset($_SESSION['user']);
        }
    }

    public function getNavbarFoot()
    {
        echo '<nav>
            <div class="navbar">
                <img id="logo-navbar" src="../IMG/Logo-2.png" alt="[LOGO]">
                <div class="navbar-links">

                </div>
            </div>
        </nav>';
    }
}