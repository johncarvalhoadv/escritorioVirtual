@extends('admin.layouts.contrato')
@section('content')
<div class="marca_agua"> </div>

<div class="tituloDoc"> CONTRATO DE HONORÁRIOS ADVOCATÍCIOS </div>

    <div id="contratante" style="">
    <strong class="strongtitulo">&#160;&#160;&#160;CONTRATANTE&#160;&#160;&#160;</strong>
    <div class="texto_contratante">
    <!-- NOME contratante -->
    <strong>@if ($cliente->nome!=null){{$cliente->nome}}@else não possui @endif</strong>, pessoa física,
    <!-- estado civil -->
    @if($cliente->estadocivil!=null){{$cliente->estadocivil}}@else <span>não possui</span>@endif,
    <!-- CPF -->
    portador(a) do CPF nº @if ($cliente->cpf != null){{$cliente->cpf}}@else<span>não possui</span>@endif,
    <!-- RG -->
    RG nº @if ($cliente->rg != null){{$cliente->rg}}@else<span>não possui</span>@endif,
    <!-- EMAIL -->
    endereço eletrônico: @if ($cliente->email != null){{$cliente->email}}@else<span>não possui</span>@endif,
    <!-- ENDEREÇO -->
    residente e domiciliado(a) na
    @if ($cliente->endereco != null){{$cliente->endereco}}@else<span>não possui</span>@endif,
    <!-- BAIRRO -->
    @if ($cliente->bairro != null){{$cliente->bairro}}@else<span>não possui</span>@endif,
    <!-- CIDADE -->
    @if ($cliente->cidade != null){{$cliente->cidade}}@else<span>não possui</span>@endif–
    <!-- ESTADO -->
    @if ($cliente->estado!=null){{$cliente->estado}}@else<span>não possui</span>@endif, CEP:
    <!-- CEP -->
    @if ($cliente->cep!=null){{$cliente->cep}}@else<span>não possui</span>@endif.
    </div>
    </div>

    </div>
    <div id="contratado">
    <strong  class="strongtitulo">&#160;&#160;&#160;CONTRATADO&#160;&#160;&#160;</strong>
        <div class="texto_contratado">JOHN CARVALHO DE OLIVEIRA, ADVOGADO, brasileiro, em união estável,
        portador da OAB/BA nº 70721, CPF nº 840.778.245-91 e RG nº 1349599654 SSP/BA e
        ROSE BATISTA DE SOUSA, brasileira, ADVOGADA, portadora da OAB-BA nº 73477,
        CPF nº 03203687500 e RG nº 1172669309 SSP/BA, ambos com endereço profissional
        indicado no rodapé deste. ENDEREÇO ELETRÔNICO: johncarvalho.adv@gmail.com.
        </div>
    </div>

</div>
<div class="logoLateralteste">
	<img src="{{ public_path().'/assets/img/docspdf/new/lateral.png'}}" />
</div>
<div class="clear"></div>
    <div id="cientificacaoContrato">
        <span>
        As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de Honorários Advocatícios, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.
        </span>
    </div>


<div id="clausulas">
<span class="tituloclausula">CLÁUSULA 1ª. DO OBJETO DO CONTRATO</span>
<p class="texto_clausulas">
1.1. O (A) CONTRATADO (A) prestará serviços
jurídicos, na área cível, a serem realizados em todas as instâncias,
referente ao ajuizamento de @if ($cliente->resumo_acao!=null){{$cliente->resumo_acao}}@else<span>Ações em foro Judicial e Extrajudicial</span>@endif.
</p>



<span class="tituloclausula"> CLÁUSULA 2ª. DO PRAZO </span>
<p class="texto_clausulas">
2.1. O prazo do serviço será determinado, ou seja, até o fim da lide ajuizada e incluem atuação do primeiro e segundo graus de jurisdição (fase de tribunal de justiça estadual e/ou federal). Novo ajuste contratual deverá ser firmado na eventual necessidade de acesso às Cortes Especiais de Justiça (STJ e/ou STF, ambos em Brasília-DF).
<br >2.2 A medida judicial referida na cláusula anterior deverá ser ajuizada no máximo de 90 (noventa) dias, contados da entrega efetiva de todos os documentos solicitados pelo Contratado, conforme recibo anexo.
</p>

