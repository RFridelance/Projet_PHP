<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFTcFg8J\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFTcFg8J/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFTcFg8J.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFTcFg8J\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFTcFg8J\App_KernelDevDebugContainer([
    'container.build_hash' => 'FTcFg8J',
    'container.build_id' => 'b45e3735',
    'container.build_time' => 1718459218,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFTcFg8J');
