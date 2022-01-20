<?php
class LayoutConventions
{
    public function __construct()
    {
        echo '<link rel="stylesheet" href="../Header-Footer/Header-Footer.css" />';
    }

    public function getNavbarHead()
    {
        echo '<nav class="head">
            <div class="navbar">
                <img id="logo-navbar" src="../IMG/Logo-2.png" alt="[LOGO]">
                <div class="navbar-links">
                <a href=' . "../Homepage/Homepage.php" . '>Home</a>
                <a href=' . "../Reserveren/Reserveren.php" . '>Reserveer hier</a>
                <a href=' . "../Contact/contact.php" . '>Contact</a>
                <a href=' . "../LoginKlant/login.php" . '>Inloggen</a>
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
        echo '<nav class="foot">
            <div class="navbar">
                <img id="logo-navbar" src="../IMG/Logo-2.png" alt="[LOGO]">
                <div class="navbar-links">
                    <a href="../LoginMedewerker/login.php">Werkportaal<a/>
                </div>
            </div>
        </nav>';
    }
}