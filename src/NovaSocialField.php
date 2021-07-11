<?php

namespace EricHeinzl\NovaSocialField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\Searchable;

class NovaSocialField extends Field
{
    use Searchable;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-social-field';

    protected function defaultBehaviour(): NovaSocialField
    {
        return $this
            ->hideFromIndex()
            ->rules('max:64');
    }

    public function Github(): NovaSocialField
    {
        return $this->withMeta([
            'Github' => true
        ])->defaultBehaviour();
    }

    public function Twitter(): NovaSocialField
    {
        return $this->withMeta([
            'Twitter' => true
        ])->defaultBehaviour();
    }

    public function LinkedIn(): NovaSocialField
    {
        return $this->withMeta([
            'LinkedIn' => true
        ])->defaultBehaviour();
    }
}
