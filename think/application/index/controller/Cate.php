<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Cate extends Controller
{
  public function cate()
  {
    $cateid = input('cateid');

    $cates = Db::name('cate') -> find($cateid);
    $this -> assign('cates',$cates);
    $tags = Db::name('tags') -> select();
    $this -> assign('tags',$tags);
    $articleres = Db::name('article') -> select();// -> where(array('cateid' => $cateid))
    $this -> assign('articleres',$articleres);
    return $this -> fetch('cate');
  }
}
