<?php
namespace Home\Model;
use Think\Model;
class MessageModel extends Model {

    protected $fields = array('id', 'title', 'show_type', 'tel', 'content', 'create_time', 'update_time', 'status', 'extend');

    /* 自动验证 */
    protected $_validate = array(
        array('verify','check_verify','验证码错误！',1,'function'),
        array('title', 'require', '联系人必填!'),
        array('show_type', 'require', '类型必填！'),
        array('tel', 'require', '手机人电话必填！'),
        array('tel', 'validateTel', '手机人电话格式不对！',1,'callback'),
        array('content', 'require', '内容必填！')
    );

    /* 自动完成 */
    protected $_auto = array(
        array('extend', 'callbackExtend', 3, 'callback'),
        array('create_time', NOW_TIME, 1),
        array('update_time', NOW_TIME, 2),
        array('status', 0)
    );

    public function validateTel($data){
        if (preg_match('/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/', $data)) {
            return true;
        } else {
            return false;
        }

    }

    public function callbackExtend($data) {
        if(empty($data)){
            return '';
        } else {
            // $data = array_filter($data);
            // if (empty($data)) {
            //     return '';
            // } else {
            //     return serialize($data);
            // }
            return serialize($data);
        }
    }

    public function input() {
        if(!$this->create()) {
            return false;
        } else {
            if($this->add()) {
                return true;
            } else {
                $this->error = '留言失败';
                return false;
            }
        }
    }

}
