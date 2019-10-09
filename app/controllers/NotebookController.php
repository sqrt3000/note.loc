<?php

namespace app\controllers;

use app\models\Notebook;
use app\models\User;
use RedBeanPHP\R;

class NotebookController extends AppController {

    public function mybookAction(){

        if(!User::checkAuth()) redirect(PATH);

        $id = $_SESSION['user']['id'];
        $abonents = R::findAll('abonent', "WHERE user_id = ? ORDER BY name", [$id]);

        $this->setMeta('Моя записная книжка');
        $this->set(compact('abonents'));
    }

    public function addAction(){

        if(!User::checkAuth()) redirect(PATH);

        if(!empty($_POST)){
            $new_note = new Notebook();
            $data = $_POST;
            $errors = '';
            $data['user_id'] = $_SESSION['user']['id'];
            $lenth_name = $data['name'];
            $lenth_name = iconv_strlen($lenth_name);
            if ($lenth_name > 50){
                $errors .= '<li>Пожалуйста, сократите ФИО до 50 имволов</li>';
            }
            $str = $data['phone'];
            $phone = preg_replace("/[^+0-9]/", '', $str);
            if (empty($phone)){
                $errors .= '<li>Введите номер телефона!</li>';
            }
            $lenth_phone = iconv_strlen($phone);
            if ($lenth_phone > 11){
                $errors .= '<li>Номер телефона должен состоять только из цифр и не должен превышать 11 символов!</li>';
            }
            if($errors){
                $_SESSION['error'] = "<ul>$errors</ul>";
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $new_note->load($data);
            if($new_note->save('abonent')){
                $_SESSION['success'] = 'Запись добавлена!';
                redirect('/notebook/mybook');
            }else{
                $_SESSION['error'] = 'Ошибка';
            }
        }

        $this->setMeta('Добавление новой записи');
        $this->set(compact('abonents'));

    }

    public function editAction(){

        if(!User::checkAuth()) redirect(PATH);
        if (!empty($_POST)){
            $note_id = $_SESSION['note_id'];
            $new_note = new Notebook();
            $data = $_POST;
            $errors = '';
            $data['user_id'] = $_SESSION['user']['id'];
            $lenth_name = $data['name'];
            $lenth_name = iconv_strlen($lenth_name);
            if ($lenth_name > 50){
                $errors .= '<li>Пожалуйста, сократите ФИО до 50 имволов</li>';
            }
            $str = $data['phone'];
            $phone = preg_replace("/[^+0-9]/", '', $str);
            if (empty($phone)){
                $errors .= '<li>Введите номер телефона!</li>';
            }
            $lenth_phone = iconv_strlen($phone);
            if ($lenth_phone > 11){
                $errors .= '<li>Номер телефона должен состоять только из цифр и не должен превышать 11 символов!</li>';
            }
            if($errors){
                $_SESSION['error'] = "<ul>$errors</ul>";
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $new_note->load($data);
            if($new_note->update('abonent', $note_id)){
                $new_note = \R::load('abonent', $note_id);
                \R::store($new_note);
                $_SESSION['success'] = 'Изменения сохранены!';
                unset($_SESSION['note_id']);
                redirect(PATH.'/notebook/mybook');
            }

        }
        $note_id = $this->getRequestID();
        $note = \R::load('abonent', $note_id);
        if ($note['user_id'] != $_SESSION['user']['id']){
            unset($_SESSION['user']);
            redirect(PATH);
        }else{
            $_SESSION['note_id'] = $note_id;
        }

        $this->setMeta('Изменение записи');
        $this->set(compact('note'));

    }

    public function deleteAction(){

        if(!User::checkAuth()) redirect(PATH);

        $id = $this->getRequestID();
        $my_abonent = \R::load('abonent', $id);
        if ($my_abonent['user_id'] != $_SESSION['user']['id']){
            unset($_SESSION['user']);
            redirect(PATH);
        }
        \R::trash($my_abonent);
        $_SESSION['success'] = 'Ваша запись была удалена';
        redirect(PATH.'/notebook/mybook');

        $this->setMeta('Удаление записи');
        $this->set(compact('abonents'));

    }

}