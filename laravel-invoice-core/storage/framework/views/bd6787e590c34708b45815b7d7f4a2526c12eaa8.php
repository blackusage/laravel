<h1>Users</h1>
<a href="<?php echo e(route("users.create")); ?>">Vytvořit nový</a>
<table>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td>
                <?php echo Form::open(["route" => ["users.destroy", $user->id], "method"=>"delete"]); ?>


                <a href="<?php echo e(route("users.edit", $user->id)); ?>">Edit</a>
                <a href="<?php echo e(route("users.show", $user->id)); ?>">View</a>

                <?php echo Form::button('<span>Delete</span>', ["type" => "submit",
                "onclick"=> "return confirm('Opravdu chcete tento user odebrat?')"]); ?>


                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\Users\nemec\PhpstormProjects\laravel-invoice-core\resources\views/users/index.blade.php ENDPATH**/ ?>