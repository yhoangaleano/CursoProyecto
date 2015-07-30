<?php 

class Personas extends Controller
{

	public $modelPersona = null;

	function __construct(){
		$this->modelPersona = $this->loadModel("modelPersona");

	}

	public function Index()
	{
		$personas = $this->modelPersona->getAllPersonas();

		require APP . 'view/_templates/header.php';
        require APP . 'view/personas/index.php';
        require APP . 'view/_templates/footer.php';

        // $this->render("index", $personas);

	}   

	public function deletepersona($id)
	{
		$persona = $this->modelPersona->getPersona($id);

		require APP . 'view/_templates/header.php';
        require APP . 'view/personas/delete.php';
        require APP . 'view/_templates/footer.php';
	}

}

?>