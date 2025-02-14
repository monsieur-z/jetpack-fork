<?php
/**
 * This is an automatically generated baseline for Phan issues.
 * When Phan is invoked with --load-baseline=path/to/baseline.php,
 * The pre-existing issues listed in this file won't be emitted.
 *
 * This file can be updated by invoking Phan with --save-baseline=path/to/baseline.php
 * (can be combined with --load-baseline)
 */
return [
    // # Issue statistics:
    // PhanUndeclaredClassMethod : 55+ occurrences
    // PhanSuspiciousMagicConstant : 2 occurrences
    // PhanUndeclaredTypeReturnType : 2 occurrences
    // PhanDeprecatedClassConstant : 1 occurrence
    // PhanPluginDuplicateConditionalNullCoalescing : 1 occurrence
    // PhanUndeclaredExtendedClass : 1 occurrence

    // Currently, file_suppressions and directory_suppressions are the only supported suppressions
    'file_suppressions' => [
        'legacy/class-jetpack-client.php' => ['PhanDeprecatedClassConstant', 'PhanUndeclaredClassMethod'],
        'legacy/class-jetpack-sync-actions.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredExtendedClass', 'PhanUndeclaredTypeReturnType'],
        'legacy/class-jetpack-sync-modules.php' => ['PhanUndeclaredClassMethod', 'PhanUndeclaredTypeReturnType'],
        'legacy/class-jetpack-sync-settings.php' => ['PhanUndeclaredClassMethod'],
        'legacy/class-jetpacktracking.php' => ['PhanUndeclaredClassMethod'],
        'lib/locales.php' => ['PhanPluginDuplicateConditionalNullCoalescing'],
        'lib/tracks/client.php' => ['PhanSuspiciousMagicConstant', 'PhanUndeclaredClassMethod'],
    ],
    // 'directory_suppressions' => ['src/directory_name' => ['PhanIssueName1', 'PhanIssueName2']] can be manually added if needed.
    // (directory_suppressions will currently be ignored by subsequent calls to --save-baseline, but may be preserved in future Phan releases)
];
