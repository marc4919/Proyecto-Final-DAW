<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCB26PDK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCB26PDK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCB26PDK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCB26PDK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCB26PDK\App_KernelDevDebugContainer([
    'container.build_hash' => 'CB26PDK',
    'container.build_id' => '5b6cf978',
    'container.build_time' => 1652961740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCB26PDK');
