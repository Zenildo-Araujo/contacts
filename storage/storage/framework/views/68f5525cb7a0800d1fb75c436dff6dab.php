

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e($message); ?>

                    </div>
                <?php else: ?>
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                <?php endif; ?>
                <div class="row">
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name"><?php echo e($contact->name); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-primary btn-sm-2">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <a href="<?php echo e(route('contacts.detail', $contact->id)); ?>" class="btn btn-warning btn-sm-2">Detail</a>
                                </div>
                                <div class="col-sm">
                                    <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/dashboard.blade.php ENDPATH**/ ?>