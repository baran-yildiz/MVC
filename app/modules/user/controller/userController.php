<?php

class userController extends Controller implements FrontController {

    public function indexAction()
    {
        $data = array();

        $this->RenderLayout("main", "user", "index", $data);
    }

}

?>