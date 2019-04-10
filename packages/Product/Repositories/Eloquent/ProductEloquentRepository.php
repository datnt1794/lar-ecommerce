<?php 

namespace TTSoft\Product\Repositories\Eloquent;

use TTSoft\Product\Repositories\ProductRepositoryInterface;

use TTSoft\Base\Repositories\Eloquent\EloquentRepository;

use TTSoft\Product\Entities\ProductImage;

use TTSoft\Product\Entities\PrdocutTag;
/**
* @return class name use repository
*/
class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{
	
	/**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \TTSoft\Product\Entities\Product::class;
    }

    public function createProduct($data){
        $data = $this->_model->create($data);
        if ($data) {
            $this->createTag($data->getId());
            $this->createImage($data->getId());
            return $data;
        }
        return false;
    }

    protected function createTag($productId){

    }

    protected function createImage($productId){

    }
}