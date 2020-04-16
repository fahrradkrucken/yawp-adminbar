<?php


class YAWPAdminBar
{
    private $settingsToggle = [
        'class'      => '',
        'position_x' => 'left',
        'position_y' => 'bottom',
    ];
    private $settingsMenuItems = [
        'class' => '',
        'items' => [],
    ];

    public function bootstrap()
    {
        $this->registerHooks();
        $this->initDefaults();
        $this->enqueueScripts();
    }

    private function registerHooks()
    {
        // @TODO: hooks to replace / add items
    }

    private function initDefaults()
    {
        // @TODO: pass default arguments & menu items through hooks
    }

    private function enqueueScripts()
    {
        // @TODO: enqueue to header "adminbar.css" and "dashicons"
        // @TODO: enqueue to footer adminbar HTML markup
    }

    public function renderToggle($settings = [])
    {
        // @TODO: render toggle button
    }

    public function renderMenu($settings = [])
    {
        // @TODO: render menu items box
    }

    public function renderMenuItems($items = [])
    {
        // @TODO: render menu items list
    }
}