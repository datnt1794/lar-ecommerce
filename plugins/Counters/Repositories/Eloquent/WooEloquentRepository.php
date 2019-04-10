<?php 

namespace Plugin\Counters\Repositories\Eloquent;

use Theme\Counters\Repositories\Counters\RepositoryInterface;

use Theme\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class WooEloquentRepository extends EloquentRepository implements WooRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Plugin\Counters\Entities\Woo::class;
    }

    
}