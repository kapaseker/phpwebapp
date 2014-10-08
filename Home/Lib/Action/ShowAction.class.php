<?php 

    class ShowAction extends Action{
        public function msg(){
            // echo "This is the msg in ShowAction<br>";
            // echo "<em>Hello,world<em/>";

            $this->name="thinkphp";
            $this->display();
        }

        public function sql(){
            $Data = M("data");
            $this->data=$Data->select();
            $this->display();
        }
    }
 ?>