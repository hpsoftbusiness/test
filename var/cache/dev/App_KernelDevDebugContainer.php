<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVRnERpu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVRnERpu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVRnERpu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVRnERpu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVRnERpu\App_KernelDevDebugContainer([
    'container.build_hash' => 'VRnERpu',
    'container.build_id' => '7ff51c1b',
    'container.build_time' => 1681290503,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVRnERpu');