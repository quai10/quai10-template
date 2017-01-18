<?php
/**
 * FormTag class.
 */

namespace Quai10;

/**
 * Extended WPCF7_FormTag to make it easier to use in tests.
 *
 * @codeCoverageIgnore
 */
class FormTag extends \WPCF7_FormTag
{
    /**
     * Get tag type.
     *
     * @return string Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get tag base type.
     *
     * @return string Base type
     */
    public function getBaseType()
    {
        return $this->basetype;
    }

    /**
     * Get tag name.
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get tag values.
     *
     * @return array values
     */
    public function getValues()
    {
        return $this->values;
    }
}
