<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUsxtxcq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUsxtxcq/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUsxtxcq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUsxtxcq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUsxtxcq\appProdProjectContainer([
    'container.build_hash' => 'Usxtxcq',
    'container.build_id' => '23326016',
    'container.build_time' => 1697126812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUsxtxcq');
