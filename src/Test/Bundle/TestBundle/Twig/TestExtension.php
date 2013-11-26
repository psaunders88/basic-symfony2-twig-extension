<?php 

namespace Test\Bundle\TestBundle\Twig;

use Test\Bundle\TestBundle\Listeners\ModeListener;

/**
 * Test Extension
 * 
 * This is just text/example twig extension.
 * It doesn't do anthing complicated. It returns the site mode from the mode listener
 * It reigsters the function getSiteMode for use in twig templates
 * 
 * @package Test\Bundle\TestBundle\Twig
 * @author Paul Saunders
 */
class TestExtension extends \Twig_Extension
{

    /**
     * The mode listener class
     * 
     * @var ModeListener 
     */
	protected $modeListener;
    
    /**
     * Constructor for the test twig extension
     * 
     * @param ModeListener $modeListener The mode listener class
     * 
     * @return void
     */
	public function __construct(ModeListener $modeListener)
	{
		$this->modeListener = $modeListener;
	}

    /**
     * Defines which custom functions are in this class
     * 
     * @return  \Twig_SimpleFunction[]
     */
 	public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('getSiteMode', array($this, 'getSiteMode')),
        );
    }

    /**
     * For returning the current site mode
     * 
     * @return string
     */
	public function getSiteMode()
	{
		return $this->modeListener->getMode();
	}

    /**
     * For the getting the extension name
     * 
     * @return string
     */
	public function getName()
	{ 
		return "test_extension";
	}
}
