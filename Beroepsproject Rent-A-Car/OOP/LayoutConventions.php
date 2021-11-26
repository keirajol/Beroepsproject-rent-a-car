<?php
class LayoutConventions
{
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
                </div>
            </div>
        </nav>';
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