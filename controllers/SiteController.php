<?php

/**
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->render('site/about');
    }

    public function actionCats()
    {
        $this->render('site/cats');
    }

    public function actionProjects()
    {
        $this->render('site/projects');
    }

    public function actionRelocation()
    {
        $this->render('site/relocation');
    }
}
