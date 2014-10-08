<?php 
class FormAction extends Action{

    public function insert(){

        $Form = D("Form");
        if($Form->create()){

            $result = $Form->add();

            if($result){
                $this->success("write sucessfully");
            }else{
                $this->error("write error");
            }

        }else{
            $this->error($Form->getError());
        }

        //echo "<em>HAHA</em><br>";
    }

    public function read($id=1){

        $Form = M("Form");
        $data = $Form->find($id);

        if($data){

            $this->data=$data;

        }else{

            $this->error('error code '.$id.' ;date error,please check your database');
        }
        $this->display();
    }

    public function edit($id=1){

        $Form = M("Form");

        $this->vo = $Form->find($id);

        $this->display();

    }

    public function delete($id){
        
        if($id==null){
            $this.error("Your gonna notion man");
        }else{
            $Form = M("Form");
            $result = $Form->delete($id);

            if($result){
                $this->success("Delete Done !");
            }else{
                $this->error("Delete Failed !!!");
            }
        }
    }

    public function update(){

        $Form = D("Form");

        if($Form->create()){

            $result = $Form->save();

            if($result){
                $this->success("Update sucessfully !");
            }else{
                $this->error("Update failed !");
            }
        }else{
            $this->error("create is not good");
        }
    }
}
?>