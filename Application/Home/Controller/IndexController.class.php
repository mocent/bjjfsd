<?php
namespace Home\Controller;
use Home\Common\IController;
class IndexController extends IController {
    protected $NAVS= array();   // 一级导航
    protected $CATEGORYS = array(); //所有栏目信息

    protected $order = 'sort desc, id desc'; //统一排序

    public function _init() {

        /* 所有栏目信息 */
        $this->CATEGORYS = D('Category')->getAll();
        $this->assign('CATEGORYS', $this->CATEGORYS);

        /* 一级导航 */
		$catid = I('catid', 0, 'intval');
		foreach ($this->CATEGORYS as $key => $val) {
			if ($val['pid'] == 0 && $val['display']) {
				$this->NAVS[$key] = $val;
				// 目前延伸3级
				if ($key == $catid || $key == $this->CATEGORYS[$catid]['pid'] || $key == $this->CATEGORYS[$key == $this->CATEGORYS[$catid]['pid']]['pid']) {
					$this->NAVS[$key]['action'] = 1;
					$top_catid = $key;
				} else {
					$this->NAVS[$key]['action'] = 0;
				}
			}
		}
		$this->assign('top_catid', $top_catid);
        $this->assign('NAVS', $this->NAVS);
    }

    /* 首页 */
    public function index(){
        $meta_title = C('WEB_SITE_TITLE');
        $meta_keywords = C('WEB_SITE_KEYWORD');
        $meta_description = C('WEB_SITE_DESCRIPTION');

        $this->assign('is_title', 1);
        $this->assign('meta_title', $meta_title);
        $this->assign('meta_keywords', $meta_keywords);
        $this->assign('meta_description', $meta_description);
        $this->display();
    }

    /* 列表 */
    public function lists($catid = 0) {
        if (!$catid) {
            $this->redirect('index');
        }

        //当前栏目信息
        $CAT = $this->CATEGORYS[$catid];
        if ($CAT['setting']['location_catid']) {
            $this->redirect('lists', array('catid'=>$CAT['setting']['location_catid']));
        }
        if (!$CAT['setting']['allow_category']) {
            //子栏目列表
            $childs_2 = get_category($catid);
            // 取第一个子catid
            if ($childs_2) {
                $child_shift_2 = array_shift($childs_2);
                $childs_3 =  get_category($child_shift_2['id']);
                if ($childs_3) {
                    $child_shift_3 = array_shift($childs_3);
                    $catid = $child_shift_3['id'];
                } else {
                    $catid = $child_shift_2['id'];
                }
            }
        }
        //当前栏目信息
        $CAT = $this->CATEGORYS[$catid];
        $this->assign('CAT', $CAT);
        $this->assign('catid', $catid);

        switch ($CAT['type']) {
            case 'Pay':
            case 'Jianzhan':
            case 'Zhao':
            case 'News':
            case 'Sping':
            case 'Team':
            case 'Haoping':
                $template = $CAT['setting']['list_template'] ? $CAT['setting']['list_template'] : 'lists';
                if (IS_AJAX) {
                    $template .= 'Ajax';
                }
                $where = array();
                $where['status'] = 1;
                $where['type'] = $CAT['type'];
                $where['catid'] = $catid;
                if ($CAT['setting']['page_num']) {
                    $page_num = $CAT['setting']['page_num'];
                } else {
                    $page_num = 0;
                }
                $list = $this->getAll('News', $where, $this->order, $page_num);
                foreach ($list as $key => $val) {
                    $list[$key]['url'] = U('show', array('catid'=>$catid,'id'=>$val['id']));
                }
                foreach ($list as $key => $val) {
                    if ($val['extends']) {
                        $list[$key]['extends'] = unserialize($val['extends']);
                    }
                }
                $this->assign('list', $list);
                $meta_title = $CAT['setting']['meta_title'] ? $CAT['setting']['meta_title'] : $CAT['title'] . ' - ';
                $meta_keywords = $CAT['setting']['meta_keywords'] ? $CAT['setting']['meta_keywords'] : '';
                $meta_description = $CAT['setting']['meta_description'] ? $CAT['setting']['meta_description'] : '';
                break;
            case 'Product':
                $case_type =  I('case_type', C('CASE_TYPE'), 'trim');
                $sousuo['case_type'] = $case_type;
                $template = $CAT['setting']['list_template'] ? $CAT['setting']['list_template'] : 'lists';
                $template .= '_'. $case_type;
                if (IS_AJAX) {
                    $template .= '_ajax';
                }
                $where = array();
                $where['status'] = 1;
                $where['type'] = $CAT['type'];
                $where['catid'] = $catid;
                $server = I('server', 0, 'intval');
                if ($server) {
                    $where['server'] = $server;
                    $sousuo['server'] = $server;
                }
                $profession = I('profession', 0, 'intval');
                if ($profession) {
                    $where['profession'] = $profession;
                    $sousuo['profession'] = $profession;
                }
                $style = I('style', 0, 'intval');
                if ($style) {
                    $where['style'] = $style;
                    $sousuo['style'] = $style;
                }
                if ($CAT['setting']['page_num']) {
                    $page_num = $CAT['setting']['page_num'];
                } else {
                    $page_num = 0;
                }
                $moods_desc = I('moods_desc');
                if ($moods_desc) {
                    $this->order = 'moods desc, '. $this->order;
                    $sousuo['moods_desc'] = 1;
                }
                $time_desc = I('time_desc');
                if ($time_desc) {
                    $this->order = 'create_time desc, '. $this->order;
                    $sousuo['time_desc'] = 1;
                }
                $sort = I('sort');
                if (empty($moods_desc) && empty($time_desc)) {
                    $sort = 1;
                }
                if ($sort) {
                    $this->order = '';
                    $sousuo['sort'] = 1;
                }
                $list = $this->getAll($CAT['type'], $where, $this->order, $page_num);
                foreach ($list as $key => $val) {
                    $list[$key]['url'] = U('product', array('catid'=>$catid,'id'=>$val['id']));
                }
                foreach ($list as $key => $val) {
                    if ($val['extends']) {
                        $list[$key]['extends'] = unserialize($val['extends']);
                    }
                }
                $this->assign('sousuo', $sousuo);
                $this->assign('list', $list);
                $meta_title = $CAT['setting']['meta_title'] ? $CAT['setting']['meta_title'] : $CAT['title'] . ' - ';
                $meta_keywords = $CAT['setting']['meta_keywords'] ? $CAT['setting']['meta_keywords'] : '';
                $meta_description = $CAT['setting']['meta_description'] ? $CAT['setting']['meta_description'] : '';
                break;
            case 'Pages':
                $template = $CAT['setting']['page_template'] ? $CAT['setting']['page_template'] : 'pages';
                $content = M('Pages')->where(array('catid'=>$catid))->getField('content');
                $this->assign('content', get_content($content));

                $meta_title = $CAT['setting']['meta_title'] ? $CAT['setting']['meta_title'] : $CAT['title'] . ' - ';
                $meta_keywords = $CAT['setting']['meta_keywords'] ? $CAT['setting']['meta_keywords'] : '';
                $meta_description = $CAT['setting']['meta_description'] ? $CAT['setting']['meta_description'] : '';
                break;

            case 'Special':
                $template = $CAT['setting']['special_template'] ? $CAT['setting']['special_template'] : 'special';
                $meta_title = $CAT['setting']['meta_title'] ? $CAT['setting']['meta_title'] : $CAT['title'] . ' - ';
                $meta_keywords = $CAT['setting']['meta_keywords'] ? $CAT['setting']['meta_keywords'] : '';
                $meta_description = $CAT['setting']['meta_description'] ? $CAT['setting']['meta_description'] : '';
                break;

            default:
                $this->redirect('index');
                break;
        }

        $meta_title .= C('WEB_SITE_TITLE');
        $meta_keywords = $meta_keywords ? $meta_keywords : C('WEB_SITE_KEYWORD');
        $meta_description = $meta_description ? $meta_description : C('WEB_SITE_DESCRIPTION');
        $this->assign('meta_title', $meta_title);
        $this->assign('meta_keywords', $meta_keywords);
        $this->assign('meta_description', $meta_description);
        $this->display($template);
    }

