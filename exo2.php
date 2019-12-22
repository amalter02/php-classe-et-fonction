<html>
	
	<head>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
	
	</head>
	
	<body>
        <pre>
            <?php
                class Personnage
                {
                    private $_pseudo;
                    private $_vie = 00;
                
                    public function __construct()
                        {
                            $this->_vie = $this->_vie + 100;
                            echo "J'ai ".$this->_vie.' de vie';
                        }
                }
                $perso = new personnage;
            ?>
        </pre>	
    </body>
</html>