<?php
/**
 * SiteEditor Field: text-align.
 *
 * @package     SiteEditor
 * @subpackage  Options
 * @since       1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )  {
    exit;
}

if ( ! class_exists( 'SiteEditorTextAlignField' ) ) {

    if( ! class_exists( 'SiteEditorSelectField' ) ) {
        require_once SED_EXT_PATH . '/options-engine/includes/fields/site-editor-select-field.class.php';
    } 
    
    /**
     * Field overrides.
     */
    class SiteEditorTextAlignField extends SiteEditorSelectField { 

        /**
         * Related setting id for save in db
         *
         * @access protected
         * @var string
         */
        public $setting_id = 'text_align';

        /**
         * The field type.
         *
         * @access protected
         * @var string
         */
        public $type = 'text-align';

        /**
         * Use 'refresh', 'postMessage'
         *
         * @access protected
         * @var string
         */
        public $transport = 'postMessage';

        /**
         * Sets the Default Value
         *
         * @access protected
         */
        protected function set_default() {

            // If a custom default has been defined,
            // then we don't need to proceed any further.
            if ( ! empty( $this->default ) ) {
                return;
            }

            $this->default = '';

        }

    }
}

sed_options()->register_field_type( 'text-align' , 'SiteEditorTextAlignField' );