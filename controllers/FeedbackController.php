<?php

/**
 */
class FeedbackController extends BaseController
{
    public function actionIndex()
    {
        $this->render('feedback/index', [
            'listPost' => PostModel::getAll(),
        ]);
    }

    public function actionSave()
    {
        if (!empty($_POST)) {
            $_POST['message'] = htmlspecialchars($_POST['message']);
            $post = new PostEntity($_POST);
            $post->save();
        }

        $this->redirect('/feedback');
    }
}
