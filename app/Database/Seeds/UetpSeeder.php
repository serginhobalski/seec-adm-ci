<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UetpSeeder extends Seeder
{
    public function run()
    {
        // Primeiramente semeamos os usuários
        $usuarioModel = new \App\Models\UsuarioModel();

        $grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();


        $usuarios = [
            [
                'nome' => 'ACARÁ',
                'local' => 'Acará',
                'login' => 'acara',
                'email' => '',
                'password' => '23itq103',
                'ativo' => true,
            ],
            [
                'nome' => 'ALENQUER',
                'local' => 'Alenquer',
                'login' => 'alenquer',
                'email' => 'ritadejesus78@gmail.com',
                'password' => '23itq104',
                'ativo' => true,
            ],
            [
                'nome' => 'ANANINDEUA I',
                'local' => 'Ananindeua',
                'login' => 'ananindeua1',
                'email' => 'pra.raytavares@gmail.com',
                'password' => '23itq107',
                'ativo' => true,
            ],
            [
                'nome' => 'ANANINDEUA II',
                'local' => 'Ananindeua',
                'login' => 'ananindeua2',
                'email' => 'valeriasantos040205@gmail.com',
                'password' => '23itq105',
                'ativo' => true,
            ],
            [
                'nome' => 'ANANINDEUA III',
                'local' => 'Ananindeua',
                'login' => 'ananindeua3',
                'email' => 'leonilmonteiroalmada@gmail.com',
                'password' => '23itq109',
                'ativo' => true,
            ],
            [
                'nome' => 'ANANINDEUA V',
                'local' => 'Ananindeua',
                'login' => 'ananindeua5',
                'email' => 'itqextensao5ana@gmail.com',
                'password' => '23itq106',
                'ativo' => true,
            ],
            [
                'nome' => 'ANTONIO BARRETO',
                'local' => 'Belém',
                'login' => 'abarreto',
                'email' => 'inez.vitorino@teacherculturapa.com.br',
                'password' => '23itq111',
                'ativo' => true,
            ],
            [
                'nome' => 'BARCARENA',
                'local' => 'Barcarena',
                'login' => 'barcarena',
                'email' => 'claudiapafor@yahoo.com.br ',
                'password' => '23itq112',
                'ativo' => true,
            ],
            [
                'nome' => 'BRAGANÇA',
                'local' => 'Bragança',
                'login' => 'braganca',
                'email' => 'pra.katiamendonca@gmail.com',
                'password' => '23itq113',
                'ativo' => true,
            ],
            [
                'nome' => 'BUJARU',
                'local' => 'Bujaru',
                'login' => 'bujaru',
                'email' => 'pra.ednaimbiriba@gmail.com',
                'password' => '23itq114',
                'ativo' => true,
            ],
            [
                'nome' => 'CAMETÁ',
                'local' => 'Cametá',
                'login' => 'cameta',
                'email' => 'anaclara04nov@hotmeil.com',
                'password' => '23itq115',
                'ativo' => true,
            ],
            [
                'nome' => 'CTMQ/PA/001',
                'local' => 'Belém',
                'login' => 'ctmq01',
                'email' => 'misaelandrade@gmail.com ',
                'password' => '23itq116',
                'ativo' => true,
            ],
            [
                'nome' => 'ICOARACI',
                'local' => 'Icoaraci',
                'login' => 'icoaraci',
                'email' => 'praluanavasconcelos@gmail.com ',
                'password' => '23itq117',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/001 – Pedreira ',
                'local' => 'Pedreira',
                'login' => 'itqpa01',
                'email' => 'itqpedreira@gmail.com ',
                'password' => '23itq118',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/002 - Marambaia',
                'local' => 'Marambaia',
                'login' => 'itqpa02',
                'email' => 'erivaldo.270558@gmail.com',
                'password' => '23itq119',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/003 – Cremação',
                'local' => 'Cremação',
                'login' => 'itqpa03',
                'email' => 'silviafrota@hotmail.com',
                'password' => '23itq120',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/004 – Ananindeua 7',
                'local' => 'Ananindeua',
                'login' => 'itqpa04',
                'email' => 'suzanaecqueiroz@gmail.com',
                'password' => '23itq121',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/005 – CTMQ ',
                'local' => 'Belém',
                'login' => 'itqpa05',
                'email' => 'misaelandrade@gmail.com',
                'password' => '23itq122',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/006 – Ananindeua 4',
                'local' => 'Ananindeua',
                'login' => 'itqpa06',
                'email' => 'itqananindeua4@gmail.com',
                'password' => '23itq123',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/007 – Marabá II',
                'local' => 'Marabá',
                'login' => 'itqpa07',
                'email' => 'itqindependencia337@hotmail.com',
                'password' => '23itq124',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/008 – Breves',
                'local' => 'Breves',
                'login' => 'itqpa08',
                'email' => 'marcosoliveira43970@gmail.com',
                'password' => '23itq125',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/009 – Parauapebas 1',
                'local' => 'Parauapebas',
                'login' => 'itqpa09',
                'email' => 'joelmaandrade03@gmail.com',
                'password' => '23itq126',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/010 – Igarapé Miri',
                'local' => 'Igarapé Miri',
                'login' => 'itqpa10',
                'email' => 'itqigmiri@gmail.com',
                'password' => '23itq127',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/011 - Itaituba',
                'local' => 'Itaituba',
                'login' => 'itqpa11',
                'email' => 'alcioneqd@gmail.com',
                'password' => '23itq128',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/012 - Guamá',
                'local' => 'Guamá',
                'login' => 'itqpa12',
                'email' => 'itq13abelem@gmail.com',
                'password' => '23itq129',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/013 – Tapanã',
                'local' => 'Tapanã',
                'login' => 'itqpa13',
                'email' => 'patricya_barbosa@yahoo.com.br',
                'password' => '23itq130',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/014 – Vigia ',
                'local' => 'Vigia',
                'login' => 'itqpa14',
                'email' => 'pastorairacildapalheta@gmail.com',
                'password' => '23itq131',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/015 - Castanhal',
                'local' => 'Castanhal',
                'login' => 'itqpa15',
                'email' => 'ana-claudia1000@hotmail.com ',
                'password' => '23itq132',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/016 – São Clemente',
                'local' => 'São Clemente',
                'login' => 'itqpa16',
                'email' => 'jobsonift@gmail.com',
                'password' => '23itq133',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/017 – Maguary ',
                'local' => 'Maguary',
                'login' => 'itqpa17',
                'email' => 'prwilsoncarlos@hotmail.com',
                'password' => '23itq134',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/018 – Barcarena 2',
                'local' => 'Barcarena',
                'login' => 'itqpa18',
                'email' => 'duzilaofernandes@gmail.com ',
                'password' => '23itq135',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/019 – Parauapebas 2',
                'local' => 'Parauapebas',
                'login' => 'itqpa19',
                'email' => 'esterbarbosasantos@hotmail.com',
                'password' => '23itq136',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/020 – Ponta de Pedras',
                'local' => 'Ponta de Pedras',
                'login' => 'itqpa20',
                'email' => 'a-ires2010@hotmail.com',
                'password' => '23itq137',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/021 – Tomé Açu',
                'local' => 'Tomé Açu',
                'login' => 'itqpa21',
                'email' => 'rmaurooliveira@gmail.com',
                'password' => '23itq138',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/022 - Soure',
                'local' => 'Soure',
                'login' => 'itqpa22',
                'email' => 'sandragaia137@gmail.com',
                'password' => '23itq139',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/023 – Capitão Poço',
                'local' => 'Capitão Poço',
                'login' => 'itqpa23',
                'email' => 'raymonteiro619@gmail.com ',
                'password' => '23itq140',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/024 - Altamira',
                'local' => 'Altamira',
                'login' => 'itqpa24',
                'email' => 'lumafrazao@hotmail.com',
                'password' => '23itq141',
                'ativo' => true,
            ],
            [
                'nome' => 'ITQ/PA/025 - Paragominas',
                'local' => 'Paragominas',
                'login' => 'itqpa25',
                'email' => 'marlene.santos35@hotmail.com',
                'password' => '23itq142',
                'ativo' => true,
            ],
            [
                'nome' => 'JURUNAS',
                'local' => 'Jurunas',
                'login' => 'jurunas',
                'email' => 'carmenhelenamota1@gmail.com',
                'password' => '23itq143',
                'ativo' => true,
            ],
            [
                'nome' => 'MARABÁ I',
                'local' => 'Marabá',
                'login' => 'maraba1',
                'email' => 'Itq.maraba@gmail.com ',
                'password' => '23itq145',
                'ativo' => true,
            ],
            [
                'nome' => 'MARITUBA I',
                'local' => 'Marituba',
                'login' => 'marituba1',
                'email' => 'pramarciacardoso2@gmail.com ',
                'password' => '23itq146',
                'ativo' => true,
            ],
            [
                'nome' => 'MQTI/PA/001 - Belém',
                'local' => 'Belém',
                'login' => 'mqtipa01',
                'email' => 'vaniapereiramx@gmail.com ',
                'password' => '23itq147',
                'ativo' => true,
            ],
            [
                'nome' => 'MQTI/PA/002 - Parauapebas',
                'local' => 'Parauapebas',
                'login' => 'mqtipa02',
                'email' => 'joelmaandrade03@gmsil.com',
                'password' => '23itq148',
                'ativo' => true,
            ],
            [
                'nome' => 'MQTI/PA/003 - Cametá',
                'local' => 'Cametá',
                'login' => 'mqtipa03',
                'email' => 'mjoseferreira46@yahoo.com.br',
                'password' => '23itq149',
                'ativo' => true,
            ],
            [
                'nome' => 'NOVO REPARTIMENTO',
                'local' => 'Novo Repartimento',
                'login' => 'novorepartimento',
                'email' => '',
                'password' => '23itq150',
                'ativo' => true,
            ],
            [
                'nome' => 'PANORAMA XXI',
                'local' => 'Panorama Xxi',
                'login' => 'panoramaxxi',
                'email' => 'elizetemedeiros4.0@gmail.com',
                'password' => '23itq151',
                'ativo' => true,
            ],
            [
                'nome' => 'REDENÇÃO',
                'local' => 'Redenção',
                'login' => 'redencao',
                'email' => 'dsilva885@gmail.com',
                'password' => '23itq153',
                'ativo' => true,
            ],
            [
                'nome' => 'SACRAMENTA',
                'local' => 'Sacramenta',
                'login' => 'sacramenta',
                'email' => 'geyza_leal@hotmail.com',
                'password' => '23itq154',
                'ativo' => true,
            ],
            [
                'nome' => 'SANTA IZABEL',
                'local' => 'Santa Izabel',
                'login' => 'sizabel',
                'email' => 'prajarlenebandeira@gmail.com',
                'password' => '23itq155',
                'ativo' => true,
            ],
            [
                'nome' => 'SANTARÉM',
                'local' => 'Santarém',
                'login' => 'santarem',
                'email' => 'fernandanathielyitb@gmail.com',
                'password' => '23itq156',
                'ativo' => true,
            ],
            [
                'nome' => 'SÃO MIGUEL DO GUAMÁ',
                'local' => 'São Miguel Do Guamá',
                'login' => 'smguama',
                'email' => 'edileiaribeiro015@gmail.com ',
                'password' => '23itq157',
                'ativo' => true,
            ],
            [
                'nome' => 'TUCURUÍ',
                'local' => 'Tucuruí',
                'login' => 'tucurui',
                'email' => 'luciamedeirosgoreti@gmail.com',
                'password' => '23itq158',
                'ativo' => true,
            ],
            [
                'nome' => 'Uetp Teste',
                'local' => 'Belém',
                'login' => 'uetp',
                'email' => 'teste@seecpa.com.br',
                'password' => 'uetp123456',
                'ativo' => true,
            ],
        ];



        foreach ($usuarios as $usuario) {

            $usuarioModel->skipValidation(true)->protect(false)->insert($usuario);

            // Segunda parte.... inserimos o usuário no grupo de UETP

            $grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();


            $grupoUsuario = [
                'grupo_id' => 2,
                'usuario_id' => $usuarioModel->getInsertID(),
            ];

            $grupoUsuarioModel->protect(false)->insert($grupoUsuario);
        }



        echo 'Usuarios semeados com sucesso, com o grupo UETP!';
    }
}
