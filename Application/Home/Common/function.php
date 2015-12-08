<?php
/**
 * seo方法未完成
 * @param   string
 * @return  string
 */
function seo() {

    return '';
}

/**
 * 获取图片
 * @param
 * @return  string
 */
function thumb($img = '', $width = 0, $height = 0) {
    if (empty($img)) {
        return __ROOT__ . '/default.jpg';
    }
    $Uploads = '/Uploads/';
    $file = '.' . $Uploads . $img;
    if (file_exists($file)) {
        if (empty($width)) {
            return __ROOT__ . substr($file, 1);
        } else {
            $pathinfo = pathinfo($file);
            $thumb_file = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '_' . $width . '-' . $height . '.' . $pathinfo['extension'];
            if (file_exists($thumb_file)) {
                return __ROOT__ . substr($thumb_file, 1);
            } else {
                $image = new \Think\Image();
                $image->open($file);
                if (empty($height)) {
                    $height = $image->height();
                }
                $image->thumb($width, $height,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb_file);
                return __ROOT__ . substr($thumb_file, 1);
            }
        }
    }
    return __ROOT__ . '/default.jpg';
}

/**
 * 获取内容信息
 * @param   string       $content  内容
 * @return  string
 */
function get_content($content = ''){
    if ($content) {
        //return preg_replace('/src="(.*?)"/', 'src="'.__ROOT__.'$1"', html_entity_decode($content));
        return html_entity_decode($content);
    } else {
        return '';
    }
}

/**
 * 获取单页内容
 * @param  int  $catid
 * @return  string
 */
function get_page($catid = 0){
    if ($catid) {
        return M('Pages')->where(array('catid'=>$catid))->getField('content');
    } else {
        return '';
    }
}


function get_childs($catid){
	$cates = get_category($catid);
	if ($cates) {
		$str = '';
		foreach($cates as $key => $val){
			$str .= $key . ',';
			$str .= get_childs($key);
		}
		return $str;
	} else {
		return '';
	}
}

/**
 * 获取父级栏目
 * @param   int       $catid  栏目catid
 * @return  array
 */
function get_category($catid = 0, $num = 0) {
    $data = array();
    foreach ( D('Category')->getAll() as $key => $val) {
        if ($val['pid'] == $catid && $val['display']) {
            $data[$key] = $val;
            if ($num && count($data) >= $num) {
                break;
            }
        }
    }
    return $data;
}

/**
 * 获取广告位
 * @param   int         $id   广告位id
 * @param   int/string  $limit   数量
 * @return  array
 */
function get_banner($id = 0, $limit = 0){
    if (empty($id)) {
        return array();
    } else {
        $model = M('BannerData');
        $map = array();
        $map['bid'] = $id;
        if (empty($limit)) {
            $limit = '';
        }
        $lists = $model->cache(false, 60)->where($map)->order('sort desc, id desc')->limit($limit)->select();
        if ($lists) {
            return $lists;
        } else {
            return array();
        }
    }
}

/**
 * 获取广告位
 * @return  array
 */
function get_position($field = 'position_1', $type = '', $catid = 0, $limit = 0){
    $model = M('News');
    $map = array(
        'status' => 1,
        $field => 1
    );
    if ($catid) {
        $map['catid'] = $catid;
    }
    if ($type) {
        $map['type'] = $type;
    }
    if (empty($limit)) {
        $limit = '';
    }
    $lists = $model->cache(false, 60)->where($map)->order('sort desc, id desc')->limit($limit)->select();
    if ($lists) {
        foreach ($lists as $k=> $v) {
            $lists[$k]['url'] = U('show', array('catid'=>$v['catid'],'id'=>$v['id']));
        }
        return $lists;
    } else {
        return array();
    }
}
/**
 * 获取广告位
 * @return  array
 */
function get_product_position($field = 'position_1', $catid = 0, $limit = 0){
    $model = M('Product');
    $map = array(
        'status' => 1,
        $field => 1
    );
    if ($catid) {
        $map['catid'] = $catid;
    }
    if (empty($limit)) {
        $limit = '';
    }
    $lists = $model->cache(false, 60)->where($map)->order('sort desc, id desc')->limit($limit)->select();
    if ($lists) {
        foreach ($lists as $k=> $v) {
            $lists[$k]['url'] = U('Index/product', array('catid'=>$v['catid'],'id'=>$v['id']));
        }
        return $lists;
    } else {
        return array();
    }
}
/**
 * 获取列表
 * @return  array
 */
function get_lists($catid = 0, $type = '', $limit = 0){
    $model = M('News');
    $map = array('status' => 1);
    if ($catid) {
        $map['catid'] = $catid;
    }
    if ($type) {
        $map['type'] = $type;
    }
    if (empty($limit)) {
        $limit = '';
    }
    $lists = $model->cache(false, 60)->where($map)->order('sort desc, id desc')->limit($limit)->select();
    if ($lists) {
        foreach ($lists as $k=> $v) {
            $lists[$k]['extends'] = unserialize($v['extends']);
            $lists[$k]['url'] = U('show', array('catid'=>$v['catid'],'id'=>$v['id']));
        }
        return $lists;
    } else {
        return array();
    }
}

