<?php
namespace kilyakus\button;

class ExampleAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/widget-example'],'widget-example');
        parent::init();
    }
}
