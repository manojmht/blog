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
    "id": "1",
    "title": "Install Composer on Amazon AMI running on EC2",
    "content": "",
    "image": "http://manojmahato.com/bundles/bog/img/amazonAMI.png",
    "comment": "Random Comment",
    "time": "March 2017"
  }
]';
        $redis = $this->container->get('snc_redis.default');
        $redis->hset("home:manoj", "data", $jsonData);
        echo "a"; die;
    }
    
    
    /**
    * @Route("/setBlogData")
    */
    public function setRedisDataBlogAction(Request $request){
        $redis = $this->container->get('snc_redis.default');
        $title = 'Install-Composer-on-Amazon-AMI-running-on-EC2';
        $jsonData = '[
         {
            "id": "1",
            "title": "Install Composer on Amazon AMI running on EC2",
            "content": "<p>SSH to the EC2 machine and then in console<\/p><pre><code>$ cd ~ <br>$ sudo curl -sS https:\/\/getcomposer.org\/installer | sudo php <br>$ sudo mv composer.phar \/usr\/local\/bin\/composer <br>$ sudo ln -s \/usr\/local\/bin\/composer \/usr\/bin\/composer<\/code<\/pre><br><p>Navigate to the project directory where composer.json is located and run<\/p>$ sudo composer install<\/code><\/pre>",
            "image": "http://manojmahato.com/bundles/bog/img/amazonAMI.png",
            "time": "March 2017"
          }
        ]';
        $redis->hset("blogManoj:singlePage", $title, $jsonData);
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
        $content = $redis->hget("blogManoj:singlePage", $title);
        $data['data'] = json_decode($content, TRUE);
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
