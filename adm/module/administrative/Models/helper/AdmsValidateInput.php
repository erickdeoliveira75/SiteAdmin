<?php

namespace Module\administrative\Models\helper;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AdmsValidateInput
 *
 * @copyrigth (c) year, Leandro Santos - Leandro
 */
class AdmsValidateInput
{
    private $dados;
    private $result;
    
    function getResult()
    {
        return $this->result;
    }

    public function validateInput(array $dados)
    {
        $this->dados = $dados;
        $this->dados = array_map('strip_tags', $this->dados);
        $this->dados = array_map('trim', $this->dados);
        if (in_array('', $this->dados)) {
            $_SESSION['msg'] = "<div class='alert alert-danger'>Preencha todos os campos</div>";
            return $this->result = false;
        }
        return $this->result = true;
    }    
}