    /* 详情 */
    public function show($id = 0) {
        if (empty($id)) {
            $this->redirect('index');
        }
        $info = M('News')->find($id);
        if (empty($info)) {
            $this->redirect('index');
        }
        $this->assign('catid', $info['catid']);
        //当前栏目信息
        $CAT = $this->CATEGORYS[$info['catid']];
        $this->assign('CAT', $CAT);
        $info['content'] = get_content($info['content']);

        $this->assign('info', $info);

        $template = $CAT['setting']['show_template'] ? $CAT['setting']['show_template'] : 'show';

        $meta_title = $info['title'] . ' - ' . C('WEB_SITE_TITLE');
        $meta_keywords = $info['title'];
        $meta_description = $info['description'];
        $this->assign('meta_title', $meta_title);
        $this->assign('meta_keywords', $meta_keywords);
        $this->assign('meta_description', $meta_description);
        $this->display($template);
    }

    /* 案例详情 */
    public function product($id = 0) {
        if (empty($id)) {
            $this->redirect('index');
        }
        $info = M('Product')->find($id);
        if (empty($info)) {
            $this->redirect('index');
        }
        $this->assign('catid', $info['catid']);
        //当前栏目信息
        $CAT = $this->CATEGORYS[$info['catid']];
        $this->assign('CAT', $CAT);
        $info['content'] = get_content($info['content']);
        $info['extends'] = unserialize($info['extends']);

        $this->assign('info', $info);

        $template = $CAT['setting']['show_template'] ? $CAT['setting']['show_template'] : 'show';

        $meta_title = $info['title'] . ' - ' . C('WEB_SITE_TITLE');
        $meta_keywords = $info['title'];
        $meta_description = $info['description'];
        $this->assign('meta_title', $meta_title);
        $this->assign('meta_keywords', $meta_keywords);
        $this->assign('meta_description', $meta_description);
        $this->display($template);
    }

