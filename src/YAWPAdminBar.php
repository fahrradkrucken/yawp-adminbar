<?php


class YAWPAdminBar
{
    private $settings = [
        'class'        => '',
        'class_toggle' => '',
        'items'        => [],
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
        show_admin_bar(false);
        if (!current_user_can('manage_options')) return;

        $this->settings['items'] = [
            [
                'url'    => get_dashboard_url(),
                'target' => '_blank',
                'title'  => __('Dashboard'),
                'icon'   => 'dashicons-performance',
                'class'  => '',
            ],
            [
                'url'    => get_edit_post_link(get_the_ID()),
                'target' => '_blank',
                'title'  => __('Edit This Post'),
                'icon'   => 'dashicons-edit',
                'class'  => '',
            ],
            [
                'url'    => '',
                'target' => '',
                'title'  => '',
                'icon'   => '',
                'class'  => 'yawpab-divider',
            ],
            [
                'url'    => get_edit_profile_url(),
                'target' => '_blank',
                'title'  => __('My Profile'),
                'icon'   => 'dashicons-businessman',
                'class'  => '',
            ],
            [
                'url'    => wp_logout_url(home_url()),
                'target' => '',
                'title'  => __('Log Out'),
                'icon'   => 'dashicons-external',
                'class'  => '',
            ],
        ];

        // @TODO: pass default arguments & menu items through hooks
    }

    private function enqueueScripts()
    {
        wp_enqueue_style(
            'yawp-admin-bar-styles',
            YAWPAB_PLUGINN_URL . '/static/adminbar.css',
            ['dashicons']
        );
        add_action('wp_footer', [$this, 'render']);
    }

    public function render()
    {
        if (!empty($this->settings['items'])) : ?>

            <div class="yawpab">
                <input id="yawpab-switch-toggle"
                       class="yawpab-switch"
                       type="checkbox">
                <label class="yawpab-toggle"
                       for="yawpab-switch-toggle">
                    <div class="yawpab-toggle__icon"></div>
                </label>

                <div class="yawpab-box">
                    <nav class="yawpab-box__nav">
                        <?php foreach ($this->settings['items'] as $item) : ?>
                            <a class="yawpab-box__nav-link <?= $item['class'] ?>"
                               href="<?= $item['url'] ?>" target="<?= $item['target'] ?>">
                            <span class="yawpab-box__nav-link-icon">
                                <span class="dashicons <?= $item['icon'] ?>"></span>
                            </span>
                                <span class="yawpab-box__nav-link-txt"><?= $item['title'] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            </div>

        <?php endif;
    }
}