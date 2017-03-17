<?php
/**
 * Class Helper
 *
 * @since	0.1.0
 *
 * @package mkdo\ground_control
 */

namespace mkdo\ground_control;

// Traits.
require_once 'helpers/trait-get-category-tags.php';
require_once 'helpers/trait-get-icons.php';
require_once 'helpers/trait-render-view.php';

/**
 * Helper class containing useful static methods.
 *
 * We are using traits, so that only need to 'use' the traits that are valid in
 * this build.
 */
class Helper {
	use Helper_Get_Category_tags;
	use Helper_Get_Icons;
	use Helper_Render_View;
}
