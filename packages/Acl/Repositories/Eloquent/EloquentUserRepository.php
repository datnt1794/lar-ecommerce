<?php 

namespace TTSoft\Acl\Repositories\Eloquent;

use TTSoft\Acl\Repositories\AclRepository;

use TTSoft\Acl\Entities\User;

use TTSoft\Acl\Entities\Admin;
/**
* @return class name use repository
*/
class EloquentUserRepository implements UserRepository
{
	
	public function __construct(){}

	/**
	 *
	 * @return get all list user
	 *
	 */
	public function getAllUser(){
		return User::all();
	}

	/**
	 *
	 * @return get all list admin
	 *
	 */
	public function getAllAdmin(){
		return Admin::all();
	}
}