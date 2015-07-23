<?php
/*
 * This file is part of the isicsBreadcrumbsPlugin package.
 * Copyright (c) 2008 ISICS.fr <contact@isics.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BaseisicsBreadcrumbsComponents extends sfComponents 
{
  public function executeShow()
  {
    $isicsBreadcrumbs = isicsBreadcrumbs::getInstance();
    
    if (isset($this->root))
    {
      $isicsBreadcrumbs->setRoot($this->root['text'], $this->root['uri'], isset($this->root['options']) ? $this->root['options'] : array());
    }
    
    if (!isset($this->offset))
    {
      $this->offset = 0;
    }
    
    $this->items = $isicsBreadcrumbs->getItems($this->offset);
  }  
}