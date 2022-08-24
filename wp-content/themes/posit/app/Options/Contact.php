<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Site Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Site Settings';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $settings = new FieldsBuilder('settings');

        $settings
            ->addTab('basic_settings')
                ->addImage('logo')
            ->addTab('contact_info')
                ->addTextarea('address')
                ->addEmail('contact_email')
            ->addTab('social_media')
                ->addGroup('socials')
                    ->addLink('facebook')
                    ->addLink('instagram')
                    ->addLink('twitter')
                    ->addLink('youtube')
                ->endGroup();

        return $settings->build();
    }
}
