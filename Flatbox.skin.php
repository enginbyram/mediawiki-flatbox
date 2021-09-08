<?php
/*
 * Skin file for skin Flatbox.
 *
 * @file
 * @ingroup Skins
 */

 class SkinFlatbox extends SkinTemplate {
     var $skinname = 'flatbox', $stylename = 'Flatbox',
         $template = 'FlatboxTemplate';

    /**
	 * This function adds JavaScript via ResourceLoader
	 *
	 * @param OutputPage $out
	 */

    public function initPage(OutputPage $out) {
        parent::initPage($out);
        $out->addModules('skin.flatbox.js');
    }
    /*
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface', 'skins.flatbox'
		) );
	}
}

<?php
/**
 * BaseTemplate class for Flatbox skin
 *
 * @ingroup Skins
 */
class FlatboxTemplate extends BaseTemplate {
	/**
	 * Outputs the entire contents of the page
	 */
	public function execute() {
		$this->html( 'headelement' ); ?>

/** Your skin's code goes here.
  * The rest of this page explains what to write here.
**/

<?php $this->printTrail(); ?>
</body>
</html><?php
	}
}

