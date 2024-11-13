<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdvogadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'nome' => $this->faker->name(), 
        'profissao' => $this->faker->name(),
        'estadocivil' => $this->faker->name(),
        'endereco' => $this->faker->name(), 
        'bairro' => $this->faker->name(), 
        'cidade' => $this->faker->name(), 
        'estado' => $this->faker->name(), 
        'cep' => $this->faker->name(), 
        'telefone' => $this->faker->phoneNumber(),
        'celular' => $this->faker->phoneNumber(),
        'rg' => $this->faker->name(), 
        'cpf' => $this->faker->name(), 
        'email' => $this->faker->unique()->safeEmail(), 
        'nacionalidade' => $this->faker->name(), 
        'cnpj' => $this->faker->name(), 
        'oab' => $this->faker->name(),
        'observacao' => 'Inserido Pelo Factory', 
        ];
    }
}
