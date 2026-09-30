<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <main class="form-card">
        <h1>Edit User</h1>

        <?php if (session()->has('errors')): ?>
            <div class="validation-errors">
                <ul>
                    <?php foreach (session('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php
        $avatarFile = ! empty($user['avatar'])
            ? $user['avatar']
            : 'placeholder.png';
        ?>

        <p class="avatar-label">Current Profile Picture</p>
        <img
            class="avatar-preview"
            src="<?= base_url('uploads/avatars/' . $avatarFile) ?>"
            alt="<?= esc($user['full_name']) ?> avatar"
        >

        <form
            class="customer-form"
            action="<?= site_url('users/update/' . $user['id']) ?>"
            method="post"
            enctype="multipart/form-data"
        >
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    value="<?= esc(old('username', $user['username'])) ?>"
                >
            </div>

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="<?= esc(old('full_name', $user['full_name'])) ?>"
                >
            </div>

            <div class="form-group">
                <label for="avatar">New Profile Picture</label>
                <input
                    type="file"
                    id="avatar"
                    name="avatar"
                    accept=".jpg,.jpeg,.png"
                >
                <small>JPG or PNG only. Maximum file size: 2 MB.</small>
            </div>

            <button type="submit">Update User</button>
            <a class="cancel-button" href="<?= site_url('users') ?>">
                Cancel
            </a>
        </form>
    </main>
</body>
</html>