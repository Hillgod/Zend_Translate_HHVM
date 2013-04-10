<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\I18n\Translator;

// use ArrayObject;
use Zend\I18n\Translator\Plural\Rule as PluralRule;

/**
 * Text domain.
 */
class TextDomain //extends ArrayObject
{
    /**
     * Plural rule.
     *
     * @var PluralRule
     */
    protected $pluralRule;

	private $data = array();
	
	public function __construct() {
		if (func_num_args() > 1) {
			throw new InvalidArgumentException('TextDomain constructor takes one or zero arguments');
		}
		if (func_num_args() == 1) {
			$arr = func_get_arg(0);
			if (!is_array($arr)) {
				throw new InvalidArgumentException('Passed value is not an array.');
			}
			$this->data = $arr;
		} else {
			$this->data = array();
		}
	}

    /**
     * Set the plural rule
     *
     * @param  PluralRule $rule
     * @return TextDomain
     */
    public function setPluralRule(PluralRule $rule)
    {
        $this->pluralRule = $rule;
        return $this;
    }

    /**
     * Get the plural rule.
     *
     * Lazy loads a default rule if none already registered
     *
     * @return PluralRule
     */
    public function getPluralRule()
    {
        if ($this->pluralRule === null) {
            $this->setPluralRule(PluralRule::fromString('nplurals=2; plural=n==1'));
        }

        return $this->pluralRule;
    }
	public function setTranslation($key, $translation) {
		$this->data[$key] = $translation;
	}
	
	public function getTranslation($key) {
		return isset($this->data[$key]) ? $this->data[$key] : null;
	}
	
	public function deleteTranslation($key) {
		unset($this->data[$key]);
	}
	
	public function merge(TextDomain $arr) {
		$this->data = array_merge($this->data, $arr->data);
	}
	
}
