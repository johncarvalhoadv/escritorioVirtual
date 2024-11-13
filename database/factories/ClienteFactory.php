<?php

namespace Database\Factories;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Cliente::class;
    public function definition()
    {
        //faker->phoneNumber
        //faker->company
        //faker->text

        //`nome````email```````````````````````
        return [
            'nome' => $this->faker->name(),
            'sexo' => $this->faker->name(),
            'nacionalidade' => $this->faker->name(),
            'endereco' => $this->faker->name(),
            'bairro' => $this->faker->name(),
            'cidade' => $this->faker->company(),
            'estado' => $this->faker->name(),
            'cep' => $this->faker->name(),
            'rg' => $this->faker->name(),
            'cpf' => $this->faker->name(),
            'nascimento' => $this->faker->date(),
            'cnpj' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'celular' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'observacao' => 'Inserido Pelo Factory',
            'id_advogado' => 1,
        ];
    }
}