    /* 搜索（根据情况自定义） */
    public function search($keyword = ''){
        $where = array(
            'title' => array('like', '%'. $keyword .'%'),
        );

        $list = $this->getAll('News', $where, $this->order, $page_num);
        foreach ($list as $key => $val) {
            $list[$key]['url'] = U('show', array('catid'=>$val['catid'],'id'=>$val['id']));
        }
        $this->assign('list', $list);
        $template = ACTION_NAME;
        if (IS_AJAX) {
            $template .= 'Ajax';
        }
        $this->assign('keyword', $keyword);
        $this->display($template);
    }

    /* 在线留言 */
    public function message() {
        if (IS_POST) {
            $type = I('type', 'default', 'trim');
            $Message = M('Message');
            switch ($type) {
                case 'shouji':      //手机专题表单
                    $validate = array(
                         array('type','require','留言类型必须！',1),
                         array('zhuti','require','留言主题必须！',1),
                         array('title','require','客户姓名必须！',1),
                         array('tel','require','留言主题必须！',1),
                         array('content','require','留言主题必须！',1)
                    );
                    if (!$Message->validate($validate)->create()){
                         $this->error($Message->getError());
                    }else{
                        $auto = array (
                            array('status','1'),  // 新增的时候把status字段设置为1
                            array('create_time','time',3,'function'),
                            array('update_time','time',1,'function'),
                        );

                        $Message->auto($auto)->create();
                        $result = $Message->add();
                        if ($result) {
                            $this->success('留言成功');
                        } else {
                            $this->error('留言失败');
                        }
                    }
                    break;
                case 'yingxiao':    //营销型专题表单
                    $validate = array(
                         array('type','require','留言类型必须！',1),
                         array('zhuti','require','您的网址必须！',1),
                         array('title','require','联系人必须！',1),
                         array('tel', 'require', '手机人电话必填！'),
                         array('tel', 'check_mobile', '手机人电话格式不对！',1,'function'),
                         array('content','require','邮箱必须！',1),
                         array('content','email','邮箱格式不对！',1)
                    );
                    if (!$Message->validate($validate)->create()){
                         $this->error($Message->getError());
                    }else{
                        $auto = array (
                            array('status','1'),  // 新增的时候把status字段设置为1
                            array('create_time','time',3,'function'),
                            array('update_time','time',1,'function'),
                        );
                        $Message->auto($auto)->create();
                        $result = $Message->add();
                        if ($result) {
                            $this->success('留言成功');
                        } else {
                            $this->error('留言失败');
                        }
                    }
                    break;
                case 'wechat':      //微网站专题表单
                    $validate = array(
                        array('type','require','留言类型必须！',1),
                        array('zhuti','require','您的网址必须！',1),
                        array('title','require','联系人必须！',1),
                        array('tel', 'require', '手机人电话必填！'),
                        array('tel', 'check_mobile', '手机人电话格式不对！',1,'function'),
                        array('content','require','邮箱必须！',1),
                        array('content','email','邮箱格式不对！',1)
                    );
                    if (!$Message->validate($validate)->create()){
                         $this->error($Message->getError());
                    }else{
                        $auto = array (
                            array('status','1'),  // 新增的时候把status字段设置为1
                            array('create_time','time',3,'function'),
                            array('update_time','time',1,'function'),
                        );

                        $Message->auto($auto)->create();
                        $result = $Message->add();
                        if ($result) {
                            $this->success('留言成功');
                        } else {
                            $this->error('留言失败');
                        }
                    }
                    break;

                default:
                    $validate = array(
                        array('verify','check_verify','验证码错误！',1,'function'),
                        array('title', 'require', '联系人必填!',1),
                        array('zhuti', 'require', '类型必填！',1),
                        array('tel', 'require', '手机人电话必填！'),
                        array('tel', 'check_mobile', '手机人电话格式不对！',1,'function'),
                        array('content', 'require', '内容必填！',1)
                    );
                    if (!$Message->validate($validate)->create()){
                         $this->error($Message->getError());
                    }else{
                        $auto = array (
                            array('status','1'),  // 新增的时候把status字段设置为1
                            array('create_time','time',3,'function'),
                            array('update_time','time',1,'function'),
                            array('type','default'),
                        );

                        $Message->auto($auto)->create();
                        $result = $Message->add();
                        if ($result) {
                            $this->success('留言成功');
                        } else {
                            $this->error('留言失败');
                        }
                    }
                    break;
            }

            // $model = D('Message');
            // if ($model->input()) {
            //     $this->success('留言成功');
            //
            // } else {
            //     $this->error($model->getError());
            // }
        } else {
            $this->display();
        }
    }

    /* 验证码 */
    public function verify(){
        $verify = new \Think\Verify();
        $verify->length = 4;
        $verify->fontSize = 16;
        $verify->entry();
    }
}
