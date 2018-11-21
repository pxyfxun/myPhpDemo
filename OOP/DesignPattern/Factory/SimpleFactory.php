<?php
//工厂模式是指，把“要实例化谁？以后会不会增加新的实例化类别”，交给专门的一个工厂去做
//简单工厂模式.
/**
 *简单工厂模式，就是“要实例化谁？”这个判断操作，放在了工厂内部，靠case语句去判断并执行实例化操作
 * 简单工厂模式，只有一个工厂，这一个工厂生产所有的产品
 */

/*产品 start*/
//操作父类
abstract  class Operation{
    public $numA;

    public $numB;

    //如果支持虚方法的话，实际这应该是一个虚方法
    public abstract  function getResult();
}

class SubOperation extends Operation {
    public function getResult(){
        return $this->numA + $this->numB;
    }
}

class MulOperation extends Operation {
    public function getResult(){
        return $this->numA * $this->numB;
    }
}
/*产品 end*/


/*工厂 start*/
//创建实例的工厂
class OperationFactory{
    public static function createInstance($op){
        switch ($op){
            case '+':
                $obj= new SubOperation();
                break;
            case '*':
                $obj= new MulOperation();
                break;
            return $obj;
        }
        return $obj;
    }
}
/*工厂 end*/

/*客户端*/
//实际上，如果是强类型语言，如c#，就因该用产品的父类“Operation”来声明$oper
$oper=OperationFactory::createInstance('+');
$oper->numA=1;
$oper->numB=2;

$result=$oper->getResult();

echo $result;