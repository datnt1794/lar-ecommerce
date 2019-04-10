<?php 

namespace TTSoft\Block\Repositories\Eloquent;

use TTSoft\Block\Repositories\Block\RepositoryInterface;

use TTSoft\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class BlockEloquentRepository extends EloquentRepository implements BlockRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \TTSoft\Block\Entities\Block::class;
    }

    
}