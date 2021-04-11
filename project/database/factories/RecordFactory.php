<?php

namespace Database\Factories;

use App\Models\Record;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Record::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->text(50),
            'phone_number' =>  $this->faker->phoneNumber,
            'e_mail'  =>  $this->faker->text(100),
            'master_name'  =>  $this->faker->text(50),
            'procedure_name'  =>  $this->faker->text(50),
            'recording_time'  =>  $this->faker->datetime()
        ];
    }
}
