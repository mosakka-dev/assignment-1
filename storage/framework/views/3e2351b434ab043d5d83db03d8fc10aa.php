<?php $__env->startSection('content'); ?>
    <h2>Create New Task</h2>

    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Task Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo e(old('description')); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="<?php echo e(old('due_date')); ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" <?php echo e(old('completed') ? 'checked' : ''); ?>>
            <label class="form-check-label" for="completed">Completed</label>
        </div>
        <button type="submit" class="btn btn-success">Save Task</button>
        <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\task-manager-main\resources\views/tasks/create.blade.php ENDPATH**/ ?>