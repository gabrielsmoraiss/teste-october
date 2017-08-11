<?php 
class Cms598d0ffb561de958767838_0a9cdc759a94de21653585078b4b1e2dClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
