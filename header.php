<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Ako Chutí Svet</a>
        <img src="./img/logo.png" id="logo" alt="logo" height="36">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" aria-current="page" href="index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'galeria') ? 'active' : ''; ?>" href="galeria.php">Galéria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'o_nas') ? 'active' : ''; ?>" href="o_nas.php">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'kontakt') ? 'active' : ''; ?>" href="kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
