<?php

namespace Hofff\Contao\HorizontalRule;

use Contao\ContentModel;
use Contao\Widget;

/**
 * @author Oliver Hoff <oliver@hofff.com>
 */
class FormHorizontalRule extends Widget {

	/**
	 * @var string
	 */
	protected $strTemplate = 'form_hofff_horizontalrule';

	/**
	 * @var string
	 */
	protected $strPrefix = 'widget widget-hr';

	/**
	 * @see \Contao\Widget::validate()
	 */
	public function validate() {
		return;
	}

	/**
	 * @see \Contao\Widget::generate()
	 */
	public function generate() {
		$row = new ContentModel;
		$row->type = 'hofff_horizontalrule';
		$row->addAnchor = $this->hofff_horizontalrule_addAnchor;
		$row->anchor = $this->hofff_horizontalrule_anchor;
		$row->anchorTitle = $this->hofff_horizontalrule_anchorTitle;
		$row->cssID = [ '', $this->class ];

		$hr = new ContentHorizontalRule($row);

		return $hr->generate();
	}

}
