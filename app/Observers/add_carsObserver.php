<?php
namespace App\Observers;

use App\add_cars;

class add_carsObserver
{
    
    /**
     * Listen to the add_cars creating event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function creating(add_cars $add_cars)
    {
        //code...
    }

     /**
     * Listen to the add_cars created event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function created(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars updating event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function updating(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars updated event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function updated(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars saving event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function saving(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars saved event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function saved(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars deleting event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function deleting(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars deleted event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function deleted(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars restoring event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function restoring(add_cars $add_cars)
    {
        //code...
    }

    /**
     * Listen to the add_cars restored event.
     *
     * @param  add_cars  $add_cars
     * @return void
     */
    public function restored(add_cars $add_cars)
    {
        //code...
    }
}