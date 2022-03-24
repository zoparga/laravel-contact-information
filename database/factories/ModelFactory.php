<?php

namespace zoparga\ContactInformation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use zoparga\ContactInformation\ContactInformation;

class ModelFactory extends Factory
{
    protected $model = ContactInformation::class;


    public function definition()
    {
        return [
            'ContactInformationeable_id' => 1,
            'ContactInformationeable_type' => 'App\Models\User',
            'type' => 'email',
            'information' => 'info@info.com',
            'primary' => 1,
        ];
    }
}
