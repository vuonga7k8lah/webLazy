<?php


namespace webLazy\Controllers;


use webLazy\Core\Redirect;
use webLazy\Core\Request;
use webLazy\Core\Session;
use webLazy\Model\SignInModel;
use webLazy\Model\TypeModel;
use webLazy\Model\UserModel;

class UserController
{
    public function loadView()
    {
        require_once 'views/Admin/User/listUserView.php';
    }
    public function loadAddView()
    {
        require_once 'views/Admin/User/addUserView.php';
    }

    public function deleteUser()
    {
        $id=Request::uri()[1];
        if (UserModel::deleteUser($id))
        {
            Session::set('success_deleteUser','Tài Khoản Đã Xóa Thành Công');
            Redirect::to('listUser');
        }
    }

    public function loadEditView()
    {
        require_once 'views/Admin/User/editUserView.php';
    }
    public function addUser()
    {
        $data = $_POST;
        EmaiiIsExist($data,'addUser');
        $data['Password']=md5($_POST['Password']);
        if (SignInModel::insertUser($data))
        {
            Session::set('success_addUser','Tạo Tài Khoản Thành Công');
            Redirect::to('listUser');
        }
    }

    public function editUser()
    {
        $data = $_POST;
        $data['Password']=md5($_POST['Password']);
        if (UserModel::updateUser($data))
        {
            Session::set('success_editUser','Tài Khoản Đã Sửa Thành Công');
            Redirect::to('listUser');
        }
    }
}