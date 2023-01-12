<?php if (!defined('BASEPATH')) exit('Sem permissao de acesso direto ao Script.');

class Transacao extends API_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function enviar_post()
    {

        $parametros = array();

        $this->post('Codigo_Registro') !== NULL ? $parametros['Codigo_Registro'] = $this->post('Codigo_Registro') : NULL;
        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['Codigo_Estabelecimento'] = $this->post('Codigo_Estabelecimento') : NULL;
        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['CNPJ'] = _formatarCnpj(mb_substr($this->post('Codigo_Estabelecimento'), -14)) : NULL;
        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['CPF'] = _formatarCpf(mb_substr($this->post('Codigo_Estabelecimento'), -11)) : NULL;
        $this->post('NSU_Transacao') !== NULL ? $parametros['NSU_Transacao'] = $this->post('NSU_Transacao') : NULL;
        $this->post('NSU_Transacao_Original') !== NULL ? $parametros['NSU_Transacao_Original'] = $this->post('NSU_Transacao_Original') : NULL;
        $this->post('Data_Transacao') !== NULL ? $parametros['Data_Transacao'] = $this->post('Data_Transacao') : NULL;
        $this->post('Data_Transacao_Original') !== NULL ? $parametros['Data_Transacao_Original'] = $this->post('Data_Transacao_Original') : NULL;
        $this->post('Tipo_Lancamento') !== NULL ? $parametros['Tipo_Lancamento'] = $this->post('Tipo_Lancamento') : NULL;
        $this->post('Data_Lancamento') !== NULL ? $parametros['Data_Lancamento'] = $this->post('Data_Lancamento') : NULL;
        $this->post('Tipo_Produto') !== NULL ? $parametros['Tipo_Produto'] = $this->post('Tipo_Produto') : NULL;
        $this->post('Meio_Captura') !== NULL ? $parametros['Meio_Captura'] = $this->post('Meio_Captura') : NULL;
        $this->post('Valor_Bruto') !== NULL ? $parametros['Valor_Bruto'] = $this->post('Valor_Bruto') : NULL;
        $this->post('Valor_Desconto') !== NULL ? $parametros['Valor_Desconto'] = $this->post('Valor_Desconto') : NULL;
        $this->post('Valor_Liquido') !== NULL ? $parametros['Valor_Liquido'] = $this->post('Valor_Liquido') : NULL;
        $this->post('N_Cartao') !== NULL ? $parametros['N_Cartao'] = $this->post('N_Cartao') : NULL;
        $this->post('N_Cartao_EDI') !== NULL ? $parametros['N_Cartao'] = $this->post('N_Cartao') : NULL;
        $this->post('N_Parcela') !== NULL ? $parametros['N_Parcela'] = $this->post('N_Parcela') : NULL;
        $this->post('T_Parcela') !== NULL ? $parametros['T_Parcela'] = $this->post('T_Parcela') : NULL;
        $this->post('NSU_Parcela') !== NULL ? $parametros['NSU_Parcela'] = $this->post('NSU_Parcela') : NULL;
        $this->post('Valor_Bruto_Parcela') !== NULL ? $parametros['Valor_Bruto_Parcela'] = $this->post('Valor_Bruto_Parcela') : NULL;
        $this->post('Valor_Desconto_Parcela') !== NULL ? $parametros['Valor_Desconto_Parcela'] = $this->post('Valor_Desconto_Parcela') : NULL;
        $this->post('Valor_Liquido_Parcela') !== NULL ? $parametros['Valor_Liquido_Parcela'] = $this->post('Valor_Liquido_Parcela') : NULL;
        $this->post('N_Banco') !== NULL ? $parametros['N_Banco'] = $this->post('N_Banco') : NULL;
        $this->post('Agencia') !== NULL ? $parametros['Agencia'] = $this->post('Agencia') : NULL;
        $this->post('Conta') !== NULL ? $parametros['Conta'] = $this->post('Conta') : NULL;
        $this->post('Codigo_Autorizacao') !== NULL ? $parametros['Codigo_Autorizacao'] = $this->post('Codigo_Autorizacao') : NULL;
        $this->post('Codigo_Bandeira') !== NULL ? $parametros['Codigo_Bandeira'] = $this->post('Codigo_Bandeira') : NULL;
        $this->post('Codigo_Produto') !== NULL ? $parametros['Codigo_Produto'] = $this->post('Codigo_Produto') : NULL;
        $this->post('Valor_Taxa_Interchange') !== NULL ? $parametros['Valor_Taxa_Interchange'] = $this->post('Valor_Taxa_Interchange') : NULL;
        $this->post('Valor_Taxa_Administracao') !== NULL ? $parametros['Valor_Taxa_Administracao'] = $this->post('Valor_Taxa_Administracao') : NULL;
        $this->post('Valor_Taxa_Interchange_Parcela') !== NULL ? $parametros['Valor_Taxa_Interchange_Parcela'] = $this->post('Valor_Taxa_Interchange_Parcela') : NULL;
        $this->post('Valor_Taxa_Administracao_Parcela') !== NULL ? $parametros['Valor_Taxa_Administracao_Parcela'] = $this->post('Valor_Taxa_Administracao_Parcela') : NULL;
        $this->post('Valor_Redutor_Multifronteira') !== NULL ? $parametros['Valor_Redutor_Multifronteira'] = $this->post('Valor_Redutor_Multifronteira') : NULL;
        $this->post('Valor_Taxa_Antecipacao') !== NULL ? $parametros['Valor_Taxa_Antecipacao'] = $this->post('Valor_Taxa_Antecipacao') : NULL;
        $this->post('Valor_Liquido_Antecipado') !== NULL ? $parametros['Valor_Liquido_Antecipado'] = $this->post('Valor_Liquido_Antecipado') : NULL;
        $this->post('Tipo_Transacao') !== NULL ? $parametros['Tipo_Transacao'] = $this->post('Tipo_Transacao') : NULL;
        $this->post('Codigo_Pedido') !== NULL ? $parametros['Codigo_Pedido'] = $this->post('Codigo_Pedido') : NULL;
        $this->post('Sigla_Pais') !== NULL ? $parametros['Sigla_Pais'] = $this->post('Sigla_Pais') : NULL;
        $this->post('Numero_Terminal') !== NULL ? $parametros['Numero_Terminal'] = $this->post('Numero_Terminal') : NULL;
        $this->post('Tipo_Ajuste') !== NULL ? $parametros['Tipo_Ajuste'] = $this->post('Tipo_Ajuste') : NULL;
        $this->post('Codigo_Ajuste') !== NULL ? $parametros['Codigo_Ajuste'] = $this->post('Codigo_Ajuste') : NULL;
        $this->post('Descricao_Ajuste') !== NULL ? $parametros['Descricao_Ajuste'] = $this->post('Descricao_Ajuste') : NULL;
        // $this->post('Ctrl_Empresa') !== NULL ? $parametros['Ctrl_Empresa'] = $this->post('Ctrl_Empresa') : NULL;        
        $this->post('Id_Envelope') !== NULL ? $parametros['Id_Envelope'] = $this->post('Id_Envelope') : NULL;
        $this->post('Trace') !== NULL ? $parametros['Trace'] = $this->post('Trace') : NULL;
        $this->post('Conta_Pagamento') !== NULL ? $parametros['Conta_Pagamento'] = $this->post('Conta_Pagamento') : NULL;
        $this->post('Codigo_Mensagem') !== NULL ? $parametros['Codigo_Mensagem'] = $this->post('Codigo_Mensagem') : NULL;
        $this->post('Codigo_Mensagem_Original') !== NULL ? $parametros['Codigo_Mensagem_Original'] = $this->post('Codigo_Mensagem_Original') : NULL;
        $this->post('Codigo_Resposta') !== NULL ? $parametros['Codigo_Resposta'] = $this->post('Codigo_Resposta') : NULL;
        $this->post('Codigo_Operacao') !== NULL ? $parametros['Codigo_Operacao'] = $this->post('Codigo_Operacao') : NULL;

        $parametros['Acao'] = 'API';
        $retorno = $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC', $parametros);

        /*$parametros['Acao'] = 'I';
        $retorno = $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC',$parametros);*/

        if (isset($retorno[0]->Ctrl_Transacao) && $retorno[0]->Ctrl_Transacao > 0) {
            $this->mensagem_sucesso('Transação efetuada com sucesso.');
        } else {
            $this->mensagem_erro('Não foi possível efetuar a transação.');
        }
    }

    public function enviar2_post()
    {

        $parametros = array();

        $this->post('Codigo_Registro') !== NULL ? $parametros['Codigo_Registro'] = $this->post('Codigo_Registro') : NULL;

        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['Codigo_Estabelecimento'] = $this->post('Codigo_Est
        abelecimento') : NULL;
        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['CNPJ'] = _formatarCnpj(mb_substr($this->post('Codi
        go_Estabelecimento'), -14)) : NULL;
        $this->post('Codigo_Estabelecimento') !== NULL ? $parametros['CPF'] = _formatarCpf(mb_substr($this->post('Codigo
        _Estabelecimento'), -11)) : NULL;
        $this->post('NSU_Transacao') !== NULL ? $parametros['NSU_Transacao'] = $this->post('NSU_Transacao') : NULL;
        $this->post('NSU_Transacao_Original') !== NULL ? $parametros['NSU_Transacao_Original'] = $this->post('NSU_Transa
        cao_Original') : NULL;
        $this->post('Data_Transacao') !== NULL ? $parametros['Data_Transacao'] = $this->post('Data_Transacao') : NULL;
        $this->post('Data_Transacao_Original') !== NULL ? $parametros['Data_Transacao_Original'] = $this->post('Data_Tra
        nsacao_Original') : NULL;
        $this->post('Tipo_Lancamento') !== NULL ? $parametros['Tipo_Lancamento'] = $this->post('Tipo_Lancamento') : NULL;
        $this->post('Data_Lancamento') !== NULL ? $parametros['Data_Lancamento'] = $this->post('Data_Lancamento') : NULL;
        $this->post('Tipo_Produto') !== NULL ? $parametros['Tipo_Produto'] = $this->post('Tipo_Produto') : NULL;
        $this->post('Meio_Captura') !== NULL ? $parametros['Meio_Captura'] = $this->post('Meio_Captura') : NULL;
        $this->post('Valor_Bruto') !== NULL ? $parametros['Valor_Bruto'] = $this->post('Valor_Bruto') : NULL;
        $this->post('Valor_Desconto') !== NULL ? $parametros['Valor_Desconto'] = $this->post('Valor_Desconto') : NULL;
        $this->post('Valor_Liquido') !== NULL ? $parametros['Valor_Liquido'] = $this->post('Valor_Liquido') : NULL;
        $this->post('N_Cartao') !== NULL ? $parametros['N_Cartao'] = $this->post('N_Cartao') : NULL;
        $this->post('N_Cartao_EDI') !== NULL ? $parametros['N_Cartao'] = $this->post('N_Cartao') : NULL;
        $this->post('N_Parcela') !== NULL ? $parametros['N_Parcela'] = $this->post('N_Parcela') : NULL;
        $this->post('T_Parcela') !== NULL ? $parametros['T_Parcela'] = $this->post('T_Parcela') : NULL;
        $this->post('NSU_Parcela') !== NULL ? $parametros['NSU_Parcela'] = $this->post('NSU_Parcela') : NULL;
        $this->post('Valor_Bruto_Parcela') !== NULL ? $parametros['Valor_Bruto_Parcela'] = $this->post('Valor_Bruto_Parcela') : NULL;
        $this->post('Valor_Desconto_Parcela') !== NULL ? $parametros['Valor_Desconto_Parcela'] = $this->post('Valor_Desconto_Parcela') : NULL;
        $this->post('Valor_Liquido_Parcela') !== NULL ? $parametros['Valor_Liquido_Parcela'] = $this->post('Valor_Liquido_Parcela') : NULL;
        $this->post('N_Banco') !== NULL ? $parametros['N_Banco'] = $this->post('N_Banco') : NULL;
        $this->post('Agencia') !== NULL ? $parametros['Agencia'] = $this->post('Agencia') : NULL;
        $this->post('Conta') !== NULL ? $parametros['Conta'] = $this->post('Conta') : NULL;
        $this->post('Codigo_Autorizacao') !== NULL ? $parametros['Codigo_Autorizacao'] = $this->post('Codigo_Autorizacao') : NULL;
        $this->post('Codigo_Bandeira') !== NULL ? $parametros['Codigo_Bandeira'] = $this->post('Codigo_Bandeira') : NULL;
        $this->post('Codigo_Produto') !== NULL ? $parametros['Codigo_Produto'] = $this->post('Codigo_Produto') : NULL;
        $this->post('Valor_Taxa_Interchange') !== NULL ? $parametros['Valor_Taxa_Interchange'] = $this->post('Valor_Taxa_Interchange') : NULL;
        $this->post('Valor_Taxa_Administracao') !== NULL ? $parametros['Valor_Taxa_Administracao'] = $this->post('Valor_Taxa_Administracao') : NULL;
        $this->post('Valor_Taxa_Interchange_Parcela') !== NULL ? $parametros['Valor_Taxa_Interchange_Parcela'] = $this->post('Valor_Taxa_Interchange_Parcela') : NULL;
        $this->post('Valor_Taxa_Administracao_Parcela') !== NULL ? $parametros['Valor_Taxa_Administracao_Parcela'] = $this->post('Valor_Taxa_Administracao_Parcela') : NULL;
        $this->post('Valor_Redutor_Multifronteira') !== NULL ? $parametros['Valor_Redutor_Multifronteira'] = $this->post('Valor_Redutor_Multifronteira') : NULL;
        $this->post('Valor_Taxa_Antecipacao') !== NULL ? $parametros['Valor_Taxa_Antecipacao'] = $this->post('Valor_Taxa_Antecipacao') : NULL;
        $this->post('Valor_Liquido_Antecipado') !== NULL ? $parametros['Valor_Liquido_Antecipado'] = $this->post('Valor_Liquido_Antecipado') : NULL;
        $this->post('Tipo_Transacao') !== NULL ? $parametros['Tipo_Transacao'] = $this->post('Tipo_Transacao') : NULL;
        $this->post('Codigo_Pedido') !== NULL ? $parametros['Codigo_Pedido'] = $this->post('Codigo_Pedido') : NULL;
        $this->post('Sigla_Pais') !== NULL ? $parametros['Sigla_Pais'] = $this->post('Sigla_Pais') : NULL;
        $this->post('Numero_Terminal') !== NULL ? $parametros['Numero_Terminal'] = $this->post('Numero_Terminal') : NULL;
        $this->post('Tipo_Ajuste') !== NULL ? $parametros['Tipo_Ajuste'] = $this->post('Tipo_Ajuste') : NULL;
        $this->post('Codigo_Ajuste') !== NULL ? $parametros['Codigo_Ajuste'] = $this->post('Codigo_Ajuste') : NULL;
        $this->post('Descricao_Ajuste') !== NULL ? $parametros['Descricao_Ajuste'] = $this->post('Descricao_Ajuste') : NULL;
        // $this->post('Ctrl_Empresa') !== NULL ? $parametros['Ctrl_Empresa'] = $this->post('Ctrl_Empresa') : NULL;        
        $this->post('Id_Envelope') !== NULL ? $parametros['Id_Envelope'] = $this->post('Id_Envelope') : NULL;
        $this->post('Trace') !== NULL ? $parametros['Trace'] = $this->post('Trace') : NULL;
        $this->post('Conta_Pagamento') !== NULL ? $parametros['Conta_Pagamento'] = $this->post('Conta_Pagamento') : NULL;
        $this->post('Codigo_Mensagem') !== NULL ? $parametros['Codigo_Mensagem'] = $this->post('Codigo_Mensagem') : NULL;
        $this->post('Codigo_Mensagem_Original') !== NULL ? $parametros['Codigo_Mensagem_Original'] = $this->post('Codigo_Mensagem_Original') : NULL;
        $this->post('Codigo_Resposta') !== NULL ? $parametros['Codigo_Resposta'] = $this->post('Codigo_Resposta') : NULL;
        $this->post('Codigo_Operacao') !== NULL ? $parametros['Codigo_Operacao'] = $this->post('Codigo_Operacao') : NULL;

        $parametros['Acao'] = 'APY';
        $retorno = $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC', $parametros);

        /*$parametros['Acao'] = 'I';
                $retorno = $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC',$parametros);*/

        if (isset($retorno[0]->Ctrl_Transacao) && $retorno[0]->Ctrl_Transacao > 0) {
            $this->mensagem_sucesso('Transação efetuada com sucesso.');
        } else {
            $this->mensagem_erro('Não foi possível efetuar a transação.');
        }
    }


    public function edi_lojista_get()
    {

        $path = "./assets/arquivos/edi/recebido/";
        $path2 = "./assets/arquivos/edi/processado/";

        $handle = is_dir($path);
        $handle2 = is_dir($path2);

        $data_ref = preg_replace('/[-]/', '', $_GET['date']);
        $cod_est = $_GET['cod_est'];

        $arquivo_lojista = (object)[];
        if ($handle && $handle2) {
            ini_set('max_execution_time', 3000);
            ini_set('memory_limit', '1024M');

            $arquivos = array_values(array_filter(scandir($path, SCANDIR_SORT_ASCENDING), function ($file) {
                return mb_substr($file, 0, 4) == 'EDI_';
            }));

            $arquivos += array_values(array_filter(scandir($path2, SCANDIR_SORT_ASCENDING), function ($file) {
                return mb_substr($file, 0, 4) == 'EDI_';
            }));

            $arquivos_processados = array();
            $arquivos_descartados = array();

            for ($i = 0; $i < count($arquivos); $i++) {
                if (mb_substr($arquivos[$i], 28, 11) != '_000000000_') {
                    array_push($arquivos_descartados, $arquivos[$i]);
                } else {
                    if (isset($arquivos[$i + 1]) && mb_substr($arquivos[$i], 0, 17) == mb_substr($arquivos[$i + 1], 0, 17) && mb_substr($arquivos[$i + 1], 28, 11) == '_000000000_') {
                        array_push($arquivos_descartados, $arquivos[$i]);
                    } else if (mb_substr($arquivos[$i], 8, 8) == $data_ref) {
                        array_push($arquivos_processados, $arquivos[$i]);
                    }
                }
            }

            $header = array();
            $body = array();
            $footer = array();
            $total_rej = 0;
            $total_bruto = 0;
            foreach ($arquivos_processados as $file) {

                $conteudo = file_get_contents($path2 . $file);
                if (!$conteudo) {
                    $conteudo = file_get_contents($path . $file);
                }
                $conteudo = _fileToArray($conteudo);

                foreach ($conteudo as $c) {
                    $Codigo_Registro = mb_substr($c, 0, 2);

                    if (trim(mb_substr($c, 0, 2)) == 'A0' || trim(mb_substr($c, 0, 2)) == 'L0') {
                        array_push($header, $c);
                    } else if ($cod_est == trim(mb_substr($c, 2, 15)) || $cod_est == NULL) {
                        array_push($body, $c);
                        switch ($Codigo_Registro) {
                            case 'CV':
                                $total_bruto += ((int) trim(mb_substr($c, 54, 11)));
                                break;
                            case 'AJ':
                                $total_bruto += ((int) trim(mb_substr($c, 109, 11)));
                                break;
                        }

                        $total_rej += 1;
                    } else if (trim(mb_substr($c, 0, 2)) == 'L9') {
                        $L9 = mb_substr($c, 0, 2);
                        $NSEQ = mb_substr($c, 22, 7);
                        $str_tot_rej = strval($total_rej);
                        $str_tot_bruto = strval($total_bruto);
                        $aux = '';
                        $x = 6 - strlen($str_tot_rej);
                        $y = 14 - strlen($str_tot_bruto);

                        for ($i = 0; $i < $x; $i++) {
                            $aux .= '0';
                        }


                        $aux .= $str_tot_rej;
                        $L9 .= $aux;

                        $aux = '';
                        for ($i = 0; $i < $y; $i++) {
                            $aux .= '0';
                        }

                        $aux .= $str_tot_bruto;
                        $L9 .= $aux;
                        $L9 .= $NSEQ;

                        array_push($footer, $L9);
                    } else if (trim(mb_substr($c, 0, 2)) == 'A9') {

                        array_push($footer, $c);
                    }
                }
            }
            $arquivo_lojista = [
                'header' => $header,
                'body' => $body,
                'footer' => $footer
            ];
        }


        $this->mensagem_sucesso($arquivo_lojista);
    }

    public function edi_get()
    {
        $path = "./assets/arquivos/edi/recebido/";
        $path2 = "./assets/arquivos/edi/processado/";

        $handle = is_dir($path);
        $handle2 = is_dir($path2);


        if ($handle && $handle2) {
            ini_set('max_execution_time', 3000);
            ini_set('memory_limit', '1024M');

            $arquivos = array_values(array_filter(scandir($path, SCANDIR_SORT_ASCENDING), function ($file) {
                return mb_substr($file, 0, 4) == 'EDI_';
            }));

            usort($arquivos, function ($a, $b) {
                if (mb_substr($a, 0, 17) == mb_substr($b, 0, 17) && mb_substr($a, 28, 11) != mb_substr($b, 28, 11)) {
                    return mb_substr($b, 28, 11) > mb_substr($a, 28, 11);
                }
                return mb_substr($a, 0, 24) > mb_substr($b, 0, 24);
            });

            $arquivos_processados = $arquivos;

            /*$arquivos_processados = array();
            $arquivos_descartados = array();
            
            for($i=0;$i<count($arquivos);$i++){
                if(mb_substr($arquivos[$i], 28, 11) != '_000000000_'){
                    array_push($arquivos_descartados, $arquivos[$i]);
                }
                else {
                    if(isset($arquivos[$i+1]) && mb_substr($arquivos[$i], 0, 17) == mb_substr($arquivos[$i+1], 0, 17) && mb_substr($arquivos[$i+1], 28, 11) == '_000000000_'){
                        array_push($arquivos_descartados, $arquivos[$i]);
                    }
                    else{                        
                        array_push($arquivos_processados, $arquivos[$i]);
                    }
                }
            }
            
            foreach($arquivos_descartados as $file){
                rename($path.$file, $path2.$file);
            }*/

            $qtd_registros_total = 0;
            $qtd_processados_total = 0;

            foreach ($arquivos_processados as $file) {
                /*$parametros = array();
                $parametros['Acao'] = 'DEL';
                
                $ano = trim(mb_substr($file, 8, 4));
                $mes = trim(mb_substr($file, 12, 2));
                $dia = trim(mb_substr($file, 14, 2));
                $parametros['Data_Delete'] = $ano.'-'.$mes.'-'.$dia;

                $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC',$parametros);*/

                $qtd_registros = 0;
                $qtd_processados = 0;

                $conteudo = file_get_contents($path . $file);

                $conteudo = _fileToArray($conteudo);

                foreach ($conteudo as $c) {
                    $parametros = array();
                    $parametros['Acao'] = 'I';
                    $parametros['EDI'] = $file;
                    $parametros['Codigo_Registro'] = mb_substr($c, 0, 2);
                    switch ($parametros['Codigo_Registro']) {
                        case 'CV':
                            $parametros['Codigo_Estabelecimento'] = trim(mb_substr($c, 2, 15));
                            $parametros['CNPJ'] = _formatarCnpj(mb_substr($parametros['Codigo_Estabelecimento'], -14));
                            $parametros['CPF'] = _formatarCpf(mb_substr($parametros['Codigo_Estabelecimento'], -11));
                            $parametros['NSU_Transacao'] = (int) trim(mb_substr($c, 17, 12));
                            $ano = trim(mb_substr($c, 29, 4));
                            $mes = trim(mb_substr($c, 33, 2));
                            $dia = trim(mb_substr($c, 35, 2));
                            $hora = trim(mb_substr($c, 37, 2));
                            $minutos = trim(mb_substr($c, 39, 2));
                            $segundos = trim(mb_substr($c, 41, 2));
                            $parametros['Data_Transacao'] = $ano . '-' . $mes . '-' . $dia;
                            ($hora !== '') ? $parametros['Data_Transacao'] .= ' ' . $hora . ':' . $minutos . ':' . $segundos : NULL;
                            $parametros['Tipo_Lancamento'] = (int) trim(mb_substr($c, 43, 1));
                            $ano = trim(mb_substr($c, 44, 4));
                            $mes = trim(mb_substr($c, 48, 2));
                            $dia = trim(mb_substr($c, 50, 2));
                            $parametros['Data_Lancamento'] = $ano . '-' . $mes . '-' . $dia;
                            $parametros['Tipo_Produto'] = trim(mb_substr($c, 52, 1));
                            $parametros['Meio_Captura'] = (int) trim(mb_substr($c, 53, 1));
                            $parametros['Valor_Bruto'] = ((int) trim(mb_substr($c, 54, 11))) / 100;
                            $parametros['Valor_Desconto'] = ((int) trim(mb_substr($c, 65, 11))) / 100;
                            $parametros['Valor_Liquido'] = ((int) trim(mb_substr($c, 76, 11))) / 100;
                            $parametros['N_Cartao_EDI'] = trim(mb_substr($c, 87, 19));
                            $parametros['N_Parcela'] = (int) trim(mb_substr($c, 106, 2));
                            $parametros['T_Parcela'] = (int) trim(mb_substr($c, 108, 2));
                            $parametros['NSU_Parcela'] = (int) trim(mb_substr($c, 110, 12));
                            $parametros['Valor_Bruto_Parcela'] = ((int) trim(mb_substr($c, 122, 11))) / 100;
                            $parametros['Valor_Desconto_Parcela'] = ((int) trim(mb_substr($c, 133, 11))) / 100;
                            $parametros['Valor_Liquido_Parcela'] = ((int) trim(mb_substr($c, 144, 11))) / 100;
                            $parametros['N_Banco'] = trim(mb_substr($c, 155, 3));
                            $parametros['Agencia'] = trim(mb_substr($c, 158, 6));
                            $parametros['Conta'] = trim(mb_substr($c, 164, 11));
                            (trim(mb_substr($c, 175, 12)) !== '') ? $parametros['Codigo_Autorizacao'] = trim(mb_substr($c, 175, 12)) : NULL;
                            (trim(mb_substr($c, 187, 3)) !== '') ? $parametros['Codigo_Bandeira'] = trim(mb_substr($c, 187, 3)) : NULL;
                            (trim(mb_substr($c, 190, 3)) !== '') ? $parametros['Codigo_Produto'] = trim(mb_substr($c, 190, 3)) : NULL;
                            (trim(mb_substr($c, 193, 11)) !== '') ? $parametros['Valor_Taxa_Interchange'] = ((int) trim(mb_substr($c, 193, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 204, 11)) !== '') ? $parametros['Valor_Taxa_Administracao'] = ((int) trim(mb_substr($c, 204, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 215, 11)) !== '') ? $parametros['Valor_Taxa_Interchange_Parcela'] = ((int) trim(mb_substr($c, 215, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 226, 11)) !== '') ? $parametros['Valor_Taxa_Administracao_Parcela'] = ((int) trim(mb_substr($c, 226, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 237, 11)) !== '') ? $parametros['Valor_Redutor_Multifronteira'] = ((int) trim(mb_substr($c, 237, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 248, 11)) !== '') ? $parametros['Valor_Taxa_Antecipacao'] = ((int) trim(mb_substr($c, 248, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 259, 11)) !== '') ? $parametros['Valor_Liquido_Antecipado'] = ((int) trim(mb_substr($c, 259, 11))) / 100 : NULL;
                            $parametros['Tipo_Transacao'] = trim(mb_substr($c, 270, 2));
                            (trim(mb_substr($c, 272, 30)) !== '') ? $parametros['Codigo_Pedido'] = trim(mb_substr($c, 272, 30)) : NULL;
                            $parametros['Sigla_Pais'] = trim(mb_substr($c, 302, 3));
                            $parametros['Numero_Terminal'] = trim(mb_substr($c, 305, 8));
                            (trim(mb_substr($c, 313, 18)) !== '') ? $parametros['Id_Envelope'] = ((int) trim(mb_substr($c, 313, 18))) : NULL;
                            (trim(mb_substr($c, 331, 6)) !== '') ? $parametros['Trace'] = ((int) trim(mb_substr($c, 331, 6))) : NULL;
                            (trim(mb_substr($c, 337, 20)) !== '') ? $parametros['Conta_Pagamento'] = ((int) trim(mb_substr($c, 337, 20))) : NULL;
                            (trim(mb_substr($c, 357, 18)) !== '') ? $parametros['IF_Payware'] = ((int) trim(mb_substr($c, 357, 18))) : NULL;
                            (trim(mb_substr($c, 375, 18)) !== '') ? $parametros['IFA_Payware'] = ((int) trim(mb_substr($c, 375, 18))) : NULL;
                            (trim(mb_substr($c, 392, 18)) !== '') ? $parametros['IP_Payware'] = ((int) trim(mb_substr($c, 392, 18))) : NULL; 
                            $parametros['Codigo_Payware'] = ((int)trim(mb_substr($c, 411, 18)));
                            $parametros['Codigo_Filial_Payware'] = ((int)trim(mb_substr($c, 429, 18)));
                            (trim(mb_substr($c, 447, 4)) !== '') ? $parametros['Merchant_Catrgory'] = ((int) trim(mb_substr($c, 447, 4))) : NULL; 
                            $parametros['Segregacao_Payware'] = ((int)trim(mb_substr($c, 451, 9)));
                            (trim(mb_substr($c, '460', 40)) !== '') ? $parametros['Reservado'] = ((int) trim(mb_substr($c, 460, 40))) : NULL; 
                            $parametros['NSEQ'] = ((int)trim(mb_substr($c, 500, 6)));

                            if (trim(mb_substr($c, 87, 3)) != '000' and strtoupper(trim(mb_substr($c, 93, 1))) == 'X') {
                                $parametros['N_Cartao'] = trim(mb_substr($c, 87, 19));
                            } else {
                                $parametros['N_Cartao'] = trim(mb_substr($c, 90, 16));
                            }
                            break;

                        case 'AJ':
                            $parametros['Codigo_Estabelecimento'] = trim(mb_substr($c, 2, 15));
                            $parametros['CNPJ'] = _formatarCnpj(mb_substr($parametros['Codigo_Estabelecimento'], -14));
                            $parametros['CPF'] = _formatarCpf(mb_substr($parametros['Codigo_Estabelecimento'], -11));
                            (trim(mb_substr($c, 17, 12)) !== '') ? $parametros['NSU_Transacao_Original'] = (int) trim(mb_substr($c, 17, 12)) : NULL;
                            $ano = trim(mb_substr($c, 29, 4));
                            $mes = trim(mb_substr($c, 33, 2));
                            $dia = trim(mb_substr($c, 35, 2));
                            ($ano !== '') ? $parametros['Data_Transacao_Original'] = $ano . '-' . $mes . '-' . $dia : NULL;
                            (trim(mb_substr($c, 37, 2)) !== '') ? $parametros['N_Parcela'] = (int) trim(mb_substr($c, 37, 2)) : NULL;
                            $parametros['NSU_Transacao'] = (int) trim(mb_substr($c, 39, 12));
                            $ano = trim(mb_substr($c, 51, 4));
                            $mes = trim(mb_substr($c, 55, 2));
                            $dia = trim(mb_substr($c, 57, 2));
                            $hora = trim(mb_substr($c, 59, 2));
                            $minutos = trim(mb_substr($c, 61, 2));
                            $segundos = trim(mb_substr($c, 63, 2));
                            $parametros['Data_Transacao'] = $ano . '-' . $mes . '-' . $dia;
                            ($hora !== '') ? $parametros['Data_Transacao'] .= ' ' . $hora . ':' . $minutos . ':' . $segundos : NULL;
                            $parametros['Tipo_Lancamento'] = (int) trim(mb_substr($c, 65, 1));
                            $ano = trim(mb_substr($c, 66, 4));
                            $mes = trim(mb_substr($c, 70, 2));
                            $dia = trim(mb_substr($c, 72, 2));
                            $parametros['Data_Lancamento'] = $ano . '-' . $mes . '-' . $dia;
                            $parametros['Meio_Captura'] = (int) trim(mb_substr($c, 74, 1));
                            $parametros['Tipo_Ajuste'] = (int) trim(mb_substr($c, 75, 1));
                            $parametros['Codigo_Ajuste'] = (int) trim(mb_substr($c, 76, 3));
                            $parametros['Descricao_Ajuste'] = trim(mb_substr($c, 79, 30));
                            $parametros['Valor_Bruto'] = ((int) trim(mb_substr($c, 109, 11))) / 100;
                            $parametros['Valor_Desconto'] = ((int) trim(mb_substr($c, 120, 11))) / 100;
                            $parametros['Valor_Liquido'] = ((int) trim(mb_substr($c, 131, 11))) / 100;
                            $parametros['N_Banco'] = trim(mb_substr($c, 142, 3));
                            $parametros['Agencia'] = trim(mb_substr($c, 145, 6));
                            $parametros['Conta'] = trim(mb_substr($c, 151, 11));
                            (trim(mb_substr($c, 162, 19)) !== '') ? $parametros['N_Cartao_EDI'] = trim(mb_substr($c, 162, 19)) : NULL;
                            (trim(mb_substr($c, 181, 3)) !== '') ? $parametros['Codigo_Bandeira'] = trim(mb_substr($c, 181, 3)) : NULL;
                            (trim(mb_substr($c, 184, 3)) !== '') ? $parametros['Codigo_Produto'] = trim(mb_substr($c, 184, 3)) : NULL;
                            (trim(mb_substr($c, 187, 11)) !== '') ? $parametros['Valor_Taxa_Antecipacao'] = ((int) trim(mb_substr($c, 187, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 198, 11)) !== '') ? $parametros['Valor_Liquido_Antecipado'] = ((int) trim(mb_substr($c, 198, 11))) / 100 : NULL;
                            (trim(mb_substr($c, 209, 30)) !== '') ? $parametros['Codigo_Pedido'] = trim(mb_substr($c, 209, 30)) : NULL;
                            (trim(mb_substr($c, 209, 18)) !== '') ? $parametros['Id_Envelope'] = ((int) trim(mb_substr($c, 209, 18))) : NULL;
                            (trim(mb_substr($c, 227, 6)) !== '') ? $parametros['Trace'] = ((int) trim(mb_substr($c, 227, 6))) : NULL;
                            (trim(mb_substr($c, 233, 20)) !== '') ? $parametros['Conta_Pagamento'] = ((int) trim(mb_substr($c, 233, 20))) : NULL;
                            (trim(mb_substr($c, 253, 30)) !== '') ? $parametros['Codigo_Pedido'] = trim(mb_substr($c, 253, 30)) : NULL;       
                            (trim(mb_substr($c, 283, 18)) !== '') ? $parametros['IF_Payware'] = ((int) trim(mb_substr($c, 283, 18))) : NULL;
                            (trim(mb_substr($c, 301, 18)) !== '') ? $parametros['IFA_Payware'] = ((int) trim(mb_substr($c, 301, 18))) : NULL;
                            (trim(mb_substr($c, 319, 18)) !== '') ? $parametros['IP_Payware'] = ((int) trim(mb_substr($c, 319, 18))) : NULL; 
                            $parametros['Codigo_Payware'] = ((int)trim(mb_substr($c, 337, 18)));
                            $parametros['Codigo_Filial_Payware'] = ((int)trim(mb_substr($c, 355, 18)));
                            (trim(mb_substr($c, 373, 4)) !== '') ? $parametros['Merchant_Catrgory'] = ((int) trim(mb_substr($c, 373, 4))) : NULL; 
                            $parametros['Segregacao_Payware'] = ((int)trim(mb_substr($c, 377, 9)));
                            $parametros['NSEQ'] = ((int)trim(mb_substr($c, 386, 6)));

                            if (mb_substr($c, 162, 3) != '000' and strtoupper(mb_substr($c, 168, 1)) == 'X') {
                                (trim(mb_substr($c, 162, 19)) !== '') ? $parametros['N_Cartao'] = trim(mb_substr($c, 162, 19)) : NULL;
                            } else {
                                (trim(mb_substr($c, 162, 19)) !== '') ? $parametros['N_Cartao'] = trim(mb_substr($c, 165, 16)) : NULL;
                            }
                            break;

                        case 'CC':
                            $parametros['Codigo_Estabelecimento'] = trim(mb_substr($c, 2, 15));
                            $parametros['CNPJ'] = _formatarCnpj(mb_substr($parametros['Codigo_Estabelecimento'], -14));
                            $parametros['CPF'] = _formatarCpf(mb_substr($parametros['Codigo_Estabelecimento'], -11));
                            $parametros['NSU_Transacao_Original'] = (int) trim(mb_substr($c, 17, 12));
                            $ano = trim(mb_substr($c, 29, 4));
                            $mes = trim(mb_substr($c, 33, 2));
                            $dia = trim(mb_substr($c, 35, 2));
                            $parametros['Data_Transacao_Original'] = $ano . '-' . $mes . '-' . $dia;
                            $parametros['N_Parcela'] = (int) trim(mb_substr($c, 37, 2));
                            $parametros['NSU_Transacao'] = (int) trim(mb_substr($c, 39, 12));
                            $ano = trim(mb_substr($c, 51, 4));
                            $mes = trim(mb_substr($c, 55, 2));
                            $dia = trim(mb_substr($c, 57, 2));
                            $hora = trim(mb_substr($c, 59, 2));
                            $minutos = trim(mb_substr($c, 61, 2));
                            $segundos = trim(mb_substr($c, 63, 2));
                            $parametros['Data_Transacao'] = $ano . '-' . $mes . '-' . $dia;
                            ($hora !== '') ? $parametros['Data_Transacao'] .= ' ' . $hora . ':' . $minutos . ':' . $segundos : NULL;
                            $parametros['Meio_Captura'] = (int) trim(mb_substr($c, 65, 1));
                            (trim(mb_substr($c, 66, 30)) !== '') ? $parametros['Codigo_Pedido'] = trim(mb_substr($c, 66, 30)) : NULL;
                            (trim(mb_substr($c, 66, 18)) !== '') ? $parametros['Id_Envelope'] = ((int) trim(mb_substr($c, 66, 18))) : NULL;
                            (trim(mb_substr($c, 84, 6)) !== '') ? $parametros['Trace'] = ((int) trim(mb_substr($c, 84, 6))) : NULL;                            
                            (trim(mb_substr($c, 90, 30)) !== '') ? $parametros['Codigo_Pedido'] = trim(mb_substr($c, 90, 30)) : NULL;
                            (trim(mb_substr($c, 120, 18)) !== '') ? $parametros['IF_Payware'] = ((int) trim(mb_substr($c, 120, 18))) : NULL;
                            (trim(mb_substr($c, 138, 18)) !== '') ? $parametros['IFA_Payware'] = ((int) trim(mb_substr($c, 138, 18))) : NULL;
                            (trim(mb_substr($c, 156, 18)) !== '') ? $parametros['IP_Payware'] = ((int) trim(mb_substr($c, 156, 18))) : NULL; 
                            $parametros['Codigo_Payware'] = ((int)trim(mb_substr($c, 174, 18)));
                            $parametros['Codigo_Filial_Payware'] = ((int)trim(mb_substr($c, 192, 18)));
                            (trim(mb_substr($c, 211, 4)) !== '') ? $parametros['Merchant_Catrgory'] = ((int) trim(mb_substr($c, 210, 4))) : NULL; 
                            $parametros['Segregacao_Payware'] = ((int)trim(mb_substr($c, 214, 9)));

                            (trim(mb_substr($c, 223, 12)) !== '') ? $parametros['Valor_B_Cancelamento'] = ((int) trim(mb_substr($c, 223, 12)))/100 : NULL;
                            (trim(mb_substr($c, 235, 12)) !== '') ? $parametros['Valor_B_Parcela_Cancelamento'] = ((int) trim(mb_substr($c, 235, 12)))/100 : NULL;
                            (trim(mb_substr($c, 247, 12)) !== '') ? $parametros['Valor_Desconto_Comissao_Cancelamento'] = ((int) trim(mb_substr($c, 247, 12)))/100 : NULL;
                            (trim(mb_substr($c, 259, 12)) !== '') ? $parametros['Valor_Liquido_Cancelamento'] = ((int) trim(mb_substr($c, 259, 12)))/100 : NULL;
                            (trim(mb_substr($c, 271, 12)) !== '') ? $parametros['Valor_Bruto_Transacao_Original'] = ((int) trim(mb_substr($c, 271, 12)))/100 : NULL;
                            (trim(mb_substr($c, 283, 12)) !== '') ? $parametros['Valor_Liquido_Transacao_Original'] = ((int) trim(mb_substr($c, 283, 12)))/100 : NULL;
                            (trim(mb_substr($c, 295, 12)) !== '') ? $parametros['Valor_Original_Comissao'] = ((int) trim(mb_substr($c, 295, 12)))/100 : NULL;
                            (trim(mb_substr($c, 307, 4)) !== '') ? $parametros['N_Parcelas_Original'] = ((int) trim(mb_substr($c, 307, 4))) : NULL;
                            (trim(mb_substr($c, 311, 12)) !== '') ? $parametros['Codigo_Autorizacao_Original'] = ((int) trim(mb_substr($c, 311, 12))) : NULL;
                            $parametros['NSEQ'] = ((int)trim(mb_substr($c, 323, 6)));   
                            break;
                    }
                    if ($parametros['Codigo_Registro'] == 'CV' || $parametros['Codigo_Registro'] == 'AJ' || $parametros['Codigo_Registro'] == 'CC') {
                        $retorno = $this->requisicao_library->Requisicao('WS_P_Transacao_Venda_DXC', $parametros);
                        $qtd_registros++;
                        $qtd_registros_total++;
                        if (isset($retorno[0]->Ctrl_Transacao) && $retorno[0]->Ctrl_Transacao > 0) {
                            $qtd_processados++;
                            $qtd_processados_total++;
                        }
                    }
                }

                if ($qtd_processados >= $qtd_registros) {
                    $parametros = array();
                    $parametros['Acao'] = 'IAR';
                    $parametros['Arquivo'] = $file;
                    $parametros['Tipo_Arquivo'] = 1;
                    $parametros['Data'] = mb_substr($file, 8, 4) . '-' . mb_substr($file, 12, 2) . '-' . mb_substr($file, 14, 2) . ' ' . mb_substr($file, 17, 2) . ':' . mb_substr($file, 19, 2) . ':' . mb_substr($file, 21, 2);
                    $this->requisicao_library->Requisicao('WS_P_Antecipacao', $parametros);

                    rename($path . $file, $path2 . $file);
                }
            }

            if ($qtd_processados_total >= $qtd_registros_total) {
                $this->mensagem_sucesso('Foram processados ' . $qtd_processados_total . ' registros.');
            } else {
                $this->mensagem_erro('Foram processados ' . $qtd_processados_total . ' registros. Faltaram ' . ($qtd_registros_total - $qtd_processados_total) . ' registros.');
            }
        } else {
            $this->mensagem_erro('Diretório inválido');
        }
    }
}