<span class="tituloclausula"> CLÁUSULA 3ª. DAS ATIVIDADES </span>
<p class="texto_clausulas">
3.1. As atividades inclusas na prestação de serviço objeto deste instrumento são todas aquelas inerentes à profissão, quais sejam:
<br >a) Praticar quaisquer atos e medidas necessárias e inerentes à causa, em todas as repartições públicas da União, dos Estados ou dos Municípios, bem como órgãos a estes ligados direta ou indiretamente, seja por delegação, concessão ou outros meios, bem como de estabelecimentos particulares.
<br >b) Praticar todos os atos inerentes ao exercício da advocacia e aqueles constantes no Estatuto da Ordem dos Advogados do Brasil, bem como os especificados no Instrumento Procuratório.
<br >c) As informações/relatórios sobre andamento processual serão enviadas ao cliente preferencialmente através da via eletrônica (e-mail e/ou WhatsApp) e/ou telefone a cada 60 (sessenta) dias, ou em período menor, desde que haja movimentações processuais relevantes, a exemplo de decisões relevantes, agendamento de audiências e/ou perícias.
<br >d) Além do andamento processual, o (a) CONTRATADO (A) como serviço acessório e eventual, poderá remeter ao contratante, a seu critério, notícias jurídicas de seu interesse.
<br >e) Para que as obrigações ajustadas nas letras “c” e “d” acima sejam efetivamente cumpridas, o (a) CONTRATANTE, desde já, AUTORIZA o envio das informações através da via eletrônica (e-mail e/ou WhatsApp) e disponibiliza ao (a) CONTRATADO (A) seus dados, comprometendo-se ainda a informar ao (a) CONTRATADO (A) eventual mudança desses dados enquanto durar o processo.
<br >f) Ficará a (a) CONTRANTE obrigado a informar qualquer eventual mudança de telefone ou endereço
</p>

<span class="tituloclausula"> CLÁUSULA 4ª. DOS ATOS PROCESSUAIS </span>
<p class="texto_clausulas">
4.1. Havendo necessidade de contratação de outros profissionais, no decurso do processo,
o (a) CONTRATADO (A) elaborará substabelecimento, indicando escritório de seu conhecimento,
restando facultado ao (a) CONTRATANTE aceitá-lo ou não. Aceitando, ficará sob a responsabilidade,
única e exclusivamente do (a) CONTRATANTE o pagamento dos honorários advocatícios e as tratativas
das atividades a serem exercidas. Não aceitando, cabe ao CONTRATANTE indicar qual (is) profissional
(is) pretendem contratar, sendo de igual modo, de sua responsabilidade, o pagamento de honorários
advocatícios e as tratativas das atividades a serem exercidas.

</p>

<span class="tituloclausula"> CLÁUSULA 5ª. DAS DESPESAS </span>
<p class="texto_clausulas">
5.1. Todas as despesas decorrentes do processo, ligadas direta ou indiretamente a este, incluindo-se
fotocópias, emolumentos, custas processuais, honorários periciais, liquidação de cálculos, entre
outras que se fizerem necessárias, ficarão a cargo exclusivo do (a) CONTRATANTE.
<br >5.2. Todas as despesas oriundas desta prestação de serviços com deslocamento, viagens, alimentação,
combustível, hospedagem do advogado e/ou pessoal de apoio do CONTRATADO (A) deverão ser custeadas
prévia e exclusivamente pelo (a) CONTRATANTE.
</p>

<div class="logoLateralteste">
	<img src="{{ public_path().'/assets/img/docspdf/new/lateral.png'}}" />
</div>

<span class="tituloclausula"> CLÁUSULA 6ª. DA COBRANÇA </span>
<p class="texto_clausulas">

6.1. As partes convencionam que facultará ao (a) CONTRATADO (A), o direito de realizar a
cobrança dos honorários por todos os meios admitidos em direito, inclusive habilitando
diretamente no processo na fase de cumprimento de sentença, momento em que 30% do valor
arbitrado na condenação será liberado ao (a) CONTRATADO (A) por meio de Alvará e o remanescente
será emitido outro Alvará em favor do (a) CONTRATANTE.
</p>

