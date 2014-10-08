<?php 

class FormModel extends Model {
    
    // 定义自动验证
    protected $_validate    =   array(
        array('title','require','You must have a title ,man'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
}
?>