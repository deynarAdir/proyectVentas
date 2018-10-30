<?php 
	namespace matematica;
	class Persona{
		private $nombre;
		private $paterno;
		public function __construct(string $nombre,string $paterno){
			$this->nombre = $nombre;
			$this->paterno = $paterno;
		}
		function __destruct(){
			
		}
		public function saludo(){
			echo "hola te saluda $this->nombre que tal";
		}
	}
 ?>