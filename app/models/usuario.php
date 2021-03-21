    <?php 
    
    class usuario
    {
            private $db;

        public function __construct()
        {
            $this->db = new Base;
        } 

        public function verificarUsuario($datosUsuario)
        {
            $this->db->query('SELECT usuario FROM ususarios WHERE usuario = :user');
            $this->db->bind(':user' , $datosUsuario['usuario']);
            if ( $this->db->rowcount()) {
                return false;
            }  else {
                return true;
            }
        }

        public function register($datosUsuario)
        {
            $this->db->query('INSERT INTO usuarios (idPrivilegio,correo,usuario,contrasena)VALUES(:privilegio , :correo ,:usuario , :contraseña)');
            $this->db->bind(':privilegio' , $datosusuario['privilegio']);
            $this->db->bind(':correo' , $datosusuario['email']);
            $this->db->bind(':usuario' , $datosusuario['usuario']);
            $this->db->bind(':contrasena' , $datosusuario['contraseña']);

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }


        }
    }






    