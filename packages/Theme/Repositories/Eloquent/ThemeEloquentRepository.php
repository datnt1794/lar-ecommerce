<?php 

namespace TTSoft\Theme\Repositories\Eloquent;

use TTSoft\Theme\Repositories\Theme\RepositoryInterface;

use TTSoft\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class ThemeEloquentRepository extends EloquentRepository implements ThemeRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \TTSoft\Theme\Entities\Theme::class;
    }

    
}