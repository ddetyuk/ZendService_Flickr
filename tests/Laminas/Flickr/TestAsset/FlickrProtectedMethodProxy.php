<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Service
 */

namespace LaminasTest\Flickr\TestAsset;

use Laminas\Flickr\Flickr;

class FlickrProtectedMethodProxy extends Flickr
{
    public function proxyValidateUserSearch(array $options)
    {
        $this->validateUserSearch($options);
    }

    public function proxyValidateTagSearch(array $options)
    {
        $this->validateTagSearch($options);
    }

    public function proxyValidateGroupPoolGetPhotos(array $options)
    {
        $this->validateGroupPoolGetPhotos($options);
    }

    public function proxyCompareOptions(array $options, array $validOptions)
    {
        $this->compareOptions($options, $validOptions);
    }
}
