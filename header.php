
<header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <?php
            if ($_SESSION["loginstatus"]!== true){
                echo '<li>';
                echo '<a href="/login.php">Login</a>';
                echo '</li>';
            } ?>
            
            <?php
            if ($_SESSION["loginstatus"]!== true){
                echo '<li>';
                echo '<a href="/register.php">Register</a>';
                echo '</li>';
            } ?>
            <?php
            if ($_SESSION["loginstatus"]== true){
                echo '<li>';
                echo '<a href="functions/logout.php">Logout</a>';
                echo '</li>';
            } ?>
        </ul>
    </nav>
</header>