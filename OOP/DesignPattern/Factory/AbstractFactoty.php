<?php
/**
 * Created by PhpStorm.
 * User: zjf
 * Date: 2018/11/8
 * Time: 15:36
 */

/* 产品 start*/
interface IDAL_User{
    function insert();

    function get();
}

class SQLServer_Student_DAL implements IDAL_User{
    public function insert()
    {
        echo "插入一个学生！";
    }

    public function get()
    {
        echo "获取一个学生！";
    }
}

class MySQL_Student_DAL implements IDAL_User{
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
interface IDALFactory{
    function getUserDAL();
}

class SQLServerFactory implements IDALFactory{
    public function getUserDAL()
    {
        return new SQLServer_Student_DAL();
    }
}

class MySQLFactory implements IDALFactory{
    public function getUserDAL()
    {
        return new MySQL_Student_DAL();
    }
}

class DAL {
    const dbType='SQLSERVER';

    function getUserDAL(){

        switch (self::dbType){
            case 'SQLSERVER':
                $result=new SQLServer_Student_DAL();
                break;
            case 'MYSQL':
                $result=new MySQL_Student_DAL();
                break;
        }
        return$result;
    }
}
/*工厂 end*/

/*客户端*/
$factory=new SQLServerFactory();

$dal=$factory->getUserDAL();

$dal->insert();
echo "<br>";
$dal->get();


