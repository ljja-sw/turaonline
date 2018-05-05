		<?php 


		/**
		 * summary
		 */
		class Empresa
		{

			private $logo_empresa;
			private $favico_empresa;
			private $id_empresa;
			private $nombre;
			private $sector;
			private $correo;
			private $hash_contrasena;
			private $nit;
			private $direccion;
			private $telefono;
			private $descripcion;
			private $estado;


		/**
		 * @return type
		 */
		public function getLogo_empresa()
		{
				return $this->logo_empresa;
		}
		/**
		 * @return type
		 */
		public function getNombre()
		{
			return $this->nombre;
		}

		/**
		 * @return type
		 */
		public function getSector()
		{
			return $this->sector;
		}

		/**
		 * @return type
		 */
		public function getCorreo()
		{
			return $this->correo;
		}

		/**
		 * @return type
		 */
		public function getNit()
		{
			return $this->nit;
		}

		/**
		 * @return type
		 */
		public function getDireccion()
		{
			return $this->direccion;
		}

		/**
		 * @return type
		 */
		public function getTelefono()
		{
			return $this->telefono;
		}

		/**
		  * @return type
		*/
		public function getDescipcion()
		{
			return $this->descipcion;
		}

		/**
		 * @param type $favico_empresa
		 */
		public function setFavico_empresa($favico_empresa)
		{
		    $this->favico_empresa = $favico_empresa;
		    return $this;
		}

		/**
		 * @return type
		 */
		public function getFavico_empresa()
		{
		    return $this->favico_empresa;
		}


			    /**
			     * @param type $logo_empresa
			     */
			    public function setLogo_empresa($logo_empresa)
			    {
			    	$this->logo_empresa = $logo_empresa;
			    	return $this;
			    }

			    /**
			     * @param type $nombre
			     */
			    public function setNombre($nombre)
			    {
			    	$this->nombre = $nombre;
			    	return $this;
			    }

			    /**
			     * @param type $sector
			     */
			    public function setSector($sector)
			    {
			    	$this->sector = $sector;
			    	return $this;
			    }

			    /**
			     * @param type $correo
			     */
			    public function setCorreo($correo)
			    {
			    	$this->correo = $correo;
			    	return $this;
			    }

			    /**
			     * @param type $nit
			     */
			    public function setNit($nit)
			    {
			    	$this->nit = $nit;
			    	return $this;
			    }

			    /**
			     * @param type $direccion
			     */
			    public function setDireccion($direccion)
			    {
			    	$this->direccion = $direccion;
			    	return $this;
			    }

			    /**
			     * @param type $descripcion
			     */
			    public function setDescripcion($descripcion)
			    {
			    	$this->descripcion = $descripcion;
			    	return $this;
			    }
			    /**
			     * @param type $telefono
			     */
			    public function setTelefono($telefono)
			    {
			    	$this->telefono = $telefono;
			    	return $this;
			    }
			}