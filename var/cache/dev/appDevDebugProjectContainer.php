<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLggykbn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLggykbn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLggykbn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLggykbn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLggykbn\appDevDebugProjectContainer([
    'container.build_hash' => 'Lggykbn',
    'container.build_id' => '2d668aa0',
    'container.build_time' => 1554112391,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLggykbn');