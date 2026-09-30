<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <meta charset = "UTF-8">
</head>

<body>
    <main class="form-card">
        <h1>Edit Customer</h1>

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
            action="<?= site_url('customers/update/' . $customer['id']) ?>"
            method="post"
        >
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" 
                       value="<?= esc(old('full_name', $customer['full_name'])) ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       value="<?= esc(old('email', $customer['email'])) ?>">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" 
                       value="<?= esc(old('phone', $customer['phone'])) ?>">
            </div>

            <button type="submit">Update Customer</button>
            <a class="cancel-button" href="<?= site_url('customers') ?>">
                Cancel
            </a>
        </form>
    </main>
</body>
</html>