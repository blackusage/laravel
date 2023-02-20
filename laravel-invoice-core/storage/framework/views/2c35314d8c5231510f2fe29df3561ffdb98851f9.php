<h1><?php echo e($item->name); ?></h1>

<div>
    <p><?php echo e($item->description); ?></p>
</div>

<ul>
    <li>EAN: <?php echo e($item->ean); ?></li>
    <li>PRICE: <?php echo e($item->price); ?> (<?php echo e($item->currency); ?>)</li>
    <li>CREATED: <?php echo e($item->created_at); ?></li>
    <li>UPDATED: <?php echo e($item->updated_at); ?></li>
    <?php if($item->deleted_at != null): ?>
        <li>DELETED: <?php echo e($item->deleted_at); ?></li>
        <?php endif; ?>
</ul>
<?php /**PATH C:\Users\nemec\PhpstormProjects\laravel-invoice-core\resources\views/items/show.blade.php ENDPATH**/ ?>