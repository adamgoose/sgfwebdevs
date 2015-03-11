<?php namespace App\Traits;

use Illuminate\Support\Str;
use Collective\Html\FormFacade as Form;

trait Linkable {

  /**
   * Get the resource name
   */
  protected function getResourceName()
  {
    return $this->resourceName ?: 'admin.' . $this->guessResourceName();
  }

  /**
   * @return string
   */
  public function getViewLink()
  {
    $route = $this->getResourceName() . '.show';
    return link_to_route($route, 'View', $this->getRouteData(), ['class' => 'btn btn-xs btn-primary']);
  }

  /**
   * @return string
   */
  public function getEditLink()
  {
    $route = $this->getResourceName() . '.edit';
    return link_to_route($route, 'Edit', $this->getRouteData(), ['class' => 'btn btn-xs btn-info']);
  }

  /**
   * @return string
   */
  public function getDeleteLink()
  {
    $route = $this->getResourceName() . '.destroy';
    $definition = $this->getRouteData();

    array_unshift($definition, $route);

    return Form::open(['route' => $definition, 'method' => 'delete', 'style' => 'display: inline;'])
    . Form::submit('Delete', ['class' => 'btn btn-xs btn-danger'])
    . Form::close();
  }

  /**
   * @return string
   */
  public function getTableLinks()
  {
    return implode(' ', [
      $this->getViewLink(),
      $this->getEditLink(),
      $this->getDeleteLink(),
    ]);
  }

  /**
   * @return string
   */
  protected function guessResourceName()
  {
    return Str::lower(Str::plural(class_basename($this)));
  }

  /**
   * @return mixed
   */
  protected function getRouteData()
  {
    return [$this->id];
  }
}