
<?php 

include_once('Conexion.class.php');

class Select{
	private $conex;
	private $conexion;
	private $resulset;
	private $pstmt;
	private $consulta;
	

	function __construct(){
		$this->conex = Conexion::getInstance();
		$this->conexion = $this->conex->getConexion();
		if(isset($_REQUEST['btn'])){
			$this->eleccion($_REQUEST['btn']);
		}	
	}

	public function eleccion($option){
		switch ($option) {
			case 'estado':
				self::selectEstado();
			break;

			case 'municipio':
				self::selectMunicipio();
			break;
			
			case 'colonia':
				self::selectColonia();
			break;

			case 'postal':
				self::selectPostal();
			break;

		}
	}

	public function selectEstado(){
		try {
			$this->consulta = "select * from estado";
			$this->pstmt = $this->conexion->prepare($this->consulta);
			$this->pstmt->execute();

			$this->resultset = '<option value="0">Seleccionar estado</option>';
			foreach ($this->pstmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$this->resultset .='<option value="'.$row['idEstado'].'">'.$row['nameEstado'].'</option>';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		echo $this->resultset;
	}

	public function selectMunicipio(){
		try {
			$this->consulta = "select * from municipio where idEstado = ?";
			$this->pstmt = $this->conexion->prepare($this->consulta);
			$this->pstmt->bindParam(1, $_POST['idEstado'], PDO::PARAM_STR);
			$this->pstmt->execute();

			$this->resultset = '<option value="0">Seleccionar municipio</option>';
			foreach ($this->pstmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$this->resultset .='<option value="'.$row['idMunicipio'].'">'.$row['nameMunicipio'].'</option>';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		echo $this->resultset;
	}

	public function selectColonia(){
		try {
			$this->consulta = "select * from colonia where idMunicipio = ?";
			$this->pstmt = $this->conexion->prepare($this->consulta);
			$this->pstmt->bindParam(1, $_POST['idMunicipio'], PDO::PARAM_STR);
			$this->pstmt->execute();

			$this->resultset = '<option value="0">Seleccionar colonia</option>';
			foreach ($this->pstmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$this->resultset .='<option value="'.$row['idColonia'].'">'.$row['nameColonia'].'</option>';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		echo $this->resultset;
	}

	public function selectPostal(){
		try {
			$this->consulta = "select * from cp where idColonia = ?";
			$this->pstmt = $this->conexion->prepare($this->consulta);
			$this->pstmt->bindParam(1, $_POST['idColonia'], PDO::PARAM_STR);
			$this->pstmt->execute();

			
			foreach ($this->pstmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$this->resultset =$row['nameCp'];
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		echo $this->resultset;	
	}

	


}
$select = new Select();
?>