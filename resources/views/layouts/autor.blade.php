public function index()
{
    $autores = Autor::paginate(10); // Exemplo de paginação
    return view('autores.index', compact('autores')); // A variável correta é $autores
}
