<html>
<head>
    <title>Add New Customer</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    </head>
<body>

<main class="form-card">
    <h1>Add New Customer</h1>


<form class="customer-form" action="<?= site_url('customers/create') ?>" method="post">
    <?= csrf_field() ?>

    
    <label for="full_name">Full Name:</label>
    <input
        type="text"
        id="full_name"
        name="full_name"
        value="<?= esc(old('full_name')) ?>"
    
    >


    <label for="email">Email:</label>
    <input
        type="email"
        id="email"
        name="email"
        value="<?= esc(old('email')) ?>"

    >
    <label for="phone">Phone:</label>
    <input
        type="text"
        id="phone"
        name="phone"
        value="<?= esc(old('phone')) ?>"
    >
    <button type="submit">Add Customer</button>

</form>

<?php $errors = session()->getFlashdata('errors'); ?>

<?php if ($errors): ?>
    <div class="validation-errors">
        <?php foreach ($errors as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
        
    </main>
</body>
</html>