<span class="tituloclausula"> CLÁUSULA 7ª. DOS HONORÁRIOS CONVENCIONAIS </span>
<p class="texto_clausulas">

7.1. Fica convencionado, que pelos serviços prestados, o (a) CONTRATANTE confessa dever e pagará ao (a) CONTRATADO
honorários advocatícios da seguinte forma:<br ><br >
<span class="bordaValor">
( * ) @if ($cliente->honorario_inicial!=null){{$cliente->honorario_inicial}}@else<span>R$ 1.000,00 (hum mil reais)</span>@endif
 <STRONG>O PAGAMENTO DEVE SER EFETUADO DA SEGUINTE FORMA: @if ($cliente->forma_pagamento!=null){{$cliente->forma_pagamento}}@else<span>À VISTA.  </span>@endif</STRONG>
<br >
<br >&#160;&#160;( + ) @if ($cliente->porcentagem_geral!=null){{$cliente->porcentagem_geral}}@else<span>20</span>@endif% SOBRE TODO O PROVEITO ECONÔMICO DA AÇÃO.
</span>

<br ><br >7.2. Caso haja falecimento ou incapacidade civil do (a) CONTRATANTE, serão devidos os honorários advocatícios ora ajustados, ficando o espólio responsável pela sua quitação.
<br >7.3. Havendo acordo entre o (a) CONTRATANTE e a PARTE CONTRÁRIA, com ou sem o conhecimento do (a) CONTRATADO (A), e independentemente da efetiva participação deste último na negociação e/ou preparação dos respectivos instrumentos, permanecerão devidos ao (a) CONTRATADO (A):
<br >a) se já ajuizada a ação, a integralidade dos honorários advocatícios previstos no item 7.1 acima;
<br >b) se ainda não ajuizada a ação, a integralidade dos honorários advocatícios previstos no item 7.1 acima;
<br >c) eventuais honorários de sucumbência.
<br >7.4. Na hipótese de desistência da ação, revogação dos poderes outorgados ao (a) CONTRATADO (A) e/ou rescisão contratual por dolo ou culpa do (a) CONTRATANTE, permanecerão devidos os honorários advocatícios previstos no item 7.1.
<br >7.5. O (A) CONTRATANTE autoriza o (a) CONTRATADO (A) a enviar-lhe alertas/lembretes de vencimento de prestação para o seu celular e/ou e-mail acima informados.
<br >7.6. Será devido o pagamento de 30% (trinta por cento) sobre qualquer proveito econômico que a ação vier a ter
<br >7.7. As partes estabelecem que o não pagamento da (s) prestação (ões) no (s) vencimento (s) ajustado (s) acarretará a incidência de multa de 2% (dois por cento) sobre o valor da prestação, juros de 1% (um por cento) ao mês e correção monetária pelo IGP-M, sendo certo que, na impossibilidade de ser utilizado tal índice, será utilizado aquele que melhor recompor as perdas inflacionárias, desde a data do vencimento até a data da efetiva quitação.

</p>

<br >
<span class="tituloclausula"> CLÁUSULA 8ª. DOS HONORÁRIOS SUCUMBENCIAIS </span>
<p class="texto_clausulas">

8.1. Os honorários de sucumbência pertencem ao (a) CONTRATADO (A).
<br >8.2. Na hipótese de desistência da ação, revogação dos poderes outorgados ao (a) CONTRATADO (A) e/ou rescisão contratual por dolo ou culpa do (a) CONTRATANTE, permanecerão devidos os honorários sucumbenciais, na proporção do trabalho realizado.
<br >8.3. O Estatuto da OAB dispõe que “se o advogado fizer juntar aos autos o seu contrato de honorários antes de expedir-se o mandado de levantamento ou precatório, o juiz deve determinar que lhe sejam pagos diretamente, por dedução de quantia a ser recebida pelo constituinte, salvo se este provar que já as pagou”.

</p>

