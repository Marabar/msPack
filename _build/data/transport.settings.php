<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'pack_free' => array(
        'xtype' => 'numberfield',
        'value' => 6000,
        'area' => 'mspack_main',
    ),
);

foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'mspack_' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
