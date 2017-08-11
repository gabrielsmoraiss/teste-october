<?php 
class Cms598df0914b7bb428416392_58d039f94a4bca70da19938ec2071a4cClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
