<?php

    class defaultController extends Controller implements FrontController {

        public function indexAction($param = null)
        {

            $data = array();
            $indexModel = new defaultModel();
 
            $this->renderLayout("main", "default", "index", $data);

        }

        public function detailAction()
        {
            $data = array();
            $this->RenderLayout("main", "default", "detail", $data);
        }

        public function loginAction()
        {
            $data = array();
            $this->RenderLayout("main", "default", "login", $data);
        }

    }

?>