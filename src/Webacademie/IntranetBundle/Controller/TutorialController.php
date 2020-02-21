<?php

namespace Webacademie\IntranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Webacademie\IntranetBundle\Entity\Language;

class TutorialController extends Controller
{
    public function indexAction()
    {
        return $this->render('@WebacademieIntranet\Tutorial\index.html.twig');
    }

    public function chapterAction()
    {
        return $this->render('@WebacademieIntranet\Tutorial\chapter.html.twig');
    }

    public function videoAction()
    {
        return $this->render('@WebacademieIntranet\Tutorial\video.html.twig');
    }

    public function exerciseAction()
    {
        return $this->render('@WebacademieIntranet\Tutorial\exercise.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('@WebacademieIntranet\Tutorial\dashboard.html.twig');
    }
}
