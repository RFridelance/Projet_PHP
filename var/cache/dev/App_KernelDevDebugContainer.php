<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVLxSUY9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVLxSUY9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVLxSUY9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVLxSUY9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVLxSUY9\App_KernelDevDebugContainer([
    'container.build_hash' => 'VLxSUY9',
    'container.build_id' => '643f4f12',
    'container.build_time' => 1718457773,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVLxSUY9');
