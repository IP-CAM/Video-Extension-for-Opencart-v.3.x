<?php

class ControllerExtensionModuleVideoPlayer extends Controller {

    public function index($setting = null) {
        if ($setting && $setting['status']) {
            $data = array();
            $filename = $setting['video_path'];
            $fileType = $setting['file_type'];
            $data['file_type'] = $fileType;
            if ($this->request->server['HTTPS']) {
                $data['video_path'] = HTTPS_SERVER . 'image/video/' . $filename;
            } else {
                $data['video_path'] = HTTP_SERVER . 'image/video/' . $filename;
            }
            return $this->load->view('extension/module/video_player', $data);
        }
    }

}
