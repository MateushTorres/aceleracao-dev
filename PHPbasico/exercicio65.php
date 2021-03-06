<?php
class Gerente {
    public int $id;
    public String $nome;
    public String $alocacao;
    public float $salario;
    public int $quantidadeDeSubordinados;
    
    public function __construct($params = null) { }

    public function __destruct() {
        echo "{$this->id} foi Excluido<br>";  
    }
    public function __toString() {
        return json_encode(array(
            "id" => $this->id,
            "nome" => $this->nome,
            "alocacao" => $this->alocacao,
            "salario" => $this->salario,
            "quantidadeDeSubordinados" => $this->quantidadeDeSubordinados
        ));
    }
    public function insereGerente(Gerente $gerente) {
        return array(
            "id" => $gerente->id,
            "nome" => $gerente->nome,
            "alocacao" => $gerente->alocacao,
            "salario" => $gerente->salario,
            "quantidadeDeSubordinados" => $gerente->quantidadeDeSubordinados
        );
    }
    public function getId() {
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getAlocacao() {
        return $this->alocacao;
    }
    public function getSalario() {
        return $this->salario;  
    public function getQuantidadeDeSubordinados() {
        return $this->quantidadeDeSubordinados;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setAlocacao($alocacao) {
        $this->alocacao = $alocacao;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function setQuantidadeDeSubordinados($quantidadeDeSubordinados) {
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }
}
$gerente = new Gerente();
$gerente->setId(1);
$gerente->setNome("JOSE");
$gerente->setAlocacao("RH");
$gerente->setSalario(5000);
$gerente->setQuantidadeDeSubordinados(2);

echo "<br>";
var_export($gerente);
echo "<br>";
print_r($gerente->insereGerente($gerente));
echo "<br>";
?>