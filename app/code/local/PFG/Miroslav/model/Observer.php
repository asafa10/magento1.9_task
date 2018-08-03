<?php

class PFG_Miroslav_Model_Observer {
    
    public function disableProductsWithNoImages($observer) {
        $product = $observer->getEvent()->getProduct();
        
        if ($this->isImageSet($product)) {
            $product->setStatus(Mage_Catalog_Model_Product_Status::STATUS_DISABLED);
        }
    } 
    
    //not sure how to properly get product's image, so I tried different variants
    private function isImageSet($product) {
        
        if (empty($product->getImage())) {
            return true;
        }
        
        if (empty($product->getSmallImage())) {
            return true;
        }
        
        if (empty($product->getThumbnail())) {
            return true;
        }
        
        if (empty($product->getMediaGalleryImages())) {
            return true;
        }
        
        return false;
    }
}
