<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function test() {
        $data = [
            'title' => 'Test Page',
             'heading' => 'MyHeading'
        ];

        $this->view('Pages/test', $data);
    }

   
}
