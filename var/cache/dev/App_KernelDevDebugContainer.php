<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTc2xtKD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTc2xtKD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTc2xtKD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTc2xtKD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTc2xtKD\App_KernelDevDebugContainer([
    'container.build_hash' => 'Tc2xtKD',
    'container.build_id' => 'b6f24a79',
    'container.build_time' => 1736507181,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTc2xtKD');
