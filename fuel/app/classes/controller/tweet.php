<?php

class Controller_Tweet extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Tweet &raquo; Index';
		$this->template->content = View::forge('tweet/index', $data);
	}

  public function action_about()
  {
    $this->template->title = "Requestter";
    $data["title"] = $this->template->title;
    $this->template->content = View::forge('tweet/about', $data);
  }

}
