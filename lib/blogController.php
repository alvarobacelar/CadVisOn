<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of litsaController
 *
 * @author alissonaraujo
 */
class blogController extends Controller {

    private $detalhes = '';
    private $post_tec = '';

    public function __construct() {
        parent::__construct();
        $this->loadModel('posts');
        $this->post_tec = new postsModel();
    }

    public function index() {
        $this->pg(1);
    }

    public function detalhes($name = null) {
        $this->detalhes = $this->post_tec->get_post_by_id($name)->posts;
        $this->view->assign('single_post', $this->detalhes);
        $this->view->display('detalhes.html');
    }

    public function pg($pagina = null) {
        $pagination_post = new Pagination($pagina, 5, $this->post_tec->count_post('tecnologia'));
        $this->view->assign('posts', $this->post_tec->get_pots_al(5, $pagina)->posts);
        $this->view->assign('paginacao', $pagination_post->paginacao());
        $this->view->display('home.html');
    }

}

?>
