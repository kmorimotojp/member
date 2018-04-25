<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 *
 * ログイン・ログアウト処理用クラス
 *
 * @access		public
 * @category	ログイン
 * @package		Controller
 * @author		Hiramoto
 * @since		2018/04/04
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $str = $this->request->getData('text1','');
        $msg = 'typed: ' . $str;
        if ($str == null)
        { $msg = "please type..."; }
        $this->set('message', $msg);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function add()
    {
        $person = $this->MtMember->newEntity();
        $this->set('person', $person);
        if ($this->request->is('post')) {
            $person = $this->MtMember->patchEntity($person, $this->request->data);
            if ($this->MtMember->save($person)) {
                return $this->redirect(['add' => 'index']);
            }
        }
    }
}
