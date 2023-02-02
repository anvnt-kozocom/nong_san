<?php

namespace Database\Factories\Backend;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Backend\UserModel;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{

  protected $model = UserModel::class;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      //
      'name' => 'Nguyễn An',
      'email' => 'anvo8222@gmail.com',
      'password' => hash::make('abc123'),
      'status' => 'active',
    ];
  }
}