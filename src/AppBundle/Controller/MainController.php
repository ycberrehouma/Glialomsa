<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('main/index.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('main/contact.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('main/about.html.twig');
    }
    /**
     * @Route("/news", name="news")
     */
    public function newsAction(Request $request)
    {

        return $this->render('ui/news.html.twig');
    }

    /**
     * @Route("/sport", name="sport")
     */
    public function sportAction(Request $request)
    {
        return $this->render('article/sport/sport-news.html.twig');
    }
    /**
     * @Route("/science", name="science")
     */
    public function scienceAction(Request $request)
    {
        return $this->render('article/science/science-news.html.twig');
    }
    /**
     * @Route("/people", name="people")
     */
    public function peopleAction(Request $request)
    {
        return $this->render('article/people/people-news.html.twig');
    }
    /**
     * @Route("/lifestyle", name="lifestyle")
     */
    public function lifestyleAction(Request $request)
    {
        return $this->render('article/lifestyle/lifestyle-news.html.twig');
    }
    /**
     * @Route("/entertainment", name="entertainment")
     */
    public function entertainmentAction(Request $request)
    {
        return $this->render('article/entertainment/entertainment-news.html.twig');
    }
    /**
     * @Route("/business", name="business")
     */
    public function businessAction(Request $request)
    {
        return $this->render('article/business/business-news.html.twig');
    }
    /**
     * @Route("/rowing", name="article")
     */
    public function rowingAction(Request $request)
    {
        return $this->render('article/sport/rowing.html.twig');
    }
    /**
     * @Route("/weed", name="weed")
     */
    public function weedAction(Request $request)
    {
        return $this->render('article/science/weed.html.twig');
    }
    /**
     * @Route("/lisa", name="lisa")
     */
    public function lisaAction(Request $request)
    {
        return $this->render('article/people/lisa.html.twig');
    }
    /**
     * @Route("/metallica", name="metallica")
     */
    public function metallicaAction(Request $request)
    {
        return $this->render('article/entertainment/metallica.html.twig');
    }
    /**
     * @Route("/roadtrip", name="roadtrip")
     */
    public function roadtripAction(Request $request)
    {
        return $this->render('article/lifestyle/roadtrip.html.twig');
    }
    /**
     * @Route("/bitcoin", name="bitcoin")
     */
    public function articleAction(Request $request)
    {
        return $this->render('article/business/bitcoin.html.twig');
    }


    /**
     * @Route("/ui", name="ui")
     */
    public function uiAction(Request $request)
    {
        return $this->render('ui/index.html.twig');
    }

    /**
     * @Route("/blank", name="hh")
     */
    public function blankAction(Request $request)
    {
        return $this->render('ui/blank.html.twig');
    }
    /**
     * @Route("/cards", name="df")
     */
    public function cardsAction(Request $request)
    {
        return $this->render('ui/cards.html.twig');
    }
    /**
     * @Route("/charts", name="d")
     */
    public function chartsAction(Request $request)
    {
        return $this->render('ui/artic.html.twig');
    }
    /**
     * @Route("/navbar", name="eg")
     */
    public function navbarAction(Request $request)
    {
        return $this->render('ui/navbar.html.twig');
    }

    /**
     * @Route("/top-online-brokers", name="top-online-brokers")
     */
    public function toponlinebrokersbarAction(Request $request)
    {
        return $this->render('article/business/top-online-brokers.html.twig');
    }
    /**
     * @Route("/before-buying-stock", name="before-buying-stock")
     */
    public function beforebuyingstockAction(Request $request)
    {
        return $this->render('article/business/before-buying-stock.html.twig');
    }

    /**
     * @Route("/stock-trading-tips", name="stock-trading-tips")
     */
    public function stocktraingtipsAction(Request $request)
    {
        return $this->render('article/business/stock-trading-tips.twig');
    }
    /**
     * @Route("/top-stock-2018", name="top-stock-2018")
     */
    public function topstock2018Action(Request $request)
    {
        return $this->render('article/business/top-stock-2018.twig');
    }
    /**
     * @Route("/top-programming-languages-2018", name="top-programming-languages-2018")
     */
    public function topprogramminglanguages2018Action(Request $request)
    {
        return $this->render('article/science/top-programming-languages-2018.twig');
    }
    /**
     * @Route("/men-accessory", name="men-accessory")
     */
    public function menaccessoryAction(Request $request)
    {
        return $this->render('article/lifestyle/men-accessory.twig');
    }
    /**
     * @Route("/men-accessory2", name="men-accessory2")
     */
    public function menaccessory2Action(Request $request)
    {
        return $this->render('article/lifestyle/men-accessory2.twig');
    }
    /**
     * @Route("/alpha-m", name="alpha-m")
     */
    public function alphamAction(Request $request)
    {
        return $this->render('article/lifestyle/alpha-m.twig');
    }
    /**
     * @Route("/leadership", name="leadership")
     */
    public function leadershipAction(Request $request)
    {
        return $this->render('article/lifestyle/leadership.twig');
    }
    /**
     * @Route("/dmitry-klokov", name="dmitry-klokov")
     */
    public function dmitryklokovAction(Request $request)
    {
        return $this->render('article/sport/dmitry-klokov.twig');
    }
    /**
     * @Route("/dating-app", name="dating-app")
     */
    public function datingappAction(Request $request)
    {
        return $this->render('article/entertainment/dating-app.twig');
    }
    /**
     * @Route("/slayer", name="slayer")
     */
    public function slayerAction(Request $request)
    {
        return $this->render('article/entertainment/slayer.twig');
    }
    /**
     * @Route("/top-trading-book", name="top-trading-book")
     */
    public function toptradingbookAction(Request $request)
    {
        return $this->render('article/business/top-trading-books.twig');
    }

    /**
     * @Route("/facebook", name="facebook")
     */
    public function facebookAction(Request $request)
    {
        return $this->render('article/business/facebook.twig');
    }

    /**
     * @Route("/daily-habits", name="daily-habits")
     */
    public function dailyhabitsAction(Request $request)
    {
        return $this->render('article/lifestyle/daily-habits.twig');
    }
    /**
     * @Route("/things-to-avoid", name="things-to-avoid")
     */
    public function thingstoavoidAction(Request $request)
    {
        return $this->render('article/lifestyle/things-to-avoid.twig');
    }
    /**
     * @Route("/artificial-intelligence", name="artificial-intelligence")
     */
    public function artificialintelligenceAction(Request $request)
    {
        return $this->render('article/science/artificial-intelligence.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('login/login.twig');
    }
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        return $this->render('login/register.twig');
    }
    /**
     * @Route("/forgot-password", name="forgot-password")
     */
    public function forgotpasswordAction(Request $request)
    {
        return $this->render('login/forgot-password.twig');
    }


}
