<?php
require_once(realpath(dirname(__FILE__) . '/') . '/DAO.php');
require_once(realpath(dirname(__FILE__) . '/../') . '/Entity/Pessoas.php');
require_once(realpath(dirname(__FILE__) . '/../') . '/Entity/Telefones.php');

class PessoasDAO extends DAO
{
    
    /**
     * Efetua a busca de dados referentes as Pessoas
     * 
     * @return array|\Models\Entity\Pessoas[]
     */
    public function buscarListaDePessoas() : array|\Models\Entity\Pessoas
    {
        $pessoas = [];

        $sql = 'SELECT nome_completo, id, cpf FROM pessoas';

        $query = $this->getConexao()->query($sql);
        
        while ($row = $query->fetch_assoc()) {
            $pessoa = new Pessoas();
            $pessoa->setCpf($row['cpf']);
            $pessoa->setNome($row['nome_completo']);
            $pessoa->setId($row['id']);
            $pessoas[] = $pessoa;
        }

        return $pessoas;
    }

     /**
     * Efetua a busca de dados referentes aos telefones
     * 
     * @return \mysqli
     */
    public function buscarListaDeTelefones() : array|\Models\Entity\Telefones
    {
        $telefones = [];

        $sql = 'SELECT ddi,ddd,numero,ativo,id,pessoa_id FROM telefones';

        $query = $this->getConexao()->query($sql);
        
        while ($row = $query->fetch_assoc()) {
            $telefone = new Telefones();
            $telefone->setDdi($row['ddi']);
            $telefone->setDdd($row['ddd']);
            $telefone->setNumero($row['numero']);
            $telefone->setAtivo($row['ativo']);
            $telefone->setId($row['id']);
            $telefone->setPessoaId($row['pessoa_id']);
            $telefones[] = $telefone;
        }

        return $telefones;
    }

     /**
     * Efetua a busca dos dados referentes as pessoas juntamente com os dados de telefones
     * 
     * @return \mysqli
     */
    public function buscarListaDePessoasETelefones() : array|\Models\Entity\Pessoas
    {
        $pessoasETelefones = [];

        $sql = 'SELECT nome_completo, p.id as pk_pessoa_id, cpf, ddi, ddd, numero, ativo, pessoa_id as fk_pessoa_id, t.id as telefone_id FROM pessoas p INNER JOIN telefones t ON p.id = t.pessoa_id';
        
        // if ($_GET){
        //     $cpf = $_GET['cpf']; 
        //     $nome = $_GET['nome_completo']; 
        //     $numero = $_GET['numero']; 
        //     $id = $_GET['id'];
        //     $ativo = $_GET['ativo'];
        //     $sql = "SELECT p.id, cpf, nome_completo, numero
        //     FROM pessoas p
        //     INNER JOIN telefones t ON p.id = t.pessoa_id
        //     WHERE p.id LIKE '%$id%' AND cpf LIKE '%$cpf%'
        //     AND nome_completo LIKE '%$nome%'
        //     AND numero LIKE '%$numero%' AND ativo LIKE '%$ativo%'";
        // }

        $query = $this->getConexao()->query($sql);

        while ($row = $query->fetch_assoc()) {
            $pessoa = new Pessoas();
            $telefone = new Telefones();
            
            $pessoa->setNome($row['nome_completo']);
            $pessoa->setId($row['pk_pessoa_id']);
            $pessoa->setCpf($row['cpf']);
            $pessoa->setTelefone($telefone);
            $telefone->setDdi($row['ddi']);
            $telefone->setDdd($row['ddd']);
            $telefone->setNumero($row['numero']);
            $telefone->setAtivo($row['ativo']);
            $telefone->setPessoaId($row['fk_pessoa_id']);
            $pessoasETelefones[] = $pessoa;
        }

        return $pessoasETelefones;
    }
    // comando para saber se a pessoa possui telefones
    // select * from pessoas p where  EXISTS (
    //     SELECT *
    //     FROM telefones t
    //     WHERE t.pessoa_id = p.id
    // )
    
}