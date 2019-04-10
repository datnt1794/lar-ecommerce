<?php 

namespace TTSoft\Sale\Repositories\Eloquent;

use TTSoft\Sale\Repositories\Sale\RepositoryInterface;

use TTSoft\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class SaleEloquentRepository extends EloquentRepository implements SaleRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \TTSoft\Sale\Entities\Sale::class;
    }

    
}