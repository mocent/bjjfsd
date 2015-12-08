<?php
namespace Admin\Controller;
use Admin\Common\AController;
class ProductController extends AController {
    private $db;
    private $type;
    private $title = '案例展示';
    private $configs = array(
        'allow_desc'        => 1,   //描述
        'allow_content'     => 1,   //内容
        'allow_extends'     => 1,   //扩展
        'allow_create_time' => 1,   //发布时间
    );
    private $extends = array(
        'field_1' => array(
            'type' => 'thumb',
            'title' => '创意说明图',
            'desc' => '建议图片尺寸：893*0px',
        ),
        'field_2' => array(
            'type' => 'thumbs',
            'title' => '网站效果图',
            'desc' => '建议图片尺寸：893*0px',
        ),
        'field_3' => array(
            'type' => 'thumb',
            'title' => '客户的好评',
            'desc' => '建议图片尺寸：893*0px',
        ),
        'url' => array(
            'type' => 'text',
            'title' => '网站地址',
            'desc' => '网站演示地址',
        ),
    );

    public function _init () {
        //获取类名称
        $this->type = str_replace('Controller', '', substr(strrchr(__CLASS__, '\\'), 1));
        $this->assign('__ACT__', strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/index'));
        $this->meta_head = '<a href="'.U($this->type . '/index').'">'. $this->title .'管理</a>';
        $this->db = D($this->type);
        $this->assign('type', $this->type);
        $this->assign('configs', $this->configs);
        $this->assign('extends', $this->extends);
    }

    /* 列表 */
    public function index(){
        $map = $search = array(
            'status' => 1,
            'type' => $this->type,
        );
        $catid = I('catid', 0, 'intval');
        if (!empty($catid)) {
            $map['catid'] = $catid;
            $search['catid'] = $catid;
        }
        $server = I('server', 0, 'intval');
        if (!empty($server)) {
            $map['server'] = $server;
            $search['server'] = $server;
        }
        $profession = I('profession', 0, 'intval');
        if (!empty($profession)) {
            $map['profession'] = $profession;
            $search['profession'] = $profession;
        }
        $title = I('title');
        if (!empty($title)) {
            $map['title'] = array('like', '%'. $title .'%');
            $search['title'] = $title;
        }
        $list = $this->lists($this->type, $map, 'sort desc, id desc');
        $this->assign('list', $list);
        $fields = M()->query('SHOW FULL COLUMNS FROM __'. strtoupper($this->type) .'__');
        $positions = array();
        foreach ($fields as $key => $value) {
            if (strpos($value['field'], 'position_') !== false) {
                $positions[$value['field']] = $value['comment'];
            }
        }
        unset($fields);
        $this->assign('positions', $positions);
        $this->assign('category', D('category')->getAll());
        $this->assign('cate_list', D('category')->formatTree());
        $this->assign('search', $search);
        $this->meta_title = $this->title . '列表';
        $this->display();
    }

    /* 新增 */
    public function add($catid = 0) {
        if (IS_POST) {
            if (!$this->db->input()) {
                $this->error($this->db->getError());
            } else {
                action_log();
                $this->updateCache();
                $this->success('新增成功', U('index'));
            }
        } else {
            $cate_list = D('category')->formatTree();
            foreach ($cate_list as $key => $value) {
                if ($value['id'] == $catid) {
                    $this->assign('cate_info', $value);
                    break;
                } else {
                    continue;
                }
            }
            $this->assign('cate_list', $cate_list);

            $this->assign('info', array('type'=>$this->type,'catid'=>I('catid')));
            $this->meta_title = '新增' . $this->title;
            $this->display();
        }
    }

    /* 修改 */
    public function edit($catid = 0) {
        if (IS_POST) {
            if (!$this->db->update()) {
                $this->error($this->db->getError());
            } else {
                action_log();
                $this->updateCache();
                $this->success('更新成功', U('index'));
            }
        } else {
            $id = I('id',0,'intval');
            $info = $this->db->find($id);
            if (!$info) {
                $this->error('不存在！');
            } else {
                $info['extends'] = unserialize($info['extends']);
                $this->assign('info', $info);
            }
            $cate_list = D('category')->formatTree();
            foreach ($cate_list as $key => $value) {
                if ($value['id'] == $info['catid']) {
                    $this->assign('cate_info', $value);
                    break;
                } else {
                    continue;
                }
            }
            $this->assign('cate_list', $cate_list);
            $this->meta_title = '更新' . $this->title;
            $this->display();
        }
    }
    /* 批量推荐 */
    public function position($id = 0, $position = '', $status = 0) {
        if (empty($id) || empty($position)) {
            $this->error('参数错误');
        }
        if($this->db->where(array('id'=>$id))->setField($position, $status)){
            action_log();
            $this->success('成功');
        } else {
            $this->error('失败！');
        }
    }

    /*  删除 */
    public function del() {
        $id = array_unique((array)I('id',0));
        //print_r($id); exit;
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }
        $map = array('id' => array('in', $id) );
        if($this->db->where($map)->delete()){
            action_log();
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

    /* 更新缓存 */
    protected function updateCache() {

    }
}
