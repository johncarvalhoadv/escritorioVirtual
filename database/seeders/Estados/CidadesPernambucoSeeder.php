<?php
namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesPernambucoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Abreu e Lima', 'estado_id' => 17],
            ['cidade' => 'Afogados da Ingazeira', 'estado_id' => 17],
            ['cidade' => 'Afrânio', 'estado_id' => 17],
            ['cidade' => 'Agrestina', 'estado_id' => 17],
            ['cidade' => 'Água Preta', 'estado_id' => 17],
            ['cidade' => 'Águas Belas', 'estado_id' => 17],
            ['cidade' => 'Alagoinha', 'estado_id' => 17],
            ['cidade' => 'Aliança', 'estado_id' => 17],
            ['cidade' => 'Altinho', 'estado_id' => 17],
            ['cidade' => 'Amaraji', 'estado_id' => 17],
            ['cidade' => 'Angelim', 'estado_id' => 17],
            ['cidade' => 'Araçoiaba', 'estado_id' => 17],
            ['cidade' => 'Araripina', 'estado_id' => 17],
            ['cidade' => 'Arcoverde', 'estado_id' => 17],
            ['cidade' => 'Barra de Guabiraba', 'estado_id' => 17],
            ['cidade' => 'Barreiros', 'estado_id' => 17],
            ['cidade' => 'Belém de Maria', 'estado_id' => 17],
            ['cidade' => 'Belém de São Francisco', 'estado_id' => 17],
            ['cidade' => 'Belo Jardim', 'estado_id' => 17],
            ['cidade' => 'Betânia', 'estado_id' => 17],
            ['cidade' => 'Bezerros', 'estado_id' => 17],
            ['cidade' => 'Bodocó', 'estado_id' => 17],
            ['cidade' => 'Bom Conselho', 'estado_id' => 17],
            ['cidade' => 'Bom Jardim', 'estado_id' => 17],
            ['cidade' => 'Bonito', 'estado_id' => 17],
            ['cidade' => 'Brejão', 'estado_id' => 17],
            ['cidade' => 'Brejinho', 'estado_id' => 17],
            ['cidade' => 'Brejo da Madre de Deus', 'estado_id' => 17],
            ['cidade' => 'Buenos Aires', 'estado_id' => 17],
            ['cidade' => 'Buíque', 'estado_id' => 17],
            ['cidade' => 'Cabo de Santo Agostinho', 'estado_id' => 17],
            ['cidade' => 'Cabrobó', 'estado_id' => 17],
            ['cidade' => 'Cachoeirinha', 'estado_id' => 17],
            ['cidade' => 'Caetés', 'estado_id' => 17],
            ['cidade' => 'Calçado', 'estado_id' => 17],
            ['cidade' => 'Calumbi', 'estado_id' => 17],
            ['cidade' => 'Camaragibe', 'estado_id' => 17],
            ['cidade' => 'Camocim de São Félix', 'estado_id' => 17],
            ['cidade' => 'Camutanga', 'estado_id' => 17],
            ['cidade' => 'Canhotinho', 'estado_id' => 17],
            ['cidade' => 'Capoeiras', 'estado_id' => 17],
            ['cidade' => 'Carnaíba', 'estado_id' => 17],
            ['cidade' => 'Carnaubeira da Penha', 'estado_id' => 17],
            ['cidade' => 'Carpina', 'estado_id' => 17],
            ['cidade' => 'Caruaru', 'estado_id' => 17],
            ['cidade' => 'Casinhas', 'estado_id' => 17],
            ['cidade' => 'Catende', 'estado_id' => 17],
            ['cidade' => 'Cedro', 'estado_id' => 17],
            ['cidade' => 'Chã de Alegria', 'estado_id' => 17],
            ['cidade' => 'Chã Grande', 'estado_id' => 17],
            ['cidade' => 'Condado', 'estado_id' => 17],
            ['cidade' => 'Correntes', 'estado_id' => 17],
            ['cidade' => 'Cortês', 'estado_id' => 17],
            ['cidade' => 'Cumaru', 'estado_id' => 17],
            ['cidade' => 'Cupira', 'estado_id' => 17],
            ['cidade' => 'Custódia', 'estado_id' => 17],
            ['cidade' => 'Dormentes', 'estado_id' => 17],
            ['cidade' => 'Escada', 'estado_id' => 17],
            ['cidade' => 'Exu', 'estado_id' => 17],
            ['cidade' => 'Feira Nova', 'estado_id' => 17],
            ['cidade' => 'Fernando de Noronha', 'estado_id' => 17],
            ['cidade' => 'Ferreiros', 'estado_id' => 17],
            ['cidade' => 'Flores', 'estado_id' => 17],
            ['cidade' => 'Floresta', 'estado_id' => 17],
            ['cidade' => 'Frei Miguelinho', 'estado_id' => 17],
            ['cidade' => 'Gameleira', 'estado_id' => 17],
            ['cidade' => 'Garanhuns', 'estado_id' => 17],
            ['cidade' => 'Glória do Goitá', 'estado_id' => 17],
            ['cidade' => 'Goiana', 'estado_id' => 17],
            ['cidade' => 'Granito', 'estado_id' => 17],
            ['cidade' => 'Gravatá', 'estado_id' => 17],
            ['cidade' => 'Iati', 'estado_id' => 17],
            ['cidade' => 'Ibimirim', 'estado_id' => 17],
            ['cidade' => 'Ibirajuba', 'estado_id' => 17],
            ['cidade' => 'Igarassu', 'estado_id' => 17],
            ['cidade' => 'Iguaraci', 'estado_id' => 17],
            ['cidade' => 'Ilha de Itamaracá', 'estado_id' => 17],
            ['cidade' => 'Inajá', 'estado_id' => 17],
            ['cidade' => 'Ingazeira', 'estado_id' => 17],
            ['cidade' => 'Ipojuca', 'estado_id' => 17],
            ['cidade' => 'Ipubi', 'estado_id' => 17],
            ['cidade' => 'Itacuruba', 'estado_id' => 17],
            ['cidade' => 'Itaíba', 'estado_id' => 17],
            ['cidade' => 'Itambé', 'estado_id' => 17],
            ['cidade' => 'Itapetim', 'estado_id' => 17],
            ['cidade' => 'Itapissuma', 'estado_id' => 17],
            ['cidade' => 'Itaquitinga', 'estado_id' => 17],
            ['cidade' => 'Jaboatão dos Guararapes', 'estado_id' => 17],
            ['cidade' => 'Jaqueira', 'estado_id' => 17],
            ['cidade' => 'Jataúba', 'estado_id' => 17],
            ['cidade' => 'Jatobá', 'estado_id' => 17],
            ['cidade' => 'João Alfredo', 'estado_id' => 17],
            ['cidade' => 'Joaquim Nabuco', 'estado_id' => 17],
            ['cidade' => 'Jucati', 'estado_id' => 17],
            ['cidade' => 'Jupi', 'estado_id' => 17],
            ['cidade' => 'Jurema', 'estado_id' => 17],
            ['cidade' => 'Lagoa do Carro', 'estado_id' => 17],
            ['cidade' => 'Lagoa do Itaenga', 'estado_id' => 17],
            ['cidade' => 'Lagoa do Ouro', 'estado_id' => 17],
            ['cidade' => 'Lagoa dos Gatos', 'estado_id' => 17],
            ['cidade' => 'Lagoa Grande', 'estado_id' => 17],
            ['cidade' => 'Lajedo', 'estado_id' => 17],
            ['cidade' => 'Limoeiro', 'estado_id' => 17],
            ['cidade' => 'Macaparana', 'estado_id' => 17],
            ['cidade' => 'Machados', 'estado_id' => 17],
            ['cidade' => 'Manari', 'estado_id' => 17],
            ['cidade' => 'Maraial', 'estado_id' => 17],
            ['cidade' => 'Mirandiba', 'estado_id' => 17],
            ['cidade' => 'Moreilândia', 'estado_id' => 17],
            ['cidade' => 'Moreno', 'estado_id' => 17],
            ['cidade' => 'Nazaré da Mata', 'estado_id' => 17],
            ['cidade' => 'Olinda', 'estado_id' => 17],
            ['cidade' => 'Orobó', 'estado_id' => 17],
            ['cidade' => 'Orocó', 'estado_id' => 17],
            ['cidade' => 'Ouricuri', 'estado_id' => 17],
            ['cidade' => 'Palmares', 'estado_id' => 17],
            ['cidade' => 'Palmeirina', 'estado_id' => 17],
            ['cidade' => 'Panelas', 'estado_id' => 17],
            ['cidade' => 'Paranatama', 'estado_id' => 17],
            ['cidade' => 'Parnamirim', 'estado_id' => 17],
            ['cidade' => 'Passira', 'estado_id' => 17],
            ['cidade' => 'Paudalho', 'estado_id' => 17],
            ['cidade' => 'Paulista', 'estado_id' => 17],
            ['cidade' => 'Pedra', 'estado_id' => 17],
            ['cidade' => 'Pesqueira', 'estado_id' => 17],
            ['cidade' => 'Petrolândia', 'estado_id' => 17],
            ['cidade' => 'Petrolina', 'estado_id' => 17],
            ['cidade' => 'Poção', 'estado_id' => 17],
            ['cidade' => 'Pombos', 'estado_id' => 17],
            ['cidade' => 'Primavera', 'estado_id' => 17],
            ['cidade' => 'Quipapá', 'estado_id' => 17],
            ['cidade' => 'Quixaba', 'estado_id' => 17],
            ['cidade' => 'Recife', 'estado_id' => 17],
            ['cidade' => 'Riacho das Almas', 'estado_id' => 17],
            ['cidade' => 'Ribeirão', 'estado_id' => 17],
            ['cidade' => 'Rio Formoso', 'estado_id' => 17],
            ['cidade' => 'Sairé', 'estado_id' => 17],
            ['cidade' => 'Salgadinho', 'estado_id' => 17],
            ['cidade' => 'Salgueiro', 'estado_id' => 17],
            ['cidade' => 'Saloá', 'estado_id' => 17],
            ['cidade' => 'Sanharó', 'estado_id' => 17],
            ['cidade' => 'Santa Cruz', 'estado_id' => 17],
            ['cidade' => 'Santa Cruz da Baixa Verde', 'estado_id' => 17],
            ['cidade' => 'Santa Cruz do Capibaribe', 'estado_id' => 17],
            ['cidade' => 'Santa Filomena', 'estado_id' => 17],
            ['cidade' => 'Santa Maria da Boa Vista', 'estado_id' => 17],
            ['cidade' => 'Santa Maria do Cambucá', 'estado_id' => 17],
            ['cidade' => 'Santa Terezinha', 'estado_id' => 17],
            ['cidade' => 'São Benedito do Sul', 'estado_id' => 17],
            ['cidade' => 'São Bento do Una', 'estado_id' => 17],
            ['cidade' => 'São Caitano', 'estado_id' => 17],
            ['cidade' => 'São João', 'estado_id' => 17],
            ['cidade' => 'São Joaquim do Monte', 'estado_id' => 17],
            ['cidade' => 'São José da Coroa Grande', 'estado_id' => 17],
            ['cidade' => 'São José do Belmonte', 'estado_id' => 17],
            ['cidade' => 'São José do Egito', 'estado_id' => 17],
            ['cidade' => 'São Lourenço da Mata', 'estado_id' => 17],
            ['cidade' => 'São Vicente Ferrer', 'estado_id' => 17],
            ['cidade' => 'Serra Talhada', 'estado_id' => 17],
            ['cidade' => 'Serrita', 'estado_id' => 17],
            ['cidade' => 'Sertânia', 'estado_id' => 17],
            ['cidade' => 'Sirinhaém', 'estado_id' => 17],
            ['cidade' => 'Solidão', 'estado_id' => 17],
            ['cidade' => 'Surubim', 'estado_id' => 17],
            ['cidade' => 'Tabira', 'estado_id' => 17],
            ['cidade' => 'Tacaimbó', 'estado_id' => 17],
            ['cidade' => 'Tacaratu', 'estado_id' => 17],
            ['cidade' => 'Tamandaré', 'estado_id' => 17],
            ['cidade' => 'Taquaritinga do Norte', 'estado_id' => 17],
            ['cidade' => 'Terezinha', 'estado_id' => 17],
            ['cidade' => 'Terra Nova', 'estado_id' => 17],
            ['cidade' => 'Timbaúba', 'estado_id' => 17],
            ['cidade' => 'Toritama', 'estado_id' => 17],
            ['cidade' => 'Tracunhaém', 'estado_id' => 17],
            ['cidade' => 'Trindade', 'estado_id' => 17],
            ['cidade' => 'Triunfo', 'estado_id' => 17],
            ['cidade' => 'Tupanatinga', 'estado_id' => 17],
            ['cidade' => 'Tuparetama', 'estado_id' => 17],
            ['cidade' => 'Venturosa', 'estado_id' => 17],
            ['cidade' => 'Verdejante', 'estado_id' => 17],
            ['cidade' => 'Vertente do Lério', 'estado_id' => 17],
            ['cidade' => 'Vertentes', 'estado_id' => 17],
            ['cidade' => 'Vicência', 'estado_id' => 17],
            ['cidade' => 'Vitória de Santo Antão', 'estado_id' => 17],
            ['cidade' => 'Xexéu', 'estado_id' => 17]
        ]);

        $this->command->info('Cidades do Pernambuco importadas com sucesso!');
    }
}