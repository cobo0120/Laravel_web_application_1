<?php $__env->startComponent($view, $params); ?>
    <?php $__env->slot($slotOrSection); ?>
        <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html']; ?>

    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/vendor/livewire/livewire/src/Macros/livewire-view-component.blade.php ENDPATH**/ ?>