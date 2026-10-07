<?php

class biblioteca {
    public $titulo;
    public $autor;
    public $pagina;
    public $ano_publicacao;

    function __construct($titulo, $autor, $pagina = "Desconhecido", $ano_publicacao = "Desconhecido") {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->pagina = $pagina;
        $this->ano_publicacao = $ano_publicacao;
    }
}

$livro = new biblioteca("Memórias Postumas", "Enzo rozinha", 500, 1999);

echo "Titulo: " . $livro->titulo . "<br>";
echo "Autor:  " . $livro->autor . "<br>";
echo "Autor:  " . $livro->pagina . "<br>";
echo "Autor:  " . $livro->ano_publicacao . "<br>";
echo "<br>";

$livro1 = new biblioteca("O cortiço", "Enzo Mala", 300, );

echo "Titulo: " . $livro1->titulo . "<br>";
echo "Autor:  " . $livro1->autor . "<br>";
echo "Autor:  " . $livro1->pagina . "<br>";
echo "Autor:  " . $livro1->ano_publicacao . "<br>";
echo "<br>";
?>