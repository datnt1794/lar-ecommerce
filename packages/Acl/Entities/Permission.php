<?php 
namespace TTSoft\Acl\Entities;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	protected $table = 'permissions';

	protected $primaryKey = 'id';
    
    protected $guarded = [];

    public $timestamps = true;
}