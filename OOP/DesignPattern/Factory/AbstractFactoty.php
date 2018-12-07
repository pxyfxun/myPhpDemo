<?php
/**
 * Created by PhpStorm.
 * User: zjf
 * Date: 2018/11/8
 * Time: 15:36
 */

/* 产品 start*/
interface IDAL_Student{
    function insert();

    function get();
}

class SQLServer_Student_DAL implements IDAL_Student{
    public function insert()
    {
        echo "插入一个学生！";
    }

    public function get()
    {
        echo "获取一个学生！";
    }
}

class MySQL_Student_DAL implements IDAL_Student{
    public function insert()
    {
        echo "插入一个学生！";
    }

    public function get()
    {
        echo "获取一个学生！";
    }
}

/* 产品 end*/

/*工厂 start*/
class DAL {
    const dbType='SQLServer';

    static function getStudentDAL(){ 
        $classname=self::dbType.'_Student_DAL';
        $result=new $classname();
        return $result;
    }
}
/*工厂 end*/

/*客户端*/
 

$dal=DAL::getStudentDAL();

$dal->insert();
echo "<br>";
$dal->get();


