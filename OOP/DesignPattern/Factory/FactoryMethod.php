<?php
//工厂模式是指，把“要实例化谁？以后会不会增加新的实例化类别”，交给专门的一个工厂去做
//工厂方法模式
/**
 * 工厂方法模式把判断“要实例化谁？”这个逻辑交给了客户端，但是带来的好处是，避免了简单工厂模式中对工厂的修改。
 * 如果增加了实例类型的话，只需要扩展工厂（对工厂的修改关闭，扩展开放）。
 * 换言之，有多少个产品，就有多少个对相应的工厂，每个工厂只生产一种产品
 */


/*产品 start*/
//操作父类
abstract class Operation{
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

interface IFactory{
   public function createInstance();
}

//加法工厂
class SubOperationFactory implements IFactory {
    public function createInstance(){
        return new SubOperation();
    }
}

//乘法工厂
class MulOperationFactory implements IFactory {
    public function createInstance(){
        return new MulOperation();
    }
}
/*工厂 end*/

/*客户端*/
//实际上，如果是强类型语言，如c#，就因该用工厂的接口来声明$factory
$factory=new SubOperationFactory();
$obj=$factory->createInstance();
$obj->numA=1;
$obj->numB=2;

$result=$obj->getResult();

echo $result;



