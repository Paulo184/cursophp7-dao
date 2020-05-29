<?php

class Usuario {

	private $idusuario;
	private $idlogin;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;		
	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDeslogin(){
		return $this->idusuario;		
	}

	public function setDeslogin($value){
		$this->idusuario = $value;

	}

	public function getDessenha(){
		return $this->idusuario;		
	}

	public function setDessenha($value){
		$this->idusuario = $value;
	}

	public function getDtcadastro(){
		return $this->idusuario;		
	}

	public function setDtcadastro($value){
		$this->idusuario = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");



		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id

		));

		if (count($results) > 0) {

			$row = $results[0];

			$this->setData($results[0]);

		} else{

			throw new Exception("Login ou senha inválidos");
			
		}


		public static function getList(){
				$sql = new Sql();
				$sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

		}
		public static function search($login){
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :$SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%".$login."%";


			));
		}

		public function login($login, $password){


			$this-> setIdusuario($row['idusuario']);
			$this-> setDeslogin($row['deslogin']);
			$this-> setDessenha($row['dessenha']);
			$this-> setDtcadastro(new DateTime($row['dtcadastro']));

		}

		public function__toString(){

			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin AND dessenha = :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password

			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=$this->getDtcadastro()->format("d/m/Y H:i:s")


			));
			public function __construct($login= "", $password="") {
				$this->setData($results[0]);
			}

			public function setData($data){

			$this-> setIdusuario($row['idusuario']);
			$this-> setDeslogin($row['deslogin']);
			$this-> setDessenha($row['dessenha']);
			$this-> setDtcadastro(new DateTime($row['dtcadastro']));	
			}

			public function insert(){
				$sql = new Sql();
				$results = $sql->select("CALL sp_insert(:LOGIN, :PASSWORD)", array(
					'LOGIN'=>$this->getDeslogin(),
					':PASSWORD'=:$this->getDessenha()


				));

				if(count($results) > 0){
					$this ->setData($results[0]);
				}
			}

		}
	}
}


?>