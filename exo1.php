<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
	</head>
	<body>
        <pre>
            <?php

                class user
                {
                    private $_nom;
                    private $_prenom;
                    
                    public function afficheruser($newnom, $newprenom)
                        {
                            $this->_nom = $newnom;
                            $this->_prenom = $newprenom;
                            echo " je suis un user et je me nomme ".$newnom." ".$newprenom;   
                        }
                    public function affichernom ($newnom)
                        {
                            $this->_nom = $newnom;
                            echo $newnom;
                        }
                    public function afficherprenom ($newprenom)
                        {
                            $this->_prenom = $newprenom;
                            echo $newprenom;
                        }
                }       
            ?>
        </pre>	
    </body>
</html>    