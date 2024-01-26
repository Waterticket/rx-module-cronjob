<?php

namespace Rhymix\Modules\Cronjob\Controllers;

/**
 * 반복 작업 모듈 (Cronjob)
 * 
 * Copyright (c) Waterticket
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Index extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispCronjobIndex()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('index');
	}
}
