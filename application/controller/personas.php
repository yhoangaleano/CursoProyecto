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
	}   

	public function deletepersona($id)
	{
		$persona = $this->modelPersona->getPersona($id);
		$this->render("delete", array("persona" => $persona));
	}

	public function guardar()
	{
		echo json_encode($_REQUEST);
	}

}

?>