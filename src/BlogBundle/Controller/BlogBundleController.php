<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



class BlogBundleController extends Controller
{
    /**
    * @Route("/redisSetData")
    */
    public function setRedisDataAction(Request $request){
    $jsonData = '[
  {
    "id": "59632f5b64874540e5c59684",
    "title": "Random blog title",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image": "http://placehold.it/250x250",
    "comment": "Random Comment",
    "time": "2014-08-28T12:14:42 -06:-30"
  },
  {
    "id": "59632f5bd485869dd27bdafd",
    "title": "Random blog title",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image": "http://placehold.it/250x250",
    "comment": "Random Comment",
    "time": "2014-08-28T12:14:42 -06:-30"
  },
  {
    "id": "59632f5bb82f5141bd7de2e7",
    "title": "Random blog title",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image": "http://placehold.it/250x250",
    "comment": "Random Comment",
    "time": "2014-08-28T12:14:42 -06:-30"
  },
  {
    "id": "59632f5b58bea9f748c33ddd",
    "title": "Random blog title",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image": "http://placehold.it/250x250",
    "comment": "Random Comment",
    "time": "2014-08-28T12:14:42 -06:-30"
  },
  {
    "id": "59632f5bf13455d8072d45a5",
    "title": "Random blog title",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image": "http://placehold.it/250x250",
    "comment": "Random Comment",
    "time": "2014-08-28T12:14:42 -06:-30"
  }
]';
        $redis = $this->container->get('snc_redis.default');
        $redis->hset("home:manoj", "data", $jsonData);
        echo "a"; die;
    }
    
    public function indexAction(Request $request)
    {   
        $data = array();
        $redis = $this->container->get('snc_redis.default');
        $data['home']= $redis->hget("home:manoj", "data");
        $data['home'] = json_decode($data['home'], TRUE);
        $data['title'] = "Manoj Mahato Backend-Developer | RESTful-API | Electronics-and-Communication-Engineer | Photographer";
        return $this->render('BlogBundle:blog:index.html.php', $data);
    }
    
    
    /**
    *@Route("/blog/{title}")
    */
    public function blogAction(Request $request){
       $title = $request->get('title');
        $redis = $this->container->get('snc_redis.default');
        $data['content'] = $redis->hget("blogManoj:singlePage", $title);
        $data['title'] = $title;
        return $this->render('BlogBundle:blog:single_blog_left_sidebar.html.php', $data);
    }
    
    /**
    *@Route("/about")
    */
    public function aboutAction(Request $request){
        $data['title'] = "Manoj Mahato Backend-Developer | RESTful-API | Electronics-and-Communication-Engineer | Photographer";
         return $this->render('BlogBundle:blog:about.html.php', $data);
    }
}