/**
 * 获取案例列表
 * @return  array
 */
function get_product_lists($catid = 0, $type = '', $limit = 0){
    $model = M('Product');
    $map = array('status' => 1);
    if ($catid) {
        $map['catid'] = $catid;
    }
    if ($type) {
        $map['type'] = $type;
    }
    if (empty($limit)) {
        $limit = '';
    }
    $lists = $model->cache(false, 60)->where($map)->order('sort desc, id desc')->limit($limit)->select();
    if ($lists) {
        foreach ($lists as $k=> $v) {
            $lists[$k]['url'] = U('Index/Product', array('id'=>$v['id']));
        }
        return $lists;
    } else {
        return array();
    }
}

// 下一页
function next_page($id, $catid = 0){
    $map = array();
    if ($catid) {
        $map['catid'] = $catid;
    }
    $categorys = S('CATEGORYS');
    switch ($categorys[$catid]['type']) {
        case 'Product':
            $lists = M('Product')->field('title, id, catid')->where($map)->order('sort desc, id desc')->select();
            foreach ($lists as $key => $value) {
                if ($value['id'] == $id && isset($lists[$key+1])) {
                    return '<a href="'.U('Index/product', array('id'=>$lists[$key+1]['id'])).'">下一篇：'. $lists[$key+1]['title'] .'</a>';
                }
            }
            return '<a href="javascript:void(0);" class="ling">下一篇：</a>没有了';
            break;

        default:
            $lists = M('News')->field('title, id, catid')->where($map)->order('sort desc, id desc')->select();
            foreach ($lists as $key => $value) {
                if ($value['id'] == $id && isset($lists[$key+1])) {
                    return '<a href="'.U('Index/show', array('id'=>$lists[$key+1]['id'])).'">下一篇：'. $lists[$key+1]['title'] .'</a>';
                }
            }
            return '<a href="javascript:void(0);" class="ling">下一篇：</a>没有了';
            break;
    }
}
// 上一页
function prve_page($id, $catid = 0){
    $map = array();
    if ($catid) {
        $map['catid'] = $catid;
    }
    $categorys = S('CATEGORYS');
    switch ($categorys[$catid]['type']) {
        case 'Product':
            $lists = M('Product')->field('title, id, catid')->where($map)->order('sort desc, id desc')->select();
            foreach ($lists as $key => $value) {
                if ($value['id'] == $id && isset($lists[$key-1])) {
                    return '<a href="'.U('Index/product', array('id'=>$lists[$key-1]['id'])).'">上一篇：'. $lists[$key-1]['title'] .'</a>';
                }
            }
            return '<a href="javascript:void(0);" class="ling">上一篇：</a>没有了';
            break;

        default:
            $lists = M('News')->field('title, id, catid')->where($map)->order('sort desc, id desc')->select();
            foreach ($lists as $key => $value) {
                if ($value['id'] == $id && isset($lists[$key-1])) {
                    return '<a href="'.U('Index/show', array('id'=>$lists[$key-1]['id'])).'">上一篇：'. $lists[$key-1]['title'] .'</a>';
                }
            }
            return '<a href="javascript:void(0);" class="ling">上一篇：</a>没有了';
            break;
    }
}

/**
 * 当前路径
 * 返回指定栏目路径层级
 * @param $catid 栏目id
 * @param $ext 栏目间隔符
 */
function catpos($catid = 0, $ext = ' > ') {
    $categorys = D('Category')->getAll();
    $html = '';
    if ($catid == 0) {
        $html = '<a href="'. U('Index/index') .'">首页</a>' . $html;
        return $html;
    } else {
        $html = $ext . '<a href="' . $categorys[$catid]['url'] . '">' . $categorys[$catid]['title'] . '</a>' . $html;
        $html = catpos($categorys[$catid]['pid'], $ext) . $html;
    }
    return $html;
}

//echo get_childs_str(27);
function get_childs_str($catid){
	$str = $catid . ',';
	$cates = get_category($catid);
	if ($cates) {
		foreach($cates as $key => $val){
			$str .= $key . ',';
			$str .= get_childs_str($key) . ',';
		}
	}
	return substr($str, 0, strlen($str)-1);
}
//print_r(get_childs_arr(27));
function get_childs_arr($catid){
	$arr = array($catid);
	$cates = get_category($catid);
	if ($cates) {
		foreach($cates as $key => $val){
			$arr[] = $key;
			array_merge($arr, get_childs_arr($key));
		}
		return $arr;
	} else {
		return array();
	}
}
