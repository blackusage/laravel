<h1>Create users</h1>

<form method="POST" action="/users">
    <!-- FIX CSRF policy -->
<?php echo csrf_field(); ?>
<!-- name field -->
    <div>
        <label for="name">Název</label>
        <input type="text" id="name" name="name">
    </div>

    <!-- email field -->
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>

    <!-- password field -->
    <div>
        <label for="heslo">heslo</label>
        <input type="text" id="password" name="password">
    </div>



    <input type="submit" value="Vytvořit">
</form>
<?php /**PATH C:\Users\nemec\PhpstormProjects\laravel-invoice-core\resources\views/users/create.blade.php ENDPATH**/ ?>