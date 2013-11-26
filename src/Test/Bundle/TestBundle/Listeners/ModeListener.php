<?php

namespace Test\Bundle\TestBundle\Listeners;

use Symfony\Component\EventDispatcher\Event;

/**
 * Mode Listener
 *
 * Responsible for setting and getting the current site mode
 * Should really be split into two classes:
 * 1. One for setting and getting
 * 2. Secondly just a listener to call the other class
 *
 * @package Test\Bundle\TestBundle\Listeners
 * @author  Paul Saunders
 */
class ModeListener {
	
	const MODE_ONE = "first_mode";

	const MODE_TWO = "second_mode";
    
    /**
     * The current mode
     * 
     * @var string 
     */
	protected $mode = self::MODE_ONE;
    
    /**
     * Function to return what the mode is currently set to
     * 
     * @return string 
     */
	public function getMode()
	{
		return $this->mode;
	}

    /**
     * Function to set the site mode depending on if the host contains a string
     * 
     * @param Event $event The event that triggers this function 
     * 
     * return void
     */
	public function setMode(Event $event)
    {	
        // We don't need an else here because mode is MODE_ONE by default
        if (strpos($event->getRequest()->getHost(), 'twig') !== false) {
            $this->mode = self::MODE_TWO;
        }
    }
}
