<?php

class FeedbackController {
    public function actionView() {

        
        require_once (ROOT.'/views/feedback/feedback.php');
        return true;
    }
}