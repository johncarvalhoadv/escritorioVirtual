<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Advogado;
use App\Models\Estado;
use App\Models\Cidade;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\TemplateProcessor;

class ClienteController extends Controller
{

    private $estadoModel;
    private $cidadeModel;

    public function __construct(Estado $estado, Cidade $cidade)
    {
        $this->estadoModel = $estado;
        $this->cidadeModel = $cidade;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */


    public function index(Request $request)
    {
        //Contagem de Clientes
        $countClientes = DB::table('clientes')->count();

        //Contagem de Clientes por Estado Civil
        $countClientesEcivil = DB::table('clientes')
            ->select('estadocivil', DB::raw('count(*) as total'))
            ->groupBy('estadocivil')
            ->pluck('total','estadocivil');

        //Contagem de Clientes por Sexo
        $countClienteSexo = DB::table('clientes')
            ->select('sexo', DB::raw('count(*) as totalsexo'))
            ->groupBy('sexo')
            ->pluck('totalsexo','sexo');

        //Contagem de Clientes por Indicação
        $countClienteIndicacao = DB::table('clientes')
            ->select('forma_captacao', DB::raw('count(*) as totalcaptacao'))
            ->groupBy('forma_captacao')
            ->pluck('totalcaptacao','forma_captacao');

        //dd($countClientesEcivil);

        $users = User::all();
        //Index Listagem de clientes e Paginate
        $data = Cliente::orderBy('id', 'desc')
            ->with('estados', 'cidades','advogados')
            ->paginate(7);



        $ddd = DB::table('clientes')
            ->join('estados', 'clientes.estado', '=', 'estados.id')
            //->count()
            ->get();

        //Chart Clientes por estado
        $clientesEstado = DB::table('clientes')
            ->selectRaw('estados.sigla as estado, count(*) as ttotal')
            ->join('estados', 'clientes.estado', '=', 'estados.id')
            ->groupBy('clientes.estado')
            ->get();



        //Chart Clientes por Cidade
        $clientesCidade = DB::table('clientes')
            ->selectRaw('cidades.cidade as cidade, count(*) as totalcidades')
            ->selectRaw('estados.sigla as siglaEstado')
            ->join('cidades', 'clientes.cidade', '=', 'cidades.id')
            ->join('estados', 'cidades.estado_id', '=', 'estados.id')
            ->groupBy('clientes.cidade')
            ->limit(8)
            ->orderByRaw('totalcidades desc')
            ->get();

        // dd($clientesCidade);

        //     $idade = Cliente::select('nome')
        //    ->select('nascimento', DB::raw('TIMESTAMPDIFF(YEAR, nascimento, NOW()) AS idade'))
        //    ->get();





        /* ANIVERSARIANTES POR MÊS E DIA */
        $hoje = \Carbon\Carbon::now()->locale('pt_BR');
        $aniversariantes = Cliente::whereMonth('nascimento', $hoje->month)
            ->whereDay('nascimento', $hoje->day)
            ->orderByRaw('day(nascimento) asc')->get();



        return view('admin.clientes.index',compact('clientesCidade',
            'countClienteIndicacao','clientesEstado','data','hoje','users',
            'aniversariantes', 'countClientesEcivil','countClientes',
            'countClienteSexo'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'profissao' => 'required',
            'estadocivil' => 'required',
            'cnpj' => 'nullable',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'nacionalidade' => 'required',
            'observacao' => 'nullable',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success','Cliente Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param Cliente $cliente
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Cliente $cliente)
    {
        return view('admin.clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cliente $cliente
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Cliente $cliente)
    {
        //CidadeXEstados
        $estados = $this->estadoModel->pluck('estado', 'id');
        $cidades = $this->cidadeModel->pluck('cidade', 'id');
        $dataNascimento = Carbon::parse($cliente->nascimento)->format('d-m-Y');


        //dd($dataNascimento);
        return view('admin.clientes.edit',compact('cliente', 'cidades', 'estados','dataNascimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Cliente $cliente
     * @return RedirectResponse
     */
    public function update(Request $request, Cliente $cliente)
    {
        {
            $request->validate([
                'nome' => 'nullable',
                'sexo' => 'nullable',
                'profissao' => 'nullable',
                'estadocivil' => 'nullable',
                'cnpj' => 'nullable',
                'endereco' => 'nullable',
                'bairro' => 'nullable',
                'cidade' => 'nullable',
                'estado' => 'nullable',
                'cep' => 'nullable',
                'telefone' => 'nullable',
                'celular' => 'nullable',
                'rg' => 'nullable',
                'cpf' => 'nullable',
                'dpvat' => 'nullable',
                'contabancaria' => 'nullable',
                'porcentagem_dpvat' => 'nullable',
                'nascimento' => 'nullable',
                'email' => 'nullable',
                'nacionalidade' => 'nullable',
                'resumo_acao' => 'nullable',
                'honorario_inicial' => 'nullable',
                'forma_pagamento' => 'nullable',
                'forma_captacao' => 'nullable',
                'porcentagem_geral' => 'nullable',
                'observacao' => 'nullable',
            ]);
            //$request->all('nascimento') = Carbon::parse(request()->nascimento)->format('Y-m-d');


            $requestData = $request->all();
            $requestData['nascimento'] = Carbon::parse(request()->nascimento)->format('Y-m-d');


            $cliente->update($requestData);

            return redirect()->route('clientes.index')
                ->with('success','Cliente Alterado com Sucesso!');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cliente $cliente
     * @return RedirectResponse
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente Apagado com Sucesso!');
    }



//FormWizard
    public function createStepOne(Request $request)
    {
        $cliente = $request->session()->get('cliente');

        $advogados = Advogado::pluck('nome', 'id');
        //CidadeXEstados
        $estados = $this->estadoModel->pluck('estado', 'id');

        return view('admin.clientes.create-step-one',compact('cliente','advogados', 'estados'));
    }

    public function getCidades($idEstado): \Illuminate\Http\JsonResponse
    {
        $estado = $this->estadoModel->find($idEstado);
        $cidades = $estado->cidades()->getQuery()->get(['id', 'cidade']);
        return Response::json($cidades);
    }


    public function postCreateStepOne(Request $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'nome' => 'required',
            'sexo' => 'required',
            'profissao' => 'required',
            'estadocivil' => 'required',
            'cnpj' => 'nullable',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'nascimento' => 'required',
            'email' => 'required',
            'nacionalidade' => 'required',
            'id_advogado' => 'required',

        ]);


        if(empty($request->session()->get('cliente'))){
            $cliente = new Cliente();
            $cliente->fill($validatedData);
            $request->session()->put('cliente', $cliente);
        }else{
            $cliente = $request->session()->get('cliente');
            $cliente->fill($validatedData);
            $request->session()->put('cliente', $cliente);
        }

        return redirect()->route('clientes.create.step.two');
    }


    public function createStepTwo(Request $request)
    {
        $cliente = $request->session()->get('cliente');

        return view('admin.clientes.create-step-two',compact('cliente'));
    }


    public function postCreateStepTwo(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'cnpj' => 'nullable',
            'observacao' => 'nullable',
            'resumo_acao' => 'nullable',
            'honorario_inicial' => 'nullable',
            'forma_pagamento' => 'nullable',
            'porcentagem_geral' => 'nullable',
            'forma_captacao' => 'nullable',
        ]);
        $cliente = $request->session()->get('cliente');
        $cliente->fill($validatedData);
        $request->session()->put('cliente', $cliente);
        return redirect()->route('clientes.create.step.three');
    }

    public function createStepThree(Request $request)
    {
        $cliente = $request->session()->get('cliente');
        return view('admin.clientes.create-step-three',compact('cliente'));
    }

    public function postCreateStepThree(Request $request): RedirectResponse
    {
        // dd($request->session()->get('cliente')->nascimento);
        //Aqui converto a data vinda do datepicker para o formato Mysql
        $request->session()->get('cliente')->nascimento = Carbon::parse($request->session()->get('cliente')->nascimento)->format('Y-m-d');
        $cliente = $request->session()->get('cliente');
        $cliente->save();

        $request->session()->forget('cliente');

        return redirect()->route('clientes.index')
            ->with('success','Cliente Cadastrado com Sucesso!');

    }

    public function gerarProcuracao($id)
    {  set_time_limit(30000);
        $cliente = Cliente::findOrFail($id);
        //  return view('clientes.procuracao',compact('cliente'));
        return \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.clientes.new_procuracao', compact('cliente'))
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            ->download('PROCURACAO - '.$cliente->nome.'.pdf');
    }

    public function gerarHipossuficiencia($id)
    {  set_time_limit(30000);
        $cliente = Cliente::findOrFail($id);
        //  return view('clientes.procuracao',compact('cliente'));
        return \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.clientes.hipossuficiencia', compact('cliente'))
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            ->download('Hipossuficiencia - '.$cliente->nome.'.pdf');
    }
    public function gerarContratoGeral($id)
    {  set_time_limit(30000);
        $cliente = Cliente::findOrFail($id);
        return \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.clientes.contrato-geral', compact('cliente'))
            // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
            // download OU ->stream('Contrato - '.$cliente->nome.'.pdf');
            ->download('Contrato - '.$cliente->nome.'.pdf');
    }


    public function gerarPeticao($id)
    {
        $cliente = Cliente::findOrFail($id);
        $file_dir = 'template_word/template.docx';
        $tags = array();
        if (file_exists($file_dir)) {
            $templateProcessor = new TemplateProcessor($file_dir);

            //ENDEREÇAMENTO
            $templateProcessor->setValue('enderecamento', 'AO JUÍZO FEDERAL DA VARA CÍVEL DO JUIZADO ESPECIAL FEDERAL DA SUBSEÇÃO JUDICIÁRIA DE ');
            $templateProcessor->setValue('comarca', 'VITÓRIA DA CONQUISTA BA');

            //QUALIFICAÇÃO DO AUTOR OU REQUERENTE
            $templateProcessor->setValue('nome', $cliente->nome);
            $templateProcessor->setValue('nacionalidade', $cliente->nacionalidade);
            $templateProcessor->setValue('estadocivil', $cliente->estadocivil);
            $templateProcessor->setValue('profissao', $cliente->profissao);
            $templateProcessor->setValue('cpf', $cliente->cpf);
            $templateProcessor->setValue('rg', $cliente->rg);
            $templateProcessor->setValue('email', $cliente->email);
            $templateProcessor->setValue('endereco', $cliente->endereco);
            $templateProcessor->setValue('bairro', $cliente->bairro);
            $templateProcessor->setValue('cidade', $cliente->cidades->cidade);
            $templateProcessor->setValue('estado', $cliente->estados->estado);
            $templateProcessor->setValue('cep', $cliente->cep);
            //NOME DA AÇÃO
            $templateProcessor->setValue('NOME_ACAO', mb_strtoupper('AÇÃO DE obrigação de Fazer c/c Pedido Liminar', "UTF-8"));

            //QUALIFICAÇÃO DO REQUERIDO OU RÉU

            // DOS FATOS

            //DO DIREITO

            // DOS PEDIDOS

            //VALOR DA CAUSA


            $nome_novo_arquivo = 'PETICAO_'.$cliente->nome.'_';
            $save_file_name = $nome_novo_arquivo.date('YmdHis').'.docx';
            $templateProcessor->saveAs($save_file_name);

            return response()->download($save_file_name)->deleteFileAfterSend(true);
        }

    }






}
