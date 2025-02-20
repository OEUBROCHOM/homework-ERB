
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">App</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/users">Users</a>
            </div>
            <div class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a class="nav-link" href="/users/logout">Logout</a>
                    <a class="nav-link"><?= $_SESSION['user_role'] ?></a>
                <?php else : ?>
                    <a class="nav-link" href="/users/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
