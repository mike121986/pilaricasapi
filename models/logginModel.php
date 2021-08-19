<?php
// require_once root_base;
 require_once $_SERVER['DOCUMENT_ROOT']."/config/modeloBase.php";


class Login extends ModeloBase{
    private $id;
    private $idUsuario;
    private $email;
    private $pass;
    private $idEstado;
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 

         /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        //return $this->pass;
        return password_hash($this->db->real_escape_string($this->pass), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
        /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
/**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * @param mixed $idEstado
     *
     * @return self
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }
    
    public function __construct() {
        parent::__construct();
    }

    public function getDoctor(){
        $result = false;
        $password = $this->pass;
        $get = "SELECT * FROM usuario ud WHERE ud.correoUsuario = '{$this->getEmail()}'";
        $qiery = $this->db->query($get);
        if($qiery && $qiery->num_rows == 1){
            $Usurario = $qiery->fetch_object();

            // verifica contraseña
            $verify = password_verify($password, $Usurario->passwordUsuario);

            if($verify){
                $result = $Usurario;
            }
        }
        return $result;
    }

    public function getConsultorio(){
        $con = "SELECT c.id_consultorio,c.nombreConsultorio FROM consultorio c WHERE c.id_consultorio = '{$this->getId()}'";
        $query = $this->db->query($con);
    
        if($query && $query->num_rows == 1){
            $consultorio = $query->fetch_object();
            return $consultorio;
        }
    }

    // public function getMenUsuario(){
    //     $menu = "SELECT * FROM menuUsuarioDoctor WHERE idUsuario = '{$this->getIdUsuario()}'";
    //     $getMEnu = $this->db->query($menu);

    //     $showMenu = false;
    //     if($getMEnu){
    //         $showMenu = $getMEnu;
    //     }
    //     return $showMenu;
    // }

    public function getMunModels(){
    	$consulta = "SELECT mp.idMunicipio,mp.municipio,es.estado FROM estados_municipios esmp
									INNER JOIN municipios mp
									ON esmp.municipios_id = mp.idMunicipio
									INNER JOIN estados es
									ON esmp.estados_id = es.idEstado
									WHERE es.idEstado = {$this->getIdEstado()}";
    	$query = $this->db->query($consulta);

        return $query;
    }

    





}
