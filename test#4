<?php

// Classe base com propriedades e métodos de membros
class Vegetal {

    var $comestivel;
    var $cor;

    function Vegetal($comestivel, $cor="verde")
    {
        $this->comestivel = $comestivel;
        $this->cor = $cor;
    }

    function is_comestivel()
    {
        return $this->comestivel;
    }

    function qual_cor()
    {
        return $this->cor;
    }

} // Fim da classe Vegetal

// estende a classe base
class Espinafre extends Vegetal {

    var $cozido = false;

    function Espinafre()
    {
        $this->Vegetal( true, "verde" );
    }

    function cozinhe()
    {
        $this->cozido = true;
    }

    function esta_cozido()
    {
        return $this->cozido;
    }

} // Fim da classe Espinafre

?>
