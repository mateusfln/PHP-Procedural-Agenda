<?php
class Telefones{

    public $pessoa_id;
    public $ddd;
    public $ddi;
    public $numero;
    public $ativo;
    public $id;

   public function getId()
   {
       return $this->id;
   }
   public function setId($id)
   {
        $this->id = $id;
   }
   public function getPessoaId()
   {
       return $this->pessoa_id;
   }
   public function setPessoaId($pessoaId)
   {
        $this->pessoa_id = $pessoaId;
   }
   public function getNumero($numero)
   {
       return $this->numero;
   }

   public function setNumero($numero)
   {
       $this->numero = $numero;
   }
   public function getDdd()
   {
       return $this->ddd;
   }
   public function setDdd($ddd)
   {
       $this->ddd = $ddd;
   }
   public function getDdi()
   {
       return $this->ddi;
   }
   public function setDdi($ddi)
   {
       $this->ddi = $ddi;
   }
   public function getAtivo()
   {
       return $this->ativo;
   }
   public function setAtivo($ativo)
   {
       $this->ativo = $ativo;
   }
}