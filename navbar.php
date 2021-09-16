<!-- Navbar view -->
<?php session_start();?>  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container">  
        <a class="navbar-brand" href="#">TaskManager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>

                <?php if (isset($_SESSION['admin'])) {
                    ?>
                    <a class="nav-item nav-link" href="/TaskManager/Controller/logout.php">Logout</a>
                <?php } else { ?>
                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>

</nav>