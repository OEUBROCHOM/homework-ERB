<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 if (isset($_SESSION['user_id'])) : ?>
<div class="container mt-4">
<h1>Users List</h1>
<a href="/users/create" class="btn btn-primary">Create</a>
<table class="table">
<thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <?php if ($_SESSION['user_role']== 'admin') : ?>
                    <th>Actions</th>
                <?php endif;?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['role'] ?></td>
                <?php if ($_SESSION['user_role'] === 'admin') : ?>
                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>"><i class="material-icons">edit</i></a>
                        <a href="/users/delete/<?= $user['id'] ?>"><i class="material-icons text-danger">delete</i></a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
   
</div>  
<?php 
else: 
    $this->redirect("/users/login"); 
endif;   
?>
