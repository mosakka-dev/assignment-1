<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Task List</h2>
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Create New Task</a>
    </div>

    <form action="<?php echo e(route('tasks.index')); ?>" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search tasks by name or description..." value="<?php echo e(request('search')); ?>">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
            <?php if(request('search')): ?>
                <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-outline-danger">Clear Search</a>
            <?php endif; ?>
        </div>
    </form>

    <?php if($tasks->isEmpty()): ?>
        <div class="alert alert-info">No tasks found.</div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($task->name); ?></td>
                            <td><?php echo e(Str::limit($task->description, 50)); ?></td>
                            <td><?php echo e($task->due_date ? $task->due_date->format('M d, Y') : 'N/A'); ?></td>
                            <td>
                                <?php if($task->completed): ?>
                                    <span class="badge bg-success">Completed</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-sm btn-info me-2">Edit</a>
                                <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <?php echo e($tasks->links()); ?> 
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\task-manager-main\resources\views/tasks/index.blade.php ENDPATH**/ ?>