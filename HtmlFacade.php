<?php namespace Illuminate\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Html\HtmlBuilder
 */
class HtmlFacade extends Facades {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'builder'; }

}
