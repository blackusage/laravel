<h1>Items</h1>
<a href="<?php echo e(route("items.create")); ?>">Vytvořit nový</a>
<table>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->currency); ?></td>
            <td><?php echo e($item->price); ?></td>
            <td>
                <!-- TODO: Form not exist - install Infyom or Collective\Html\FormFacade -->
                <?php echo Form::open(["route" => ["items.destroy", $item->id], "method"=>"delete"]); ?>


                    <a href="<?php echo e(route("items.edit", $item->id)); ?>">Edit</a>
                    <a href="<?php echo e(route("items.show", $item->id)); ?>">View</a>

                    <?php echo Form::button('<span>Delete</span>', ["type" => "submit",
                    "onclick"=> "return confirm('Opravdu chcete tento item odebrat?')"]); ?>


                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\Users\nemec\PhpstormProjects\laravel-invoice-core\resources\views/items/index.blade.php ENDPATH**/ ?>