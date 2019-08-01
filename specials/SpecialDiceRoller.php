<?php
/**
 * diceRoller SpecialPage for DiceRoller extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialDiceRoller extends SpecialPage {
	public function __construct() {
		parent::__construct( 'diceRoller' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'special-diceRoller-title' ) );
		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg( 'special-diceRoller-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
