<?php 

namespace Theme\News\Repositories\Eloquent;

use Theme\News\Repositories\News\RepositoryInterface;

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
        return \Theme\News\Entities\News::class;
    }

    
}