<span class="tituloclausula"> CLÁUSULA 9ª. DA RESCISÃO </span>
<p class="texto_clausulas">

9.1. Agindo o (a) CONTRATANTE de forma a prejudicar a prestação de serviços jurídicos ora contratada, dolosa ou culposamente em face do (a) CONTRATADO (A), restará facultado a este último, rescindir o contrato, substabelecendo sem reserva de iguais os poderes a ele outorgados e se exonerando de todas obrigações, sem prejuízo do recebimento dos honorários advocatícios ajustados na Cláusula 7ª.
<br >9.2. Em caso de desistência da ação ou processo administrativo pelo (a) CONTRATANTE, independente do ajuizamento ou início das providências a serem adotadas, será cobrado o valor de UM SALÁRIO MÍNIMO VIGENTE.

</p>

<span class="tituloclausula"> CLÁUSULA 10ª. DO FORO </span>
<p class="texto_clausulas">

10.1. Para dirimir quaisquer controvérsias oriundas deste CONTRATO, as partes elegem o foro da comarca de Vitória da Conquista/BA.
Por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de igual teor.
</p>

<span class="tituloclausula"> CLÁUSULA 11ª. DA CHAVE PIX E CONTA BANCÁRIA </span>
<p class="texto_clausulas">

11.1. Os CONTRATADOS possuem as seguintes chaves bancárias:
<table>
<tbody>
<tr>
<td>
<div class="tabelaPix">John Carvalho de Oliveira</div>
</td>
<td>
<div class="tabelaPix">Rose Batista de Souza</div>
</td>
</tr>
<tr>
<td>
<div class="tabelaPix">
<div>Chave PIX Email NUBANK:</div>
<div>johncarvalho.adv@gmail.com</div>
</div>
</td>
<td>
<div class="tabelaPix">
<div>Chave PIX Email Caixa Econômica Federal:</div>
<div>roseb.adv@gmail.com</div>
</div>
</td>
</tr>
</tbody>
</table>
<p>




</p>

</p>

</div>

<div class="logoLateralteste">
	<img src="{{ public_path().'/assets/img/docspdf/new/lateral.png'}}" />
</div>
<div class="clear"></div>
    <div id="localData">
    <!--CIDADE -->
    @if ($cliente->cidade!=null){{$cliente->cidade}}@else<span>não possui</span>@endif -
    <!-- ESTADO -->
    @if ($cliente->estado!=null){{$cliente->estado}}@else<span>não possui</span>@endif,
    <!-- DATA -->
    {{ \Carbon\Carbon::now()->translatedFormat('l j F Y') }}.
    </div>

    <div id="assinaturascontratocliente">
        <hr style="color:   #bdc3c7; width: 65% ">
        <!-- ASSINATURA DO CLIENTE -->
        @if ($cliente->nome!= null){{$cliente->nome}} @else<span>não possui</span>@endif <br>
        CPF nº @if ($cliente->cpf!= null){{$cliente->cpf}} @else<span>não possui</span>@endif
    </div>

    <div id="assinaturascontrato">
        <div class="imgRubricajohn"> <img  src="{{ public_path().'/assets/img/docspdf/rubrica-john.png'}}" /> </div>

        <hr style="color:   #bdc3c7; width: 65%">
        <!-- ASSINATURA DO JOHN -->
        JOHN CARVALHO DE OLIVEIRA <BR>
        OAB/BA 70.721

    </div>

    <div id="assinaturascontrato">
     <div class="imgRubricarose"><img src="{{ public_path().'/assets/img/docspdf/rubrica-rose.png'}}" /> </div>
    <hr style="color:   #bdc3c7; width: 65% ">
        <!-- ASSINATURA DO ROSE -->
        ROSE BATISTA DE SOUZA <BR>
        OAB/BA 73.477

    </div>


    @endsection
    <!-- {{ var_dump($cliente) }}
                    <th scope="row">{{  $cliente->id }}</th>
                    <td> {{ $cliente->nome }}</td>
                    <td>{{  $cliente->endereco }}</td>
                    <td> {{ $cliente->telefone }}</td>
                    <td> {{ $cliente->profissao}} </td> -->





