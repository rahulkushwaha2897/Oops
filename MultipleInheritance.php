<?php  
    class car  
    {  
        public function wheel()  
        {  
            echo "It has Four Wheel \n";  
        } 
        
        public function engine()  
        {  
            echo "10hp Engine\n";  
        }
        public function Ac()  
        {  
            echo "It has fast\n";  
        }
        public function Seater()  
        {  
            echo "It is 2 Seater\n";  
        }
    }  

    interface Prop { 
        public function TireInch(); 
     } 
     

    class HERO  extends car implements Prop
    {  
        public function engine()  //Overriding the property of skeleton Car Class and Adding new Features in Limited Edition of BMW car 
        {  
            echo "100hp Engine\n"; //Changing the HP of Car Engine 
        } 
        public function Seater()    //Overriding the property of skeleton Car Class and Adding new Features in Limited Edition of BMW car 
        {  
            echo "It is 2 Seater\n";  //Changing the Seater Type of imported Class
        }   
        public function TireInch()  //Defining the interface method .
        {
            echo "It is 12inch Tyre\n";  
        }
    }  
    $newCar = new HERO(); 
    $newCar->wheel();  
    $newCar->engine() ; 
    $newCar->AC();  
    $newCar->Seater() ;
    $newCar->TireInch();

?>