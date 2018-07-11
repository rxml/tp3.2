<?php 

	/**
	* 
	*/
	class AreaModel extends Model
	{
		
		public function _after_select(&$data){
			//print_r($data);die;
			foreach ($data as $k => $v) {
				if ($v['pictrue']) {
					$data[$k]['thumb_pictrue'] = dirname($v['pictrue']).'/thumb_'.basename($v['pictrue']);
				}
				
			}
		}
	}

 ?>