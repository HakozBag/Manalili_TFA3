<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <main class="form-card">
        <h1>Add New User</h1>

        <?php if (session()->has('errors')): ?>
            <div class="validation-errors">
                <ul>
                    <?php foreach (session('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

        <form
            class="customer-form"
            action="<?= site_url('users/create') ?>"
            method="post"
        >
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" 
                       value="<?= esc(old('username')) ?>">
            </div>

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" 
                       value="<?= esc(old('full_name')) ?>">
            </div>

            <button type="submit">Add User</button>
            <a class="cancel-button" href="<?= site_url('users') ?>">
                Cancel
            </a>
        </form>
    </main>
</body>
</html>