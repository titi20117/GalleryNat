<?php
    // header("Content-type: text/json; charset=utf-8");
    include("ClassConnection.php");

    class ClassApi extends ClassConnection {
    
        #Exibição dos carros em um json
        public function displayApi()        
        {
            $BFetch=$this->connectDB()->prepare("select * from sneakers");
            $BFetch->execute();
    
            $J=[];
            $I=0;
    
            while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                $J[$I]=[
                    "id"=>$Fetch['id'],
                    "sex"=>$Fetch['sex'],
                    "size"=>$Fetch['size'],
                    "price"=>$Fetch['price'],
                    "brand"=>$Fetch['brand'],
                    "description"=>$Fetch['description'],
					"src"=>$Fetch['src']
                ];
                $I++;
            }
    
            header("Access-Control-Allow-Origin:*");
            header("Content-type: application/json");
            echo json_encode($J, JSON_UNESCAPED_UNICODE);
        }
    }
?>