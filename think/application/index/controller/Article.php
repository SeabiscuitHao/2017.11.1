<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Article extends Controller
{
  public function article()
  {
    return $this -> fetch('article');
  }
}
