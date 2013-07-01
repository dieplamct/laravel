<?php

class DemoController extends BaseController {

	public function getIndex()
	{
        //Define number item per page
        $iNumItemPerPage = 15;
        
        //Get data
        $infos = DB::table('authors')->paginate($iNumItemPerPage);
                
        //Assign to view
		return View::make('demo/apps', array("infos" => $infos, "total" => DB::table('authors')->getPaginationCount(), "itemPer" => $iNumItemPerPage));
	}

}