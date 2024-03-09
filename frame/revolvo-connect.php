<?php

class Revolvo_Connect
{
    private $revolvo_stop = false;

    public function __construct()
    {

        //$this->revolvo_admin_callback();

        $this->revolvo_dependencies_check();

        /* Hook up if everything is active...*/
        if ($this->revolvo_stop == false) {
            add_action('revolvo_integrate', array($this, 'revolvo_integrate_callback'), 10, 2);
            do_action('revolvo_integrate');
        }
    }

    function revolvo_dependencies_check()
    {
        if (!isset($revolvo_notices)) {
            $revolvo_notices = new WPTRT\AdminNotices\Notices();
        }

        /* Check for Gravity Forms */
        if (!class_exists('GFForms')) {
            $this->revolvo_stop = true;
            $revolvo_notices->add(
                'revolvo_gravity',
                '',
                __(REVOLVO_NAME . ' requires the Gravity Forms plugin to be installed and activated to work correctly. ', 'revolvo'),
                [
                    'type' => 'warning',

                ]
            );
        }



        /* Check for Breakdance */
        if (!class_exists('\Breakdance\Elements\Element')) {
            $this->revolvo_stop = true;
            $revolvo_notices->add(
                'revolvo_breakdance',
                '',
                __(REVOLVO_NAME . ' requires the Breakdance plugin to be installed and activated to work correctly.', 'revolvo'),
                [
                    'type' => 'warning',
                ]
            );
        }

        $revolvo_notices->boot();
    }

    function revolvo_admin_callback()
    {
        /* Load Admin features */
    }

    function revolvo_integrate_callback()
    {

        /* Integrate the plugins */
        require(REVOLVO_PATH . "/elements.php");

        foreach (glob(REVOLVO_PATH . "/elements/*.php") as $file) {
            require $file;
        }
    }
}
