<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF9BcB2F\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF9BcB2F/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF9BcB2F.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF9BcB2F\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF9BcB2F\App_KernelDevDebugContainer([
    'container.build_hash' => 'F9BcB2F',
    'container.build_id' => '95dac411',
    'container.build_time' => 1681664946,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF9BcB2F');
