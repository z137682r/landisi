<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
use think\Validate;

class Navigation extends Common
{
    public function _initialize(){
        parent::_initialize();
    }
    //广告列表
    public function index(){

        if(request()->isPost()) {
            $key = input('post.key');
            $this->assign('testkey', $key);
            $page =input('page')?input('page'):1;
            $pageSize =input('limit')?input('limit'):config('pageSize');
            $list = db('navigation')
                ->where('name', 'like', "%" . $key . "%")
                ->order('sort')
                ->paginate(array('list_rows'=>$pageSize,'page'=>$page))
                ->toArray();
            $navigationList=db('navigation')->where(['pid'=>0])->order('sort')->select();
            $navigation = [
                '0' => '顶级'
            ];
            foreach ($navigationList as $val){
                $navigation[$val['id']] = $val['name'];
            }
            foreach ($list['data'] as $k=>$v){
                $list['data'][$k]['pname'] = isset($navigation[$v['pid']])?$navigation[$v['pid']]:'已删除';
                $list['data'][$k]['addtime'] = date('Y-m-d H:s',$v['addtime']);
                $list['data'][$k]['edittime'] = date('Y-m-d H:s',$v['edittime']);
            }
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list['data'],'count'=>$list['total'],'rel'=>1];
        }
        return $this->fetch();
    }
    public function add(){
        if(request()->isPost()) {
            $data = input('post.');
            //构建验证数据
            $validate = new Validate(
                [
                    'pid'    => 'require|integer',
                    'name'   => 'require|max:20',
                    'url'    => 'require|url',
                    'status' => 'require|in:0,1',
                    'sort'   => 'integer|max:10',
                ]
            );

            if(!$validate->check($data)){
                $this->error($validate->getError());
            }

            $data['addtime'] = time();
            $data['edittime'] = time();
            if(db('navigation')->insert($data)){
                $this->success('添加成功','index');
            }else{
                $this->error('添加失败');

            };
        }else{
            $navigationList=db('navigation')->where(['pid'=>0])->order('sort')->select();
            $this->assign('navigationList',$navigationList);

            $this->assign('title',lang('add').lang('navigation'));
            $this->assign('info','null');
            return $this->fetch('form');
        }
    }
    public function edit(){
        if(request()->isPost()) {
            $data = input('post.');
            //构建验证数据
            $validate = new Validate(
                [
                    'pid'    => 'require|integer',
                    'name'   => 'require|max:20',
                    'url'    => 'require|url',
                    'status' => 'require|in:0,1',
                    'sort'   => 'integer|max:10',
                ]
            );

            if(!$validate->check($data)){
                $this->error($validate->getError());
            }


            $data['id'] =input('id');
            $data['edittime'] = time();
            if(db('navigation')->update($data)){
                $this->success('广告修改成功');
            }else{
                $this->error('广告修改失败');
            }
        }else{
            $navigationList=db('navigation')->where(['pid'=>0])->order('sort')->select();
            $this->assign('navigationList',$navigationList);
            $navigationInfo=db('navigation')->where(['id'=>input('id')])->find();
            $this->assign('info',$navigationInfo);
            $this->assign('title',lang('edit').lang('ad'));
            return $this->fetch('form');
        }
    }
    //设置广告状态
    public function editState(){
        $id=input('post.id');
        $status=input('post.status');
        if(db('navigation')->where('id='.$id)->update(['status'=>$status])!==false){
            return ['status'=>1,'msg'=>'设置成功!'];
        }else{
            return ['status'=>0,'msg'=>'设置失败!'];
        }
    }
    public function navigationOrder(){
        $data = input('post.');
        if(db('navigation')->update($data)!==false){
            cache('navigationList', NULL);
            return $result = ['msg' => '操作成功！','url'=>url('index'), 'code' =>1];
        }else{
            return $result = ['code'=>0,'msg'=>'操作失败！'];
        }
    }
    public function del(){
        db('navigation')->where(array('id'=>input('id')))->delete();
        cache('navigationList', NULL);
        return ['code'=>1,'msg'=>'删除成功！'];
    }
    public function delall(){
        $map['id'] =array('in',input('param.ids/a'));
        db('navigation')->where($map)->delete();
        cache('navigationList', NULL);
        $result['msg'] = '删除成功！';
        $result['code'] = 1;
        $result['url'] = url('index');
        return $result;
    }

    /***************************位置*****************************/
    //位置
    public function type(){
        if(request()->isPost()) {
            $key = input('key');
            $this->assign('testkey', $key);
            $list = db('ad_type')->where('name', 'like', "%" . $key . "%")->order('sort')->select();
            return $result = ['code'=>0,'msg'=>'获取成功!','data'=>$list,'rel'=>1];
        }
        return $this->fetch();
    }
    public function typeOrder(){
        $ad_type=db('ad_type');
        $data = input('post.');
        if($ad_type->update($data)!==false){
            return $result = ['msg' => '操作成功！','url'=>url('type'), 'code' =>1];
        }else{
            return $result = ['code'=>0,'msg'=>'操作失败！'];
        }
    }
    public function addType(){
        if(request()->isPost()) {
            db('ad_type')->insert(input('post.'));
            $result['code'] = 1;
            $result['msg'] = '广告位保存成功!';
            $result['url'] = url('type');
            return $result;
        }else{
            $this->assign('title',lang('add').lang('ad').'位');
            $this->assign('info','null');
            return $this->fetch('typeForm');
        }
    }
    public function editType(){
        if(request()->isPost()) {
            db('ad_type')->update(input('post.'));
            $result['code'] = 1;
            $result['msg'] = '广告位修改成功!';
            $result['url'] = url('type');
            return $result;
        }else{
            $type_id=input('param.type_id');
            $info=db('ad_type')->where('type_id',$type_id)->find();
            $this->assign('title',lang('edit').lang('ad').'位');
            $this->assign('info',json_encode($info,true));
            return $this->fetch('typeForm');
        }
    }
    public function delType(){
        $map['type_id'] = input('param.type_id');
        db('ad_type')->where($map)->delete();//删除广告位
        db('ad')->where($map)->delete();//删除该广告位所有广告
        return ['code'=>1,'msg'=>'删除成功！'];
    }
}