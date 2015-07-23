<?php
/*
 * This file is part of the isicsBreadcrumbsPlugin package.
 * Copyright (c) 2008 ISICS.fr <contact@isics.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class isicsBreadcrumbsItem
{
  protected $text;
  protected $uri;
  protected $options;
    
  /**
   * Constructor
   *
   */    
  public function __construct($text, $uri = null, $options = array())
  {
    $this->text = $text;
    $this->uri = $uri;
    $this->options = $options;
  }
  
  /**
   * Retrieve the uri of the item
   *
   */  
  public function getUri()
  {
    return $this->uri;
  }
  
  /**
   * Retrieve the text of the item
   *
   */  
  public function getText()
  {
    return $this->text;
  }
  
  /**
   * Retrieve the options of the item
   *
   */  
  public function getOptions()
  {
    return $this->options;
  }
}

class isicsBreadcrumbs
{
  static    $instance = null;
  protected $items    = array();
  
  /**
   * Constructor
   *
   */
  protected function __construct()
  {
    $this->setRoot('Home', '@homepage');
  }

  /**
   * Listens to the template.filter_parameters event.
   *
   * @param  sfEvent $event       An sfEvent instance
   * @param  array   $parameters  An array of template parameters to filter
   *
   * @return array   The filtered parameters array
   */
  public static function filterTemplateParameters(sfEvent $event, $parameters)
  {
  	$parameters['breadcrumbs'] = isicsBreadcrumbs::getInstance();
    
    return $parameters;
  }

  /**
   * Add an item
   *
   * @param string $text
   * @param string $uri
   * @param array  $options
   */
  public function addItem($text, $uri = null, $options = array())
  { 
    array_push($this->items, new isicsBreadcrumbsItem($text, $uri, $options));
  }

  /**
   * Alias of addItem()
   *
   * @see addItem
   */
  public function add($text, $uri = null, $options = array())
  {
    $this->addItem($text, $uri, $options);
  }

  /**
   * Delete all existings items
   *
   */
  public function clearItems()
  {
    $this->items = array();
  }  
  
  /**
   * Get the unique isicsBreadcrumbs instance (singleton)
   *
   * @return isicsBreadcrumbs
   *
   */
  public static function getInstance()
  {
    if (is_null(self::$instance))
    {
      self::$instance = new isicsBreadcrumbs();
    }
    
    return self::$instance;
  }
  
  /**
   * Retrieve an array of isicsBreadcrumbsItem
   *
   * @param int $offset
   *
   * @return array
   */
  public function getItems($offset = 0)
  {
    return array_slice($this->items, $offset);
  }
    
  /**
   * Redefine the root item
   *
   * @param string $text
   * @param string $uri
   * @param array  $options
   */
  public function setRoot($text, $uri, $options = array())
  {
    $this->items[0] = new isicsBreadcrumbsItem($text, $uri, $options);
  }
}