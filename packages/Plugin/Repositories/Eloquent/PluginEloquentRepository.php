<?php 

namespace TTSoft\Plugin\Repositories\Eloquent;

use TTSoft\Plugin\Repositories\Plugin\RepositoryInterface;

use TTSoft\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class PluginEloquentRepository extends EloquentRepository implements PluginRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \TTSoft\Plugin\Entities\Plugin::class;
    }

    
}