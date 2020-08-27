<?php
/**
 * Class Subscriber
 *
* @author  An ShiWei <amg1988925@gmail.com>
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscriber
 *
 */
class Subscriber extends Model
{

    /**
     * Fillables for the database
     *
     * @access protected
     * @var    array $fillable
     */
    protected $fillable = array('name', 'email');

    /**
     * Save subscriber
     *
     * @param mixed $request $req->attr
     *
     *
     * @return relation
     */
    public function saveSubscriber($request)
    {
        $this->name = $request->user_name;
        $this->email = $request->email;
        $this->save();
    }

}
