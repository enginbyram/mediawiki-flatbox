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

