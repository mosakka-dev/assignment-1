<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><img class="logo-img" src="<?php echo e(URL('images/logo.png')); ?>" alt="logo"></h2>
        <a href="<?php echo e(route('tasks.create')); ?>" class="add-btn">Add New Task</a>
    </div>

    <form action="<?php echo e(route('tasks.index')); ?>" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="input task name or description..." value="<?php echo e(request('search')); ?>">
            <button class="btn search-btn" type="submit">Search</button>
            <?php if(request('search')): ?>
                <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-outline-dark fw-bold">Clear</a>
            <?php endif; ?>
        </div>
    </form>

    <?php if($tasks->isEmpty()): ?>
        <div class="alert alert-info">No tasks found.</div>
    <?php else: ?>
        <div class="table-responsive mytask-table">
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr class="first-tr">
                        <th>Task Name</th>
                        <th>Task Description</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Control</th>
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
                                    <span class="badge bg-success bg-gradient py-2 px-4 shadow">Done</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark bg-gradient py-2 px-3 shadow">Waitting</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-sm btn-primary fw-bold me-2 bg-gradient py-1 px-2 shadow">Edit</a>
                                <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger bg-gradient fw-bold p-1 shadow" onclick="return confirm('Are you sure you want delete this task?')">Delete</button>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focushub\resources\views/tasks/index.blade.php ENDPATH**/ ?>