<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAdC4MzI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAdC4MzI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAdC4MzI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAdC4MzI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAdC4MzI\App_KernelDevDebugContainer([
    'container.build_hash' => 'AdC4MzI',
    'container.build_id' => '3f38288c',
    'container.build_time' => 1651411807,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAdC4MzI');
