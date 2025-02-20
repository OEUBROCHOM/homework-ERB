
<div class="container">
    <?php if (isset($_SESSION['user_id'])) :?>
        <h3>Welcome, <?php echo $_SESSION['user_name']; ?>!</h3>
        <a href="/users/logout" class="btn btn-danger">Logout</a>
    <?php else: ?>
        <form action="/users/authenticate" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/users" class="btn btn-secondary">Cancel</a>
        </form>
    <?php endif; ?>
</div>