<?php

class RegisterDomainController extends \BaseController {

	/**
	 * @return Response
	 */
	public function register()
    {
        $domain = array(
            'domain' => Input::only('domain')
        );
        Domains::insert($domain);

        return Redirect::to('/domains');
	}


}
