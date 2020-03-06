<?php
//https://www.php.net/manual/pt_BR/functions.user-defined.php
//Contexto:https://pt.wikipedia.org/wiki/Recursividade_(ci%C3%AAncia_da_computa%C3%A7%C3%A3o) e https://pt.wikipedia.org/wiki/Recursividade
$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados' =>array(
            //Inicio : Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio : Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Termino : Gerente de Vendas
                )
            ),
            //Termino : Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Término: Supervisor de Pagamentos
                        )
                            ),
                    //Termino: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervidor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Termino:Supervisor de Suprimentos

                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Termino: Diretor Financeiro
        ) 


    )


);
function exibe($cargos){
    $html = '<ul>';
    foreach ($cargos as $cargo){
//https://www.php.net/manual/pt_BR/control-structures.foreach.php
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
//https://www.php.net/manual/pt_BR/function.isset.php
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
}
echo exibe($hierarquia);

?>