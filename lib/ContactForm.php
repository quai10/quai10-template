<?php
/**
 * ContactForm class.
 */

namespace Quai10;

use WPCF7_FormTag;

/**
 * Class used to customize Contact Form 7 output.
 */
class ContactForm
{
    /**
     * Declare custom field types.
     *
     * @param array|string $tag Tag
     */
    public static function addCustomFields($tag)
    {
        $tag = new WPCF7_FormTag($tag);

        if (empty($tag->name)) {
            return '';
        }

        $validation_error = wpcf7_get_validation_error($tag->name);

        $class = wpcf7_form_controls_class($tag->type, 'wpcf7-text');

        if (in_array($tag->basetype, ['email', 'url', 'tel'])) {
            $class .= ' wpcf7-validates-as-'.$tag->basetype;
        }

        if ($validation_error) {
            $class .= ' wpcf7-not-valid';
        }

        $atts = [];

        $atts['size'] = $tag->get_size_option('40');
        $atts['maxlength'] = $tag->get_maxlength_option();
        $atts['minlength'] = $tag->get_minlength_option();

        if ($atts['maxlength'] && $atts['minlength'] && $atts['maxlength'] < $atts['minlength']) {
            unset($atts['maxlength'], $atts['minlength']);
        }

        $atts['class'] = $tag->get_class_option($class);
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);

        if ($tag->has_option('readonly')) {
            $atts['readonly'] = 'readonly';
        }

        if ($tag->is_required()) {
            $atts['aria-required'] = 'true';
            $atts['required'] = 'true';
        }

        $atts['aria-invalid'] = $validation_error ? 'true' : 'false';

        $value = (string) reset($tag->values);

        if ($tag->has_option('placeholder') || $tag->has_option('watermark')) {
            $atts['placeholder'] = $value;
            $value = '';
        }

        $value = $tag->get_default_option($value);

        $value = wpcf7_get_hangover($tag->name, $value);

        $atts['value'] = $value;

        if (wpcf7_support_html5()) {
            $atts['type'] = $tag->basetype;
        } else {
            $atts['type'] = 'text';
        }

        $atts['name'] = $tag->name;

        $atts = wpcf7_format_atts($atts);

        $html = sprintf(
            '<input class="%1$s" %2$s />%3$s',
            sanitize_html_class($tag->name),
            $atts,
            $validation_error
        );

        return $html;
    }

    /**
     * Customize form fields.
     */
    public static function addFields()
    {
        $tags = ['text', 'text*', 'email', 'email*', 'url', 'url*', 'tel', 'tel*'];
        foreach ($tags as $tag) {
            //We have to remove tags before replacing them.
            wpcf7_remove_form_tag($tag);
        }
        wpcf7_add_form_tag($tags, [self::class, 'addCustomFields'], true);
    }

    /**
     * Declare custom submit button.
     *
     * @param array|string $tag Tag
     */
    public static function addCustomSubmitBtn($tag)
    {
        $tag = new WPCF7_FormTag($tag);

        $class = wpcf7_form_controls_class($tag->type);

        $atts = [];

        $atts['class'] = $tag->get_class_option($class).' btn';
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);

        $value = isset($tag->values[0]) ? $tag->values[0] : '';

        if (empty($value)) {
            $value = __('Send', 'contact-form-7');
        }

        $atts['type'] = 'submit';
        $atts['value'] = $value;

        $atts = wpcf7_format_atts($atts);

        $html = sprintf('<button type="submit" %1$s>%2$s</button>', $atts, $value);

        return $html;
    }

    /**
     * Customize form submit button.
     */
    public static function addSubmitBtn()
    {
        wpcf7_remove_form_tag('submit');
        wpcf7_add_form_tag('submit', [self::class, 'addCustomSubmitBtn']);
    }
}
