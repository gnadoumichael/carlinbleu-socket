<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CraueTwigExtensionsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enableOnly;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function enableOnly(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['enableOnly'] = true;
        $this->enableOnly = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'craue_twig_extensions';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable_only', $value)) {
            $this->_usedProperties['enableOnly'] = true;
            $this->enableOnly = $value['enable_only'];
            unset($value['enable_only']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableOnly'])) {
            $output['enable_only'] = $this->enableOnly;
        }

        return $output;
    }

}
