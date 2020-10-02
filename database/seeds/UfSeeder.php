<?php

use Illuminate\Database\Seeder;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $register = [
            ['nome'=>'Barcelos','uf'=>'AM'],
            ['nome'=>'São Gabriel da Cachoeira','uf'=>'AM'],
            ['nome'=>'Tapauá','uf'=>'AM'],
            ['nome'=>'Atalaia do Norte','uf'=>'AM'],
            ['nome'=>'Jutaí','uf'=>'AM'],
            ['nome'=>'Lábrea','uf'=>'AM'],
            ['nome'=>'Santa Isabel do Rio Negro','uf'=>'AM'],
            ['nome'=>'Coari','uf'=>'AM'],
            ['nome'=>'Japurá','uf'=>'AM'],
            ['nome'=>'Apuí','uf'=>'AM'],
            ['nome'=>'Manicoré','uf'=>'AM'],
            ['nome'=>'Borba','uf'=>'AM'],
            ['nome'=>'Pauini','uf'=>'AM'],
            ['nome'=>'Novo Aripuanã','uf'=>'AM'],
            ['nome'=>'Maués','uf'=>'AM'],
            ['nome'=>'Novo Airão','uf'=>'AM'],
            ['nome'=>'Humaitá','uf'=>'AM'],
            ['nome'=>'Canutama','uf'=>'AM'],
            ['nome'=>'Urucará','uf'=>'AM'],
            ['nome'=>'Carauari','uf'=>'AM'],
            ['nome'=>'Presidente Figueiredo','uf'=>'AM'],
            ['nome'=>'Itamarati','uf'=>'AM'],
            ['nome'=>'Tefé','uf'=>'AM'],
            ['nome'=>'BocadoAcre','uf'=>'AM'],
            ['nome'=>'São Paulo de Olivença','uf'=>'AM'],
            ['nome'=>'Juruá','uf'=>'AM'],
            ['nome'=>'Codajás','uf'=>'AM'],
            ['nome'=>'Beruri','uf'=>'AM'],
            ['nome'=>'Maraã','uf'=>'AM'],
            ['nome'=>'Eirunepé','uf'=>'AM'],
            ['nome'=>'Nhamundá','uf'=>'AM'],
            ['nome'=>'Ipixuna','uf'=>'AM'],
            ['nome'=>'Envira','uf'=>'AM'],
            ['nome'=>'Santo Antônio do Içá','uf'=>'AM'],
            ['nome'=>'FonteBoa','uf'=>'AM'],
            ['nome'=>'Manaus','uf'=>'AM'],
            ['nome'=>'São Sebastião do Uatumã','uf'=>'AM'],
            ['nome'=>'Uarini','uf'=>'AM'],
            ['nome'=>'Caapiranga','uf'=>'AM'],
            ['nome'=>'Guajará','uf'=>'AM'],
            ['nome'=>'Itacoatiara','uf'=>'AM'],
            ['nome'=>'Benjamin Constant','uf'=>'AM'],
            ['nome'=>'Autazes','uf'=>'AM'],
            ['nome'=>'Manacapuru','uf'=>'AM'],
            ['nome'=>'Tonantins','uf'=>'AM'],
            ['nome'=>'Careiro','uf'=>'AM'],
            ['nome'=>'Parintins','uf'=>'AM'],
            ['nome'=>'Alvarães','uf'=>'AM'],
            ['nome'=>'Rio Preto da Eva','uf'=>'AM'],
            ['nome'=>'Anori','uf'=>'AM'],
            ['nome'=>'Barreirinha','uf'=>'AM'],
            ['nome'=>'Nova Olinda do Norte','uf'=>'AM'],
            ['nome'=>'Amaturá','uf'=>'AM'],
            ['nome'=>'Itapiranga','uf'=>'AM'],
            ['nome'=>'Manaquiri','uf'=>'AM'],
            ['nome'=>'Silves','uf'=>'AM'],
            ['nome'=>'Tabatinga','uf'=>'AM'],
            ['nome'=>'Urucurituba','uf'=>'AM'],
            ['nome'=>'Careiro da Várzea','uf'=>'AM'],
            ['nome'=>'Boa Vista do Ramos','uf'=>'AM'],
            ['nome'=>'Anamã','uf'=>'AM'],
            ['nome'=>'Iranduba','uf'=>'AM'],
        ];
        
        DB::table('ufs')->insert($register);
    }
}
