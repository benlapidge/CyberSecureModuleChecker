
<header>
    <nav>
        <ul>
            <?php
            if ($_SESSION["loginstatus"]!== true){
                echo '<li>';
                echo '<a href="/login.php">Login</a>';
                echo '</li>';
            } ?>
            
            <li>
                <a href="/register.php">Register</a>
            </li>
            <li>
                <a href="http://192.168.64.2/phpmyadmin">PHPMyAdmin</a>
            </li>
            <?php
            if ($_SESSION["loginstatus"]== true){
                echo '<li>';
                echo '<a href="functions/logout.php">Logout</a>';
                echo '</li>';
            } ?>
        </ul>
    </nav>
</header>