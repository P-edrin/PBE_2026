<?php
    echo"<b>LIVRO</b>";
    echo"<br><br>";

class Livro {

    public $Titulo;
    public $Autor;
    public $Paginas;
    public $Ano_de_publicacao;

    function __construct($Titulo, $Autor, $Paginas, $Ano_de_publicacao = "Desconhecido") {
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->Paginas = $Paginas;
        $this->Ano_de_publicacao = $Ano_de_publicacao;
    }

    function exibirDetalhes() {
        echo "Título: $this->Titulo <br>";
        echo "Autor: $this->Autor <br>";
        echo "Páginas: $this->Paginas <br>";
        echo "Ano de publicação: $this->Ano_de_publicacao <br>";
        echo "<hr>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);

$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 96);

$livro1->exibirDetalhes();

$livro2->exibirDetalhes();

?>