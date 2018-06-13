<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use CloudinaryAPI\Cloudinary;
use CloudinaryAPI\Api;

class PageController extends Controller {

    private $cloudinaryApi;
    
    public function __construct() {
        $this->cloudinaryApi = new Api();
    }

    public function home() {
        return view('pages.home');
    }

    public function weddings() {
        return view('pages.weddings')->with('gallery',$this->generateGallery("weddings"));
    }

    public function quinceaneras() {
        return view('pages.weddings')->with('gallery',$this->generateGallery("quinceaneras"));
    }
    
    public function portraits(){
        return view('pages.weddings')->with('gallery',$this->generateGallery("portraits"));
    }
    
    public function graduations(){
        return view('pages.weddings')->with('gallery',$this->generateGallery("graduations"));
    }
    
    public function about(){
        return view('pages.about');
    }
    
    private function generateGallery($tags) {
        
        $result = $this->cloudinaryApi->resources_by_tag($tags,array("max_results" => "100"));
        $gallery = "";
        if (count($result['resources']) == 0) {
            return "<div id='noImages'>No Images Found</div>";
        } else {
            $resources = $result['resources'];
            $gallery = "<div id='gallery' style='display:none;'>";
            foreach ($resources as $resource) {
                $gallery .= $this->generateImageElement($resource);
            }
        }
        $gallery .="</div>";
        return $gallery;
    }

    private function generateImageElement($resource) {
        $url = $resource["url"];
        
        $output = "";
        $output .= "<img alt='Image 1 Title' src='" .$this->createThumbnailURL($url) . "'";
        $output .= " data-image='" . $this->resizeURL($url) ."'";
        $output .= " data-description='Image 1 Description'>";
        
        return $output;
    }
    private function resizeURL($url){
        $index = strpos($url, "upload/");
        return substr_replace($url, "upload/"."q_auto/", $index, strlen("upload/")); 
    }
    private function createThumbnailURL($url){
        $index = strpos($url, "upload/");
        return substr_replace($url, "upload/"."q_auto:low/c_scale,w_0.15/", $index, strlen("upload/"));    
    }
    private function getResources($options){
        return $this->cloudinaryApi->resources($options);
    }

}
